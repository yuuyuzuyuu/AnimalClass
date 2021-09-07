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
        @include('commons.navbar')
        <div class="container">
            @include('commons.error_messages')
            @yield('content')
        </div>
        <footer class="text-center">©animal class</footer>
    
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
        <script src="js/jquery.jscroll.js"></script>
        <script type="text/javascript">
            $('ul.pagination').hide();
            $(function() {
                $('.animal-index').jscroll({
                    autoTrigger: true,
                    padding: 0,
                    nextSelector: '.pagination li.active + li a',
                    contentSelector: 'div.animal-index',
                    callback: function() {
                        $('ul.pagination').remove();
                    }
                });
            });
        </script>
    </body>
</html>
