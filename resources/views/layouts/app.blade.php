<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DC Comics</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center">DC Comics</p>
                </div>
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
