@extends('layouts.back')

@section('title', 'Isi Data Domisili - PPDB SMPN Maju Jaya')

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
        <form id="formUpload" action="{{ route('domisili-siswa.store') }}" method="POST" enctype="multipart/form-data">
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
                            <div class="col-md-12 mb-3">
                                <label class="form-label" for="dokumen_pendukung">Dokumen Pendukung KIP/Lainnya</label>
                                <input class="form-control" id="dokumen_pendukung" name="dokumen_pendukung" type="file">
                            </div>
                            <button type="button" id="deteksiLokasi" class="btn btn-warning mb-3">Deteksi Lokasi Saya</button>

                            <div class="mb-3" id="jarakInfo" style="display:none;">
                                <label class="form-label">Jarak ke Sekolah</label>
                                <input type="text" class="form-control" id="jarak_km_display" name="jarak_km_display" readonly>
                            </div>
                            <input type="hidden" name="latitude" id="latitude">
                            <input type="hidden" name="longitude" id="longitude">
                            <input type="hidden" name="jarak_km" id="jarak_km">

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

                {{-- Rata-rata keseluruhan --}}
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



            </div>

            <div class="text-start mt-2 mb-3">
                <button type="submit" class="btn btn-primary">Simpan Data Domisili</button>
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
  const sekolahLat = {{ $user->sekolah->latitude ?? 0 }};
  const sekolahLng = {{ $user->sekolah->longitude ?? 0 }};

  const deteksiBtn = document.getElementById("deteksiLokasi");
  const formUpload = document.getElementById("formUpload");
  const latitudeInput = document.getElementById("latitude");
  const longitudeInput = document.getElementById("longitude");
  const jarakKmInput = document.getElementById("jarak_km");
  const jarakKmDisplay = document.getElementById("jarak_km_display");
  const jarakInfo = document.getElementById("jarakInfo");

  function hitungJarak(lat1, lon1, lat2, lon2) {
    const R = 6371; 
    const dLat = deg2rad(lat2 - lat1);
    const dLon = deg2rad(lon2 - lon1);

    const a =
      Math.sin(dLat / 2) * Math.sin(dLat / 2) +
      Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
      Math.sin(dLon / 2) * Math.sin(dLon / 2);

    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return (R * c).toFixed(2); 
  }

  function deg2rad(deg) {
    return deg * (Math.PI / 180);
  }

  deteksiBtn.addEventListener("click", () => {
    if (!navigator.geolocation) {
      alert("Geolocation tidak didukung oleh browser Anda.");
      return;
    }

    navigator.geolocation.getCurrentPosition(
      (position) => {
        const lat = position.coords.latitude;
        const lng = position.coords.longitude;

        console.log("Latitude:", lat);
        console.log("Longitude:", lng);

        latitudeInput.value = lat;
        longitudeInput.value = lng;

        const jarak = hitungJarak(lat, lng, sekolahLat, sekolahLng);
        jarakKmInput.value = jarak;
        jarakKmDisplay.value = `${jarak} km`;

        jarakInfo.style.display = "block";
        formUpload.style.display = "block";
      },
      (error) => {
        alert("Gagal mendeteksi lokasi: " + error.message);
      }
    );
  });

  formUpload.addEventListener("submit", (event) => {
    if (!jarakKmInput.value) {
      alert("Jarak tidak boleh kosong!");
      event.preventDefault();
    }
  });
</script>


@endsection