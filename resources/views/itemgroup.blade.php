@extends('layouts.app')
@section('content')
<?php
    $c=0;
?>
<div class="container" dir="ltr">
    <h1 class="alert alert-secondary text-center"> Groups Of Items</h1>
    <div class="row row-cols-4 row-cols-md-3 g-2 d-flex justify-content-center">
        <div class="col d-flex justify-content-center">
            @while($c < $count)
                <a href="{{route('showProduct',['id'=>$data[$c]->id])}}">
                    <div class="card border border-secondary shadow-0 mb-3">
                        <img src="/images/{{$data[$c]->image}}" width="150" height="250" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$data[$c]->itemGroupName}}</h5>
                        </div>
                    </div>
                </a>
        </div>
    <?php $c++ ?>
    @if($c < $count)
        <div class="col d-flex justify-content-center">
            <a href="{{route('showProduct',['id'=>$data[$c]->id])}}">
                <div class="card border border-secondary shadow-0 mb-3">
                    <img src="/images/{{$data[$c]->image}}" width="150" height="250" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$data[$c]->itemGroupName}} </h5>

                    </div>
                </div>
            </a>
        </div>
        <?php $c++ ?>
        @endif
    @endwhile

</div>
</div>


@endsection
