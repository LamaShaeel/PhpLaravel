@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1 class="alert alert-success">مجموعات الاصناف </h1>
            <div class="col">
            <div class="card">
               <div class="card-body">
                   <form action="{{route('updateItem')}}" method="post">
                       @csrf
                       <input type="hidden" name="id" value="{{$item->id}}"> <!--this mean user cant see it -->
                       <label for="x1"> اسم المجموعة </label>
                       <input type="text" name="itemName" id="x1" value="{{$item->itemGroupName}}">
                       <div class="text-center">
                           <button type="submit"> حفظ </button>
                       </div>
                   </form>

               </div>
            </div>
            </div>
        </div>
    </div>
@endsection
