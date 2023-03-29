@extends('layouts.settings')

@section('content')
<div class="content-header">
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-12">
            <h1 class="m-0">Account Settings</h1>
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="card-header">
        <div class="card-body">
            <div class="card-text">
                <p>Create new Account</p>
                <a href="/register" class="btn btn-outline-danger">Create Account</a>
            </div>
        </div>
    </div>
</div>
@endsection