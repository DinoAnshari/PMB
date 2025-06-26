@extends('layouts.back')

@section('title', 'Data Afirmasi - PPDB SMPN Maju Jaya')

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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <a href="#" class="btn btn-primary">Isi Data Afirmasi</a>
                    </div>
                    <div class="card-header pb-0 card-no-border">
                        <a href="#" class="btn btn-warning">Edit Data Afirmasi</a>
                        <a href="#" target="_blank" class="btn btn-success">Cetak Kartu</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-6">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>List</th>
                                        <th>Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>SKL/Ijazah</td>
                                        <td><a href="#" target="_blank">Lihat SKL/Ijazah</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Kartu Keluarga</td>
                                        <td><a href="#" target="_blank">Lihat Kartu Keluarga</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Dokumen Pendukung/kip/lainy</td>
                                        <td><a href="#" target="_blank">Lihat Dokumen Pendukung</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Nilai Semester (Kelas5 semester1)</td>
                                        <td>
                                            Bahasa Indonesia: 80,
                                            Matematika: 85,
                                            IPA: 78,
                                            Bahasa Inggris: 82,
                                            Pendidikan agama dan budi pekerti/pai: 90
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Rapot Kelas 5 Semester 1</td>
                                        <td>
                                            <a href="#" target="_blank">Lihat Rapot</a><br>
                                            Rata-Rata: 83.2
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>7</td>
                                        <td>Sertifikat Akademik (Kabkota 1)</td>
                                        <td>
                                            <a href="#" target="_blank">Lihat Sertifikat</a><br>
                                            Nilai: 10
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>8</td>
                                        <td>Total Nilai Sertifikat</td>
                                        <td>20</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>List</th>
                                        <th>Data</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $("#basic-6").DataTable({
            lengthMenu: [
                [25, 50, 100, -1],
                [25, 50, 100, "All"],
            ],
            pageLength: 50
        });
    });
</script>

@endsection