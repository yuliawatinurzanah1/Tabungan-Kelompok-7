@extends('layouts.admin-master')
@section('judul')
    List Kelas
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                  
                 
                    <a href="{{URL::to('admin/add-class')}}" class="btn btn-primary">Tambah</a>
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                        	<th>No</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                        	<td>1</td>
                            <td>X</td>
                            <td>Rekayasa Perangkat Lunak</td>
                        </tr>

                         <tr>
                         	<td>2</td>
                            <td>X</td>
                            <td>Multimedia</td>
                        </tr>

                         <tr>
                         	<td>3</td>
                            <td>XI</td>
                            <td>Rekayasa Perangkat Lunak</td>
                        </tr>

                        <tr>
                        	<td>4</td>
                            <td>XI</td>
                            <td>Multimedia</td>
                        </tr>

                         <tr>
                         	<td>5</td>
                            <td>XII</td>
                            <td>Rekayasa Perangkat Lunak</td>
                        </tr>

                         <tr>
                         	<td>6</td>
                            <td>XII</td>
                            <td>Multimedia</td>
                        </tr>
                       
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


    <!-- Modal -->


@endsection
