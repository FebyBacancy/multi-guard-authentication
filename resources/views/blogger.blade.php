@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body" style="text-align: center">
                    Hi blogger {{auth::user()->name}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection