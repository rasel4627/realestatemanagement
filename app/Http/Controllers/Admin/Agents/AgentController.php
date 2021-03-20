<?php

namespace App\Http\Controllers\Admin\Agents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Facades\Redirect;

class AgentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function Agents()
    {
    	$agents = DB::table('users')->get();
    	return view('admin.agents.Agents',compact('agents'));
    }

    public function DeleteAgent($id)
    {
        $image = DB::table('users')->where('id',$id)->first();
        $agent_img = $image->image;
        unlink($agent_img);

        DB::table('users')->where('id',$id)->delete();
        $notification=array(
             'messege'=>'Agent Successfully Deleted',
             'alert-type'=>'error'
                   );
        return Redirect()->back()->with($notification);
    }

    public function ViewAgent($id)
    {
        $view = DB::table('users')->where('id',$id)->first();
        return view('admin.agents.ShowAgent',compact('view'));
    }

    public function AllProperty()
    {
        $property = DB::table('properties')
                  ->join('users','properties.agent_id','users.id')
                  ->join('city','properties.city','city.id')
                  ->select('properties.*','users.name','city.city')
                  ->get();
        return view('admin.property.property',compact('property'));
    }

    public function ViewProperty($id)
    {
        $property = DB::table('properties')
                  ->join('users','properties.agent_id','users.id')
                  ->join('city','properties.city','city.id')
                  ->join('categories','properties.property_type','categories.id')
                  ->join('propertystatus','properties.property_status','propertystatus.id')
                  ->select('properties.*','users.name','categories.property_type','propertystatus.property_status','city.city')
                 ->where('properties.id',$id)
                 ->first();
        return view('admin.property.show_property',compact('property'));
    }

    public function DeleteProperty($id)
    {
        $property = DB::table('properties')->where('id',$id)->first();

        $image1 = $property->image_one;
        $image2 = $property->image_two;
        $image3 = $property->image_three;
        $image4 = $property->image_four;
        $image5 = $property->image_five;

        unlink($image1);
        unlink($image2);
        unlink($image3);
        unlink($image4);
        unlink($image5);

        DB::table('properties')->where('id',$id)->delete();
        $notification=array(
                 'messege'=>'Successfully Property Deleted ',
                 'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }

    public function InactiveProperty($id)
    {
        DB::table('properties')->where('id',$id)->update(['status'=> 0]);
        $notification=array(
                 'messege'=>'Successfully Property Inactive ',
                 'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }

    public function ActiveProperty($id)
    {
        DB::table('properties')->where('id',$id)->update(['status'=> 1]);
        $notification=array(
                 'messege'=>'Successfully Property Active ',
                 'alert-type'=>'success'
                );
        return Redirect()->back()->with($notification);
    }


}
