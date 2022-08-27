@extends('layouts.admin')
@section('content')
<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Tabel Penghapusan data user</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Alasan Keluar</th>
                        <th>Eskul yang diikuti</th>
                        <th>user</th>
                        <th>opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1
                    @endphp
                    @forelse ($query as $ekstra)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $ekstra->alasan }}</td>
                        <td>{{ $ekstra->nama_eskul }}</td>
                        <td>{{ $ekstra->name }}</td>

                        <td>
                            <form action="{{ route('request.destroy', $ekstra->id) }}" onsubmit="return confirm('Apakah Anda Yakin ? ')" class="d-inline-flex" method="post">
                                <a href="#" class="btn btn-warning btn-sm mr-2" type="button">tidak jadi</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th colspan="7" class="text-center">Data Tidak Ada</th>
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
