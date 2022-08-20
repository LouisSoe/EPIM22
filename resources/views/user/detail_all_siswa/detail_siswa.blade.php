@extends('layouts.user')
@section('content')
    <div id="content">



        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>

            <form action="Pendaftaran.filter" method="GET">
                <div class="form-group">
                    <select name="ekstrakurikuler" class="form-control dynamic" data-depedent="state">
                        <option>Ekstrakurikuler</option>
                        {{-- <option>{{ $data->nama_eskul }}</option> --}}
                    </select>
                </div>
                <button type="submit" name="filter" class="btn btn-primary">Filter</button>
            </form>
            <br>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Data Siswa Yang Bergabung Eskrakurikuler</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengap</th>
                                    <th>Prodi</th>
                                    <th>Mengikuti</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1
                                @endphp
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->prodi }}</td>
                                        <td>{{ $d->nama_eskul }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection
