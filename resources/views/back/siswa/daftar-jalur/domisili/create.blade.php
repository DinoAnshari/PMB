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
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Domisili</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="#" method="POST" enctype="multipart/form-data">
            <!-- Upload Dokumen -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Upload Dokumen</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">SKL / Ijazah</label>
                                <input class="form-control" type="file" name="skl_ijazah">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kartu Keluarga</label>
                                <input class="form-control" type="file" name="kartu_keluarga">
                            </div>
                            <button type="button" id="deteksiLokasi" class="btn btn-warning mb-3">Deteksi Lokasi Saya</button>

                            <div class="mb-3" id="jarakInfo" style="display:none;">
                                <label class="form-label">Jarak ke Sekolah</label>
                                <input type="text" class="form-control" id="jarak_km_display" readonly>
                            </div>
                            <input type="hidden" name="latitude" id="latitude">
                            <input type="hidden" name="longitude" id="longitude">
                            <input type="hidden" name="jarak_km" id="jarak_km">
                        </div>
                    </div>
                </div>

                <!-- Nilai per Semester -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Nilai Kelas 5 Semester 1</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Upload Rapot</label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bahasa Indonesia</label>
                                <input class="form-control nilai" type="number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Matematika</label>
                                <input class="form-control nilai" type="number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">IPA</label>
                                <input class="form-control nilai" type="number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bahasa Inggris</label>
                                <input class="form-control nilai" type="number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pendidikan Agama dan Budi Pekerti (PAI)</label>
                                <input class="form-control nilai" type="number">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rata-rata Semester Ini</label>
                                <input class="form-control rata-rata-semester" type="number" step="0.01" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Ulangi blok atas untuk semester lainnya jika diperlukan -->

                <!-- Rata-rata Keseluruhan -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Rata-rata Keseluruhan</h4>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="number" step="0.01" readonly>
                        </div>
                    </div>
                </div>

                <!-- Sertifikat Akademik dan Non-Akademik -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Sertifikat Akademik</h4><h5>*(jika Ada)</h5>
                        </div>
                        <div class="card-body row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Sertifikat Kabkota 1</label>
                                    <input class="form-control sertifikat" type="file">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Sertifikat</label>
                                    <input class="form-control nilai_sertifikat" type="number" readonly>
                                </div>
                            </div>
                            <!-- Tambahkan sertifikat lainnya jika perlu -->
                        </div>
                    </div>
                </div>

                <!-- Total Nilai Sertifikat -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Total Nilai Sertifikat</h4>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="number" id="total-nilai" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Submit -->
            <div class="text-start mt-2 mb-3">
                <button type="submit" class="btn btn-primary">Simpan Data Domisili</button>
            </div>
        </form>
    </div>
</div>
@endsection
