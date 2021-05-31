@extends('layouts.app')

@section('content')
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="Post" action="{{ route('posts.store') }}"  enctype="multipart/form-data">
                        @csrf
                            <span style="margin-right:6.5%"><b>Title</b></span>
                            <input type="type" name="title" class="form-control  @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}"   autofocus>
                            @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            <br><br>

                            <span><b>Description</b></span>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autocomplete="description" name="description"> </textarea>
                            @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            <br>
              

                            <span style="margin-right:6.5%"><b>Tags</b></span>
                            <input type="type" name="tags" class="form-control  @error('tags') is-invalid @enderror" name="tags"  maxlength="20"  autofocus>
                            @error('tags')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <br>
                                    <center>
                       
                            <span style="margin-right:6.5%" ><b>Choose Category</b></span><br>
                                <select class="form-select @error('category') is-invalid @enderror"  name="category"aria-label="Default select example">
                                    <option selected>Categories</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Business">Business</option>
                                    <option value="Entertainment">Entertainment</option>
                                    <option value="Gaming">Gaming</option>
                                </select>
                                @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                      
                                    <br>
                                    <center>
                                    @enderror
                           </center>
                           <br><br>
                           
                            <div class="form-group row">
                                <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Post Image')}}</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control-file @error('img') is-invalid @enderror" name="img" >

                                    @error('img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                                
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-block btn-outline-primary">
                                        {{ __('Submit') }}
                                      
                                    </button>
                                </div>
                            </div>
                            <br><br>

                        </form>
                   
@endsection