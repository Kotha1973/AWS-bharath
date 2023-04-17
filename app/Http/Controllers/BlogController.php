<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 0)->get();
        return view('admin', compact('blogs'));
    }
    public function manager()
    {
        $user = Auth::user();
        $blogs = Blog::where('status', 1)
            ->where('manager_id', $user->id)
            ->get();
        return view('manager', compact('blogs'));
    }
    public function client()
    {
        $user = Auth::user();
        $blogs = Blog::where('status', 2)
            ->where('client_id', $user->id)
            ->get();
        return view('client', compact('blogs'));
    }
    public function ideas()
    {
        $blogs = Blog::where('status', 1)->get();
        return view('admin.ideas', compact('blogs'));
    }
    public function fullassigned()
    {

        $blogs = Blog::join('users', 'blog.client_id', '=', 'users.id')
            ->where('blog.status', 2)
            ->get(['blog.*', 'users.name as client_name']);
        return view('manager.fullassigned', compact('blogs'));
    }
    public function fullyproceed()
    {

        $blogs = Blog::join('users', 'blog.manager_id', '=', 'users.id')
            ->where('blog.status', 3)
            ->get(['blog.*', 'users.name as manager_name']);
        return view('client.fullyproceed', compact('blogs'));
    }
    public function store(Request $request)
    {
        $user = Auth::user();

        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->abstract = $request->input('abstract');
        $blog->Content = $request->input('Content');
        $blog->product = $request->input('product');
        $blog->user_id =  $user->id;

        $blog->save();

        return redirect()->route('admin');
    }
    public function view($id)
    {
        $where = [];
        $where[] = ['blog.id', '=', $id];

        $blog = DB::table('blog')
            ->where($where)
            ->first();
        $wheree = [];
        $wheree[] = ['users.role_id', '=', 2];
        $users = DB::table('users')
            ->where($wheree)
            ->get();
        return view('viewblog', compact('blog', 'users'));
    }
    public function assign($id)
    {
        $where = [];
        $where[] = ['blog.id', '=', $id];

        $blog = DB::table('blog')
            ->where($where)
            ->first();
        $wheree = [];
        $wheree[] = ['users.role_id', '=', 3];
        $users = DB::table('users')
            ->where($wheree)
            ->get();
        return view('manager.assign', compact('blog', 'users'));
    }
    public function pro($id)
    {
        $where = [];
        $where[] = ['blog.id', '=', $id];

        $blog = DB::table('blog')
            ->where($where)
            ->first();
        $wheree = [];
         $users = DB::table('users')
            ->where($wheree)
            ->get();
        return view('client.viewclientblog', compact('blog', 'users'));
    }
    public function update(Request $request)
    {
        $blog = Blog::findOrFail($request->input("id"));
        $blog->status = 1;
        $blog->manager_id = $request->input("user_id");
        $blog->save();

        return redirect()->route('admin');
    }
    public function failupdate(Request $request)
    {
        $blog = Blog::findOrFail($request->input("id"));
        $blog->status = 3;
        $blog->save();

        return redirect()->route('client');
    }
    public function assigned(Request $request)
    {
        $blog = Blog::findOrFail($request->input("id"));
        $blog->status = 2;
        $blog->client_id = $request->input("user_id");
        $blog->save();

        return redirect()->route('manager');
    }
    public function rms(Request $request)
    {
        $users = User::where('role_id', 2)->get();


        return view('admin\rmsproflie', compact('users'));
    }
    public function rmss(Request $request)
    {
        $users = User::where('role_id', 2)->get();


        return view('client\rmsprofilr', compact('users'));
    }
    public function clientprofiles(Request $request)
    {
        $users = User::where('role_id', 3)->get();


        return view('manager\clients', compact('users'));
    }
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return redirect()->route('login');
    }
}