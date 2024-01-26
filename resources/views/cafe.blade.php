@extends('layouts.app')
@section('content')

    <div class="container" dir="ltr">
        <div class="row">
            <div class="col">
                <table class="table table-primary">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>description</th>
                        <th>image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->title}}</td>
                        <td>{{$row->description}}</td>
                        <td><img src="{{$row->image}}" width="40" height="40"></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>



@endsection
