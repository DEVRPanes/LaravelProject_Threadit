@extends('layouts.app')

@section('content')
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

<div class="container">
    
    <div class="row justify-content-center">
    <h1>Your Forum</h1>
        <div class="col-md-8">
              <a class="btn button btn-primary" href="/posts/create">Create New <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
              </svg></a>
            <br>
            <br>
           

                    @isset($posts)

                    <table class="table table-borderless bg-light table-hover" style="width: 100%">
                        <thead
                          class="text-white bg-dark"
                          style="border-radius: 25%"
                        >
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="table">
                          @foreach ($posts as $post)
                          <tr>
                            <td class="badge badge-pill badge-info text-dark mt-3">{{ $post->Title }}</td>
                            <td>{{ $post->Description }}</td>
                            <td><a class="btn btn-success" href="/posts/{{ $post->id }}"> View </a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                    @endisset
                </div>
    </div>
</div>
@endsection