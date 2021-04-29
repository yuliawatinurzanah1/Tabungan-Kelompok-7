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
                                    <td>{{$savings->grade_name.' '.$savings->major_name.' '.$savings->class_number}}</td>
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
                               
                               <tr> 
                                   <td> <a href="/walikelas/edit-tabungan/{{ $savings->sav_id }}" class="btn btn-warning btn-sm">edit</a>

                                   <td> <a href="/walikelas/tabungan/hapus/{{ $savings->sav_id }}" class="btn btn-danger btn-sm">hapus</a>
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