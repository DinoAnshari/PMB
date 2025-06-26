@extends('layouts.back')

@section('title', 'Data Prestasi - PPDB SMPN Maju Jaya')

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
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <a href="#" class="btn btn-primary">Isi Data Prestasi</a>
                    </div>
                    <div class="card-header pb-0 card-no-border">
                        <a href="#" class="btn btn-warning">Edit Data Prestasi</a>
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
                                        <td>Nilai Semester (Kelas5 semester1)</td>
                                        <td>
                                            Bahasa Indonesia: 85, Matematika: 90, IPA: 88, Bahasa Inggris: 80, PAI: 92
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Nilai Semester (Kelas5 semester2)</td>
                                        <td>
                                            Bahasa Indonesia: 86, Matematika: 89, IPA: 87, Bahasa Inggris: 81, PAI: 91
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Nilai Semester (Kelas6 semester1)</td>
                                        <td>
                                            Bahasa Indonesia: 87, Matematika: 88, IPA: 89, Bahasa Inggris: 82, PAI: 93
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nilai Semester (Kelas6 semester2)</td>
                                        <td>
                                            Bahasa Indonesia: 88, Matematika: 90, IPA: 90, Bahasa Inggris: 83, PAI: 94
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Rapot Kelas 5 Semester 1</td>
                                        <td>
                                            <a href="#" target="_blank">Lihat Rapot Kelas 5 Semester 1</a><br>
                                            Rata-Rata: 88
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Rapot Kelas 5 Semester 2</td>
                                        <td>
                                            <a href="#" target="_blank">Lihat Rapot Kelas 5 Semester 2</a><br>
                                            Rata-Rata: 87
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Rapot Kelas 6 Semester 1</td>
                                        <td>
                                            <a href="#" target="_blank">Lihat Rapot Kelas 6 Semester 1</a><br>
                                            Rata-Rata: 89
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Rapot Kelas 6 Semester 2</td>
                                        <td>
                                            <a href="#" target="_blank">Lihat Rapot Kelas 6 Semester 2</a><br>
                                            Rata-Rata: 90
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Rata-Rata Keseluruhan</td>
                                        <td>88.5</td>
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Sertifikat Akademik (Kabkota 1)</td>
                                        <td>
                                            <a href="#" target="_blank">Lihat Sertifikat</a><br>
                                            Nilai: 10
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Sertifikat Non-Akademik (Kabkota 1)</td>
                                        <td>
                                            <a href="#" target="_blank">Lihat Sertifikat</a><br>
                                            Nilai: 9
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Total Nilai Sertifikat</td>
                                        <td>19</td>
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