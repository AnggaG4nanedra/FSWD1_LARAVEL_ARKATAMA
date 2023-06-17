<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toserba</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
</head>
<body>
  
    <div class="container">
        @section('content')
            -- Data Tidak Ada di Child Layouts nya --
        @show
    </div>
<script src="{{ asset('vendor/bootstrap.bundle.min.js') }}"></script>
</body>
</html> 