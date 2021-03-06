<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>animal class</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
    </head>
  
    <body>
        <div class="body-container">
            <header>
                @include('commons.admin_navbar')
            </header>
            <main>
                @include('commons.error_messages')
                @yield('content')
                <footer class="text-center">&copy;animal class</footer>
            </main>
        </div>
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>  
    </body>
</html>
