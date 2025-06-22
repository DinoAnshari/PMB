@extends('layouts.back')

@section('title', 'Data Prestasi - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Prestasi Andi Saputra</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"><i class="iconly-Home icli svg-color"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Prestasi</a>
                        </li>
                        <li class="breadcrumb-item">Detail Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
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
                                        <td>Tidak Ada</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Rata-Rata Keseluruhan</td>
                                        <td>87.3</td>
                                    </tr>

                                    <!-- Rapot & Nilai Kelas 6 Semester 1 -->
                                    <tr>
                                        <td>4</td>
                                        <td>Rapot Kelas 6 Semester 1</td>
                                        <td><a href="#" target="_blank">Lihat Rapot</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Nilai B Indo Kelas 6 Semester 1</td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Nilai Matematika Kelas 6 Semester 1</td>
                                        <td>88</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Nilai IPA Kelas 6 Semester 1</td>
                                        <td>89</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Nilai B Inggris Kelas 6 Semester 1</td>
                                        <td>85</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Nilai PAI Kelas 6 Semester 1</td>
                                        <td>91</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Rata-Rata Kelas 6 Semester 1</td>
                                        <td>88.6</td>
                                    </tr>

                                    <!-- Rapot & Nilai Kelas 6 Semester 2 -->
                                    <tr>
                                        <td>11</td>
                                        <td>Rapot Kelas 6 Semester 2</td>
                                        <td><a href="#" target="_blank">Lihat Rapot</a></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Nilai B Indo Kelas 6 Semester 2</td>
                                        <td>92</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Nilai Matematika Kelas 6 Semester 2</td>
                                        <td>91</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Nilai IPA Kelas 6 Semester 2</td>
                                        <td>93</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Nilai B Inggris Kelas 6 Semester 2</td>
                                        <td>87</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Nilai PAI Kelas 6 Semester 2</td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Rata-Rata Kelas 6 Semester 2</td>
                                        <td>90.6</td>
                                    </tr>


                                    <!-- Sertifikat Akademik -->
                                    <tr>
                                        <td>11</td>
                                        <td>Sertifikat Akademik Kab/Kota 1</td>
                                        <td><a href="#" target="_blank">Lihat Sertifikat</a></td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Nilai Akademik Kab/Kota 1</td>
                                        <td>92</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Sertifikat Akademik Provinsi 1</td>
                                        <td><a href="#" target="_blank">Lihat Sertifikat</a></td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Nilai Akademik Provinsi 1</td>
                                        <td>89</td>
                                    </tr>

                                    <!-- Sertifikat Non-Akademik -->
                                    <tr>
                                        <td>15</td>
                                        <td>Sertifikat Non Akademik Kab/Kota 1</td>
                                        <td>Tidak Ada</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Nilai Non Akademik Kab/Kota 1</td>
                                        <td>Tidak Ada</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Sertifikat Non Akademik Nasional 1</td>
                                        <td><a href="#" target="_blank">Lihat Sertifikat</a></td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>Nilai Non Akademik Nasional 1</td>
                                        <td>85</td>
                                    </tr>

                                    <!-- Total -->
                                    <tr>
                                        <td>19</td>
                                        <td>Total Nilai Sertifikat</td>
                                        <td>266</td>
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

<!-- Script -->
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