<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
   public function index()
   {
   $customers =User::where ('role','customer')-> orderBy('id','desc')->paginate(5);
   //dd($customers);
    return view ('backend.customers.index',compact('customers'));
}
public function edit($id)
{
$customer=user::find($id);
return view('backend.customers.edit',compact('customer'));
}
public function update(Request $request,$id)
{

	$customer=User::find($id);
	$data=[
    'name'=>$request->input('name'),
    'email'=>$request->input('email'),
    'phone'=>$request->input('phone'),
    'address'=>$request->input('address'),
];
$customer->update($data);
return redirect()->route('admin.customer');
}
       public function delete($id)
    {
      $customer=User::find($id);
      $customer->delete();
      return redirect()->back();
    }

}
