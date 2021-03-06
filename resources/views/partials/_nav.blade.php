<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-default-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('path_home')}}">Laracarte</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{set_active('path_home')}}"><a href="{{route('path_home')}}">Home</a></li>
                <li class="{{set_active('path_about')}}"><a href="{{route('path_about')}}">About</a></li>
                <li><a href="#contact">Artisans</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Planet <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">laravel.com</a></li>
                        <li><a href="#">laravel.io</a></li>
                        <li><a href="#">laracasts</a></li>
                        <li><a href="#">larajob</a></li>
                        <li><a href="#">laravel new</a></li>
                        <li><a href="#">laravel tchat</a></li>

                    </ul>
                <li><a href="#contact">Contacts</a></li>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">Login</a></li>
                <li><a href="#contact">Register</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>