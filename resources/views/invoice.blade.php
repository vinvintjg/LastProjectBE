@extends('layouts.layout')
@section('content')

<div style="padding-top: 20px"></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow "style="background-image:linear-gradient(to right, #FFFFFF,#F5F5F5, #EEEEEE, #E1E1E1);">
                <div class="card-header text-center">{{ __('INVOICE') }}
                    <div>
                        ID/<?php echo date('d/m');?>/0{{$book->id}}/0{{ Auth::user()->id }}/<?php echo strtoupper($book->Name);?>
                    </div>
                </div>
                <div class="card-body text-center ">
                    <form action="{{route('updateBook', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <table class="table " style="">
                            <tbody>
                                <tr>
                                    <td scope="row">Name</td>
                                    <td>{{ Auth::user()->name}}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Phone Number</td>
                                    <td>{{ Auth::user()->notlp}}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Addres</td>
                                    <td>{{ Auth::user()->addres}}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Postal Code</td>
                                    <td>{{ Auth::user()->poscode}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="card-header text-center">{{ __('INFORMATION') }}</div>
                <div class="card-body text-center">
                    <form action="{{route('updateBook', ['id' => $book->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                            <div class="text-center">
                                <img src="{{asset('storage/Image/'.$book->Image)}}" alt="error" class="mb-3 shadow" style="height: 300px" >
                            </div>
                        </div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td scope="row">Item</td>
                                    <td>{{ $book->Name }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Price</td>
                                    <td>{{ $book->Price }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Quantity</td>
                                    <td>{{ Auth::user()->qty }}</td>
                                </tr>
                                <tr>
                                    <td scope="row">Category</td>
                                    <td>
                                        @foreach ($book->category as $category)
                                        @if ($loop->last)
                                            {{$category->category_name}}
                                        @else
                                            {{$category->category_name}},
                                        @endif
                                      @endforeach</label>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Total Price</th>
                                    <th>
                                        <?php echo Auth::user()->qty * $book->Price;?>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        <p class="card-text"><small class="text-muted"><a href="{{route('ViewMyBooks')}}">CLICK ME TO RETURN</a></small></p>
                    </form>
                    {{-- <a href="{{route('getDataLeaderById', ['id'=>Auth::user()->id])}}"><button type="submit" class="btn btn-light shadow col-md-4">Edit</button></a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
