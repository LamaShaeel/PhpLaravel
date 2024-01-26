@extends('layouts.app')
@section('content')
    <?php
        $c=0;
        ?>
<div class="container">
    <h1 class="alert alert-secondary text-center"> ! Welcome To My Website</h1>
    @while($c <= $count -1)
    <div class="row text-center justify-content-center">
        <div class="col-sm-4 text-center">
            <a href="{{route('showProduct',['id'=>$data[$c]->id])}}">
            <div class="card border border-secondary shadow-0 mb-3">
                <div class="card-body">
                    <h3>{{$data[$c]->itemGroupName}}</h3>
                    <h3><i class="bi bi-collection"></i></h3>
                </div>
            </div>
            </a>
        </div>
            <?php $c++?>
        <div class="col-sm-4 text-center">
            <a href="{{route('showProduct',['id'=>$data[$c]->id])}}">
                <div class="card border border-secondary shadow-0 mb-3">
                <div class="card-body">
                    <h3>{{$data[$c]->itemGroupName}}</h3>
                    <h3><i class="bi bi-collection"></i></h3>

                </div>
            </div>
            </a>
        </div>
        <?php $c++?>
    </div>

    @endwhile


</div>

@endsection

