@extends('layout')

@section('content')
<div class="w3-sidebar w3-bar-block w3side" style="width:17%">
    <h1>
        Investment
    </h1>
    <div style="margin-top:10vh">
        <a  onclick="location.href='{{ url('admin') }}'" class="w3-bar-item w3-button" >Dashboard</a>
        <a href="{{ url('ideas') }}" class="w3-bar-item w3-button">Blogs</a>
        <a href="#" class="w3-bar-item w3-button"  onclick="location.href='{{ url('rmprofiles') }}'">Rms Profile</a>
        <a href="#" class="w3-bar-item w3-button"  onclick="location.href='{{ url('profile') }}'">Profile</a>
        <a class="dropdown-item w3-bar-item w3-button" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
    </div>

</div>

<div style="margin-left:17%">
    <div class="topnav">
        <div class="side">
            <img src="images/a.jpg" class="rounded-circle" alt="Cinque Terre">

            <h5>
                {{ Auth::user()->name }}
            </h5>
        </div>
    </div>
        <div class="dash shadow-sm p-3 mb-5 bg-white rounded">
            <h2 class="">Add Blog</h2>
            <form  method="POST" action="{{ route('add-blog') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name='title'    placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Abstract</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                    name='abstract'     placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> Content </label>
                    <textarea class="form-control"  name='Content'   id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1"> product </label>
                    <textarea class="form-control" name='product' id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button class="btn btn-warning"> submit</button>
            </form>
        </div>
    </div>
@endsection
