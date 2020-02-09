<div class="flex-center position-ref full-height">
        <div class="top-right links nav nav-pills">
                @if (Auth::guest())
                {{-- //show logged in navbar --}}
               
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register User</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login User</a></li>
                @else
                {{-- //show logged out navbar --}}
                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/appointments">Appointments</a></li>
                <li class="nav-item"><a class="nav-link" href="/clients">Clients</a></li>
                <li class="nav-item"><a class="nav-link" href="/users">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}">Logout</a></li>
                @endif
                
                

                

            
        </div>

</div>