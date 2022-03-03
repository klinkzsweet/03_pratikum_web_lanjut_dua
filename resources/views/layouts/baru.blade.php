<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>New Vision HTML CSS Template</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet" /> <!-- https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans -->
    <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('style/slick/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('style/css/templatemo-new-vision.css') }}" rel="stylesheet">

<!--

New Vision Template

https://templatemo.com/tm-542-new-vision

-->
</head>
<body>
    <!-- Page Header -->
    <div class="container-fluid">
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                        <i class="far fa-2x fa-eye tm-site-icon"></i>
                        <h1 class="tm-site-name">Laravel-Ridho</h1>
                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">
                        
                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">
                        
                          <!-- Collapse button -->
                          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                        
                          <!-- Collapsible content -->
                          <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">
                        
                            <!-- Links -->
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                <a class="nav-link tm-nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="company.html">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link tm-nav-link" href="contact-us">Contact</a>
                              </li>
                            </ul>
                            <!-- Links -->
                        
                          </div>
                          <!-- Collapsible content -->
                        
                        </nav>
                        <!--/.Navbar-->
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="tm-main-bg"></div>        
            </div>
        </div>
        
        <div class="first-section">
        <div class="container">
            <div class="container">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
            
            <footer>
                Copyright &copy; Ridho
                
                - Design: <a href="https://templatemo.com" rel="sponsored" target="_parent" title="css templates">Laravel-Ridho</a>
            </footer>
            
        </main>
    </div>

    <script src="{{ asset('style/js/jquery-3.4.1.min.js') }}" defer></script>
    <script src="{{ asset('style/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('style/slick/slick.min.js') }}" defer></script>
    <script src="{{ asset('style/js/templatemo-script.js') }}" defer></script>
</body>
</html>