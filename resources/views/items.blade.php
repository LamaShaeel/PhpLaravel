@extends('layouts.app')
@section('content')
    <?php
    $c=0;
    ?>
    <div class="container" dir="ltr">
        <h1 class="alert alert-secondary text-center"> All Items</h1>
        <div class="row row-cols-3 row-cols-md-2 g-4">
            @while($c <= $count -1)
            <div class="col">
                <div class="card border border-secondary shadow-0 mb-3">
                    <img src="/images/{{$data[$c]->image}}" class="card-img-top " width="150" height="250"  alt="...">
                    <div class="card-body bg-gradient">
                        <h4 class="card-title ">{{$data[$c]->itemName}}</h4>
                        <p class="card-text"> Price : {{$data[$c]->price}} </p>
                        <p class="card-text"> Color : {{$data[$c]->color}} </p>
                        <div class=" d-flex justify-content-center">
                            <a href="{{route('addToCart',['id'=>$data[$c]->id])}}" class="btn btn-primary">add to cart</a>
                        </div>
                    </div>

                </div>
            </div>
                    <?php $c++ ?>
                <div class="col">
                    <div class="card border border-secondary shadow-0 mb-3">
                        <img src="/images/{{$data[$c]->image}}" class="card-img-top" width="150" height="250" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">{{$data[$c]->itemName}}</h4>
                            <p class="card-text"> Price : {{$data[$c]->price}} </p>
                            <p class="card-text"> Color : {{$data[$c]->color}} </p>
                            <div class=" d-flex justify-content-center">
                                <a href="{{route('addToCart',['id'=>$data[$c]->id])}}" class="btn btn-primary">add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php $c++ ?>
            @endwhile

        </div>



    </div>

@endsection
