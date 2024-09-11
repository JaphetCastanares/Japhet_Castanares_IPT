<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Home Page</title>
</head>
<body>
    <h1>Home Page</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('items') }}">Item Page</a> |
        <a href="{{ route('pictures') }}">Picture Page</a>
    </nav>

    <p>Welcome to the Home Page!</p>
</body>
</html>
