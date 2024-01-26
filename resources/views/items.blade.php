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




{{--    <div class="card">--}}
{{--        <div class="card-body">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-sm-4">--}}
{{--                    <form action="{{route('saveitems')}}" method="post">--}}
{{--                        @csrf--}}
{{--                        <label for="itemName"> ادخل اسم العنصر </label>--}}
{{--                        <input type="text" class="form-control form-control-sm" name="itemName">--}}
{{--                        <label for="price"> ادخل سعر العنصر </label>--}}
{{--                        <input type="text" class="form-control form-control-sm" name="price">--}}
{{--                        <label for="quantity"> ادخل عدد العنصر </label>--}}
{{--                        <input type="text" class="form-control form-control-sm" name="quantity">--}}
{{--                        <label for="color"> ادخل لون العنصر </label>--}}
{{--                        <input type="text" class="form-control form-control-sm" name="color" >--}}
{{--                        <label for="itemGroupId"> ادخل رقم محموعة العنصر </label>--}}
{{--                        <input type="text" class="form-control form-control-sm" name="itemGroupId">--}}
{{--                        <div class="row mt-3 justify-content-center">--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <button class="btn btn-primary pt-2" type="submit" onclick="showMessage()"> حفظ </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


{{--        <div class="card">--}}
{{--           <div class="card-body">--}}
{{--               <div class="row">--}}
{{--                   <div class="col">--}}
{{--                    <table class="table table-striped text-center">--}}
{{--                   <thead>--}}
{{--                   <tr>--}}
{{--                       <th> رقم العنصر </th>--}}
{{--                       <th> اسم العنصر </th>--}}
{{--                       <th> سعر العنصر </th>--}}
{{--                       <th> عدد العنصر </th>--}}
{{--                       <th> لون العنصر  </th>--}}
{{--                       <th> اسم مجموعة العنصر  </th>--}}
{{--                       <th colspan="2">  اجراء </th>--}}
{{--                   </tr>--}}
{{--                   </thead>--}}
{{--                   <tbody>--}}
{{--                   @foreach($items as $row)--}}
{{--                   <tr>--}}
{{--                       <td>{{$row->id}}</td>--}}
{{--                       <td>{{$row->itemName}}</td>--}}
{{--                       <td>{{$row->price}}</td>--}}
{{--                       <td>{{$row->quantity}}</td>--}}
{{--                       <td>{{$row->color}}</td>--}}
{{--                       <td>{{$row->itemGroupId}}</td>--}}

{{--                       <td> <a href="{{route('deleteItem2',["id"=>$row->id])}}" <i class="fa-solid fa-trash"> </i> </a> </td>--}}
{{--                       <td> <a href="{{route('editItems',["id"=>$row->id])}}" <i class="fa-regular fa-pen-to-square"> </i> </a> </td>--}}

{{--                   </tr>--}}
{{--                   @endforeach--}}
{{--                   </tbody>--}}
{{--               </table>--}}
{{--                   </div>--}}
{{--               </div>--}}
{{--           </div>--}}
{{--        </div>--}}

    </div>

@endsection
