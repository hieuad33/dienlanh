<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Posts;
use App\Models\tags;
use App\Models\Categories;


class HomeController extends Controller
{
    //
    public function index(){
        $services = Service::paginate(4);
         $posts = Posts::paginate(5);

        return view('welcome')->with('services',$services)->with('posts',$posts);
    }
    public function getdashbroad()  
    {
        $post_count = Posts::count();
        $tag_count = Tags::count();
        $service_count = Service::count();
        $category_count = Categories::count();
        return view('admin.index',['num_post'=> $post_count,'num_tag'=>$tag_count,'num_cate'=>$category_count,'num_sv'=>$service_count]);
    }
}
