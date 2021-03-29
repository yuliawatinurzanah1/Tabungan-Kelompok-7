@extends('layouts.walikelas-master')

@section('judul')
    Edit Tabungan
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

            	
                <div class="card-body">
                    <h4 class="header-title">Edit Tabungan</h4>
   
                    <form action="{{ url('walikelas/update-tabungan/'.$saving->sav_id) }}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama</label>
                                    <input value="{{ $saving->usr_name }}" type="text" id="simpleinput" name="student_name" class="form-control" required>
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
                                    <label for="simpleinput">Nominal</label>
                                    <input value="{{ $saving->sav_amount }}"  type="text" id="simpleinput" name="sav_amount" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Tanggal Menabung </label>
                                    <input value="{{ $saving->sav_date }}"  type="date" id="simpleinput" name="sav_date" class="form-control" required>
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
