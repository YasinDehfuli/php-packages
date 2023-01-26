<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input{
            margin: 5px;
        }
    </style>
</head>
<body>
<form action="submit.php">
    <input type="text" name="name">
    <div>
        <img style="border-radius: 7px" src="image.php" alt="code">
        <br>
        <input type="text" name="code" placeholder="captcha code">
    </div>
    <input type="submit" value="image">
</form>
</body>
</html>