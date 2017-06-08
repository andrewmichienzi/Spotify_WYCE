<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Cover Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.1/css/bulma.min.css.map">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> {{-- For calendar --}}
    <link rel="apple-touch-icon" sizes="57x57" href="https://fullcalendar.io/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://fullcalendar.io/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://fullcalendar.io/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://fullcalendar.io/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://fullcalendar.io/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://fullcalendar.io/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://fullcalendar.io/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://fullcalendar.io/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://fullcalendar.io/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="https://fullcalendar.io/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="https://fullcalendar.io/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="https://fullcalendar.io/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="https://fullcalendar.io/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="https://fullcalendar.io/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="https://fullcalendar.io/mstile-144x144.png">
    <link href='//fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' />
    <link href='https://fullcalendar.io/css/base.css?3.4.0-1.6.2-3' rel='stylesheet' />
    <link rel='stylesheet' href='https://fullcalendar.io/js/fullcalendar-3.4.0/fullcalendar.min.css' />
    <script src='//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js'></script>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://fullcalendar.io/js/fullcalendar-3.4.0/fullcalendar.min.js'></script>
    <script src='https://fullcalendar.io/js/home.js?3.4.0-1.6.2-3'></script>
    {{-- --}}

    <body>
        @include('layouts.navbar')
        <div class="container">
            <div class="row">
                <div class="col-sm-8 blog-main">
                    @yield('content')
                </div>
                @include('layouts.sidebar')
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <footer class="blog-footer">
            <p>Blog template built for <a href="https://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            <p>
                <a href="#">Back to top</a>
            </p>
        </footer>
    </body>

</html>
