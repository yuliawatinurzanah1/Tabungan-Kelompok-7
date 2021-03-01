@extends('layouts.student-master')
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
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                         <tr>
                         @foreach($students as $classes)   
                            <td>{{++$count}}</td>
                            <td>{{$classes->class_name}}</td>

                            
                            
                            <td>
                                <a  href="{{URL::to('/student/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
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
