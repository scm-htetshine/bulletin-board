<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
  
  <script>
    $('#confirmCreatePost').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
      var title = document.getElementById('title').value
      var comment = document.getElementById('comment').value
      $('input:text:eq(1)').val(title)
      $('textarea:eq(1)').val(comment)
    })

    $('#confirmUpdatePost').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
      var title = document.getElementById('title').value
      var comment = document.getElementById('comment').value
      var status = $('#status').is(":checked")
      $('input:text:eq(1)').val(title)
      $('textarea:eq(1)').val(comment)
      $('input:checkbox').attr('checked', status)
    })

    
  </script>
</body>
</html>