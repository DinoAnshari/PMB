<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MessageStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FonnteWebhookController extends Controller
{
    /**
     * Menangani webhook dari Fonnte untuk update status pesan WhatsApp.
     */
    public function handle(Request $request)
    {
        // 1. Validasi data request
        $validated = $request->validate([
            'target' => 'required|string',
            'status' => 'required|string',
        ]);

        $target = $validated['target'];
        $status = $validated['status'];

        // 2. Logging webhook diterima
        Log::info('Webhook Fonnte diterima:', [
            'target' => $target,
            'status' => $status,
            'env' => app()->environment(),
        ]);

        // 3. Jika environment adalah local, lakukan simulasi
        if (app()->environment('local')) {
            Log::info('Simulasi WhatsApp (local)', [
                'nama' => 'Nama Contoh',
                'no_hp' => $target,
                'sekolah' => 'SMA Contoh',
                'isi' => "Halo Nama Contoh, kamu dinyatakan LULUS di SMA Contoh",
            ]);

            MessageStatus::where('no_hp', $target)
                ->latest()
                ->first()
                ?->update(['status' => 'sent (simulasi)']);

            return response()->json(['status' => 'simulasi']);
        }

        // 4. Update status pesan pada database
        $updated = MessageStatus::where('no_hp', $target)
            ->latest()
            ->first()
            ?->update(['status' => $status]);

        // 5. Response akhir
        return response()->json([
            'status' => 'ok',
            'updated' => (bool) $updated,
        ]);
    }
}
