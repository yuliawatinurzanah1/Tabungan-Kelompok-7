@extends('layouts.admin-master')

@section('judul')
    Edit kelas
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
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
                                        <option value="">Pilih---</option>
                                            @foreach($grade as $data)
                                            <option value="{{$data->grade_id}}">{{$data->grade_name}}</option>
                                            @endforeach    
                                    </select>                                   
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Jurusan</label>
                                    <select type="number" id="simpleinput" name="major" class="form-control" required>
                                        <option value="">Pilih---</option>
                                            @foreach($major as $data)
                                            <option value="{{$data->major_id}}">{{$data->major_name}}</option>
                                            @endforeach    
                                    </select>                                   
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama Kelas</label>
                                        <select type="number" id="simpleinput" name="class_number" class="form-control" required>
                                            <option value="">Pilih---</option>
                                            @foreach($class as $data)
                                            <option value="{{$data->class_number}}">{{$data->class_number}}</option>
                                            @endforeach
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
