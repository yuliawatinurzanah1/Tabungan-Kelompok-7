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
                        @foreach($savings as $savings)
                            <tbody>

                            	 <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$savings->usr_name}}</td>
                                </tr> 

                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>{{$savings->class_grade_id}}</td>
                                </tr>    
                                    
                                <tr>
                                    <td>Jurusan</td>
                                    <td>:</td>
                                    <td>{{$savings->major_name}}</td>
                                </tr>

                                <tr>
                                    <td>Nominal</td>
                                    <td>:</td>
                                    <td>{{$savings->sav_amount}}</td>
                                </tr>

                                <tr>
                                    <td>Tanggal Menabung</td>
                                    <td>:</td>
                                    <td>{{$savings->sav_date}}</td>
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
