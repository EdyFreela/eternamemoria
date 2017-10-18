<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eterna Memória</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        /* GERAL */
        body {
            font-family: 'Quicksand', sans-serif;
        }
        .btn{
            color:#000;
            font-weight: bold;
        }
        .fa-btn {
            margin-right: 6px;
        }

        /* NAVBAR */
        .navbar {
            border: 0px solid transparent;
        }
        nav.navbar{
           -webkit-transition: all 0.8s ease;
           transition: all 0.8s ease;
        }
        nav.navbar{
            min-height: 160px;
            padding-top: 20px;
            background-color: transparent;    
        }
        .navbar-default .navbar-nav>li>a {
            color: #fff;
           -webkit-transition: all 0.3s ease;
           transition: all 0.3s ease;            
            padding-top: 33px;
            padding-bottom: 15px;
        }       
        .navbar-default .navbar-nav>li>a:focus, 
        .navbar-default .navbar-nav>li>a:hover {
            color: orange;
        }                
        nav.navbar.shrink {
            min-height: 85px;
            padding-top: 0px;
            background-color: #232525;
            color:#000;
        }       
        .shrink-img {
            -webkit-transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
        }
        .shrink-navbar{
            padding: 3px 15px;
        }

        /* CONTENT */                
        .section-one{
            min-height: 100vh;
            background-color: #000;
            background: url('{{asset('assets/img/banner-eternizando-momentos.jpg')}}') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;            
        }
        .section-two{
            min-height: calc(100vh - 85px);
            padding-top:30px;
            background-color: #f1f1f1;
        }
        .section-two .panel-produto{
            border: 0;
            background: none;
            box-shadow: none;
        }
        .section-two .panel-produto .quantidade strong{
            font-size: 10px;
        }
        .section-two .panel-produto .quantidade input{
            font-weight:bold;
        }
        .cep-error {
            margin-top: 25px;
            font-weight: bold;
            color: red;
        }
        .section-tree{
            min-height: calc(100vh - 85px);
            background-color: #fff;
            background: url('{{asset('assets/img/banner-como-funciona.jpg')}}') no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover; 
            font-size:20px;
        }
        .section-tree h1{
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .section-tree p{
            margin-bottom: 30px;
        }        
        .section-tree .frase{
            margin-top:70px;
        }
        .section-tree .frase i {
            color:orange;
        }
        .section-footer{
            background-color: #000;
            color: #fff;
            padding-top: 40px;
            padding-bottom: 40px;
            font-size: 10px;
        }
        .section-footer h1{
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 14px;
        }        
        .section-footer .links ul{margin:0;padding:0;}
        .section-footer .links li{list-style: none; margin-bottom:10px;}
        .section-footer .btn-facebook{
            border-radius:100%;
            height: 40px;
            width: 40px;
            font-size: 18px;
            color: #000;
        }
        .section-footer .btn-instagram{
            border-radius:100%;
            height: 40px;
            width: 40px;                        
            font-size: 18px;
            color: #000;            
        }
        .section-footer a{
            color:#fff;
        }
        .section-footer .links a{
            color:#fff;
        }
        .section-footer .links ul{
            display: block !important;
        }
        .section-footer .links ul li{
            list-style: none; 
            margin-bottom:10px;
        }
        .section-register{
            min-height: calc(100vh);
            padding-top:180px;
            background-color: #000;
            background: url('{{asset('assets/img/banner-familia.jpg')}}') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;           
        }

        .section-register .panel{
            background-color: transparent;
            border: 0px solid transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .section-register .panel-default>.panel-heading {
            color: #333;
            background-color: #feb362;
            border-color: transparent;
            text-align: center;
            font-weight: bold;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
            margin: 15px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.3333333;
            border-radius: 6px;            
        }
        .section-register .panel-body label{
            color:#fff;
            text-transform: uppercase;
        }
        .section-register .panel-body button{
            background-color:#feb362;
            text-transform: uppercase;
            border: none;
        }

        /* Extra Small Devices, Phones */ 
        @media only screen and (min-width : 320px) {
            .section-one{
                background: url('{{asset('assets/img/banner-eternizando-momentos.jpg')}}') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;            
            }            
            .section-two .btn-finalizar-compra{
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .section-tree .frase{
                text-align: center;
            }
            .section-footer .links ul{
                display: inline-flex;
            }
            .section-footer .links ul li{
                text-align: center !important;
            }            
        }         
    </style>
    @yield('style')
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('/assets/img/logo-eterna-memoria.png')}}" id="brand-img">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @if (Auth::guest())
                    @else
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/register') }}">Primeiro Acesso</a></li>
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/#comprar') }}">Comprar</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="section-footer">
        <div class="container">
            <div class="col-md-2 links">
                <ul>
                    <li class="col-xs-4 col-sm-12 col-md-12 col-lg-12"><h1><a href="{{ url('/register')}}">PRIMEIRO ACESSO</a></h1></li>
                    <li class="col-xs-4 col-sm-12 col-md-12 col-lg-12"><h1><a href="{{ url('/login')}}">LOGIN</a></h1></li>
                    <li class="col-xs-4 col-sm-12 col-md-12 col-lg-12"><h1><a href="#comprar">COMPRAR</a></h1></li>
                </ul>
            </div>
            <div class="col-md-8 text-center endereco">
                <h1>Revenda Produtos Eterna Memória</h1>
                <p>Teremos prazer de entrar em contato com você.</p>
                {!! Form::open(array('route' => 'pedido.store','method'=>'POST')) !!}
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Digite seu E-mail">
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-warning" type="button">ENVIAR</button>
                            </span>
                        </div>                    
                    </div>
                </div>
                {!! Form::close() !!}                
            </div>
            <div class="col-md-2 text-center social">
                <h1>Contato</h1>
                <p><a href="mailto:eternamemoria@gmail.com">eternamemoria@gmail.com</a></p>
                <a href="" class="btn btn-default btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="" class="btn btn-default btn-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script>
        // Smooth Scroller
        $('a[href*="#"]')
          // Remove links that don't actually link to anything
          .not('[href="#"]')
          .not('[href="#0"]')
          .click(function(event) {
            // On-page links
            if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
              && 
              location.hostname == this.hostname
            ) {
              // Figure out element to scroll to
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              // Does a scroll target exist?
              if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000, function() {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                    return false;
                  } else {
                    $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                    $target.focus(); // Set focus again
                  };
                });
              }
            }
          }); 
    </script>
    <script>
        $(window).scroll(function() {
          if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
            $('#brand-img').addClass('shrink-img');
            $('.navbar-brand').addClass('shrink-navbar');
          } else {
            $('nav').removeClass('shrink');
            $('#brand-img').removeClass('shrink-img');
            $('.navbar-brand').removeClass('shrink-navbar');
          }
        });    
    </script>    
    @yield('script')
</body>
</html>
