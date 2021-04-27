<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{   
    // public function __construct()
    // {
    //     $this->middleware('auth.apikey');
    // }

    // Fetch post from blog database
    public function fetch_post() {
        // Fetch Data in $post
        $post = Blog::latest()->get();
        // Return $post in Json Response Object
        return response()->json([
            'message' => $post
        ]);
    }

    //Add post to blog database
    public function add_post()
    {
        /** Create an instance of the model and save data */
        $post = new Blog();
        $post->category = request()->category;
        $post->b_img = request()->b_img;
        $post->title = request()->title;
        $post->b_by_who = request()->b_by_who;
        $post->description = request()->description;
        $post->comment_id = request()->comment_id;
        $post->save();

        return response()->json(['message' => 'Post Added Successfully', $post]);
        // return response()->json($post);

    }

    public function update_post() {
        // Incoming request
        $id = request()->id;

        $post = Blog::find($id);
        $post->category = request()->category;
        $post->b_img = request()->b_img;
        $post->title = request()->title;
        $post->b_by_who = request()->b_by_who;
        $post->description = request()->description;
        $post->comment_id = request()->comment_id;

        $post->save();

        return response()->json([
            'message' => 'Post Updated Successfully'
        ]);
   }

   public function delete_post() {
        // Store Incomeing request
        $id = request()->id;

        Blog::find($id)->delete();

        return response()->json([
            'message' => 'Post Deleted Successfully'
        ]);
   }
}
