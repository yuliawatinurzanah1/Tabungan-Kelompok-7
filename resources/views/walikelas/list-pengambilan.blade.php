@extends('layouts.walikelas-master')
@section('judul')
    List Pengambilan Tabungan
@endsection
@section('content')
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="basic-datatable" class="table dt-responsive nowrap">

                    	<a href="/walikelas/create-pengambilan" class="btn btn-primary">Tambah</a>

                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>                            
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                         <tr>
                         @foreach($saving_usages as $saving_usage)   
                            <td>{{++$count}}</td>
                            <td>{{$saving_usage->usr_name}}</td>

                            <td>
                               <a href="/walikelas/list-pengambilan/detail/{{ $saving_usage->stu_id }}" class="btn btn-success btn-sm">detail</a>

                               <a href="/walikelas/edit-pengambilan/{{ $saving_usage->stu_id }}" class="btn btn-warning btn-sm">edit</a>

                               <a href="/walikelas/pengambilan/hapus/{{ $saving_usage->stu_id }}" class="btn btn-danger btn-sm">hapus</a>
        
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



