@extends('layouts.admin-master')
@section('judul')
    List Kelas
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  
                 
                    <a href="{{URL::to('admin/add-class')}}" class="btn btn-primary">Tambah</a>
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                        	
                            <th>No</th>
                            <th>ANGKATAN</th>
                            <!-- <th>JURUSAN</th> -->
                            <th>NAMA KELAS</th>
                            <th>ACTION</th>
                            
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($classes as $classes)
                        <tr>
                        	
                            <td>{{++$count}}</td>
                            <td>{{$classes->class_grade_id}}</td>
                            <td>{{$classes->class_name}}</td>
                            <td>
                                <a href="/admin/list-class/detail/{{ $classes->class_id }}" class="btn btn-success btn-sm">detail</a>
                                <a href="/admin/edit-class/{{ $classes->class_id }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/admin/class/hapus/{{ $classes->class_id }}" class="btn btn-danger btn-sm">Delete</a>
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


    <!-- Modal -->


@endsection
