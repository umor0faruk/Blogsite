<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is the Home  </h1>
    <nav>
        <ul>
            <li><a href="{{ route('addproduct') }}">Add Product</a></li>
            <li><a href="{{ route('showproduct') }}">Manage Product</a></li>
        </ul>
    </nav>
    <style>
        nav ul{
            margin: 0;
            padding: 0;
            list-style: none;    
        }
        nav ul li{
            display: inline-block;
            color: pink;
        }
        nav ul li a{
            color:green;
            padding: 10px 20px;
            display: inline-block;

        }
    </style>
</body>
</html>