<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    // Property Type .......

    public function PropertyType()
    {
        $type = DB::table('categories')->get();
    	return view('admin.type.PropertyType',compact('type'));
    }

    public function StorePropertyType(Request $request)
    {
    	$validatedData = $request->validate([
        'property_type' => 'required|unique:categories|max:55',
        ]);

        $data=array();
        $data['property_type']=$request->property_type;
        DB::table('categories')->insert($data);
        $notification=array(
                 'messege'=>'Property Type Insert Done',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }

    public function DeletePropertyType($id)
    {
    	 DB::table('categories')->where('id',$id)->delete();
    	 $notification=array(
                 'messege'=>'Property Type Successfully Deleted',
                 'alert-type'=>'success'
                       );
         return Redirect()->back()->with($notification);
    }

    public function EditPropertyType($id)
    {
    	$edit=DB::table('categories')->where('id',$id)->first();
    	return view('admin.type.EditPropertyType',compact('edit'));
    }

    public function UpdatePropertyType(Request $request,$id)
    {
    	$validatedData = $request->validate([
        'property_type' => 'required|max:55',
        ]);

         $data=array();
         $data['property_type']=$request->property_type;
         $update= DB::table('categories')->where('id',$id)->update($data);
        if ($update) {
        	$notification=array(
                 'messege'=>'Property Type Successfully Updated',
                 'alert-type'=>'success'
                       );
            return Redirect::to('property/type')->with($notification);
        }else{
        	$notification=array(
                 'messege'=>'Nothing to update',
                 'alert-type'=>'success'
                       );
            return Redirect::to('property/type')->with($notification);
        }
    }

    // Property Status .......

    public function PropertyStatus()
    {
        $status = DB::table('propertystatus')->get();
        return view('admin.type.PropertyStatus',compact('status'));
    }
    public function StorePropertyStatus(Request $request)
    {
        $validatedData = $request->validate([
        'property_status' => 'required|unique:propertystatus|max:55',
        ]);

        $data=array();
        $data['property_status']=$request->property_status;
        DB::table('propertystatus')->insert($data);
        $notification=array(
                 'messege'=>'Property Status Insert Done',
                 'alert-type'=>'success'
                       );
        return Redirect()->back()->with($notification);
    }
    public function DeletePropertyStatus($id)
    {
        DB::table('propertystatus')->where('id',$id)->delete();
        $notification=array(
             'messege'=>'Property Status Successfully Deleted',
             'alert-type'=>'success'
                   );
        return Redirect()->back()->with($notification);
    }
    public function EditPropertyStatus($id)
    {
        $edit=DB::table('propertystatus')->where('id',$id)->first();
        return view('admin.type.EditPropertyStatus',compact('edit'));
    }
    public function UpdatePropertyStatus(Request $request,$id)
    {
        $validatedData = $request->validate([
        'property_status' => 'required|max:55',
        ]);

         $data=array();
         $data['property_status']=$request->property_status;
         $update= DB::table('propertystatus')->where('id',$id)->update($data);
        if ($update) {
            $notification=array(
                 'messege'=>'Property Status Successfully Updated',
                 'alert-type'=>'success'
                       );
            return Redirect::to('property/status')->with($notification);
        }else{
            $notification=array(
                 'messege'=>'Nothing to update',
                 'alert-type'=>'success'
                       );
            return Redirect::to('property/status')->with($notification);
        }
    }


    // Property Status .......

    public function City()
    {
        $city = DB::table('city')->get();
        return view('admin.type.City',compact('city'));
    }
    public function StoreCity(Request $request)
    {
        $validatedData = $request->validate([
        'city' => 'required|unique:city|max:55',
        ]);

        $data=array();
        $data['city']=$request->city;
        DB::table('city')->insert($data);
        $notification=array(
                 'messege'=>'City Insert Done',
                 'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }
    public function EditCity($id)
    {
        $edit=DB::table('city')->where('id',$id)->first();
        return view('admin.type.EditCity',compact('edit'));
    }
    public function UpdateCity(Request $request,$id)
    {
        $validatedData = $request->validate([
        'city' => 'required|max:55',
        ]);

         $data=array();
         $data['city']=$request->city;
         $update= DB::table('city')->where('id',$id)->update($data);
        if ($update) {
            $notification=array(
                 'messege'=>'City Successfully Updated',
                 'alert-type'=>'success'
                       );
            return Redirect::to('city')->with($notification);
        }else{
            $notification=array(
                 'messege'=>'Nothing to update',
                 'alert-type'=>'info'
                       );
            return Redirect::to('city')->with($notification);
        }
    }
    public function DeleteCity($id)
    {
        DB::table('city')->where('id',$id)->delete();
        $notification=array(
             'messege'=>'City Successfully Deleted',
             'alert-type'=>'success'
                   );
        return Redirect()->back()->with($notification);
    }
}
