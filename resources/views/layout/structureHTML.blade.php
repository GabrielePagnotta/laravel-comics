<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>@yield("title")</title>
</head>
<body>

    <header>
            @include("components.navbar")
    </header>
    <main>
        @include("components.maincontent")
        @include("components.comix")
        @include("components.icons")
    </main>
    <footer>
        @include("components.footerOne")
    </footer>
</body>
</html>