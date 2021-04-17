@extends('layouts.student-master')

@section('judul')
    Saldo Tabungan
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h3 class="text-primary"> Saldo Tabungan </h3>
                    <hr>
                    <div class="table-responsive">
                       {{ $hasil }}

                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>


@endsection
