@extends('layouts.admin-master')

@section('judul')
    Detail Class
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary"> Data Class </h3>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                        @foreach ($classes as $classes)
                            <tbody>
                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>{{$classes->class_grade_id}}</td>
                                </tr>    
                                    
                                <tr>
                                
                                    <td>Jurusan</td>
                                    <td>:</td>
                                    <td>{{$classes->major_name}}</td>
                                </tr>
                                    
                                <tr>
                                    <td>Nama Kelas</td>
                                    <td>:</td>
                                    <td>{{$classes->class_name}}</td>
                                </tr>

                                
                            </tbody>
                        @endforeach
                        </table>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


@endsection
