@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-dark" style="display:inline-block">Your Career Summery</h3>
                    <div class="text-right" style="display:inline-block;float:right">
                    </div>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <h6>Your Carrer Object</h6>
                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                <td><p class="lead">{{ $d->career_object}}</p></td>  
                            </tr>
                           
                            <tr>
                                <td>
                                    <a href="{{url('ca_update/'.base64_encode($d->id))}}" class="btn btn-warning btn-block">Update</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="{{url('pdf_display')}}" class="btn btn-primary btn-block">Preview Your cv</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
