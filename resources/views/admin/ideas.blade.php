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
            <h2 class="">Published ideas</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">title</th>
                                                <th scope="col">Content</th>

                        <th scope="col">Abstract</th>

                        <th scope="col">product</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($blogs as $index => $blog)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->Content }}</td>
                            <td>{{ $blog->abstract }}</td>
                            <td>{{ $blog->product }}</td>
                            <td><button type="button" class="btn btn-info"
                                   >Published</button>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
