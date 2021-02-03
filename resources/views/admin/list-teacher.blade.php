@extends('layouts.admin-master')
@section('judul')
    list Walikelas
@endsection
@section('content')
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                	 
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                       	 <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                       	 </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>Siti Robiah</td>
                            <td>X Rekayasa Perangkat Lunak</td>
                            
                            <td>
                                <a  href="{{URL::to('/admin/list-teacher/detail')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>                        
                          </tr>

                           <tr>
                            <td>2</td>
                            <td>Leni Maulani</td>
                            <td>X Multimedia</td>
                            
                            <td>
                                <a  href="{{URL::to('/admin/teacher/detail-teacher')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>                        
                           </tr>

                        <tr>
                            <td>3</td>
                            <td>Agfie Nur Hanifah</td>
                            <td>XI Rekayasa Perangkat Lunak</td>
                            
                            <td>
                                <a  href="{{URL::to('/admin/teacher/detail-teacher')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>                        
                        </tr>

                          <tr>
                            <td>4</td>
                            <td>Mia Garmianti</td>
                            <td>XI Multimedia</td>
                            
                            <td>
                                <a  href="{{URL::to('/admin/teacher/detail-teacher')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>                        
                        </tr>

                         <tr>
                            <td>5</td>
                            <td>Essa Amalia</td>
                            <td>XII Rekayasa Perangkat Lunak</td>
                            
                            <td>
                                <a  href="{{URL::to('/admin/teacher/detail-teacher')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>                        
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Dewi Astri Indriani</td>
                            <td>XII Multimedia</td>
                            
                            <td>
                                <a  href="{{URL::to('/admin/teacher/detail-teacher')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>                        
                        </tr>


                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
   
@endsection
