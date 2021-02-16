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
