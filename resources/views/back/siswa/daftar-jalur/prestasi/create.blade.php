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
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_siswa') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Prestasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="{{ route('prestasi-siswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                @php
                $semesters = [
                ['kelas' => 6, 'semester' => 1],
                ['kelas' => 6, 'semester' => 2],
                ];
                $mapel = ['b_indo' => 'Bahasa Indonesia', 'matematika' => 'Matematika', 'ipa' => 'IPA', 'b_inggris' => 'Bahasa Inggris', 'pai' => 'Pendidikan Agama dan Budi Pekerti (PAI)'];
                @endphp

                {{-- Upload dokumen dasar --}}
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Upload Dokumen</h4>
                        </div>
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
                            </div>
                            @foreach($mapel as $kode => $label)
                            <div class="mb-3">
                                <label class="form-label">{{ $label }}</label>
                                <input class="form-control nilai" type="number" name="nilai_{{ $kode }}_kelas{{ $s['kelas'] }}_semester{{ $s['semester'] }}" data-semester="{{ $s['semester'] }}" data-kelas="{{ $s['kelas'] }}">
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <label class="form-label">Rata-rata Semester Ini</label>
                                <input class="form-control rata-rata-semester" type="number" step="0.01" name="rata_rata_kelas{{ $s['kelas'] }}_semester{{ $s['semester'] }}" readonly>
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
                            <div class="mb-3">
                                <input class="form-control" type="number" step="0.01" name="rata_rata_keseluruhan" readonly>
                            </div>
                        </div>
                    </div>
                </div>


                @php
                $kategori = ['akademik', 'non_akademik'];
                $tingkatan = ['kabkota', 'provinsi', 'nasional', 'internasional'];
                $jumlah = [
                'kabkota' => 2,
                'provinsi' => 1,
                'nasional' => 1,
                'internasional' => 1
                ];
                $nilaiPreset = [
                'kabkota' => 20,
                'provinsi' => 40,
                'nasional' => 80,
                'internasional' => 100
                ];
                @endphp

                @foreach($kategori as $kat)
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Sertifikat {{ ucfirst(str_replace('_', ' ', $kat)) }}<span>
                                    <h5> *(jika Ada)</h5>
                                </span></h4>
                        </div>
                        <div class="card-body row">
                            @foreach($tingkatan as $level)
                            @for($i = 1; $i <= $jumlah[$level]; $i++)
                                <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Sertifikat {{ ucfirst($level) }} {{ $i }}</label>
                                    <input class="form-control sertifikat" type="file" name="sertifikat_{{ $kat }}_{{ $level }}_{{ $i }}" data-level="{{ $level }}" data-index="{{ $i }}" data-kategori="{{ $kat }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Sertifikat</label>
                                    <input class="form-control nilai_sertifikat" type="number" name="nilai_{{ $kat }}_{{ $level }}_{{ $i }}" readonly>
                                </div>
                        </div>
                        @endfor
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Total Nilai Sertifikat</h4>
                    </div>
                    <div class="card-body">
                        <input class="form-control" type="number" name="total_nilai_sertifikat" id="total-nilai" readonly>
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