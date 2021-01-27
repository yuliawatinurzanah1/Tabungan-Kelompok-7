@extends('layouts.admin-master')

@section('judul')
    List pemakaian tabungan
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
                            <th>Tahun Ajaran</th>
                            <th>Jumlah Pemakaian</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>315913</td>
                            <td>Yuliawati Nur Zanah</td>
                            <td>2019/2020</td>
                            <td>Pembelian Buku</td>
                            <td>11-10-2020</td>
                            <td>
                                <a  href="{{URL::to('/walikelas/list-pemakaian-tabungan/detail')}}" class= "btn btn-primary btn-sm">Detail</a>
                            </td>

                        </tr>


                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
   
@endsection
