<html>
    <head>
        <title>Session Rate Limit</title>
    </head>
    <style>
        a{
            text-decoration: none;
            background-color: blueviolet;
            color: white;
            padding: 10px;
        }
    </style>
    <body>

        <h4>{{$message}}</h4>

        <a href="{{ $second_session_url }}" class="btn btn-primary">Continue Second Session</a>
    </body>
</html>