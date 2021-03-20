<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Facades\Redirect;

class PropertyController extends Controller
{
    public function StoreProperty(Request $request)
    {
    	$data = array();
    	$data['agent_id'] = $request->agent_id;
    	$data['title'] = $request->title;
    	$data['address'] = $request->address;
    	$data['location'] = $request->location;
    	$data['price'] = $request->price;
    	$data['area'] = $request->area;
    	$data['city'] = $request->city;
    	$data['property_type'] = $request->property_type;
    	$data['property_status'] = $request->property_status;
    	$data['bedrooms'] = $request->bedrooms;
    	$data['bathrooms'] = $request->bathrooms;
    	$data['garage'] = $request->garage;
    	$data['built_year'] = $request->built_year;
    	$data['floor_type'] = $request->floor_type;
    	$data['video'] = $request->video;
    	$data['ac'] = $request->ac;
    	$data['belcony'] = $request->belcony;
        $data['dinning'] = $request->dinning;
        $data['drawing'] = $request->drawing;
    	$data['swimming_pool'] = $request->swimming_pool;
        $data['cable_tv'] = $request->cable_tv;
        $data['description'] = $request->description;
    	$data['status'] = 1;

    	$image_one = $request->image_one;
    	$image_two = $request->image_two;
    	$image_three = $request->image_three;
    	$image_four = $request->image_four;
    	$image_five = $request->image_five;

    	if($image_one && $image_two && $image_three && $image_four && $image_five){
      			$image_one_name= hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
	            Image::make($image_one)->resize(1200,720)->save('public/frontend/images/'.$image_one_name);
	            $data['image_one']='public/frontend/images/'.$image_one_name;

	            $image_two_name= hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
	            Image::make($image_two)->resize(1200,720)->save('public/frontend/images/'.$image_two_name);
	            $data['image_two']='public/frontend/images/'.$image_two_name;

	            $image_three_name= hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
	            Image::make($image_three)->resize(1200,720)->save('public/frontend/images/'.$image_three_name);
	            $data['image_three']='public/frontend/images/'.$image_three_name;

	            $image_four_name= hexdec(uniqid()).'.'.$image_four->getClientOriginalExtension();
	            Image::make($image_four)->resize(1200,720)->save('public/frontend/images/'.$image_four_name);
	            $data['image_four']='public/frontend/images/'.$image_four_name;

	            $image_five_name= hexdec(uniqid()).'.'.$image_five->getClientOriginalExtension();
	            Image::make($image_five)->resize(1200,720)->save('public/frontend/images/'.$image_five_name);
	            $data['image_five']='public/frontend/images/'.$image_five_name;

	            $property=DB::table('properties')->insert($data);
	            $notification=array(
	             'messege'=>'Successfully Property Inserted ',
	             'alert-type'=>'success'
	            );
          		return Redirect()->back()->with($notification);
       }
    }
}
