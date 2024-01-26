@extends('layouts.dashbored')
@section('content')


    <div class="container" dir="rtl">
        <div class="row text-center mt-3">
            <div class="col-sm-12">
                <h1 class="alert alert-secondary text-center"> Add group of items </h1>
                <div class="card border border-secondary shadow-0 mb-3">
                    <div class="card-body">
                        <form action="{{route('saveGroupItems')}}" method="post">
                            @csrf
                        
                            <label for="itemGroupName">  <b>اسم المجموعة :</b></label>
                            <input type="text" name="itemGroupName" id="itemGroupName">
                            <label for="image">  <b>اسم صورة المجموعة :</b></label>
                            <input type="text" name="image" id="image">
                            <div class="row mt-3 p-3">
                                <div class="col">
                                    <button  class="btn btn-primary" type="submit">حفظ</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="card  d-flex justify-content-center mt-4 border-secondary shadow-0 mb-3">
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th> رقم العنصر </th>
                                <th>اسم المجموعة  </th>
                                <th>اسم صورة المجموعة  </th>
                                <th colspan="2"> اجراء </th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->itemGroupName}}</td>
                                    <td>{{$row->image}}</td>
                                    <td> <a href="{{route('deleteItem',["id"=>$row->id])}}" <i class="fa-solid fa-trash text-success"> </i> </td>
                                    <td> <a href="{{route('editItem',["id"=>$row->id])}}" <i class="fa-regular fa-pen-to-square"> </i> </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
