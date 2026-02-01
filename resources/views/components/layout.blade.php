    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>welkom pagina</title>
    </head>
    @vite(['resources/css/app.css'])
    <body>
        <nav class="border">
            <a href="/" >home</a>
            <a href="/login">login</a>
            <a href="/keuzedeel">keuzedeel</a>
        </nav>
        
        @yield("content")
    </body>
    </html>