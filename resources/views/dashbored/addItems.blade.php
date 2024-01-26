@extends('layouts.dashbored')
@section('content')


    <div class="container" dir="rtl">
        <div class="row text-center mt-4">
            <div class="col-sm-12">
                <h1 class="alert alert-secondary text-center"> add item </h1>
                <div class="card border-secondary shadow-0 mb-3">
                    <div class="card-body">
                        <form action="{{route('saveitems')}}" method="post">
                            @csrf
                            <label for="itemName"> ادخل اسم العنصر </label>
                            <input type="text" class="form-control form-control-sm" name="itemName">
                            <label for="price"> ادخل سعر العنصر </label>
                            <input type="text" class="form-control form-control-sm" name="price">
                            <label for="quantity"> ادخل عدد العنصر </label>
                            <input type="text" class="form-control form-control-sm" name="quantity">
                            <label for="color"> ادخل لون العنصر </label>
                            <input type="text" class="form-control form-control-sm" name="color" >
                            <label for="itemGroupId"> ادخل رقم مجموعة العنصر </label>
                            <input type="text" class="form-control form-control-sm" name="itemGroupId">
                            <label for="image"> ادخل صورة العنصر </label>
                            <input type="text" class="form-control form-control-sm" name="image">
                            <div class="row mt-3 justify-content-center">
                                <div class="col-sm-4">
                                    <button class="btn btn-primary pt-2" type="submit" onclick="showMessage()"> حفظ </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center mt-4">
            <div class="col">
                <div class="card border-secondary shadow-0 mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <table class="table table-striped text-center table-hover">
                                    <thead>
                                    <tr>
                                        <th> رقم العنصر </th>
                                        <th> اسم العنصر </th>
                                        <th> سعر العنصر </th>
                                        <th> عدد العنصر </th>
                                        <th> لون العنصر  </th>
                                        <th> اسم مجموعة العنصر  </th>
                                        <th> اسم صورة العنصر  </th>
                                        <th colspan="2">  اجراء </th>
                                    </tr>
                                    </thead>
                                    <tbody  class="table-group-divider">
                                    @foreach($data as $row)
                                        <tr>
                                            <td>{{$row->id}}</td>
                                            <td>{{$row->itemName}}</td>
                                            <td>{{$row->price}}</td>
                                            <td>{{$row->quantity}}</td>
                                            <td>{{$row->color}}</td>
                                            <td>{{$row->itemGroupId}}</td>
                                            <td>{{$row->image}}</td>
                                            <td> <a href="{{route('deleteItem2',["id"=>$row->id])}}" <i class="fa-solid fa-trash"> </i> </a> </td>
                                            <td> <a href="{{route('editItems',["id"=>$row->id])}}" <i class="fa-regular fa-pen-to-square"> </i> </a> </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>

    </div>



@endsection
