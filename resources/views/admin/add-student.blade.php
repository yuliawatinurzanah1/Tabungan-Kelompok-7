@extends('layouts.admin-master')

@section('judul')
    Tambah Siswa
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

            	<a href="/students/Tambah" class="btn btn-success"> + Tambah Siswa</a>
            	
                <div class="card-body">
                    <h4 class="header-title">Tambah Siswa</h4>
                   

                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                        <tr>
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
                        	@foreach($students as $s)
                        <tr>
                            <td>{{ $i->stu_id }}</td>
                            <td>{{ $i->stu_nis }}</td>
                            <td>{{ $i->stu_school_year }}</td>
                       
                            <td>
                            	<a href="/students/edit/{{ $s->stu_id }}">Edit</a>
                            	<a href="/students/hapus/{{ $s->stu_id }}">Hapus</a> 

                            </td>
                        </tr>
                       
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->



@endsection
