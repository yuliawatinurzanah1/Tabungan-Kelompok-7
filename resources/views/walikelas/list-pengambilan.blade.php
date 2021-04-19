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
                         @foreach($students as $student)   
                            <td>{{++$count}}</td>
                            <td>{{$student->usr_name}}</td>

                            <td>
                               <a href="/walikelas/list-pengambilan/detail/{{ $student->stu_id }}" class="btn btn-success btn-sm">detail</a>
        
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



