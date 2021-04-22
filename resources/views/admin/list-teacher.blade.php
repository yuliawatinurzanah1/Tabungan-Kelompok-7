@extends('layouts.admin-master')

@section('judul')
    List Walikelas
@endsection

@section('content')


     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                   
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <a href="/admin/create-teacher" class="btn btn-primary">Tambah</a>
                        <thead>
                        <tr>
                            <th>N0</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                       <tbody>
                        	@foreach($teachers as $teacher)
                        <tr>
                            <td>{{ ++$count}}</td>
                            <td>{{ $teacher->tcr_nik }}</td>
                            <td>{{ $teacher->usr_name }}</td>
                            <td>{{ $teacher->grade_name. ' '.$teacher->major_name }}</td>
                       
                            <td>
                            	<a href="/admin/list-teacher/detail/{{ $teacher->tcr_id }}" class="btn btn-success btn-sm">detail</a>
                            	<a href="/admin/edit-teacher/{{ $teacher->tcr_id }}" class="btn btn-warning btn-sm">Edit</a>
                            	<a href="/admin/teacher/hapus/{{ $teacher->tcr_id }}" class="btn btn-danger btn-sm">Hapus</a> 

                            </td>
                        </tr>

                        @endforeach
                       
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

@endsection
