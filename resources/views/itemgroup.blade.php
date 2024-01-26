@extends('layouts.app')
@section('content')
<?php
    $c=0;
?>
<div class="container" dir="ltr">
    <h1 class="alert alert-secondary text-center"> Groups Of Items</h1>
    <div class="row row-cols-4 row-cols-md-3 g-2 d-flex justify-content-center">
        <div class="col d-flex justify-content-center">
            @while($c <= $count-1)
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
    @endwhile

</div>
</div>

{{--         <div class="card">--}}
{{--             <div class="card-body">--}}
{{--         <div class="row justify-content-center">--}}
{{--             <div class="col-sm-4">--}}
{{--                 <form action="{{route('saveGroupItems')}}" method="post">--}}
{{--                     @csrf--}}
{{--                     <label for="itemGroupName"> ادخل اسم المجموعة </label>--}}
{{--                     <input type="text" class="form-control form-control-sm" name="itemGroupName">--}}
{{--                     <div class="row mt-3 justify-content-center">--}}
{{--                         <div class="col-sm-4">--}}
{{--                         <button class="btn btn-primary pt-2" type="submit" onclick="showMessage()"> حفظ </button>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                 </form>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--         <div class="card mt-3">--}}
{{--             <div class="card-body">--}}
{{--                 <table class="table table-bordered text-center">--}}
{{--                     <thead>--}}
{{--                     <tr>--}}
{{--                         <td><b> رقم المجموعة</b> </td>--}}
{{--                         <td> <b> اسم المجموعة</b></td>--}}
{{--                         <td colspan="2"> <b> اجراء</b> </td>--}}
{{--                     </tr>--}}
{{--                     </thead>--}}
{{--                     <tbody>--}}
{{--                     @foreach($data as $row)--}}
{{--                         <tr>--}}
{{--                             <td>{{$row->id}}</td>--}}
{{--                             <td>{{$row->itemGroupName}}</td>--}}
{{--                             <td> <a href="{{route('deleteItem',["id"=>$row->id])}}" <i class="fa-solid fa-trash"> </i> </a> </td>--}}
{{--                             <td> <a href="{{route('editItem',["id"=>$row->id])}}" <i class="fa-regular fa-pen-to-square"> </i>  </a> </td>--}}
{{--                         </tr>--}}

{{--                     @endforeach--}}
{{--                     </tbody>--}}
{{--                 </table>--}}
{{--             </div>--}}
{{--         </div>--}}
{{--     </div>--}}
{{--here where you add the javaScript stuff --}}
{{--        <script>--}}
{{--            function showMessage () {--}}
{{--                Swal.fire({--}}
{{--                    position: "top-end",--}}
{{--                    icon: "success",--}}
{{--                    title: "Your work has been saved",--}}
{{--                    showConfirmButton: false,--}}
{{--                    timer: 1500--}}
{{--                });--}}
{{--            }--}}
{{--        </script>--}}

@endsection
