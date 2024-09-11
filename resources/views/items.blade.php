<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Item Page</title>
</head>
<body>
    <h1>Item Page</h1>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('items') }}">Item Page</a> |
        <a href="{{ route('pictures') }}">Picture Page</a>
    </nav>
    <div class="container">
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </div>
    
    <p>Welcome to the Item Page!</p>
</body>
</html>
