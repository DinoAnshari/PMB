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
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Domisili</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <!-- Upload Dokumen -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Upload Dokumen</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">SKL / Ijazah</label>
                                <input class="form-control" type="file" name="skl_ijazah">
                                <small class="form-text text-muted">
                                    Dokumen sudah ada: <a href="#" target="_blank" class="text-info">skl_ijazah.pdf</a>
                                </small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kartu Keluarga</label>
                                <input class="form-control" type="file" name="kartu_keluarga">
                                <small class="form-text text-muted">
                                    Dokumen sudah ada: <a href="#" target="_blank" class="text-info">kk.pdf</a>
                                </small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jarak Ke Sekolah</label>
                                <input class="form-control" type="number" value="3.25" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contoh 1 Semester -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Nilai Kelas 5 Semester 1</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Upload Rapot</label>
                                <input class="form-control" type="file" name="rapot_kelas5_semester1">
                                <small class="form-text text-muted">
                                    Rapot sudah ada: <a href="#" target="_blank" class="text-info">rapot_kelas5_sem1.pdf</a>
                                </small>
                            </div>
                            <div class="mb-3"><label class="form-label">Bahasa Indonesia</label><input class="form-control nilai" type="number" value="85"></div>
                            <div class="mb-3"><label class="form-label">Matematika</label><input class="form-control nilai" type="number" value="88"></div>
                            <div class="mb-3"><label class="form-label">IPA</label><input class="form-control nilai" type="number" value="90"></div>
                            <div class="mb-3"><label class="form-label">Bahasa Inggris</label><input class="form-control nilai" type="number" value="82"></div>
                            <div class="mb-3"><label class="form-label">PAI</label><input class="form-control nilai" type="number" value="87"></div>
                            <div class="mb-3"><label class="form-label">Rata-rata Semester Ini</label><input class="form-control" type="number" step="0.01" value="86.4" readonly></div>
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
                            <input class="form-control" type="number" step="0.01" value="85.75" readonly>
                        </div>
                    </div>
                </div>

                <!-- Sertifikat -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Sertifikat Akademik</h4><h5>*(jika Ada)</h5>
                        </div>
                        <div class="card-body row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Sertifikat Kabkota 1</label>
                                    <input class="form-control" type="file">
                                    <small class="form-text text-muted">
                                        Sertifikat sudah ada: <a href="#" target="_blank" class="text-info">sertifikat_kab1.pdf</a>
                                    </small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Sertifikat</label>
                                    <input class="form-control" type="number" value="20" readonly>
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
                            <input class="form-control" type="number" value="20" readonly>
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="text-start mt-2 mb-3">
                    <button type="submit" class="btn btn-primary">Update Data Domisili</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
