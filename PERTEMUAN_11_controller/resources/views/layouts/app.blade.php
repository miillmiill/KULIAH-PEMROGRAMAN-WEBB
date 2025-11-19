<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Pattaya</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.5/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="text-gray-200">

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.5/flowbite.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>