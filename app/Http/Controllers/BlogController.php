<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin', compact('blogs'));
    }
    public function store(Request $request)
    {        $user = Auth::user();

        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->abstract = $request->input('abstract');
        $blog->Content = $request->input('Content');
        $blog->product = $request->input('product');
        $blog->user_id =  $user->id;

        $blog->save();

        return redirect()->route('admin');
    }
}