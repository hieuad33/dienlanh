<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts;

use App\Models\Categories;

use App\Models\Tags;


class PostsViewController extends Controller
{
    //
    public function index(){

        $posts=Posts::all();
        $categories=Categories::all();
        $tags=Tags::all();

        return view('blog')->with('posts',$posts)->with('categories',$categories)->with('tags',$tags);

    }   
    public function getPostslug($slug){
        $post=Posts::where('slug',$slug)->first();
        if($post)
        {

            $category=Categories::find($post->category_id)->first();
             $tags=$post->tags();
             $post->view++;
             $post->save();

        return view('posts.postview')
        
        ->with('post',$post)
        ->with('category',$category)
        ->with('tags',$tags);
        }
        else{
           return view(404);
        }
       
    }

    public function getSearch($search){
     
        $posts=Posts::where('title', 'like',"%".$search."%")->where('description', 'like',"%".$search."%");
        $categories=Categories::all();
        $tags=Tags::all();
         return view('blog')->with('posts',$posts)->with('categories',$categories)->with('tags',$tags);

        
    }
    public function getCategoryslug($slug){
        $category=Categories::where('slug',$slug)->first();
        if($category)
            {
                 $posts=$category->posts()->get();
        $categories=Categories::all();
        $tags=Tags::all();
    
         return view('blog')->with('posts',$posts)->with('categories',$categories)->with('tags',$tags);
            }
            else{
                return view(404);
            }
       
    }
    public function getTagslug($slug){
           $tag=Tags::where('slug',$slug)->first();
        $posts=$tag->posts()->get();
        $categories=Categories::all();
        $tags=Tags::all();
    
         return view('blog')->with('posts',$posts)->with('categories',$categories)->with('tags',$tags);
    }

}
