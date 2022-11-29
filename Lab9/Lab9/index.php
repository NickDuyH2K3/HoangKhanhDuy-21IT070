<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Test XAMPP</title>
    <style>
        h1 {
            color: #000;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: -1px;
            line-height: 20px;
            text-align: center;
            text-decoration: none;
        }
        textarea {
            width: 100%;
            height: 100px;
            padding: 12px 20px;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-color: #f8f8f8;
            resize: none;
        }
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #ccc;
            border-radius: 4px;
            outline: none;
        }
        button {
            background-color: red;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            cursor: pointer;
            background-color: #45a049;
            transition: all 0.3s ease-in-out;
        }
        
    </style>
</head>
<body>
    <h1>EMAIL TO YOU</h1>
    <form action="mail.php" enctype="multipart/form-data" method="POST"> </br>
    <input type="text" class="form-control" name="email" placeholder="Email"> </br>
    <input type="text" class="form-control" name="tieude" placeholder="Name"> </br>
    <textarea name="content" id="editor" class="form-control" placeholder="Content"></textarea> </br>
    <input type="file" class="form-control" name="file"> </br>
    <button type="submit" class="btn btn-primary">SEND</button> </br>
</body>
</html>
