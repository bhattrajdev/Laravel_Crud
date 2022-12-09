<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <a href="{{Route('addevent')}}" style="padding-right: 10px;">Add Event</a>
    <a href="{{Route('viewevent')}}" style="padding-right: 10px;">View Event</a>
    <a href="{{Route('testpreperation')}}" style="padding-right: 10px;">Add Test Preperation</a>
    <a href="{{Route('viewtestpreperation')}}"style="padding-right: 10px;">View Test Preperation</a>

    @yield('main-section')
    
</body>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'intro_text' );
CKEDITOR.replace( 'details' );
</script>
</html>