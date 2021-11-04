<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <nav>
                <ul>
                    <li><a href="{{route('main.index')}}">Main</a><li>
                    <li><a href="{{route('post1.index')}}">Posts</a><li>

                    <li><a href="{{route('about.index')}}">About</a><li>
                    <li><a href="{{route('contact.index')}}">Contacts</a><li>
                </ul>
            </nav>
        </div>
    </div>
   <div>
       @yield('content')
   </div>
</body>
</html>