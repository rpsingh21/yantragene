<html>
    <head>

    </head>
    <body>
        <p>you are successfully register for {{$eventName}} in Yantragene 2k17 your team name is {{teamName}} you team is member is Following</p>
        <ol>
            @foreach($members as $member=>$email)
                <li>$email</li>
            @endforeach
        </ol>
    </body>
</html>