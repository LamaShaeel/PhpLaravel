@extends('layouts.app')
@section('content')

    <div class="container">
        @foreach($data as $row)
            <div class="card mt-3  border border-secondary shadow-0 mb-3">
                <div class="card-body" dir="ltr">
                    <div class="row mt-3">
                        <div class="col-sm-3">
                            <img class="img-thumbnail" src="/images/{{$row->image}}">
                        </div>
                        <div class="col-sm-9 ">
                            <h1 class="alert alert-secondary">{{$row->itemName}}</h1>
                            <h4 class="pt-1">Price: {{$row->price}}</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <a href="{{route('addToCart',['id'=>$row->id])}}" class="btn btn-primary">add to cart</a>

                        </div>

                    </div>

                </div>
            </div>


        @endforeach
    </div>
@endsection
