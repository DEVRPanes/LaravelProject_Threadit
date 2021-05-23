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
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div style="background-color:black" >
            <div class="container">
            @isset($post)
           
                    

                <nav class="navbar navbar-expand-md " style="background-color:black" >
                    <a href="#" class="navbar-brand" style="color:white">Forum Room  {{ $post[0]->id }}</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="background-color:black" >
                        <div class="navbar-nav mr-auto " >
                            <a href="index.html" class="nav-item nav-link active" style="color:white">Forum Title: {{ $post[0]->Title }}</a>
                             <!--<div class="nav-item dropdown">
                               <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color:white">Dropdown</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item" style="color:white">Sub Item 1</a>
                                    <a href="#" class="dropdown-item" style="color:white">Sub Item 2</a>
                             
                            </div>   </div>
                            <a href="single-page.html" class="nav-item nav-link" style="color:white">Single Page</a>-->
                         
                        </div>
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

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container">

                       
<center>

<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
            
            </div>
            <br>
            <h4>{{ $post[0]->Description }}</h4>
            </br>
        <div class="mesgs">
          <div class="msg_history">
            <div class="incoming_msg">
            @if ($post[0]->comments)
                @foreach ($post[0]->comments as $comment)
              <div class="incoming_msg_img"> <img style="width:50px" src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
          
                  <b><p>{{ $comment->username }}:</p></b>
                  <p>{{ $comment->description }}</p>
                  <span class="time_date"> {{ $comment->created_at }}</span></div>
                  <form method="post" action="{{ route('comments.store') }}">
                                  @csrf
                                  <div class="form-group">
        
                                      <input type="hidden" name="post_id" value="{{ $comment->post_id }}" />
                                      <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                                  </div>
                                  <div class="form-group">
                     
                                  </div>
                              </form>
                                 
                      @endforeach                     
                  @endif
                
                          </div>
                    @endisset
              </div>
            </div>
            
            </div>
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
            <form method="post" action="{{ route('comments.store') }}">  
                        @csrf
                       
                        <input id="username"  hidden type="text" class="write_msg  @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->name }}">
                               <input id="description" type="text" class="write_msg  @error('description') is-invalid @enderror" name="description" value="" required>
                               <input type="hidden" name="post_id" value="{{ $post[0]->id }}">        
                               
                               @error('description')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
              <button class="msg_send_btn" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
</form>
            </div>
          </div>
        </div>
      </div>
      
      
    
    </div></div>
</center>
    </body>
    </html>