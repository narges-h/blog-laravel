<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <p style="text-align: center;color: cornflowerblue;font-family: system-ui;">وبلاگ های امروز</p>

    <table style="text-align:center;border-collapse:collapse;border-bottom:1px solid black;width:50%">
        <thead>
            <tr>
                <th style="border-bottom:1px solid black">...</th>
                <th style="border-bottom:1px solid black">...</th>            
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-bottom:1px solid black">{{$post->title}}</td>
                <td style="border-bottom:1px solid black">{{$post->text}}</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>