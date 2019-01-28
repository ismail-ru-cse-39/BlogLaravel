<!doctype html>
<html lang="en">

  <head>

    @include('partial._head')

  </head>

  <body>

    <!-- Default navbar from bootstrap-->
    @include('partial._nav')

   

    <div class="container">
      @include('partial._messages')

      {{ Auth::check() ? "Logged In" : "Logged Out" }}
      
      @yield('content')  
      
      @include('partial._footer')

    </div><!--end of container-->


  @include('partial._javascript')

  @yield('scripts')

  </body>
</html>