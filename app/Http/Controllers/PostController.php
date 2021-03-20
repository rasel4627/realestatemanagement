<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function AddBlogpost()
    {
    	return view('admin.blog.create');
    }

    public function StorePost(Request $request)
    {
    	$data=array();
    	$data['title']=$request->title;
    	$data['date']=$request->date;
    	$data['description1']=$request->description1;
    	$data['description2']=$request->description2;

    	$post_image_one = $request->image_one;
    	$post_image_two = $request->image_two;

    	if($post_image_one && $post_image_two){
			$image_one_name= hexdec(uniqid()).'.'.$post_image_one->getClientOriginalExtension();
            Image::make($post_image_one)->resize(768,415)->save('public/frontend/images/'.$image_one_name);
            $data['image_one']='public/frontend/images/'.$image_one_name;

            $image_two_name= hexdec(uniqid()).'.'.$post_image_two->getClientOriginalExtension();
            Image::make($post_image_two)->resize(768,415)->save('public/frontend/images/'.$image_two_name);
            $data['image_two']='public/frontend/images/'.$image_two_name;

            DB::table('blog')->insert($data);
            $notification=array(
	             'messege'=>'Successfully Blog Post Inserted ',
	             'alert-type'=>'success'
	            );
            return Redirect()->back()->with($notification);
    	}
    }

    public function AllBlogpost($value='')
    {
    	$post = DB::table('blog')->get();
    	return view('admin.blog.index',compact('post'));
    }

     public function DeletePost($id)
    {
    	$post = DB::table('blog')->where('id',$id)->first();
    	$image1 = $post->image_one;
    	$image2 = $post->image_two;
    	unlink($image1);
    	unlink($image2);
    	DB::table('blog')->where('id',$id)->delete();

    	$notification=array(
	             'messege'=>'Successfully Post Deleted ',
	             'alert-type'=>'success'
	            );
            return Redirect()->back()->with($notification);
    }

    public function StoreComment(Request $request)
    {
        $data=array();
        $data['blog_id']=$request->blog_id;
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['comment']=$request->comment;

        DB::table('comment')->insert($data);
        $notification=array(
                 'messege'=>'Sent Message ',
                 'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
    }
}
