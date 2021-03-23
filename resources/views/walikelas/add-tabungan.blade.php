@extends('layouts.walikelas-master')

@section('judul')
    Tambah Tabungan
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">

            	
                <div class="card-body">
                   
                   

                    <form action="" method="post">
                        @csrf
                        <div class="row">

                        	  <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama</label>
                                    <select type="text" id="simpleinput" name="usr_name" class="form-control" required>
                                  			@foreach($students as $data)
											<option value="{{$data->stu_id}}">{{$data->usr_name}}</option>
											@endforeach
									</select>
                                </div>
                            </div>

                        	
                        	<div class="col-lg-12">
								<div class="form-group mb-3">
									<label for="simpleinput">Kelas</label>
										<select type="text" id="simpleinput" name="grade" class="form-control" required>
											<option value="">Pilih kelas---</option>
											@foreach($grades as $data)
											<option value="{{$data->grade_id}}">{{$data->grade_name}}</option>
											@endforeach
										</select>
								</div>
							</div>
                           
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nominal</label>
                                    <input type="text" id="simpleinput" name="sav_amount" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Tanggal Menabung</label>
                                    <input type="date" id="simpleinput" name="sav_date" class="form-control" required>
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
