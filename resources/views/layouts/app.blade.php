<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/a23e6feb03.js"></script>
  <title>@yield('title') - CRUD JUEGOS</title>
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="h-16 flex justify-end py-4 px-16">
      <a href="{{route('juegos.index')}}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2 hover:bg-blue-400">Juegos</a>
      <a href="{{route('juegos.create')}}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2">Crear Juego Nuevo</a>
    </nav>
    <main class="p-16 flex justify-center">
        @yield('content')
    </main>
</body>
</html>