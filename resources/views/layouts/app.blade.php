<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>

<body>

    @livewireStyles()


    @livewire('navbar')

    @yield('content')
    @livewireScripts()

</body>
<footer class="bg-white" id="contact">
    <div class="container mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <div>
                <div class="text-gray-600">Waynedavis18302@gmail.com</div>
            </div>

           
        </div>
        
    </div>
</footer>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
