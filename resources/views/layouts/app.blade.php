<!DOCTYPE html>
<html>
<head>
    <h1>KENNETH REYES</h1>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .content {
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
        @include('navbar')
    <div class="container">
        <div class="content">
        @yield('content')
        </div>
    </div>
</body>
</html>
