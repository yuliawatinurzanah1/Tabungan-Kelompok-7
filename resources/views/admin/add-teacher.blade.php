@extends('layouts.admin-master')

@section('judul')
    Tambah Guru
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

            	
                <div class="card-body">
                    <h4 class="header-title">Tambah Guru</h4>
                   

                    <form action="" method="post">
                        @csrf
                        <div class="row">

                        	
                        	 <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nik </label>
                                    <input type="number" id="simpleinput" name="nik" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama </label>
                                    <input type="text" id="simpleinput" name="teacher_name" class="form-control" required>
                                </div>
                            </div>

                       		<div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Kelas</label>
                                        <select type="text" id="simpleinput" name="grade" class="form-control" required>
                                            <option value="">Pilih---</option>
                                            @foreach($classes as $data)
                                            <option value="{{$data->class_id}}">{{$data->class_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                              <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Status Pernikahan </label>
                                    <input type="text" id="simpleinput" name="marital_status" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Email </label>
                                    <input type="email" id="simpleinput" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nomor telepon </label>
                                    <input type="number" id="simpleinput" name="nomor_telepon" class="form-control" required>
                                </div>
                            </div>

                       		

                           	<div class="col-lg-12">
                               	<div class="form-group mb-3">
                               		<input type="submit" value="Simpan" class="btn btn-primary">
                               	</div>
                           	</div>

                       </div> <!-- end card-body -->
                    </form>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->



@endsection
