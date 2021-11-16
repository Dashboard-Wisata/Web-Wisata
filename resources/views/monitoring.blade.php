@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Monitoring') }}</h1>

    <!-- Main Content goes here -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Id Wisata</th>
                <th scope="col">Jumlah Pengunjung</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Latittude</th>
                <th scope="col">Longitude</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
       <tbody>
        <tr>
            <td>1</td>
            <td>350 Orang</td>
            <td>Coban Rondo</td>
            <td>-7.300002002</td>
            <td>14.000000</td>
            <td class="text-danger">RAMAI PENGUNJUNG</td>
        </tr>
        <tr>
            <td>2</td>
            <td>250 Orang</td>
            <td>Taman Rekreasi Selecta</td>
            <td>-7.818697</td>
            <td>112.525706</td>
            <td class="text-danger">RAMAI PENGUNJUNG</td>        
        </tr>
        <tr>
            <td>3</td>
            <td>200 Orang</td>
            <td>Batu Wonderland</td>
            <td>-7.880347</td>
            <td>112.53308</td>
            <td class="text-danger">RAMAI PENGUNJUNG</td>
        </tr>
        <tr>
            <td>4</td>
            <td>100 Orang</td>
            <td>Pantai Balekambang</td>
            <td>-8.403446</td>
            <td>112.539126</td>
            <td class="text-alert">SEDANG PENGUNJUNG</td>
        </tr>
        <tr>
            <td>5</td>
            <td>50 Orang</td>
            <td>Pantai Laundry </td>
            <td>-8.168468</td>
            <td>112.521747</td>
            <td class="text-success">SEPI PENGUNJUNG</td>
        </tr>
        </tbody>
        </table>
        <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
        </div>
        <!-- End of Main Content -->
@endsection

@push('notif')
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
@endpush
