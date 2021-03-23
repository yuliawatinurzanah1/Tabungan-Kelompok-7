@extends('layouts.admin-master')

@section('judul')
    Tambah Siswa
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">

            	
                <div class="card-body">
                    <h4 class="header-title">Tambah Siswa</h4>
                   

                    <form action="" method="post">
                        @csrf
                        <div class="row">

                        	 <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nis </label>
                                    <input type="number" id="simpleinput" name="nis" class="form-control" placeholder="Nis" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama </label>
                                    <input type="text" id="simpleinput" name="student_name" class="form-control" placeholder="Nama" required>
                                </div>
                            </div>

                       		

                            <div class="col-lg-12">
								<div class="form-group mb-3">
									<label for="simpleinput">Kelas</label>
									<select type="text" id="simpleinput" name="grade" class="form-control" placeholder="Kelas" required>
									      <option value="">Pilih kelas---</option>
									      @foreach($grades as $data)
									      <option value="{{$data->grade_id}}">{{$data->grade_name}}</option>
									      @endforeach
									</select>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group mb-3">
									<label for="simpleinput">Jurusan</label>
										<select type="text" id="simpleinput" name="major" class="form-control" placeholder="Jurusan" required>
											<option value="">Pilih Jurusan---</option>
											@foreach($majors as $data)
											<option value="{{$data->major_id}}">{{$data->major_name}}</option>
											@endforeach
										</select>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group mb-3">
									<label for="simpleinput">Nomor Kelas </label>
									<input type="text" id="simpleinput" name="class_number" class="form-control" placeholder="Nomor Kelas" required>
								</div>
							</div>

                           
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Tahun Ajaran</label>
                                    <input type="text" id="simpleinput" name="tahun_ajaran" class="form-control" placeholder="Tahun Ajaran" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Email </label>
                                    <input type="email" id="simpleinput" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nomor telephone </label>
                                    <input type="number" id="simpleinput" name="nomor_telepon" class="form-control" placeholder="Nomor Telephone" required>
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
