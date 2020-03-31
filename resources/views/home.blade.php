@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if (! Auth::user()->fichiers)
                        <div class="alert alert-danger" role="alert">
                            vous ne pouvez pas 
                        </div>
                    @endif

                    @if (Auth::user()->fichiers)
                        <div class="alert alert-success" role="alert">
                            vous pouvez
                        </div>
                    @endif

                    {{-- You are logged in! {{ Auth::user()->fichiers }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
