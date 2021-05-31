<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
}

body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
<meta charset="utf-8">
        <title>Bootstrap News Template - Free HTML Templates</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">
       
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
    

        <!-- CSS Libraries -->
    

        <!-- Template Stylesheet -->
   
        <!-- Template Stylesheet -->
    
</head>

         
        <!-- Brand Start -->
        <div class="brand" style="background-color:#45b6fe">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo"> 
                        <a href="{{ url('home') }}">
                                <img class="test" src="{{ asset('/storage/img/logo.jpg') }}" alt="Logo">
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
                    <a href="#" class="navbar-brand" style="color:white">Room  {{ $post[0]->id }}</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse" style="background-color:black" >
                        <div class="navbar-nav mr-auto " >
                            <a href="index.html" class="nav-item nav-link active" style="color:white">{{ $post[0]->Title }}</a>
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



<body>
<div class="container">
<h4>{{ $post[0]->Description }}</h4>
</div>
<br>
<br>
<div class="container">

  @if ($post[0]->comments)
                @foreach ($post[0]->comments as $comment)
                <b><p>{{ $comment->username }}:</p></b>
                  <p>{{ $comment->description }}</p>
  <span class="time-right">{{ $comment->created_at }}</span>
</div>
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
          <center>


          <div class="sticky">
            <div class="input_msg_write" class="sticky">
            <form method="post" action="{{ route('comments.store') }}">  
                        @csrf
                       
                        <input id="username" class="sticky" hidden type="text" class="write_msg  @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->name }}">
                             <textarea style="width:50%;height:20%" id="description" type="message-area" class="write_msg  @error('description') is-invalid @enderror" name="description" value="" required></textarea>
                               <input type="hidden" name="post_id" value="{{ $post[0]->id }}">        
                               
                               @error('description')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                               <br>
              <button class="sticky" class="msg_send_btn" type="submit">Send</i></button>
</form>
</div>
</div>
</center>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>