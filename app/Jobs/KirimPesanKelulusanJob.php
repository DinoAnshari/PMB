<?php

namespace App\Jobs;

use App\Models\MessageStatus;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class KirimPesanKelulusanJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $nama;
    protected $noHp;
    protected $sekolah;

    public function __construct($nama, $noHp, $sekolah)
    {
        $this->nama = $nama;
        $this->noHp = $noHp;
        $this->sekolah = $sekolah;
    }

    public function handle()
    {
        $token = env('FONNTE_API_KEY');
        $formattedNumber = preg_replace('/^0/', '62', $this->noHp);
        $pesan = "Selamat, {$this->nama}! Anda dinyatakan LULUS dan diterima di {$this->sekolah}.";

        $url = "https://api.fonnte.com/send?" . http_build_query([
            'token' => $token,
            'target' => $formattedNumber,
            'message' => $pesan,
            'delay' => '5-10',
            'countryCode' => '62',
        ]);

        try {
            $response = Http::get($url);

            MessageStatus::where('no_hp', $this->noHp)
                ->latest()
                ->first()
                ?->update([
                    'status' => 'sent',
                    'response' => $response->body()
                ]);

            Log::info("Pesan berhasil dikirim ke: {$formattedNumber}");
        } catch (\Exception $e) {
            MessageStatus::where('no_hp', $this->noHp)
                ->latest()
                ->first()
                ?->update([
                    'status' => 'failed',
                    'response' => $e->getMessage()
                ]);

            Log::error("Gagal kirim ke {$formattedNumber}: {$e->getMessage()}");
        }
    }
}

