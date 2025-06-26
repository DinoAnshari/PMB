@extends('layouts.back')

@section('title', 'Edit Data Afirmasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Afirmasi</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Afirmasi</li>
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
                                <small class="form-text text-muted">Dokumen sudah ada: skl_ijazah.pdf</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kartu Keluarga</label>
                                <input class="form-control" type="file" name="kartu_keluarga">
                                <small class="form-text text-muted">Dokumen sudah ada: kk.pdf</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Dokumen Pendukung</label>
                                <input class="form-control" type="file" name="dokumen_pendukung">
                                <small class="form-text text-muted">Dokumen sudah ada: kip.pdf</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jarak Ke Sekolah</label>
                                <input class="form-control" type="number" name="jarak_km" value="3.5" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hanya contoh 1 semester dan 1 kategori ditampilkan -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Nilai Kelas 5 Semester 1</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Upload Rapot</label>
                                <input class="form-control" type="file" name="rapot_kelas5_semester1">
                                <small class="form-text text-muted">Rapot sudah ada: rapot_5_1.pdf</small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bahasa Indonesia</label>
                                <input class="form-control" type="number" name="nilai_b_indo_kelas5_semester1" value="80">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Matematika</label>
                                <input class="form-control" type="number" name="nilai_matematika_kelas5_semester1" value="85">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">IPA</label>
                                <input class="form-control" type="number" name="nilai_ipa_kelas5_semester1" value="82">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Bahasa Inggris</label>
                                <input class="form-control" type="number" name="nilai_b_inggris_kelas5_semester1" value="83">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">PAI</label>
                                <input class="form-control" type="number" name="nilai_pai_kelas5_semester1" value="87">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Rata-rata Semester Ini</label>
                                <input class="form-control" type="number" value="83.4" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Rata-rata Keseluruhan</h4>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="number" value="83.4" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4>Sertifikat Akademik (jika Ada)</h4>
                        </div>
                        <div class="card-body row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Sertifikat Kabkota 1</label>
                                    <input class="form-control" type="file" name="sertifikat_akademik_kabkota_1">
                                    <small class="form-text text-muted">Sertifikat sudah ada: lomba1.pdf</small>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nilai Sertifikat</label>
                                    <input class="form-control" type="number" value="20" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

                <div class="text-start mt-2 mb-3">
                    <button type="submit" class="btn btn-primary">Update Data Afirmasi</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
