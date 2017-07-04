<!DOCTYPE html>
<html lang="en">
    
    <head>

        @include('partials.header')
   
    </head>
    
    <body>

        @include('partials.nav')


        <div class="container">

        @yield('content')

        </div>
        <!-- end of .container -->


        @include('partials.footer')

        @include('partials.js')

        @yield('scripts')



    </body>

</html>
    
    

    
   