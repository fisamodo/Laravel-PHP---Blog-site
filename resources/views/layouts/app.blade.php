<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
        href="https://bootswatch.com/4/cosmo/bootstrap.min.css"> 
        <title>{{config('app.name','LSAPP')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
       
        <script src="//cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'summary-ckeditor' );
        </script>
    </body>
</html>
