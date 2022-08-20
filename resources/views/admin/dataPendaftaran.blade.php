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
                            <th>Nama Lengkap</th>
                            <th>NIM</th>
                            <th>Prodi</th>
                            <th>Mengikuti</th>
                            <th>Tanggal Bergabung</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1
                        @endphp
                        {{-- @dd($join) --}}
                        @foreach ($join as $d)
                        <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->nim }}</td>
                                <td>{{ $d->prodi }}</td>
                                <td>{{ $d->nama_eskul }}</td>
                                <td>{{ $d->created_at }}</td>
                                <td>
                                    <form action="{{ route('Pendaftaran.destroy', $d->id) }}"
                                        onsubmit="return confirm('Apakah Anda Yakin ? ')" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
