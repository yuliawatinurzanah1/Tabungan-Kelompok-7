@extends('layouts.admin-master')

@section('judul')
    Edit kelas
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
        @if($message = Session::get('message')) 
                    <div class="alert alert-warning">
                        <p> {{ $message }} </p>
                    </div>
        @endif
            <div class="card">

                
                <div class="card-body">
                    <h4 class="header-title">Edit Kelas</h4>
                   

                    <form action="{{ url('admin/update-class/'.$classes->class_id) }}" method="post">
                        @csrf
                        <div class="row">

                             <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Kelas</label>
                                    <select type="number" id="simpleinput" name="grade" class="form-control" required>
                                        <option value="{{$classes->grade_id}}">{{$classes->grade_name}}</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                    </select>                                   
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Jurusan</label>
                                    <select type="number" id="simpleinput" name="major" class="form-control" required>
                                        <option value="{{$classes->major_id}}">{{$classes->major_name}}</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Multi Media">Multi Media</option>

                                    </select>                                   
                                </div>
                            </div>

                            <div class="col-lg-12">
								<div class="form-group mb-3">
									<label for="simpleinput">Nomor Kelas </label>
									<select type="number" id="simpleinput" name="class_number" class="form-control" placeholder="Nomor Kelas" required>
								    <option value="{{$classes->class_id}}">{{$classes->class_number}}</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>    
                                   </select>                                     
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
