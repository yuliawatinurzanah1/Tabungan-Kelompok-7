@extends('layouts.admin-master')

@section('judul')
    Edit Guru
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

            	
                <div class="card-body">
                    <h4 class="header-title">Edit Guru</h4>
                   

                    <form action="{{ url('admin/update/'.$teacher->tcr_id) }}" method="post">
                        @csrf
                        <div class="row">


                        	 <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nik</label>
                                    <input value="{{ $teacher->tcr_nik }}" type="number" id="simpleinput" name="nik" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama</label>
                                    <input value="{{ $teacher->usr_name }}" type="text" id="simpleinput" name="teacher_name" class="form-control" required>
                                </div>
                            </div>

                       			<div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Kelas</label>
                                
                                        <select type="text" id="simpleinput" name="grade" class="form-control" required>
                                            <option value="">Pilih---</option>
                                            @foreach($classes as $data)
                                            <option value="{{$data->class_id}}">{{$data->grade_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                        

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Jurusan</label>
                                
                                        <select type="text" id="simpleinput" name="grade" class="form-control" required>
                                            <option value="">Pilih---</option>
                                            @foreach($classes as $data)
                                            <option value="{{$data->major_id}}">{{$data->major_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                             <div class="col-lg-12">
								<div class="form-group mb-3">
									<label for="simpleinput">Nomor Kelas </label>
									<input type="number" id="simpleinput" name="stu_class_id" class="form-control" placeholder="Nomor Kelas" required>
								</div>
							</div>

                             <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Status Pernikahan </label>
                                    <input value="{{ $teacher->tcr_marital_status }}" type="text" id="simpleinput" name="marital_status" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Email </label>
                                    <input value="{{ $teacher->usr_email}}"  type="email" id="simpleinput" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nomor telepon </label>
                                    <input value="{{ $teacher->usr_phone }}"  type="number" id="simpleinput" name="nomor_telepon" class="form-control" required>
                                </div>
                            </div>

                       		 <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Password </label>
                                    <input type="text" id="simpleinput" name="usr_passord" class="form-control"  placeholder="Password"  required>
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
