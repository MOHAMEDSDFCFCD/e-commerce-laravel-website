@extends('layouts.app')
@section('title','Thank You For Shopping')
@section('content')
<div class="py-3 pyt-md-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                @if (session()->has('message'))
                <div class="alert alert-danger">
                   {{ session('message') }}
                </div>
               @endif
                <div class="p-4 shadow bg-white">
                    <h2>Your logo</h2>
                    <h4>Thank You For Shopping with MOD Ecommerce</h4>
                    <a href="{{url('/collections')}}" class="btn btn-primary">Shop now</a>
                    
                </div>
             

            </div>
        </div>
    </div>

</div>
@endsection