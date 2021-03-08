@extends('layouts.admin-master')

@section('judul')
    Tambah  Kelas
@endsection

@section('content')
<form action="" method="POST">
	@csrf
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


</div>
	  	<div class="col-lg-12">
                               	<div class="form-group mb-3">
                               		<input type="submit" value="Simpan" class="btn btn-primary">
                               	</div>
                           	</div>
</form>
@endsection
