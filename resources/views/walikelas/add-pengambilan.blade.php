@extends('layouts.walikelas-master')

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
                        <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama</label>
                                    <select type="text" id="simpleinput" name="stu_id" class="form-control" required>
                                            @foreach($students as $data)
                                            <option value="{{$data->stu_id}}">{{$data->usr_name}}</option>
                                            @endforeach
                                    </select>
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