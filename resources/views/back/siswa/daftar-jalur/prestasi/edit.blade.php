@extends('layouts.back')

@section('title', 'Edit Data Prestasi - PPDB SMPN Maju Jaya')

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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Upload Dokumen</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">SKL / Ijazah</label>
                                <input class="form-control" type="file" name="skl_ijazah">
                                <small class="form-text text-muted">Dokumen sudah ada: <a href="#" class="text-info">skl_ijazah.pdf</a></small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kartu Keluarga</label>
                                <input class="form-control" type="file" name="kartu_keluarga">
                                <small class="form-text text-muted">Dokumen sudah ada: <a href="#" class="text-info">kk.pdf</a></small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Loop Nilai Semester -->
                <!-- Contoh statis untuk kelas 5 semester 1 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Nilai Kelas 5 Semester 1</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Upload Rapot</label>
                                <input class="form-control" type="file">
                                <small class="form-text text-muted">Rapot sudah ada: <a href="#" class="text-info">rapot_5_1.pdf</a></small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bahasa Indonesia</label>
                                <input class="form-control nilai" type="number" value="85" data-semester="1" data-kelas="5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Matematika</label>
                                <input class="form-control nilai" type="number" value="90" data-semester="1" data-kelas="5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">IPA</label>
                                <input class="form-control nilai" type="number" value="88" data-semester="1" data-kelas="5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bahasa Inggris</label>
                                <input class="form-control nilai" type="number" value="87" data-semester="1" data-kelas="5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">PAI</label>
                                <input class="form-control nilai" type="number" value="89" data-semester="1" data-kelas="5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rata-rata Semester Ini</label>
                                <input class="form-control rata-rata-semester" type="number" step="0.01" value="87.80" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rata-rata keseluruhan -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Rata-rata Keseluruhan</h4>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="number" step="0.01" value="88.25" readonly>
                        </div>
                    </div>
                </div>

                <!-- Sertifikat Akademik Kab/Kota 1 -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Sertifikat Akademik <small><i>*(jika ada)</i></small></h4>
                        </div>
                        <div class="card-body row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Sertifikat Kabkota 1</label>
                                    <input class="form-control sertifikat" type="file" data-level="kabkota" data-kategori="akademik" data-index="1">
                                    <small class="form-text text-muted">Sertifikat sudah ada: <a href="#" class="text-info">sertifikat_kabkota1.pdf</a></small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Sertifikat</label>
                                    <input class="form-control nilai_sertifikat" type="number" value="20" readonly>
                                </div>
                            </div>
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
                            <input class="form-control" type="number" id="total-nilai" value="20" readonly>
                        </div>
                    </div>
                </div>

                <div class="text-start mt-2 mb-3">
                    <button type="submit" class="btn btn-primary">Update Data Prestasi</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
