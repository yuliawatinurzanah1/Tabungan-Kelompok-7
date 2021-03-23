@extends('layouts.admin-master')

@section('judul')
    Tambah Kelas
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">

            	
                <div class="card-body">
                    <h4 class="header-title">Tambah Kelas</h4>
                   

                    <form action="" method="post">
                        @csrf
                        <div class="row">
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
			<label for="simpleinput">Jurusan</label>
				<select type="text" id="simpleinput" name="major" class="form-control" required>
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
