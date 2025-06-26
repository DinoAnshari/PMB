@extends('layouts.back')

@section('title', 'Isi Data Prestasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Prestasi</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Prestasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                {{-- Upload dokumen dasar --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0"><h4>Upload Dokumen</h4></div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">SKL / Ijazah</label>
                                <input class="form-control" type="file" name="skl_ijazah" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kartu Keluarga</label>
                                <input class="form-control" type="file" name="kartu_keluarga" required>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Nilai per semester --}}
                @for ($i = 1; $i <= 4; $i++)
                @php
                    $kelas = $i <= 2 ? 5 : 6;
                    $semester = $i % 2 == 1 ? 1 : 2;
                @endphp
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0"><h4>Nilai Kelas {{ $kelas }} Semester {{ $semester }}</h4></div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Upload Rapot</label>
                                <input class="form-control" type="file" name="rapot_kelas{{ $kelas }}_semester{{ $semester }}">
                            </div>
                            @foreach (['Bahasa Indonesia', 'Matematika', 'IPA', 'Bahasa Inggris', 'PAI'] as $index => $mapel)
                            <div class="mb-3">
                                <label class="form-label">{{ $mapel }}</label>
                                <input class="form-control nilai" type="number" data-semester="{{ $semester }}" data-kelas="{{ $kelas }}">
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <label class="form-label">Rata-rata Semester Ini</label>
                                <input class="form-control rata-rata-semester" type="number" step="0.01" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor

                {{-- Rata-rata keseluruhan --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0"><h4>Rata-rata Keseluruhan</h4></div>
                        <div class="card-body">
                            <input class="form-control" type="number" step="0.01" readonly>
                        </div>
                    </div>
                </div>

                {{-- Sertifikat Prestasi --}}
                @foreach (['Akademik', 'Non Akademik'] as $kategori)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Sertifikat {{ $kategori }} <small><i>*(jika ada)</i></small></h4>
                        </div>
                        <div class="card-body row">
                            @foreach (['kabkota', 'provinsi', 'nasional', 'internasional'] as $tingkat)
                                @php $jumlah = $tingkat == 'kabkota' ? 2 : 1; @endphp
                                @for ($i = 1; $i <= $jumlah; $i++)
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Sertifikat {{ ucfirst($tingkat) }} {{ $i }}</label>
                                        <input class="form-control sertifikat" type="file" data-level="{{ $tingkat }}" data-kategori="{{ strtolower(str_replace(' ', '_', $kategori)) }}" data-index="{{ $i }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nilai Sertifikat</label>
                                        <input class="form-control nilai_sertifikat" type="number" readonly>
                                    </div>
                                </div>
                                @endfor
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach

                {{-- Total nilai sertifikat --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0"><h4>Total Nilai Sertifikat</h4></div>
                        <div class="card-body">
                            <input class="form-control" type="number" id="total-nilai" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-start mt-2 mb-3">
                <button type="submit" class="btn btn-primary">Simpan Data Prestasi</button>
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
            document.querySelector(`input[name="rata_rata_kelas${kelas}_semester${semester}"]`)?.value = rataRata.toFixed(2);
        }
        hitungRataRataKeseluruhan();
    }

    function hitungRataRataKeseluruhan() {
        let totalNilaiKeseluruhan = 0;
        let jumlahSemester = 0;
        document.querySelectorAll('.rata-rata-semester').forEach(function(input) {
            if (input.value) {
                totalNilaiKeseluruhan += parseFloat(input.value);
                jumlahSemester++;
            }
        });

        if (jumlahSemester > 0) {
            let rataRataKeseluruhan = totalNilaiKeseluruhan / jumlahSemester;
            document.querySelector('input[name="rata_rata_keseluruhan"]')?.value = rataRataKeseluruhan.toFixed(2);
        }
    }

    document.querySelectorAll('.nilai').forEach(function(input) {
        input.addEventListener('input', function() {
            let semester = input.dataset.semester;
            let kelas = input.dataset.kelas;
            hitungRataRataSemester(semester, kelas);
        });
    });
</script>
@endsection

@section('scripts')
<script>
    const nilaiPreset = {
        'kabkota': 20,
        'provinsi': 40,
        'nasional': 80,
        'internasional': 100
    };

    const sertifikatInputs = document.querySelectorAll('.sertifikat');
    const totalNilaiInput = document.getElementById('total-nilai');

    sertifikatInputs.forEach(input => {
        input.addEventListener('change', function() {
            const level = this.getAttribute('data-level');
            const kategori = this.getAttribute('data-kategori');
            const nilaiInput = document.querySelector(`[name="nilai_${kategori}_${level}_${this.getAttribute('data-index')}"]`);

            if (this.files.length > 0) {
                nilaiInput.value = nilaiPreset[level];
            } else {
                nilaiInput.value = '';
            }

            let totalNilai = 0;
            document.querySelectorAll('.nilai_sertifikat').forEach(nilai => {
                totalNilai += parseInt(nilai.value) || 0;
            });
            totalNilaiInput.value = totalNilai;
        });
    });
</script>
@endsection
