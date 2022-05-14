{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <body style="background-image:linear-gradient(to right, #4682B4, #00FFFF, #00FA9A);">
    <Category>Document</Category>
</head>
<body> --}}
@extends('layouts.layout')
@section('content')
<div style="padding-top: 20px"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header text-center">{{ __('UPDATE ITEM') }}</div>

                <div class="card-body">

                    <form action="{{route('updateBook', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <label for="Category" class="form-label">Name Of Item</label>
                            <input name="Category" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->Category}}" placeholder="Input Category Of Item">
                            @error('Category')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Name" class="form-label">Name Of Item</label>
                            <input name="Name" type="text" class="form-control" id="formGroupExampleInput" value="{{$book->Name}}" placeholder="Input Name Of Item">
                            @error('Name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Price" class="form-label">Price Of Item</label>
                            <label>(Rp)</label>
                            <input name="Price" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$book->Price}}" placeholder="Input Price Of Item">
                            @error('Price')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Quantity" class="form-label">Quantity Release</label>
                            <input name="Quantity" type="numeric" class="form-control" id="formGroupExampleInput" value="{{$book->Quantity}}" placeholder="Input Quantity Of Item">
                            @error('Quantity')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Image" class="form-label">Iamge Item</label>
                            <input name="Image" type="file" class="form-control" id="formGroupExampleInput" value="{{$book->Image}}" placeholder="Input Image Of Item">
                            @error('Image')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
