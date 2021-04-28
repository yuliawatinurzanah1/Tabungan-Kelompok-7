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
                                            <option value="{{$teacher->class_id}}">{{$teacher->grade_name. '' .$teacher->major_name. ' ' .$teacher->class_number}}</option>
                                            @foreach($classes as $data)
                                            <option value="{{$data->class_id}}">{{$data->grade_name. ' ' .$data->major_name. ' ' .$data->class_number}}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                             <div class="col-lg-12">   
                             <div class="form-group mb-3">
                                    <label for="simpleinput">Status Perkawinan</label>
                                <select type="text" id="simpleinput" name="marital_status" class="form-control" placeholder="Status Pernikahan" required>
                                        <option value="{{$teacher->tcr_marital_status}}">{{$teacher->tcr_marital_status}}</option>
                                           <option value="Sudah Menikah">Sudah Menikah</option>
                                           <option value="Belum Menikah">Belum Menikah</option>
                                           
                                </select>
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
                                    <label for="simpleinput">Kota Lahir</label>
                                    <input type="teks" value="{{$teacher->usr_place_of_birth}}" id="simpleinput" name="place_of_birth" class="form-control"  placeholder="Kota Lahir"  required>
                                </div>
                             </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Tanggal Lahir</label>
                                    <input type="date" value="{{$teacher->usr_date_of_birth}}" id="simpleinput" name="date_of_birth" class="form-control"  placeholder="Tanggal Lahir"  required>
                                </div>
                             </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Agama</label>
                                    <select type="teks" id="simpleinput" name="religion" class="form-control"  placeholder="Agama"  required>
                                    <option value="{{$teacher->tcr_usr_id}}">{{$teacher->usr_religion}}</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    </select>    
                                </div>
                             </div>


                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Alamat</label>
                                    <input type="teks" value="{{$teacher->usr_addres}}" name="addres" class="form-control"  placeholder="Alamat"  required>
                                </div>
                             </div>

                             <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Password </label>
                                    <input type="password" id="simpleinput" name="usr_passord" class="form-control"  placeholder="Password"  required>
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
