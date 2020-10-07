<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$sbj}}</title>
</head>
<body>
 
    <p>From: {{$fulname}} {{$frm}} </p>
    <p>Reply-To: {{$frm}} </p>
    <p>"MIME-Version: 1.0</p>
    <p>Content-Type: multipart/mixed; boundary="{{$sep}}"</p>
    <p>Content-Transfer-Encoding: 7bit</p>
    <p>This is a MIME encoded message.</p>
    <p>--{{$sep}}</p>
    <p>Content-Type: text/plain; charset="iso-8859-1"</p>
    <p>Content-Transfer-Encoding: 8bit"</p>
    <br>
    <br>
    <p>{{$msg}}</p>
</body>
</html> 