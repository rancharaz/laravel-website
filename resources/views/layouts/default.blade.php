<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranveer Ancharaz</title>
    <link rel="stylesheet" type="" href="{{ asset('css/app.css')}}">
</head>

<body class="bg-slate-500 text-white">
    <header class="fixed bg-slate-600 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-xl font-black">
                Ranveer Ancharaz
            </h1>
            <nav class="-mx-2">
                <a href="{{ route('home')}}"
                    class="text-lg mx-2 text-white hover:text-indigo-400 transition-all">Home</a>
                <a href=" {{ route('about')}}"
                    class="text-lg mx-2 text-white hover:text-indigo-400 transition-all">About us</a>

            </nav>
        </div>
    </header>
    <main>
        @yield('page-content')
    </main>
    <footer>
        <div class="container mx-auto p-4">
            <p>&copy; Ranveer Ancharaz</p>
        </div>
    </footer>
</body>

</html>