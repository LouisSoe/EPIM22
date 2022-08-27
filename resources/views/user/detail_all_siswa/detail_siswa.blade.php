@extends('layouts.user')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div id="content">
        <a class="btn rounded-circle btn-success mb-3" type="button" href="{{ route('homepage') }}"><i class="fas fa-arrow-left"></i></a>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
                    <select name="eskul" id="eskul" class="form-control dynamic">
                        @foreach ($eskul as $eskul)

                        <option value="{{ $eskul->id }}">{{ $eskul->nama_eskul }}</option>
                        @endforeach
                        {{-- <option>{{ $data->nama_eskul }}</option> --}}
                    </select>
            <br>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Data Siswa Yang Bergabung Eskrakurikuler</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="getdata">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Lengap</th>
                                        <th>Jurusan</th>
                                        <th>Mengikuti</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1
                                    @endphp
                                    @foreach ($daftar as $d)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->jurusan }}</td>
                                            <td>{{ $d->nama_eskul }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

        <script>
            $(document).ready(function () {
                $(document).on('change', "#eskul", function (){
                    var id = $(this).val();
                    // alert(eskul)
                    $.ajax({
                        url: "{{ route('detailall.getdata') }}",
                        type: "get",
                        data: {"id": id},
                        dataType: "json",
                        success: function(data){
                            var tarea = '';
                            tarea+= '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
                                tarea+= '<thead>';
                                    tarea+='<tr>';
                                        tarea+='<th>No</th>';
                                        tarea+='<th>Nama Lengap</th>';
                                        tarea+='<th>Jurusan</th>';
                                        tarea+='<th>Mengikuti</th>';
                                        tarea+='</tr>';
                                        tarea+='</thead>';
                                        tarea+='<tbody>';
                                            for (let i = 0; i < data.length; i++) {
                                            tarea+='<tr>';
                                                tarea+='<td>132</td>';
                                                tarea+='<td>'+ data[i].name+'</td>';
                                                tarea+='<td>'+data[i].jurusan+'</td>';
                                                tarea+='<td>'+data[i].nama_eskul+'</td>';
                                                tarea+='</tr>';
                                                }
                                                tarea+='</tbody>';
                                                tarea+='</table>';
                                                $('.getdata').html(tarea);
                        }
                    })
                })
             })
        </script>
    </div>
@endsection
