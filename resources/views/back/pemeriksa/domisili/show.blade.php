@extends('layouts.back')

@section('title', 'Data Jalur Domisili - PPDB SMPN Maju Jaya')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data {{ $domicileTrack->user->name ?? '-' }}</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/index_pemeriksa_domisili') }}">
                                <i class="iconly-Home icli svg-color"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ url('dashboard/index_pemeriksa_domisili') }}">Jalur Domisili</a>
                        </li>
                        <li class="breadcrumb-item">Detail Siswa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
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
                                    @php $no = 1; @endphp
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>SKL/Ijazah</td>
                                        <td>
                                            @if($domicileTrack->skl_ijazah)
                                            <a href="{{ asset('storage/' . $domicileTrack->skl_ijazah) }}" target="_blank">Lihat SKL/Ijazah</a>
                                            @else
                                            <span class="text-danger">Tidak tersedia</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Kartu Keluarga</td>
                                        <td>
                                            @if($domicileTrack->kartu_keluarga)
                                            <a href="{{ asset('storage/' . $domicileTrack->kartu_keluarga) }}" target="_blank">Lihat Kartu Keluarga</a>
                                            @else
                                            <span class="text-danger">Tidak tersedia</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Jarak ke Sekolah</td>
                                        <td>{{ $domicileTrack->jarak_km ?? '-' }} km</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>NISN</td>
                                        <td>{{ $domicileTrack->student->nisn ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>NIK</td>
                                        <td>{{ $domicileTrack->student->nik ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>No. KK</td>
                                        <td>{{ $domicileTrack->student->no_kk ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $domicileTrack->student->jenis_kelamin ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tanggal Lahir</td>
                                        <td>{{ optional($domicileTrack->student)->tanggal_lahir ? \Carbon\Carbon::parse($domicileTrack->student->tanggal_lahir)->format('d-m-Y') : '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tempat Lahir</td>
                                        <td>{{ $domicileTrack->student->tempat_lahir ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Pas Foto</td>
                                        <td>
                                            @if($domicileTrack->student->pas_foto)
                                            <img src="{{ asset('storage/' . $domicileTrack->student->pas_foto) }}" alt="Pas Foto" width="100">
                                            @else
                                            <span class="text-danger">Tidak tersedia</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>Tinggal Dengan</td>
                                        <td>{{ $domicileTrack->student->tinggal_dengan ?? '-' }}</td>
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

            <!-- Peta Lokasi -->
            <div class="col-lg-6">
                <div class="card">
                    </div>
                    <div class="card-body">
                        <div id="mapid"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Leaflet & DataTable -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<!-- Leaflet Routing Machine -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
<script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
<style>
    #mapid {
        width: 100%;
        height: 650px;
        min-height: 400px;
        border-radius: 10px;
        background-color: #f0f0f0;
    }
</style>


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
    document.addEventListener("DOMContentLoaded", function() {
        var lat = parseFloat("{{ $domicileTrack->latitude ?? 0 }}");
        var lng = parseFloat("{{ $domicileTrack->longitude ?? 0 }}");

        const sekolahLat = parseFloat("{{ $domicileTrack->user->sekolah->latitude ?? 0 }}");
        const sekolahLng = parseFloat("{{ $domicileTrack->user->sekolah->longitude ?? 0 }}");

        if (lat !== 0 && lng !== 0 && sekolahLat !== 0 && sekolahLng !== 0) {
            var map = L.map('mapid').setView([lat, lng], 14);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            L.Routing.control({
                waypoints: [
                    L.latLng(lat, lng), 
                    L.latLng(sekolahLat, sekolahLng) 
                ],
                routeWhileDragging: false,
                showAlternatives: false,
                show: false,
                createMarker: function(i, wp, nWps) {
                    if (i === 0) {
                        return L.marker(wp.latLng, {
                            icon: L.icon({
                                iconUrl: "{{ asset('back/assets/images/leaflet/marker-icon.png') }}",
                                shadowUrl: "{{ asset('back/assets/images/leaflet/marker-shadow.png') }}",
                                iconSize: [25, 41],
                                iconAnchor: [12, 41],
                                popupAnchor: [0, -41],
                                shadowSize: [41, 41]
                            })
                        }).bindPopup("Lokasi rumah siswa");
                    } else if (i === nWps - 1) {
                        return L.marker(wp.latLng, {
                            icon: L.icon({
                                iconUrl: "{{ asset('back/assets/images/leaflet/school.png') }}",
                                iconSize: [25, 41],
                                iconAnchor: [12, 41],
                                popupAnchor: [0, -41]
                            })
                        }).bindPopup("Lokasi sekolah");
                    }
                    return null;
                }
            }).addTo(map);

            window.addEventListener('load', function() {
                map.invalidateSize();
            });
        } else {
            document.getElementById("mapid").innerHTML = "<p class='text-danger'>Koordinat tidak tersedia.</p>";
        }
    });
</script>


@endsection