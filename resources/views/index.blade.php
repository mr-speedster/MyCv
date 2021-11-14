@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:100px">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <h1>lets create your Curriculum Vitae 😎</h1>
            <a href="{{ route('home')}}" class="btn btn-primary btn-lg">Create MyCv</a>
        </div>
    </div>
</div>
@endsection
