<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
   
</head>
<body>
    <div id="app">
        <div>
            <b-navbar toggleable="lg" type="light" variant="primary">
              <b-navbar-brand href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
          
              <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
          
              <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav>
                  <b-nav-item href="#">Link</b-nav-item>
                </b-navbar-nav>
          
                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    @guest
                    <b-dropdown-item href="{{ route('login') }}">Login</b-dropdown-item>
                    <b-dropdown-item href="{{ route('register') }}">Register</b-dropdown-item>
                    @else
                  <b-nav-item-dropdown right>
                    <!-- Using 'button-content' slot -->
                    <template v-slot:button-content>
                      <em>Usuario</em>
                    </template>
                   

                    <b-nav-item-dropdown text="Username" right>
                        <b-dropdown-item href="#">Cerrar Sesion</b-dropdown-item>
                    @endguest
                    </b-nav-item-dropdown>
                  </b-nav-item-dropdown>
                </b-navbar-nav>
              </b-collapse>
            </b-navbar>
          </div>
          
        <nav class="navbar navbar-default navbar-static-top">
            
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
