@extends('layouts.dashbored')
@section('content')
    <div class="container" dir="rtl">
        <div class="row mt-3  text-center">
            <div class="col-sm-12">
                <h1 class="alert alert-secondary text-center"> Products Details</h1>
                    <div class="card  border-secondary shadow-0 mb-3">
                         <div class="card-body">
                        <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th> رقم العنصر </th>
                    <th> اسم العنصر </th>
                    <th> السعر  </th>
                    <th> الكمية  </th>
                    <th> اللون   </th>
                    <th>رقم المجموعة  </th>
                    <th> الصورة   </th>

                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($items as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->itemName}}</td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->quantity}}</td>
                            <td>{{$row->color}}</td>
                            <td>{{$row->itemGroupId}}</td>
                            <td>{{$row->image}}</td>

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
