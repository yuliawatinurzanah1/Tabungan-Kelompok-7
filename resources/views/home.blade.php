@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <br> <br>
                    <table>
                    	<tr>
                    		<td>Nama</td> 
                    		<td>:</td> 
                    		<td>{{ Auth()->user()->usr_name }}</td> 
                    	</tr>

                    	<tr>
                    		<td>Roles</td> 
                    		<td>:</td> 
                    		<td> Student </td> 
                    	</tr>
                    </table>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <br> <br>
                    <table>
                    	<tr>
                    		<td>Nama</td> 
                    		<td>:</td> 
                    		<td>{{ Auth()->user()->usr_name }}</td> 
                    	</tr>

                    	<tr>
                    		<td>Roles</td> 
                    		<td>:</td> 
                    		<td> Student </td> 
                    	</tr>
                    </table>
                </div>

            </div>
            @elseif(Auth()->user()->hasRole('teacher'))
        </div>
    </div>
</div>
@endsection
