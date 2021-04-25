<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{   
    public function blog_fetch() {
        // Fetch Data and store in $blog
        $blog = Blog::latest()->get();
        // Return $blog in Json Response Object
        return response()->json([
            'message' => $blog
        ]);
    }

    //Add blog to database
    public function blog()
    {
        
        /** Create an instance of the model and save data */
        $blog = new Blog();
        $blog->category = request()->category;
        $blog->b_img = request()->b_img;
        $blog->title = request()->title;
        $blog->b_by_who = request()->b_by_who;
        $blog->description = request()->description;
        $blog->comment_id = request()->comment_id;
        $blog->save();

        return response()->json(['message' => 'Blog Added Successfully']);

    }
}
