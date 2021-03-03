@extends('layouts.admin-master')

@section('judul')
    List Tabungan
@endsection

@section('content')
    <div class="row">
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">



                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Tabungan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                       
                         @foreach($students as $students)   
                            <td>{{++$count}}</td>
                            <td>{{$students->class_grade_id}}</td>
                            <td>{{$students->major_name}}</td>
                            <td>{{$students->sav_amount}}</td>

                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>
                       


                          @endforeach  
        				</tbody>
                    </table>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
  </div>



@endsection