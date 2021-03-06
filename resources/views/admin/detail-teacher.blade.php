@extends('layouts.admin-master')

@section('judul')
    Detail Wali Kelas
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary"> Data Wali Kelas </h3>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                        @foreach($teachers as $teacher)
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$teacher->usr_name}}</td>
                                </tr>    
                                    
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{$teacher->usr_email}}</td>
                                </tr>

                                <tr>
                                    <td>NIk</td>
                                    <td>:</td>
                                    <td>{{$teacher->tcr_nik}}</td>
                                </tr>

                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>{{$teacher->grade_name.' '.$teacher->major_name.' '.$teacher->class_number}}</td>
                                </tr>

                                <tr>    
                                    <td>Status</td>
                                    <td>:</td>     
                                    <td>{{$teacher->tcr_marital_status}}</td>        

                                </tr>    

                                <tr>
                                    <td>Nomor Telepon</td>
                                    <td>:</td>
                                    <td>{{$teacher->usr_phone}}</td>
                                </tr>

                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{$teacher->usr_gender}}</td>
                                </tr>

                                <tr>
                                    <td>TTL</td>
                                    <td>:</td>
                                    <td>{{$teacher->usr_place_of_birth. ', '.$teacher->usr_date_of_birth}}</td>    
                                </tr>    
                                
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td>{{$teacher->usr_religion}}</td>
                                </tr>
                                    
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{$teacher->usr_addres}}</td>
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
