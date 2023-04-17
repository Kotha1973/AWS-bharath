@extends('layout')

@section('content')
    <div class="w3-sidebar w3-bar-block w3side" style="width:17%">
        <h1>
            Investment
        </h1>
        <div style="margin-top:10vh">
            <a  onclick="location.href='{{ url('client') }}'" class="w3-bar-item w3-button" >Dashboard</a>
            <a href="{{ url('clientblogs') }}" class="w3-bar-item w3-button">Blogs</a>
            <a href="{{ url('clientRms') }}" class="w3-bar-item w3-button">Rms Profile</a>
            <a href="{{ url('clientProfile') }}" class="w3-bar-item w3-button"  onclick="location.href='{{ url('profile') }}'">Profile</a>
                 <a class="dropdown-item" href="{{ route('logout') }}"
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
                <h2 class="">Blog</h2>
                <form  method="POST" action="{{ route('proceed') }}">
                    @csrf
                    <div class="form-group" style="display:none">
                        <label for="id">id</label>
                        <input type="text" class="form-control" id="id" name="id" value="{{ $blog->id }}">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
                    </div>
                    <div class="form-group">
                        <label for="abstract">Abstract</label>
                        <input type="text" class="form-control" id="abstract" name="abstract" value="{{ $blog->abstract }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="3" >{{ $blog->Content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="product">Product</label>
                        <input type="text" class="form-control" id="abstract" name="abstract" value="{{ $blog->product }}">
                    </div>

                    <button class="btn btn-warning" type="submit">Proceed</button>
                </form>
            </div>
        </div>
@endsection
