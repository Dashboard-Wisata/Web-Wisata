@extends('layouts.admin')

@section('main-content')

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kasus Pelanggaran Protokol Covid-19 Hari Ini</div>
                            <div class="h4 mt-3 mb-0 font-weight-bold text-gray-800">157 kali</div>
                            <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                  <i class="fa fa-sort-up text-danger mt-0 mr-2">
                                      16
                                  </i>
                              </div>
                              <div class="col">
                                  <div class="h6 mb-0 mr-1 text-gray-800">Since Last</div>
                              </div>
                            </div>
                        </div>
                        <div class="col-1">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total User Teridentifikasi</div>
                            <div class="h4 mt-3 mb-0 font-weight-bold text-gray-800">157 kali</div>
                            <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                  <i class="fa fa-sort-down text-success mt-0 mr-2">
                                      16
                                  </i>
                              </div>
                                <div class="col">
                                    <div class="h6 mb-0 mr-1 text-gray-800">Since Last</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Akumulasi Positif Covid</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h4 mt-3 mb-0 mr-3 font-weight-bold text-gray-800">175 Kasus</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mt-3 mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2" style="background-color: #4e73df">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total kasus covid-19 nasional</div>
                            <div class="h2 mt-3 mb-0 font-weight-bold text-white">1.450.000 kasus</div>
                            <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                    <i class="h6 fa fa-sort-asc fa-2x text-danger mt-2 mr-2">100</i>
                                </div>
                                <div class="col">
                                    <div class="h6 mb-0 mr-1 text-white">Since Last</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Users 
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{ __('Users') }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $widget['users'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>
    
    <div class="row">
    <div class="col-lg-6 mb-4">

          <!-- Peta Kepadatan Kota -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="text-center m-0 font-weight-bold text-primary">Peta Kepadatan Kota</h6>
              </div>
              <div class="card-body">
                  <div class="text-center">
                     <div id="mapid" style="height:300px;"></div>
                  </div>
                  @section('styles')
                  <!-- Leaflet CSS -->
                      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
                      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
                      crossorigin=""/>
                      <link rel="stylesheet" href="https://labs.easyblog.it/maps/leaflet-search/src/leaflet-search.css">

                  @endsection
              </div>
              @push('javascript')
              <!-- Leaflet JavaScript -->
              <script>

                lat= -7.983908;
                long= 112.621391;
                  var mymap = L.map('mapid').setView([lat, long], 12);

                  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2hvZmlxMjYiLCJhIjoiY2t1aHI5bTIwMmgwaTJucWo5NG1iMm1xcyJ9.VoQXSYNOJayRZ-_i4Vt99w', {
                    maxZoom: 18,
                    attribution: '<a href="https://www.openstreetmap.org/copyright"></a>' +
                      '<a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                  }).addTo(mymap);

                  L.circle([-7.952226, 112.614789], 500, {
                    color: 'red',
                    fillColor: '#f03',
                    fillOpacity: 0.5
                  }).addTo(mymap).bindPopup("Zona Bahaya Penyebaran Covid-19.");
                  var popup = L.popup();

                  L.circle([-7.960923, 112.620532], 250, {
                    color: 'orange',
                    fillColor: '#fd7e14',
                    fillOpacity: 0.5
                  }).addTo(mymap).bindPopup("Zona Rawan Penyebaran Covid-19.");
                  var popup = L.popup();

                  L.circle([-7.961433, 112.633073], 500, {
                    color: 'green',
                    fillColor: '#1cc88a',
                    fillOpacity: 0.5
                  }).addTo(mymap).bindPopup("Zona Aman Penyebaran Covid-19.");
                  var popup = L.popup();

                  function onMapClick(e) {
                    popup
                      .setLatLng(e.latlng)
                      .setContent("You clicked the map at " + e.latlng.toString())
                      .openOn(mymap);
                  }

                  mymap.on('click', onMapClick);

                </script>
              @endpush
          </div>
    </div>

    <div class="col-lg-6 mb-4">
      <!-- Peta Kepadatan Kota -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                    <div class="h6 text-center m-0 font-weight-bold text-primary">Aktivitas Warga</div>
              </div>
            </div>
        </div>
    </div>
  <div class="row">
    <div class="col-lg-12 mb-4">

          <!-- Peta Kepadatan Kota -->
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="text-left m-0 font-weight-bold text-primary">Data Terbaru Warga Terpapar Covid-19</h6>
              </div>
              <div class="card-body">
                    <div class="text-center">
                     <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Date</th>
                                <th scope="col">Age</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sukurin</td>
                                <td>12/12/2020</td>
                                <td>97</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Selvia</td>
                                <td>12/12/2020</td>
                                <td>19</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Anisah</td>
                                <td>12/12/2020</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Arifin</td>
                                <td>12/12/2020</td>
                                <td>21</td>
                            </tr>
                        </tbody>
                     </table>
                    </div>
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
              </div>
            </div>
@endsection
