@extends('layouts.admin')

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


                    @if (! Auth::guard('destination')->user()->email)
                        <div class="alert alert-danger" role="alert">
                            vous ne pouvez pas 
                        </div>
                    @endif

                    @if (Auth::guard('destination')->user()->email)
                        <div class="alert alert-success" role="alert">
                           Bienvenue {{Auth::guard('destination')->user()->email}} dans votre espace personnel <br/>
                           votre mot de passe est {{Auth::guard('destination')->user()->password}}
                        </div>
                    @endif

                    {{-- You are logged in! {{ Auth::guard('destination')->user()->email }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
