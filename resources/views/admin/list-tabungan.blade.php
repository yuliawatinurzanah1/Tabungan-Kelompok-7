@extends('layouts.admin-master')
@section('judul')
    List Tabungan
@endsection
@section('content')
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="basic-datatable" class="table dt-responsive nowrap">

                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>  
                            <th>Jurusan</th>   
                            <th>Nomor Kelas</th>                            
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                         <tr>
                         @foreach($students as $classes)   
                            <td>{{++$count}}</td>
                            <td>{{$classes->grade_name}}</td>
                            <td>{{$classes->major_name}}</td>
                            <td>{{$classes->class_number}}</td>


                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>
                          @endforeach  

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
   
@endsection



