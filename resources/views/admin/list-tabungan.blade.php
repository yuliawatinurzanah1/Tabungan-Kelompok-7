@extends('layouts.admin-master')
@section('judul')
    List Tabungan
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
                            <th>Kelas</th>
                            <th>Jumlah Tabungan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>X Rekayasa Perangkat Lunak</td>
                            <td>10.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>

                         <tr>
                            <td>2</td>
                            <td>X Multimedia</td>
                            <td>30.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>

                         <tr>
                            <td>3</td>
                            <td>XI Rekayasa Perangkat Lunak</td>
                            <td>20.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>

                         <tr>
                            <td>4</td>
                            <td>XI Multimedia</td>
                            <td>20.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>

                         <tr>
                            <td>5</td>
                            <td>XII Rekayasa Perangkat Lunak</td>
                            <td>20.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>

                         <tr>
                            <td>6</td>
                            <td>XII Multimedia</td>
                            <td>20.000.000</td>
                            <td>
                                <a  href="{{URL::to('/admin/list-tabungan/detail')}}" class="btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>


                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
   
@endsection
