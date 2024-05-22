<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <style>
        body{
      height: 100vh;
      display: flex;
      flex-direction: column;
      /* justify-content: space-between */
    }
    main{
      padding: 40px 0;
      flex-grow: 2;
    }
    footer{
      background-color: rgb(69, 69, 69);
      color: white;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 0;
      line-height: 15px;
      font-size: large;
    }
  </style>
  @vite(['resources/js/app.js'])

  <title>Laravel Comics</title>

</head>
<body>

  <header>
    @include('partials.navbar')
  </header>

  <main>
    @yield('main')
  </main>

  <footer>
    @include('partials.footer')
  </footer>
  

  
</body>
</html>