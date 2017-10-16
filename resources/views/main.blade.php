<!DOCTYPE html>
<html lang="en">

  @include('partials._head')
  <body>

  @include('partials._nav')
    
    <div class="newContainer">
      
      @yield('content')
  
      @include('partials._footer')
  
    </div><!-- end of .newContainer-->

    {{-- @include('partials._javascript') --}} <!--the javascript works after the rest of the page -->

    @yield('scripts')

  </body>
</html>