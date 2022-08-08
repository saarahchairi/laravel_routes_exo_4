<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>EXO 4 - Routes</title>
</head>
<body>
    <header>
        @include("partial.header")
    </header>
    <main>
        @yield("content")
    </main>
    <section>
        @include("partial.footer")
    </section>
</body>
</html>
