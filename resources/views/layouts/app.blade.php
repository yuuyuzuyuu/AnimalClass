<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>animal class</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
    </head>

    <body>
        <div class="body-container">
            <header>
                @include('commons.navbar')
                @include('commons.error_messages')
            </header>
            <main>
                @yield('content')
                <footer class="text-center">
                    <p id="page-top"><a href="#">PageTop</a></p>
                    <p>&copy;animal class</p>
                </footer>
            </main>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="/js/jquery.jscroll.js"></script>
        <script src="/js/index.js"></script>
        <script src="/js/toplink.js"></script>
        <script src="/js/pagetop.js"></script>
        <script src="/js/navbar.js"></script>
    </body>
</html>
