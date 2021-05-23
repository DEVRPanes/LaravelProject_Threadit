@extends('layouts.app')

@section('content')
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-body">
                    @isset($post)
                    <div class="col-md-8">
                         <h3>Room ID: {{ $post[0]->id }}</h1>

                         <h1>Forum Title: {{ $post[0]->Title }}</h1>

                         <h4>Forum Description: {{ $post[0]->Description }}</h4>

                         <img src="{{ asset('/storage/img/'.$post[0]->img) }}" alt="No image found" style="width:300px; height:auto;">

                   <br><br><br><br>
                  
                    <!--<a href="/posts/{{$post[0]->id}}/edit" class="btn btn-info">Edit</a>-->

                      <!--Comment Display-->
                      <div class="col-sm-9 bg-light p-3 border">
                      @if ($post[0]->comments)
                      <span class="badge badge-pill badge-secondary h3">Comments:</span><br>
                      @foreach ($post[0]->comments as $comment)
                          <div class="display-comment" >
                            <b><p>{{ $comment->username }}:</b></p>
                              <p>{{ $comment->description }}</p>
                              <a href="" id="reply"></a>
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
                            </tbody>
                          </table>
                    <!--Comment Display-->

                            <!--Add comment-->
                            <br>
                          <form method="post" action="{{ route('comments.store') }}">  
                        @csrf
                       
              <div class="col-md-6">
                           <input id="username"  hidden type="text" class="form-control  @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->name }}">
                               <input id="description" type="text" class="form-control  @error('description') is-invalid @enderror" name="description" value="" required>
                               <input type="hidden" name="post_id" value="{{ $post[0]->id }}">        
                               
                               @error('description')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>

                           <br>
                           <br>

                           <div class="form-group">
                                <input type="submit" class="btn btn-block btn-outline-primary" value="Add Comment">
                           </div>

                      </form>
                <!--Add comment-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection