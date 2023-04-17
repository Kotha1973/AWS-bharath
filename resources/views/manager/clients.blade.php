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
            <h2 class="">Managers</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                                                 <th scope="col">Name</th>

                        <th scope="col">email</th>

                        <th scope="col">role</th>
                     </tr>
                </thead>
                <tbody>

                    @foreach ($users as $index => $user)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>Client</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection