<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\groupitems;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;


class ItemsController extends Controller
{
    //this function to return all info of groupitems Model in page ItemsGroup.view
   public function getItemGroup(){
       $data=groupitems::all();
       $count= $data->count();
       return view('itemgroup' ,['data'=> $data,'count'=>$count]);

   }
    //this function  return all product of specific groupItem
    public function getShowProduct($id){
       $data=Items::where('itemGroupId',$id)->get();
       Session::put('id',$id); // use "put" to add a value to the session
       return view('showproduct',['data'=>$data]);


    }
    // add to cart function
    public function addToCart($id){
       //step one:
       DB::table('cart')->insert(['idItem'=>$id]); // save id to cart in db
        $getId=Session::get('id');
        $count= DB::table('cart')->get()->count();
        Session::put('countitems',$count);
        return redirect('showproduct/'.$getId); // redirect to the same page

    }

    public function checkout ()
    {
        return view('checkout');

    }
   public function getItems(){
       $data=Items::all();
       return view('items',['items'=>$data]);
   }
    public function saveItems(Request $req){
       $data=Items::Create([
           'itemName'=>$req->itemName,
           'price'=>$req->price,
           'quantity'=>$req->quantity,
           'color'=>$req->color,
           'itemGroupId'=>$req->itemGroupId,
           'image'=>$req->image,
       ]);
        $data->save();
        return redirect()->route('displayAddItems');

    }
   //this function to save the users input into the Database
   public function saveGroupItems(Request $request){
       $issave=false;
       $data=groupItems::Create([
          'itemGroupName'=>$request->itemGroupName,
          'image'=>$request->image
       ]);
       $data->save();
       $issave=true;
       return redirect()->route('displayAddItemsPage');

   }
   public function deleteGItem($id){
       $item=groupItems::find($id);
       $item->delete();
       return redirect()->route('itemsgroup');

}
    public function editGItem($id){
       $item=groupItems::where('id',$id)->first();
       return view('editgroupitem',['item'=>$item]);

    }
    public function updateGItem(Request $request){
       $find=groupItems::find($request->id);
       $find->itemGroupName=$request->itemName;
       $find->save();

       return redirect()->route('itemsgroup');

    }
    //this is fom items page
    public function editItem($id){
        $item=Items::where('id',$id)->first();
        return view('editItems',['item'=>$item]);

    }
    public function deleteItem2($id){
        $item=Items::find($id);
        $item->delete();
        return redirect()->route('items');

    }
    public function updateItems(Request $req){
        $find=Items::find($req->id);
        $find->itemName=$req->itemName;
        $find->price=$req->price;
        $find->quantity=$req->quantity;
        $find->color=$req->color;
        $find->itemGroupId=$req->itemGroupId;
        $find->image=$req->image;

        $find->save();

        return redirect()->route('items');

    }
    // displayGItems() to display items (hلمتجات ) in dashboard
    public function displayGItems(){
       $data=DB::table('groupitems')->join('items','groupitems.id','=','items.itemGroupId')
                                          ->get();

       return view('dashbored.controlpanel',['items'=>$data]);
    }
    public function displayAddItemsPage(){
        $data=groupItems::All();
       return view('dashbored.addGItems',['data'=>$data]);
    }

    public function displayAddItems(){
        $data=Items::All();
        return view('dashbored.addItems',['data'=>$data]);
    }
    public function ShowItemGroup(){

       $data=groupItems::all();
       $count= $data->count();
       return view('welcome',['data'=>$data,'count'=>$count]);

    }
    //function to test the API to retrieve data ;
    public function testAPI()
    {
        $apiUrl = "https://v1.baseball.api-sports.io/leagues";
        $Header = [
            'content-type' => 'application-json',
            'X-RapidAPI-Key' => '24C939c2ba293c859d5ecd476932d293',
        ];
        $response = Http::withHeaders($Header)->get($apiUrl);
        $data = $response->json();
        dd($data);
     //   return view('cafe', ['data' => $data]);
    }

//       $response=Http::get('https://api.sampleapis.com/coffee/hot');
//       $data= $response->object(); //better to use "object" to view in the front end

    //function to test the API to retrieve data with PARAMETER;

}
