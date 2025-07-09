@extends('layouts.back')

@section('title', 'Edit Data Domisili - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Domisili</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_siswa') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Domisili</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="{{ route('domisili-siswa.update', $domisili->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                @php
                $semesters = [
                ['kelas' => 6, 'semester' => 1],
                ['kelas' => 6, 'semester' => 2],
                ];
                $mapel = ['b_indo' => 'Bahasa Indonesia', 'matematika' => 'Matematika', 'ipa' => 'IPA', 'b_inggris' => 'Bahasa Inggris', 'pai' => 'Pendidikan Agama dan Budi Pekerti (PAI)'];
                @endphp
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Upload Dokumen</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">SKL / Ijazah</label>
                                <input class="form-control" type="file" name="skl_ijazah">
                                @if ($domisili->skl_ijazah)
                                <small class="form-text text-muted">
                                    Dokumen sudah ada:
                                    <a href="{{ asset('storage/' . $domisili->skl_ijazah) }}" target="_blank" class="text-info">
                                        {{ $domisili->skl_ijazah }}
                                    </a>
                                </small>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kartu Keluarga</label>
                                <input class="form-control" type="file" name="kartu_keluarga">
                                @if ($domisili->kartu_keluarga)
                                <small class="form-text text-muted">
                                    Dokumen sudah ada:
                                    <a href="{{ asset('storage/' . $domisili->kartu_keluarga) }}" target="_blank" class="text-info">
                                        {{ $domisili->kartu_keluarga }}
                                    </a>
                                </small>

                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Dokumen Pendukung</label>
                                <input class="form-control" type="file" name="dokumen_pendukung">
                                @if ($domisili->dokumen_pendukung)
                                <small class="form-text text-muted">
                                    Dokumen sudah ada:
                                    <a href="{{ asset('storage/' . $domisili->dokumen_pendukung) }}" target="_blank" class="text-info">
                                        {{ $domisili->dokumen_pendukung }}
                                    </a>
                                </small>

                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jarak Ke Sekolah</label>
                                <input class="form-control jrak_km" type="number" name="jarak_km" value="{{ $domisili->jarak_km }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($semesters as $s)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Nilai Kelas {{ $s['kelas'] }} Semester {{ $s['semester'] }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Upload Rapot</label>
                                <input class="form-control" type="file" name="rapot_kelas{{ $s['kelas'] }}_semester{{ $s['semester'] }}">
                                @if (!empty($domisili->{'rapot_kelas' . $s['kelas'] . '_semester' . $s['semester']}))
                                <small class="form-text text-muted">
                                    Rapot sudah ada:
                                    <a href="{{ asset('storage/' . $domisili->{'rapot_kelas' . $s['kelas'] . '_semester' . $s['semester']}) }}" target="_blank" class="text-info">
                                        {{ $domisili->{'rapot_kelas' . $s['kelas'] . '_semester' . $s['semester']} }}
                                    </a>
                                </small>
                                @endif

                            </div>
                            @foreach($mapel as $kode => $label)
                            <div class="mb-3">
                                <label class="form-label">{{ $label }}</label>
                                <input class="form-control nilai" type="number" name="nilai_{{ $kode }}_kelas{{ $s['kelas'] }}_semester{{ $s['semester'] }}"
                                    data-semester="{{ $s['semester'] }}" data-kelas="{{ $s['kelas'] }}"
                                    value="{{ $domisili->{'nilai_' . $kode . '_kelas' . $s['kelas'] . '_semester' . $s['semester']} }}">
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <label class="form-label">Rata-rata Semester Ini</label>
                                <input class="form-control rata-rata-semester" type="number" step="0.01" name="rata_rata_kelas{{ $s['kelas'] }}_semester{{ $s['semester'] }}"
                                    value="{{ $domisili->{'rata_rata_kelas' . $s['kelas'] . '_semester' . $s['semester']} }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Rata-rata Keseluruhan</h4>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="number" step="0.01" name="rata_rata_keseluruhan" value="{{ $domisili->rata_rata_keseluruhan }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="text-start mt-2 mb-3">
                    <button type="submit" class="btn btn-primary">Update Data Domisili</button>
                </div>
            </div>

        </form>
    </div>
</div>

<script>
    function hitungRataRataSemester(semester, kelas) {
        let totalNilai = 0;
        let jumlahMapel = 0;

        let nilaiInputs = document.querySelectorAll(`[data-semester="${semester}"][data-kelas="${kelas}"]`);

        nilaiInputs.forEach(function(input) {
            if (input.value) {
                totalNilai += parseFloat(input.value);
                jumlahMapel++;
            }
        });

        if (jumlahMapel > 0) {
            let rataRata = totalNilai / jumlahMapel;
            document.querySelector(`input[name="rata_rata_kelas${kelas}_semester${semester}"]`).value = rataRata.toFixed(2);
        } else {
            document.querySelector(`input[name="rata_rata_kelas${kelas}_semester${semester}"]`).value = '';
        }

        hitungRataRataKeseluruhan();
    }

    function hitungRataRataKeseluruhan() {
        let totalNilaiKeseluruhan = 0;
        let jumlahSemester = 0;

        let rataRataInputs = document.querySelectorAll('.rata-rata-semester');

        rataRataInputs.forEach(function(input) {
            if (input.value) {
                totalNilaiKeseluruhan += parseFloat(input.value);
                jumlahSemester++;
            }
        });

        if (jumlahSemester > 0) {
            let rataRataKeseluruhan = totalNilaiKeseluruhan / jumlahSemester;
            document.querySelector('input[name="rata_rata_keseluruhan"]').value = rataRataKeseluruhan.toFixed(2);
        } else {
            document.querySelector('input[name="rata_rata_keseluruhan"]').value = '';
        }
    }
</script>

@endsection