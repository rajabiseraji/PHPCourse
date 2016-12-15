<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script>
       $("btn").click(function (event) {
           $.post('ajax.php',{name: 'ali'},function (data,textStatus,xhr) {
               $.("first").append(data);
           });
       });


    </script>
</head>
<body>
    <div id="first">hello world!</div>
    <button id="btn">Press</button>
</body>
</html>