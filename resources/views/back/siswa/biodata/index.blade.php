@extends('layouts.back')

@section('title', 'Data Biodata - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Biodata</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="iconly-Home icli svg-color"></i></a></li>
                        <li class="breadcrumb-item">Biodata</li>
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
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".biodata_create_modal">Isi Biodata</button>
                    </div>
                    <div class="card-header pb-0 card-no-border">
                        <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target=".biodata_edit_modal">Edit Biodata</button>
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
                                        <td>Pas Foto</td>
                                        <td><img src="{{ asset('storage/foto_siswa_dummy.jpg') }}" width="120" alt="Pas Foto"></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>NISN</td>
                                        <td>1234567890</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>NIK</td>
                                        <td>3275123456789000</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>No KK</td>
                                        <td>3275001234567890</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Jenis Kelamin</td>
                                        <td>Laki-laki</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td>Maju Jaya, 12 Januari 2012</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Agama</td>
                                        <td>Islam</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Alamat</td>
                                        <td>Jl. Merdeka No. 10, Maju Jaya</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Tinggal dengan</td>
                                        <td>Orang Tua</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Asal Sekolah</td>
                                        <td>SDN 01 Maju Jaya</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Alamat Asal Sekolah</td>
                                        <td>Jl. Pendidikan No. 5</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Kecamatan</td>
                                        <td>Maju Utara</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Kelurahan</td>
                                        <td>Martoba</td>
                                    </tr>

                                    <!-- Data Orang Tua -->
                                    <tr>
                                        <td colspan="3" class="table-secondary fw-bold">Data Orang Tua</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Nama Ayah</td>
                                        <td>Ahmad Sulaiman</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>Pekerjaan Ayah</td>
                                        <td>Karyawan Swasta</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Nama Ibu</td>
                                        <td>Siti Mariam</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Pekerjaan Ibu</td>
                                        <td>Ibu Rumah Tangga</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>No HP</td>
                                        <td>081234567890</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>Alamat Orang Tua</td>
                                        <td>Jl. Merdeka No. 10, Maju Jaya</td>
                                    </tr>

                                    <!-- Data Wali -->
                                    <tr>
                                        <td colspan="3" class="table-secondary fw-bold">Data Wali</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>Nama Wali</td>
                                        <td>Pak Budi</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>Pekerjaan Wali</td>
                                        <td>PNS</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>No HP</td>
                                        <td>082112345678</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>Alamat Wali</td>
                                        <td>Jl. Kemerdekaan No. 7</td>
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

@push('modal')
@include('back.siswa.biodata.modal.create')
@include('back.siswa.biodata.modal.edit')
@endpush

@push('js')

@endpush

@endsection