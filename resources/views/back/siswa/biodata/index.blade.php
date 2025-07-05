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
                        <li class="breadcrumb-item"><a href="{{ url('dashboard/index_siswa') }}"><i class="iconly-Home icli svg-color"></i></a></li>
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
                    @if(!$biodata)
                    <div class="card-header pb-0 card-no-border">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".biodata_create_modal">Isi Biodata</button>
                    </div>
                    @else
                    <div class="card-header pb-0 card-no-border">
                        <button class="btn btn-warning edit-biodata-modal" type="button" data-bs-toggle="modal" data-bs-target=".biodata_edit_modal" data-id="{{ $biodata->id }}">Edit Biodata</button>
                    </div>
                    @endif
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
                                    @if($biodata)
                                    @php $no = 1; @endphp
                                    @if($biodata->pas_foto)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Pas Foto</td>
                                        <td><img src="{{ asset('storage/' . $biodata->pas_foto) }}" width="120" alt="Pas Foto"></td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>NISN</td>
                                        <td>{{ $biodata->nisn }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>NIK</td>
                                        <td>{{ $biodata->nik }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>No KK</td>
                                        <td>{{ $biodata->no_kk }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $biodata->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td>{{ $biodata->tempat_lahir }}, {{ $biodata->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Agama</td>
                                        <td>{{ $biodata->agama }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Alamat</td>
                                        <td>{{ $biodata->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tinggal dengan</td>
                                        <td>{{ $biodata->tinggal_dengan }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Asal Sekolah</td>
                                        <td>{{ $biodata->asal_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Alamat Asal Sekolah</td>
                                        <td>{{ $biodata->alamat_asal_sekolah }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kecamatan</td>
                                        <td>{{ $biodata->kecamatan }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kelurahan</td>
                                        <td>{{ $biodata->kelurahan }}</td>
                                    </tr>
                                    

                                    @if($biodata->parent)
                                    <tr>
                                        <td colspan="3" class="table-secondary fw-bold">Data Orang Tua</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Nama Ayah</td>
                                        <td>{{ $biodata->parent->nama_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Pekerjaan Ayah</td>
                                        <td>{{ $biodata->parent->pekerjaan_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Nama Ibu</td>
                                        <td>{{ $biodata->parent->nama_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Pekerjaan Ibu</td>
                                        <td>{{ $biodata->parent->pekerjaan_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>No HP</td>
                                        <td>{{ $biodata->parent->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Alamat Orang Tua</td>
                                        <td>{{ $biodata->parent->alamat }}</td>
                                    </tr>
                                    @endif
                                    @if($biodata->guardian)
                                    <tr>
                                        <td colspan="3" class="table-secondary fw-bold">Data Wali</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Nama Wali</td>
                                        <td>{{ $biodata->guardian->nama_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Pekerjaan Wali</td>
                                        <td>{{ $biodata->guardian->pekerjaan_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>No HP</td>
                                        <td>{{ $biodata->guardian->no_hp }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Alamat Wali</td>
                                        <td>{{ $biodata->guardian->alamat }}</td>
                                    </tr>
                                    @endif
                                    @else
                                    <tr>
                                        <td colspan="3" class="text-center">Belum ada data biodata.</td>
                                    </tr>
                                    @endif
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
@include('back.siswa.biodata._script')
@endpush

@endsection