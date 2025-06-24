@extends('layouts.back')

@section('title', 'Data Jalur Domisili - PPDB SMPN Pematangsiantar')

@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6 col-12">
                    <h2>Data Ahmad Yusuf</h2>
                </div>
                <div class="col-sm-6 col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="iconly-Home icli svg-color"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Jalur Domisili</a>
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
                                    <tr><th>No</th><th>List</th><th>Data</th></tr>
                                </thead>
                                <tbody>
                                    <tr><td>1</td><td>SKL/Ijazah</td><td><a href="#">Lihat SKL/Ijazah</a></td></tr>
                                    <tr><td>2</td><td>Kartu Keluarga</td><td><a href="#">Lihat Kartu Keluarga</a></td></tr>
                                    <tr><td>3</td><td>Jarak ke Sekolah</td><td>1.23 km</td></tr>
                                    <tr><td>4</td><td>NISN</td><td>1234567890</td></tr>
                                    <tr><td>5</td><td>NIK</td><td>3210987654321000</td></tr>
                                    <tr><td>6</td><td>No. KK</td><td>9876543210</td></tr>
                                    <tr><td>7</td><td>Jenis Kelamin</td><td>Laki-laki</td></tr>
                                    <tr><td>8</td><td>Tanggal Lahir</td><td>01-01-2010</td></tr>
                                    <tr><td>9</td><td>Tempat Lahir</td><td>Pematangsiantar</td></tr>
                                    <tr><td>10</td><td>Pas Foto</td><td><img src="#" alt="Pas Foto" width="100"></td></tr>
                                    <tr><td>11</td><td>Tinggal Dengan</td><td>Orang Tua</td></tr>
                                    <tr><td>12</td><td>Rata-Rata Keseluruhan</td><td>88.75</td></tr>
                                    <tr><td>13</td><td>Rapot Kelas 5 Semester 1</td><td><a href="#">Lihat Rapot</a></td></tr>
                                    <tr><td>14</td><td>Nilai B Indo Kelas 5 Semester 1</td><td>90</td></tr>
                                    <tr><td>15</td><td>Nilai Matematika Kelas 5 Semester 1</td><td>88</td></tr>
                                    <tr><td>16</td><td>Nilai Ipa Kelas 5 Semester 1</td><td>87</td></tr>
                                    <tr><td>17</td><td>Nilai B Inggris Kelas 5 Semester 1</td><td>85</td></tr>
                                    <tr><td>18</td><td>Nilai Pai Kelas 5 Semester 1</td><td>89</td></tr>
                                    <tr><td>19</td><td>Rata-Rata Kelas 5 Semester 1</td><td>87.8</td></tr>
                                    <tr><td>20</td><td>Sertifikat Akademik Kab/Kota 1</td><td>Juara 1 Matematika</td></tr>
                                    <tr><td>21</td><td>Nilai Akademik Kab/Kota 1</td><td>92</td></tr>
                                    <tr><td>22</td><td>Total Nilai Sertifikat</td><td>92</td></tr>
                                </tbody>
                                <tfoot>
                                    <tr><th>No</th><th>List</th><th>Data</th></tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header card-no-border pb-0">
                        <h3>Lokasi Siswa</h3>
                    </div>
                    <div class="card-body">
                        <div id="mapid"><p class="text-danger">Koordinat tidak tersedia.</p></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Styles dan Script CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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
    $(document).ready(function () {
        $("#basic-6").DataTable({
            lengthMenu: [
                [25, 50, 100, -1],
                [25, 50, 100, "All"],
            ],
            pageLength: 50
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Nilai statis
        var lat = -0.4718;      // Contoh koordinat rumah siswa
        var lng = 102.4381;
        var sekolahLat = -0.4725; // Contoh koordinat sekolah
        var sekolahLng = 102.4359;

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
            createMarker: function (i, wp, nWps) {
                if (i === 0) {
                    return L.marker(wp.latLng, {
                        icon: L.icon({
                            iconUrl: '/back/assets/images/leaflet/marker-icon.png',
                            shadowUrl: '/back/assets/images/leaflet/marker-shadow.png',
                            iconSize: [25, 41],
                            iconAnchor: [12, 41],
                            popupAnchor: [0, -41],
                            shadowSize: [41, 41]
                        })
                    }).bindPopup("Lokasi rumah siswa");
                } else if (i === nWps - 1) {
                    return L.marker(wp.latLng, {
                        icon: L.icon({
                            iconUrl: '/back/assets/images/leaflet/school.png',
                            iconSize: [25, 41],
                            iconAnchor: [12, 41],
                            popupAnchor: [0, -41]
                        })
                    }).bindPopup("Lokasi sekolah");
                }
                return null;
            }
        }).addTo(map);

        window.addEventListener('load', function () {
            map.invalidateSize();
        });
    });
</script>

@endsection
