@extends('layouts.walikelas-master')

@section('judul')
    List Siswa
@endsection

@section('content')


     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                   
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        
                        <thead>
                        <tr>
                            <th>N0</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                       <tbody>
                        	@foreach($students as $student)
                        <tr>
                            <td>{{ ++$count }}</td>
                            <td>{{ $student->stu_nis }}</td>
                            <td>{{ $student->usr_name }}</td>
                       
                            <td>

                            	<a href="/walikelas/list-student/detail/{{ $student->stu_id }}" class="btn btn-success btn-sm">detail</a>
                            	
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
