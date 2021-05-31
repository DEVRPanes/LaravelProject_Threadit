
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Threadit</title>
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

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
                            <a href="{{ url('home') }}">
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
                            <input type="text" placeholder="Search" id="search" name="search">
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
                    <a href="{{ url('/create') }}" class="navbar-brand" style="color:white">Create Forum</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="background-color:black" >
                        <div class="navbar-nav mr-auto " >
                        <a href="{{ url('home') }}" class="nav-item nav-link active" style="color:white">Home</a>
                             <div class="nav-item dropdown">
                             <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Filters</button>
                                
                            </div>   </div>
                        
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

        <br><br>
        <!-- Top News Start-->
        <div class="container">
    
    <div class="row justify-content-center">
 
        <div class="col-md-8">
   
            <br><br>      <br><br>
           
     

                    <table class="table table-borderless bg-light table-hover" style="width: 100%">
                        <thead
                          class="text-white bg-dark"
                          style="border-radius: 25%"
                        >
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="table">
                          @foreach ($posts as $post)
                          <tr>
                            <td class="badge badge-pill badge-info text-light mt-3">{{ $post->Title }}</td>
                            <td>{{ $post->Description }}</td>
                            <td>{{ $post->category }}</td>
                            <td>{{ $post->tags }}</td>
                            <td> @if ($post->img != '')
                                   <a href="{{ route('posts.show', $post->id) }}">
                                <img style="width:100px" class="card-img-top" src="{{ asset('/storage/img/'. $post->img) }}" alt="Card image cap" width="50%">
                                </a>
                                @endif</td>
                            <td><a class="btn btn-success" href="/posts/{{ $post->id }}"> View </a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

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
     

<div id="id01" class="w3-modal" sty>

  <div class="w3-modal-content w3-animate-top w3-card-4">
    <header class="w3-container" style="background-color:#45b6fe"> 
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2 style="color:white">Filter</h2>
    </header>
    <center>
    <br>
    <div class="w3-container">
    <h4><span style="margin-right:6.5%" ><b>Choose Category</b></span></h4><br>
  
                        
                      
                           
                            <form  action="/category" method="GET" role="category">
                                <select style="height:20%" class="form-select @error('category') is-invalid @enderror"  name="category" id="category"aria-label="Default select example">
                               <option selected>Sports</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Business">Business</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Gaming">Gaming</option><h1>
                                </select>
                                <button type="submit"><i class="fa fa-search"></i></button>
                                <br>
                                
                                </form>

    </div>
</center>
<br>
<br>
    <footer class="w3-container" style="background-color:#45b6fe">
    
    </footer>
  </div>
</div>
</div>
        
       
    </body>
</html>
