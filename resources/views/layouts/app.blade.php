
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
<title>Book List</title>
<!-- CSS と JavaScript -->
<script src="{{asset('/assets/js/jquery.min.js')}}"></script> <script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>

<link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
        <!-- ナビバーの内容 -->
        </nav>
    </div>
    @yield('content')
</body>
</html>