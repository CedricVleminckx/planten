<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Planten | Home</title>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <style media="screen">
             /*color of border bottom of input field*/
            input:focus {
                border-bottom: 1px solid #1976d2 !important;
                box-shadow: 0 1px 0 0 #1976d2 !important;
            }

            /*color of border bottom of textarea*/
            .row .input-field textarea:focus {
                border-bottom: 1px solid #1976d2 !important;
                box-shadow: 0 1px 0 0 #1976d2 !important
            }

            /*Color of text in drop down*/
            ul.dropdown-content.select-dropdown li span {
                color: #1976d2;
            }
            /*Border bottom of dropdown*/
            .row .input-field select:focus {
                border-bottom: 1px solid #1976d2 !important;
                box-shadow: 0 1px 0 0 #1976d2 !important
            }
            /*color for error labels*/
            .row .input-field label {
               color: red !important;
             }
             #search{
                 height: 63px;
             }
             #searchSide{
                 height: 40px;
                 padding-left: 50px;
             }
             i.icon-blue {
                color: red;
                font-size: 250px;
            }
        </style>
        <div class="navbar-fixed row">
            <nav>
                <div class="nav-wrapper blue darken-2">
                    @yield('goBack')
                    <a href="{{ url('/') }}" class="brand-logo center">Plantentuin</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        @auth
                            @yield('edit')
                            <li><a class="tooltipped" data-position="bottom" data-tooltip="Nieuwe plant toevoegen" href="{{ url('/Add') }}"><i class="material-icons">add_circle_outline</i></a></li>
                            <li class="active"><a class="tooltipped" data-position="bottom" data-tooltip="Tot snel {{ $user->name }}" href="{{ url('/Logout') }}">Logout</a></li>
                        @endauth
                        @guest
                            <li class="active"><a href="{{ url('/Login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Registreer</a></li>
                        @endguest
                    </ul>
                    <ul class="left hide-on-med-and-down">
                        <li>
                            {!! Form::open(['url' => '/search']) !!}
                            <div class="input-field">
                              <input id="search" type="search" name="search" placeholder="{{ !empty($search) ? $search : 'Zoeken' }}" required>
                              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                              <i class="material-icons">close</i>
                              @if (!empty($search) ? $search : ' Zoeken' != ' Zoeken')
                                  <i class="material-icons"><a href="{{ url('/') }}">close</a></i>
                              @endif
                            </div>
                            {!! Form::close() !!}
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
        <ul class="sidenav" id="mobile-demo">
            <li>
                {!! Form::open(['url' => '/search']) !!}
                <div class="input-field">
                  <input id="searchSide" type="search" name="search" placeholder="{{ !empty($search) ? $search : 'Zoeken' }}" required>
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                  @if (!empty($search) ? $search : ' Zoeken' != ' Zoeken')
                      <i class="material-icons"><a href="{{ url('/') }}">close</a></i>
                  @endif
                </div>
                {!! Form::close() !!}
            </li>
            @auth
                <li><a href="#">Welkom {{ $user->name }}</a></li>
                <li><a href="{{ url('/Add') }}">Add</a></li>
                @yield('sidebar')
                <li><a href="{{ url('/Logout') }}">Logout</a></li>
            @endauth
            @guest
                <li class="active"><a href="{{ url('/Login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Registreer</a></li>
            @endguest
        </ul>

        @yield('content')


        <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            <!-- initialize javascript tools -->
            $('.sidenav').sidenav();
            $('.tooltipped').tooltip();
            $('select').formSelect();

        });
        </script>
    </body>
</html>
