{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body> --}}

@extends('layouts.layout')
@section('content')

<div style="padding-top: 20px"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center">{{ __('INPUT NEW ITEM') }} </div>
                        <div class="card-body">
                            <form action="{{ route('createBook') }}" method="POST" enctype="multipart/form-data">

                                @csrf
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Name of Item</label>
                                    <input name="Name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Name of Item">
                                    @error('Name')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Price" class="form-label">Price of Item</label>
                                    <input name="Price" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Price of Item">
                                    @error('Price')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Quantity" class="form-label">Quantity of Item</label>
                                    <input name="Quantity" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Quantity of Item">
                                    @error('Quantity')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Image" class="form-label">Image of Book</label>
                                    <input name="Image" type="file" class="form-control" id="formGroupExampleInput" placeholder="Input Image Of Book">
                                    @error('Image')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                  </div>
                                  <div class="mb-3">
                                    <label for="Category" class="form-label">Category of Item</label>
                                    <div class="" style="">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1" name="category[]">
                                            <label class="form-check-label" for="inlineCheckbox1">Books</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2" name="category[]">
                                            <label class="form-check-label" for="inlineCheckbox2">Clothing</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3" name="category[]">
                                            <label class="form-check-label" for="inlineCheckbox3">Electronics</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="4" name="category[]">
                                            <label class="form-check-label" for="inlineCheckbox3">Food</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="5" name="category[]">
                                            <label class="form-check-label" for="inlineCheckbox3">Furniture</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="6" name="category[]">
                                            <label class="form-check-label" for="inlineCheckbox3">Others</label>
                                          </div>
                                        @error('category')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Insert</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection

