@extends('layouts.student-master')

@section('judul')
    Tambah Pengambilan Tabungan
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
                                    
									
									<input type="text" id="simpleinput" name="student_name" value="{{Auth()->user()->usr_name}}" class="form-control" readonly>		
											
										
                                </div>
                            </div>

                        	
                        
                           
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nominal</label>
                                    <input type="text" id="simpleinput" name="usa_amount" class="form-control" required>
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Tanggal Pengambilan</label>
                                    <input type="date" id="simpleinput" name="usa_date" class="form-control" required>
                                </div>
                            </div>

                             <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Keterangan Pengambilan</label>
                                    <input type="text" id="simpleinput" name="usa_information" class="form-control" required>
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