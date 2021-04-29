@extends('layouts.admin-master')

@section('judul')
    List Siswa
@endsection

@section('content')


     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                   
                    <table id="basic-datatable" class="table dt-responsive nowrap">

                    	<a href="/admin/create-student" class="btn btn-primary">Tambah</a>
                        
                        <thead>
                        <tr>
                            <th>N0</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                       <tbody>
                        	@foreach($students as $student)
                        <tr>
                            <td>{{ ++$count }}</td>
                            <td>{{ $student->stu_nis }}</td>
                            <td>{{ $student->usr_name }}</td>
                            <td>{{ $student->grade_name. ' ' .$student->major_name.' '.$student->class_number }}</td>
                            
                       
                            <td>

                            	<a href="/admin/list-student/detail/{{ $student->stu_id }}" class="btn btn-success btn-sm">detail</a>
                            	<a href="/admin/edit-student/{{ $student->stu_id }}" class="btn btn-warning btn-sm">Edit</a>
                            	<a href="/admin/student/hapus/{{ $student->stu_id }}" class="btn btn-danger btn-sm">Delete</a> 


                            </td>
                        </tr>

                        @endforeach
                       
                        </tbody>
                    </table>
{{ $students->links() }}
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

@endsection
