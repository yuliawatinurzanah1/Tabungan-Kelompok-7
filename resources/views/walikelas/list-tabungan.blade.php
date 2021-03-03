@extends('layouts.walikelas-master')
@section('judul')
    List Tabungan
@endsection
@section('content')
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="basic-datatable" class="table dt-responsive nowrap">

                    	<a href="/walikelas/create-tabungan" class="btn btn-primary">Tambah</a>

                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>                            
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                         <tr>
                         @foreach($savings as $saving)   
                            <td>{{++$count}}</td>
                            <td>{{$saving->usr_name}}</td>

                            <td>
                               <a href="/walikelas/list-tabungan/detail/{{ $saving->stu_id }}" class="btn btn-success btn-sm">detail</a>

                               <a href="/walikelas/edit-tabungan/{{ $saving->stu_id }}" class="btn btn-warning btn-sm">edit</a>

                               <a href="/walikelas/tabungan/hapus/{{ $saving->stu_id }}" class="btn btn-danger btn-sm">detail</a>
        
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



