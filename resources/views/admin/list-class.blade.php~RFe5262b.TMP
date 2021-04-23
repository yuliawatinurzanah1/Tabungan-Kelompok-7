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
                            <th>KELAS</th>
                            <th>JURUSAN</th>
                            <th>NOMOR KELAS</th>
                            <th>ACTION</th>
                            
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($classes as $data)
                        <tr>
                        	@if($data->deleted_at == null)
                            <td>{{++$count}}</td>
                            <td>{{$data->grade_name. '' .$data->major_name}}</td>
                            <td>{{$data->class_number}}</td>
                            <td>
                            
                                <a href="/admin/edit-class/{{ $data->class_id }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/admin/class/hapus/{{ $data->class_id }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                            @endif
                        
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
