@extends('layouts.admin-master')

@section('judul')
    Detail Student
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary"> Data Student </h3>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                        @foreach($student as $student)
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$student->usr_name}}</td>
                                </tr>    
                                    
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{$student->usr_email}}</td>
                                </tr>

                                <tr>
                                    <td>NIS</td>
                                    <td>:</td>
                                    <td>{{$student->stu_nis}}</td>
                                </tr>

                                <tr>
                                    <td>Tahun</td>
                                    <td>:</td>
                                    <td>{{$student->stu_school_year}}</td>
                                </tr>

                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td>:</td>
                                    <td>{{$student->usr_phone}}</td>
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
