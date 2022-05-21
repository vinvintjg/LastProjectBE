@extends('layouts.app')

{{-- @extends('layouts.app') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header">{{ __('HOME') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    {{ __('You are logged in!') }}
                        @if (Auth::user()->role == 'admin')
                        <a href="{{ route('getBooks')}}">Click Here</a>
                        @else
                        <a href="{{ route('ViewMyBooks')}}">Click Here</a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="d-flex justify-content-center" style="padding-top: 70px">
        <img src="asset/logobumi.png" height="400" class="spin" />
        <a href="http://www.freepik.com"></a>
    </div>

@endsection


<head>
    <style>
        @keyframes spinning {

          from { transform: rotate(0deg) }
          to { transform: rotate(360deg) }
        }
        .spin {
        animation-name: spinning;
        animation-duration: 15s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-out;
        }
      </style>
</head>
