@extends('main')

@section('title', '|HomePage')

@section('content')
        <div class="row">
           <div class="col-md-12">
               <div class="jumbotron">
                  <h1 class="display-4">Welcome to my blog!</h1>
                  <p class="lead">Thank you for visiting.This is my test website.Please read my popular post.</p>
                  
                  <a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a>
                </div>
           </div>
        </div><!--end of row-->
        
        <div class="row">
            <div class="col-md-8">
              
              @foreach($posts as $post)

              <div class="post">
                  <h3>{{ $post->title }}</h3>
                  <p>{{ substr($post->body, 0, 300 )}} {{ strlen($post->body) > 300 ?"......":""}}</p>
                  <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
              </div>
              <hr>

              @endforeach


            </div>

            <div class="col-md-3 offset-md-1" >
               <h2>Sidebar</h2>
            </div>
        
        </div>

            
@endsection

    