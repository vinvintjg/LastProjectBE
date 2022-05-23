{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <body style="background-image: linear-gradient(to right, #4682B4, #00FFFF, #00FA9A);">
    <title>Document</title>
</head>
<body> --}}
    @extends('layouts.layout')
    @section('content')
        <div style="padding-top: 20px"></div>

        @if ($books->count() > 0)

        <div class="container">
            <div class="row justify-content-center text-center ">
                <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">{{ __('LIST ITEM') }}</div>
                        <div class="card-body">
                            <div class="text-center">
                                <form action="{{route('search2')}}" method="GET">
                                    <div class="input-group">
                                        <form class="form-inline" action="">
                                            <label for="category_filter" class="">Filter</label>
                                            <select class="form-control me-5" id="category_filter" name="category"><option value="">Select Category</option></select>
                                            <input type="text" class="form-control" name="cari" placeholder="Search" value=""/>
                                            <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            <br>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Cart</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($books as $book)
                                        <tr>
                                        <th scope="row">{{ $book->id }}</th>
                                        <td>{{ $book->Name }}</td>
                                        <td>Rp. {{ $book->Price }}</td>
                                        <td>{{ $book->Quantity }}</td>
                                        <td>
                                            {{-- <img src="{{asset('storage/images/'.$book->image)}}" alt="Error" style="height: 50px" > --}}
                                            <img src="{{asset('storage/Image/'.$book->Image)}}" alt="Error" style="height: 50px" >
                                        </td>
                                        <td>
                                            @foreach ($book->category as $category)
                                              @if ($loop->last)
                                                  {{$category->category_name}}
                                              @else
                                                  {{$category->category_name}},
                                              @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="input-group float-end me-4" style="width:120px;">
                                                <button class=" input-group-text decrement-btn ">-</button>
                                                <input type="text" name="Quantity1" class="form-control qty-input text-center" value="1" >
                                                <button class="input-group-text increment-btn">+</button>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary addTocartBtn">Add to Cart<i class="fa fa-shopping-cart"></i> </button>
                                        </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @else
        <div class="container">
            <div class="row justify-content-center text-center ">
                <div class="col-md-9">
                <div class="card shadow">
                    <div class="card-header">{{ __('LIST ITEM') }}</div>
                        <div class="card-body">
                            <div class="text-center">
                                <form action="{{route('search1')}}" method="GET">
                                    <div class="input-group">
                                        <form class="form-inline" action="">
                                        <label for="category_filter" class="me-5">Filter By Category</label>
                                        <select class="form-control me-5" id="category_filter" name="category">
                                            <option value="">Select Category</option>
                                        </select>
                                        <input type="text" class="form-control" name="cari" placeholder="Search" value=""/>
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            <br>
                            </div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Invoice</th>
                                </tr>
                                </thead>
                            </table>
                                <h6>No Item Available</h6>
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

    @endsection
