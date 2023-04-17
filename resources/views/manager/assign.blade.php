@extends('layout')

@section('content')
    <div class="w3-sidebar w3-bar-block w3side" style="width:17%">
        <h1>
            Investment
        </h1>
        <div style="margin-top:10vh">
            <a  onclick="location.href='{{ url('manager') }}'" class="w3-bar-item w3-button" >Dashboard</a>
            <a href="{{ url('assigned') }}" class="w3-bar-item w3-button">Assinged</a>
             <a href="{{ url('clientprofiles') }}" class="w3-bar-item w3-button">Client Profile</a>
            <a href="{{ url('rmprofile') }}" class="w3-bar-item w3-button">Profile</a>
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
                <h2 class="">Assign Blog</h2>
                <form  method="POST" action="{{ route('assigned') }}">
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
                    <div class="form-group m-2">
                        <label for="product">users</label>

                        <select class="form-control" name="user_id">
                            <option value="" disabled>select user</option>

                            @if (empty($users))
                                <option value="">No users available</option>
                            @else
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <button class="btn btn-warning" type="submit">Publish</button>
                </form>
            </div>
        </div>
@endsection
