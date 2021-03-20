<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\user;
use Image;
use Illuminate\Support\Facades\Redirect;

class AgentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function UpdateAgentProfile(Request $request, $id)
    {
        $data=array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['telephone'] = $request->telephone;
        $data['about'] = $request->about;

        $update = DB::table('users')->where('id',$id)->update($data);
        if($update){
            $notification = array(
                'message' => 'Successfully Profile Updated',
                'alert-type' => 'success'
                );
            return Redirect::to('/home')->with($notification);
            }else{
            $notification = array(
                'message' => 'Nothing Updated',
                'alert-type' => 'error'
                );
            return Redirect::to('/home')->with($notification);
            }
    }
    public function UpdateAgentProfileSocial(Request $request, $id)
    {
        $data=array();
        $data['fb'] = $request->fb;
        $data['twitter'] = $request->twitter;
        $data['skype'] = $request->skype;

        $update = DB::table('users')->where('id',$id)->update($data);
        if($update){
            $notification = array(
                'message' => 'Successfully Profile Updated',
                'alert-type' => 'success'
                );
            return Redirect::to('/home')->with($notification);
            }else{
            $notification = array(
                'message' => 'Nothing Updated',
                'alert-type' => 'error'
                );
            return Redirect::to('/home')->with($notification);
            }
    }
    public function UpdateProfilePhoto(Request $request, $id)
    {
        $data=array();
        $image = $request->image;
        if($image){
            $profileimage= hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(400,400)->save('public/backend/img/'.$profileimage);
            $data['image']='public/backend/img/'.$profileimage;

            DB::table('users')->where('id',$id)->update($data);
            $notification=array(
                 'messege'=>'Successfully Image Inserted ',
                 'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
        }
    }

}
