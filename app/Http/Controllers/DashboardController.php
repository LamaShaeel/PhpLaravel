<?php

namespace App\Http\Controllers;

use App\Models\groupitems;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        return redirect('login');
    }
    //this function to return all info of groupitems Model in page ItemsGroup.view
    public function getItemGroup(){
        $data=groupitems::all();
        return view('itemgroup' ,['data'=> $data]);

    }
    public function getItems(){
        $data=Items::all();
        return view('items',['items'=>$data]);
    }
    public function saveItems(Request $req){
        $issave=false;
        $data=Items::Create([
            'itemName'=>$req->itemName,
            'price'=>$req->price,
            'quantity'=>$req->quantity,
            'color'=>$req->color,
            'itemGroupId'=>$req->itemGroupId,
            'image'=>$req->image,
        ]);
        $data->save();
        $issave=true;
        return redirect()->route('displayAddItems');

    }
    //this function to save the users input into the Database
    public function saveGroupItems(Request $request){
        $issave=false;
        $data=groupItems::Create([
            'itemGroupName'=>$request->itemGroupName,
            'image'=>$request->image,
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
    public function ShowItem(){
        $data=Items::all();
        $count= $data->count();
        return view('items',['data'=>$data,'count'=>$count]);

    }

    public function showInvoice(){

        return view('invoice');

    }
    public function cart(){
        $count= DB::table('cart')->get()->count();
        $data=Items::all();
        
        return view('checkout',['co'=>$count,'data'=>$data]);


    }


}
