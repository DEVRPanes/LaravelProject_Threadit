
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap News Template - Free HTML Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">
        <link href="  {{ asset('/storage/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="  {{ asset('/storage/lib/slick/slick-theme.css') }}" rel="stylesheet">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

   

        <!-- Template Stylesheet -->
        <link href= "{{ asset('/storage/css/style.css') }}" rel="stylesheet">
        <!-- Template Stylesheet -->
    

    </head>

    <body>
        <!-- Top Bar Start -->
       
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand" style="background-color:#45b6fe">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo"> 
                            <a href="index.html">
                                <img src="{{ asset('/storage/img/logo.jpg') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="b-ads">
                          
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <form  action="/search" method="GET" role="search">
                            <input type="text" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div style="background-color:black" >
            <div class="container">
            @if (Route::has('login'))
            @auth
                <nav class="navbar navbar-expand-md " style="background-color:black" >
                    <a href="{{ url('/home') }}" class="navbar-brand" style="color:white">Create Forum</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="background-color:black" >
                        <div class="navbar-nav mr-auto " >
                            <a href="welcome.php" class="nav-item nav-link active" style="color:white">Home</a>
                             <!--<div class="nav-item dropdown">
                               <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:white">Dropdown</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item" style="color:white">Sub Item 1</a>
                                    <a href="#" class="dropdown-item" style="color:white">Sub Item 2</a>
                                
                            </div>   </div>
                            <a href="single-page.html" class="nav-item nav-link" style="color:white">Single Page</a>-->
                            <a href="contact.html" class="nav-item nav-link" style="color:white">Contact Us</a>
                        </div>
                        @endauth
                </div>
            @endif
                        <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter" style="color:white"></i></a>
                            <a href=""><i class="fab fa-facebook-f" style="color:white"></i></a>
                            <a href=""><i class="fab fa-linkedin-in" style="color:white"></i></a>
                            <a href=""><i class="fab fa-instagram" style="color:white"></i></a>
                            <a href=""><i class="fab fa-youtube" style="color:white"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Top News Start-->
        <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                            <div class="col-md-6">
                                <div class="tn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="tn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-6">
                                <div class="tn-img">
                                <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                    <div class="tn-title">
                                        <a  href="">Create new Forum now!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                        <div class="col-md-6">
                                <div class="tn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="tn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                       
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top News End-->

        <!-- Category News Start-->
        <div class="cat-news" style="color:#45b6fe">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="color:#45b6fe">  Sports</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                            <div class="cn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="cn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('/storage/img/news-350x223-4.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">Explore Forum Category!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 style="color:#45b6fe">Technology</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                            <div class="cn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="cn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="{{ asset('/storage/img/news-350x223-4.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="">Explore Forum Category!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="color:#45b6fe">Business</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                            <div class="cn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="cn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                 
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="{{ asset('/storage/img/news-350x223-4.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">Explore Forum Category!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 style="color:#45b6fe">Entertainment</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                            <div class="cn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                   <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="cn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                      
                            <div class="col-md-6">
                                <div class="cn-img">
                                <img src="{{ asset('/storage/img/news-350x223-4.jpg') }}" />
                                    <div class="cn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">Explore Forum Category!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->
        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured" style="color:#45b6fe">Featured News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular" style="color:#45b6fe">Popular News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest"style="color:#45b6fe" >Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                            <div class="tn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                   <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="tn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                      

                         
                            <div id="popular" class="container tab-pane fade">
                                <div class="tn-news">
                                <div class="tn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                   <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="tn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                <div class="tn-news">
                                <div class="tn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                   <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="tn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                      
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-4">
                            <div class="mn-news">
                                <div class="tn-img">
                                @foreach ($posts as $post)
                                @if ($post->img != '')
                                   <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif
                                    <div class="mn-title">
                                        <a href="{{ route('posts.show', $post->id) }}">{{$post->Title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach 
                      
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                                <li><a href="">Created by Team 3 Laravel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

        <!-- Footer Start -->
        <div class="footer" style="background-color:#45b6fe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Olongapo City Zambales</p>
                                <p><i class="fa fa-envelope"></i>Threadit@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Useful Links</h3>
                            <ul>
                            <li><a href="">Created by Team 3 Laravel</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Quick Links</h3>
                            <ul>
                            <li><a href="">Created by Team 3 Laravel</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Newsletter</h3>
                            <div class="newsletter">
                                <p style="color:white">
                                <li style="color:white"><a style="color:white" href="">Created by Team 3 Laravel</a></li>
                                </p>
                                <form>
                                    <input class="form-control" type="email" placeholder="Your email here">
                                    <button class="btn" style="background-color:#45b6fe">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
        <div class="footer-menu" >
            <div class="container">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Accessibility help</a>
                    <a href="">Advertise with us</a>
                    <a href="">Contact us</a>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="">Threadit</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Designed By <li><a href="">Created by Team 3 Laravel</a></li></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('/storage/js/main.js') }}" defer></script>
        <script src="{{ asset('/storage/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('/storage/lib/slick/slick.min.js') }}"></script>

        <!-- Template Javascript -->

       
    </body>
</html>
