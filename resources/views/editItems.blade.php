@extends('layouts.dashbored')
@section('content')

    <div class="container">
        <div class="row mt-2 justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('updateItemss')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$item->id}}"> <!--Hidden means user cant see it -->
                            <label for="x1"> رقم المجموعة </label>

                            <input type="text" name="itemGroupId" id="x1" value="{{$item->itemGroupId}}">
                            <label for="x2"> اسم العنصر </label>

                            <input type="text" name="itemName" id="x2" value="{{$item->itemName}}">
                            <label for="x3"> سعر العنصر</label>
                            <input type="text" name="price" id="x3" value="{{$item->price}}">
                            <label for="x4"> لون العنصر </label>
                            <input type="text" name="color" id="x4" value="{{$item->color}}">
                            <label for="x5"> كمية العنصر </label>
                            <input type="text" name="quantity" id="x5" value="{{$item->quantity}}">

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
