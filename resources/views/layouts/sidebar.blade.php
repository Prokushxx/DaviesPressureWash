<!DOCTYPE html>
<html lang="en">

{{-- In work, do what you enjoy. --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles()
    <title>Document</title>
</head>

<body>

    @livewire('sidebar')
    @livewireScripts()
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        window.addEventListener('swal', function(e) {
            Swal.fire(e.detail);
        });

        window.addEventListener('addswal', function(e) {
            Swal.fire(e.detail);
        })
        window.addEventListener('editswal', function(e) {
            Swal.fire(e.detail);
        })

        window.addEventListener('editDateTime', function (e){
          Swal.fire(e.detail);
        })
        window.addEventListener('updated', function (e){
          Swal.fire(e.detail);
        })
        
       
    </script>

</body>

</html>
