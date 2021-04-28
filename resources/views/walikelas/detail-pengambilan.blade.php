@extends('layouts.walikelas-master')

@section('judul')
    Detail Pengambilan
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary"> Data Pengambilan Tabungan </h3>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                       @foreach($saving_usages as $saving_usages)
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$saving_usages->usr_name}}</td>
                                </tr>    
                                    
                                <tr>
                                    <td>Kelas</td>
                                    <td>:</td>
                                    <td>{{$saving_usages->grade_name.' '.$saving_usages->major_name.' '.$saving_usages->class_number}}</td>
                                </tr>

                                 <tr>
                                    <td>Nominal Pengambilan</td>
                                    <td>:</td>
                                    <td>{{$saving_usages->usa_amount}}</td>
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
                                <tr>
                                <td><a href="/walikelas/edit-pengambilan/{{ $saving_usages->usa_id }}" class="btn btn-warning btn-sm">edit</a></td>

                                <td><a href="/walikelas/pengambilan/hapus/{{ $saving_usages->usa_id }}" class="btn btn-danger btn-sm">hapus</a></td>
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
