@extends('layouts.walikelas-master')

@section('judul')
    Detail Laporan
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary"> Data Laporan </h3>
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
                                    <td>{{$savings->grade_name}}</td>
                                </tr>    
                                    
                                <tr>
                                    <td>Jurusan</td>
                                    <td>:</td>
                                    <td>{{$savings->major_name}}</td>
                                </tr>    
                             	
                             	  <tr>
                                    <td>Nomor Kelas</td>
                                    <td>:</td>
                                    <td>{{$savings->class_number}}</td>
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
                                    <td>Tanggal Pengambilan</td>
                                    <td>:</td>
                                    <td>{{$saving_usages->usa_date}}</td>
                                </tr>

                                <tr>
                                    <td>Keterangan Pengambilan</td>
                                    <td>:</td>
                                    <td>{{$saving_usages->usa_information}}</td>
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
