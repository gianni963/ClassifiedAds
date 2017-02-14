<!DOCTYPE HTML>
<html>
    <head>
        <title>Blog - Laravel</title>
    </head>
    <body>
        <ul>
            @foreach ($ads as $ad)
                <li>{{$ad->title}}</li>
                <li>{{$ad->content}}</li>
            @endforeach
        </ul>
    </body>
</html>