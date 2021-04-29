@extends('layouts.admin-master')

@section('judul')
    Tambah Guru
@endsection

@section('content')
    <div class="row">

                  @if($message = Session::get('message')) 
                    <div class="alert alert-warning">
                        <p> {{ $message }} </p>
                    </div>
                  @endif
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
                                    <input type="number" id="simpleinput" name="nik" class="form-control" placeholder="Nik" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama </label>
                                    <input type="text" id="simpleinput" name="teacher_name" class="form-control" placeholder="Nama" required>
                                </div>
                            </div>

                       		<div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Kelas</label>
                                        <select type="text" id="simpleinput" name="grade" class="form-control" placeholder="Kelas" required>
                                             <option value="">Pilih kelas</option>
									      @foreach($classes as $data)
									      <option value="{{$data->class_id}}">{{$data->grade_name.' '.$data->major_name.' '.$data->class_number}}</option>
									      @endforeach
                                        </select>
                                </div>
                            </div>


                              <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Status Pernikahan </label>    
                                    <select type="text" id="simpleinput" name="marital_status" class="form-control" placeholder="Status Pernikahan" required>
                                            <option value="">Pilih Status</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Email </label>
                                    <input type="email" id="simpleinput" name="email" class="form-control" placeholder="email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nomor telephone </label>
                                    <input type="number" id="simpleinput" name="nomor_telepon" class="form-control"  placeholder="Nomor telephone"  required>
                                </div>
                            </div>     

                       		<div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Jenis Kelamin</label>
                                        <select type="text" id="simpleinput" name="gender" class="form-control" placeholder="Jenis Kelamin" required>
                                         <option value="">Pilih Jenis Kelamin</option>   
                                         <option value="Laki-laki">Laki Laki</option>
                                         <option value="Perempuan">Perempuan</option>
                                        </select>
                                </div>   
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Kota Lahir</label>
                                    <input type="teks" id="simpleinput" name="place_of_birth" class="form-control"  placeholder="Kota Lahir"  required>
                                </div>
                             </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Tanggal Lahir</label>
                                    <input type="date" id="simpleinput" name="date_of_birth" class="form-control"  placeholder="Tanggal Lahir"  required>
                                </div>
                             </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Agama</label>
                                    <select type="teks" id="simpleinput" name="religion" class="form-control"  placeholder="Agama"  required>
                                    <option value="">Pilih Agama</option>
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
                                    <input type="teks" id="simpleinput" name="addres" class="form-control"  placeholder="Alamat"  required>
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
