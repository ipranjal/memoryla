<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="{{url('css/semantic.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/memoryla.css')}}"> 
        @stack('head')
    </head>
    
    <body>
        
        @yield('body')
        
        <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        
        <script src="{{url('js/semantic.min.js')}}"></script>
        
         @stack('scripts')
        
    </body>
    
</html>