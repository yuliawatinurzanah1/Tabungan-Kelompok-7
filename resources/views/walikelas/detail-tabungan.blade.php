@extends('layouts.walikelas-master')

@section('judul')
    Detail Tabungan
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary"> Data Tabungan </h3>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                        @foreach($students as $students)
                            <tbody>
                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>{{$students->class_grade_id}}</td>
                                </tr>    
                                    
                                <tr>
                                    <td>Jurusan</td>
                                    <td>:</td>
                                    <td>{{$students->major_name}}</td>
                                </tr>

                                <tr>
                                    <td>Tabungan</td>
                                    <td>:</td>
                                    <td>{{$students->sav_amount}}</td>
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
