@extends('layouts.admin')
@section('content')
<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Tabel Ekstrakurikuler</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Ekstrakurikuler</th>
                        <th>Status</th>
                        <th>Ditambahkan Tanggal</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Ekstrakurikuler</th>
                        <th>Status</th>
                        <th>Ditambahkan Tanggal</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $no = 1
                    @endphp
                    @forelse ($ekstrakurikuler as $ekstra)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $ekstra->name }}</td>
                        <td>{{ $ekstra->status }}</td>
                        <td>{{ $ekstra->created_at }}</td>
                        <td>
                            <form action="" onsubmit="return confirm('Apakah Anda Yakin ? ')" method="post">
                                <a href="" class="btn btn-gradient-warning btn-sm">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-gradient-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="6">Data Tidak Ada</th>
                    </tr>
                    @endforelse


                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


    <!-- Page level custom scripts -->
@endsection
