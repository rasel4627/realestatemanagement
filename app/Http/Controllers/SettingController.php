<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Settings()
    {
    	return view('admin.Setting.setting');
    }

    public function UpdateSettings(Request $request,$id)
    {
    	$oldlogo = $request->old_logo;
        $data=array();
        $data['company_name'] = $request->company_name;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['location'] = $request->location;
        $data['email'] = $request->email;
        $data['skype_link'] = $request->skype_link;
        $data['fb_link'] = $request->fb_link;
        $data['company_logo'] = $request->company_logo;

        $newLogo = $request->company_logo;
        if($newLogo){
            unlink($oldlogo);
            $image = hexdec(uniqid()).'.'.$newLogo->getClientOriginalExtension();
            Image::make($newLogo)->resize(146,50)->save('public/backend/img/'.$image);
            $data['company_logo']='public/backend/img/'.$image;

            DB::table('settings')->where('id',$id)->update($data);
            $notification=array(
                 'messege'=>'Successfully Settings Updated ',
                 'alert-type'=>'success'
                );
            return Redirect::to('settings')->with($notification);
        }else{
            $data['company_logo']=$oldlogo;
            DB::table('settings')->where('id',$id)->update($data);
            $notification=array(
                 'messege'=>'Successfully Settings Updated ',
                 'alert-type'=>'success'
                );
            return Redirect::to('settings')->with($notification);
        }
    }

    public function UpdateSettingsBannerPhoto(Request $request,$id)
    {
        $data=array();
        $image1 = $request->listing_banner;
        $image2 = $request->property_details_banner;
        $image3 = $request->agent_banner;

        if($image1 && $image2 && $image3){
            
            $image1_name = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
            Image::make($image1)->resize(1900,536)->save('public/backend/img/'.$image1_name);
            $data['listing_banner']='public/backend/img/'.$image1_name;

            $image2_name = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
            Image::make($image2)->resize(1900,536)->save('public/backend/img/'.$image2_name);
            $data['property_details_banner']='public/backend/img/'.$image2_name;

            $image3_name = hexdec(uniqid()).'.'.$image3->getClientOriginalExtension();
            Image::make($image3)->resize(1900,536)->save('public/backend/img/'.$image3_name);
            $data['agent_banner']='public/backend/img/'.$image3_name;

            DB::table('settings')->where('id',$id)->update($data);
            $notification=array(
                 'messege'=>'Successfully Settings Updated ',
                 'alert-type'=>'success'
                );
            return Redirect::to('settings')->with($notification);
        }
        else{
            $notification=array(
                 'messege'=>'Nothing to Updated ',
                 'alert-type'=>'warning'
                );
            return Redirect::to('settings')->with($notification);
        }
    }


    public function UserRole()
    {
        $admin=DB::table('admins')->where('type',2)->get();
        return view('admin.role.all_role',compact('admin'));
    }

    public function UserCreate()
    {
        return view('admin.role.create_role');
    }

    public function UserStore(Request $request)
    {
         $data=array();
         $data['name']=$request->name;
         $data['phone']=$request->phone;
         $data['email']=$request->email;
         $data['password']= Hash::make($request->password);
         $data['city']=$request->city;
         $data['property_type']=$request->property_type;
         $data['status']=$request->status;
         $data['agent']=$request->agent;
         $data['blog']=$request->blog;
         $data['other']=$request->other;
         $data['role']=$request->role;
         $data['setting']=$request->setting;
         $data['type']=2;
         DB::table('admins')->insert($data);
         $notification=array(
                 'messege'=>'Child Admin Create Successfully',
                 'alert-type'=>'success'
                 );
         return Redirect()->back()->with($notification);
    }

    public function UserDelete($id)
    {
        DB::table('admins')->where('id',$id)->delete();
        $notification=array(
                 'messege'=>' Admin Deleted Successfully',
                 'alert-type'=>'error'
                       );
        return Redirect()->back()->with($notification);
    }

    public function UserEdit($id)
    {
        $user=DB::table('admins')->where('id',$id)->first();
        return view('admin.role.edit_role',compact('user'));
    }
    public function UserUpdate(Request $request)
    {
         $id=$request->id;
         $data=array();
         $data['name']=$request->name;
         $data['phone']=$request->phone;
         $data['email']=$request->email;
         $data['city']=$request->city;
         $data['property_type']=$request->property_type;
         $data['status']=$request->status;
         $data['agent']=$request->agent;
         $data['blog']=$request->blog;
         $data['other']=$request->other;
         $data['role']=$request->role;
         $data['setting']=$request->setting;
         DB::table('admins')->where('id',$id)->update($data);
         $notification=array(
                 'messege'=>'Child Admin Update Successfully',
                 'alert-type'=>'success'
                       );
         return Redirect()->route('create-user-role')->with($notification);
    }
}
