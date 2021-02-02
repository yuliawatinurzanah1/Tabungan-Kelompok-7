@extends('layouts.admin-master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                            data-target="#con-close-modal"> Detail Walikelas
                    </button>

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nik</th>
                            <th>Jenis Kelamin</th>       
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Status Pernikahan</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Siti Robiah</td>
                            <td>X Rekayasa Perangkat Lunak</td>
                            <td>123456789</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>10-11-1997</td>
                            <td>Islam</td>
                            <td>Jln. Patrol</td>
                            <td>Sudah Menikah</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Leni Maulani</td>
                            <td>X Multimedia</td>
                            <td>123456789</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>10-11-1997</td>
                            <td>Islam</td>
                            <td>Jln. Patrol</td>
                            <td>Sudah Menikah</td>
                        </tr>

                         <tr>
                            <td>3</td>
                            <td>Agfie Nur Hanifah</td>
                            <td>XI Rekayasa Perangkat Lunak</td>
                            <td>123456789</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>10-11-1997</td>
                            <td>Islam</td>
                            <td>Jln. Patrol</td>
                            <td>Sudah Menikah</td>
                        </tr>

                         <tr>
                            <td>4</td>
                            <td>Mia Garmianti</td>
                            <td>XI Multimedia</td>
                            <td>123456789</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>10-11-1997</td>
                            <td>Islam</td>
                            <td>Jln. Patrol</td>
                            <td>Sudah Menikah</td>
                        </tr>

                         <tr>
                            <td>5</td>
                            <td>Essa Amalia</td>
                            <td>XII Rekayasa Perangkat Lunak</td>
                            <td>123456789</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>10-11-1997</td>
                            <td>Islam</td>
                            <td>Jln. Patrol</td>
                            <td>Sudah Menikah</td>
                        </tr>

                         <tr>
                            <td>6</td>
                            <td>Dewi Astri Indriani</td>
                            <td>XII Multimedia</td>
                            <td>123456789</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>10-11-1997</td>
                            <td>Islam</td>
                            <td>Jln. Patrol</td>
                            <td>Sudah Menikah</td>
                        </tr>


                       

                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


  
@endsection
