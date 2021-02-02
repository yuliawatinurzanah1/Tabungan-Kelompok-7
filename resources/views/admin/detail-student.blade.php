@extends('layouts.admin-master')

@section('judul')
    Detail Siswa
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
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jenis Kelamin</th>       
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>12345</td>
                            <td>Alika</td>
                            <td>X Rekayasa Perangkat</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>18-11-2002</td>
                            <td>Islam</td>
                            <td>Junti</td>

                        </tr>

                        <tr>
                            <td>2</td>
                            <td>12345</td>
                            <td>Hania</td>
                            <td>X Multimedia</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>18-11-2002</td>
                            <td>Islam</td>
                            <td>Junti</td>      
                        </tr>

                         <tr>
                            <td>3</td>
                            <td>12345</td>
                            <td>Amelia</td>
                            <td>XI Rekayasa Perangkat</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>18-11-2002</td>
                            <td>Islam</td>
                            <td>Junti</td>      
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>12345</td>
                            <td>Yuliawati</td>
                            <td>XI Multimedia</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>18-11-2002</td>
                            <td>Islam</td>
                            <td>Junti</td>      
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>12345</td>
                            <td>Tania</td>
                            <td>XI Rekayasa Perangkat</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>18-11-2002</td>
                            <td>Islam</td>
                            <td>Junti</td>      
                        </tr>


                        <tr>
                            <td>5</td>
                            <td>12345</td>
                            <td>Jeni</td>
                            <td>XII Multimedia</td>
                            <td>Perempuan</td>
                            <td>Bandung</td>
                            <td>18-11-2002</td>
                            <td>Islam</td>
                            <td>Junti</td>      
                        </tr>
              


                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


@endsection
