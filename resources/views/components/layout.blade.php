<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Main</a></li>
            <li><a href="{{ route('beats') }}">Beats</a></li>
            <li><a href="{{ route('account') }}">Account</a></li>
            <li><a href="{{ route('create') }}">Add a beat</a></li>
        </ul>
    </nav>
    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>
