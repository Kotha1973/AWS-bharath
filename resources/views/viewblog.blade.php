@extends('layout')

@section('content')
    <div class="w3-sidebar w3-bar-block w3side" style="width:17%">
        <div style="margin-top:10vh">
            <a href="{{ url('client') }}" class="w3-bar-item w3-button">Dashboard</a>
            <a href="{{ url('client') }}" class="w3-bar-item w3-button">Blogs</a>
            <a href="#" class="w3-bar-item w3-button">Rms Profile</a>
            <a href="#" class="w3-bar-item w3-button">Profile</a>

        </div>

    </div>

    <div style="margin-left:17%">
        <div class="topnav">
            <h5>
                joe milton
            </h5>
        </div>
        <div class="dash shadow-sm p-3 mb-5 bg-white rounded">
            <h2 class="">view Blog</h2>
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Abstract</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Content </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

 
               </form>
        </div>
    </div>
@endsection
