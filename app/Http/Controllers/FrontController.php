<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
class FrontController extends Controller
{
    public function PropertyListing()
    {
    	return view('frontend.ListingProperty');
    }

    public function Contact()
    {
    	return view('frontend.contact');
    }

    public function PropertyDetails($id)
    {
        $details = DB::table('properties')
                  ->join('propertystatus','propertystatus.id','properties.property_status')
                  ->join('city','city.id','properties.city')
                  ->join('categories','categories.id','properties.property_type')
                  ->join('users','users.id','properties.agent_id')
                  ->select('properties.*','propertystatus.property_status','city.city','categories.property_type','users.*')
                  ->where('properties.id',$id)
                  ->first();

        $similar_property = $details->property_status;
    	return view('frontend.propertydetails',compact('details','similar_property'));
    }

    public function PropertyFavorite()
    {
    	return view('frontend.FavoriteProperty');
    }

    public function PropertyAgent()
    {
        $agent = DB::table('users')->get();
        return view('frontend.PropertyAgent',compact('agent'));
    }

    public function PropertyAgentProfile($id)
    {
        $profile = DB::table('users')->where('id',$id)->first();
        $agentProperty = DB::table('properties')
              ->join('propertystatus','propertystatus.id','properties.property_status')
              ->join('city','city.id','properties.city')
              ->join('categories','categories.id','properties.property_type')
              ->join('users','users.id','properties.agent_id')
              ->select('properties.*','propertystatus.property_status','city.city','categories.property_type','users.*')
              ->where('properties.agent_id',$id)
              ->get();
    	return view('frontend.AgentProfile',compact('profile','agentProperty'));
    }

    public function PropertyTestimonial()
    {
        return view('frontend.PropertyTestimonial');
    }

    public function Error()
    {
        return view('frontend.Error');
    }

    public function FeaturesBlog()
    {
        $blog = DB::table('blog')->get();
        return view('frontend.Blog',compact('blog'));
    }

    public function BlogDetails($id)
    {
        $details = DB::table('blog')->where('id',$id)->first();
        return view('frontend.BlogDetails',compact('details'));
    }

    public function FeaturesFAQS()
    {
        return view('frontend.FAQS');
    }

    public function SubmitProperty()
    {
        $city = DB::table('city')->get();
        $type = DB::table('categories')->get();
        $status = DB::table('propertystatus')->get();
        return view('frontend.SubmitProperty',compact('city','type','status'));
    }

    public function MyProperty($id)
    {
        $MyProperty = DB::table('properties')
                  ->join('propertystatus','propertystatus.id','properties.property_status')
                  ->join('city','city.id','properties.city')
                  ->join('categories','categories.id','properties.property_type')
                  ->join('users','users.id','properties.agent_id')
                  ->select('properties.*','propertystatus.property_status','city.city','categories.property_type','users.*')
                  ->where('properties.agent_id',$id)
                  ->get();
        return view('frontend.MyProperty',compact('MyProperty'));
    }
    public function MyPropertyDetails($id)
    {
        $agentPropertydetails = DB::table('properties')
                  ->join('propertystatus','propertystatus.id','properties.property_status')
                  ->join('city','city.id','properties.city')
                  ->join('categories','categories.id','properties.property_type')
                  ->join('users','users.id','properties.agent_id')
                  ->select('properties.*','propertystatus.property_status','city.city','categories.property_type','users.*')
                  ->where('properties.agent_id',$id)
                  ->first();
        return view('frontend.agentpropertydetails',compact('agentPropertydetails'));
    }

    public function PropertySearch(Request $request)
    {
        // $city = DB::table('city')->get();
        // $type = DB::table('categories')->get();

        $location = $request->city;
        $type = $request->property_type;
        $status = $request->property_status;
        $bedroom = $request->bedrooms;
        $bathroom = $request->bathrooms;

        $property = DB::table('properties')
                ->join('city','properties.city','city.id')
                ->join('categories','properties.property_type','categories.id')
                ->join('propertystatus','properties.property_status','propertystatus.id')
                ->select('properties.*','city.city','categories.property_type','propertystatus.property_status')
                ->where('properties.city','LIKE', "%{$location}%")
                ->Where('properties.property_type','LIKE', "%{$type}%")
                ->Where('properties.property_status','LIKE', "%{$status}%")
                ->Where('properties.bedrooms','LIKE', "%{$bedroom}%")
                ->Where('properties.bathrooms','LIKE', "%{$bathroom}%")
                ->paginate(20);

        return view('frontend.Search',compact('property'));  
    }

    

    
}
