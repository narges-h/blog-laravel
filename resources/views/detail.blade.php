<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="direction: rtl;">
    <header style="background-color:#3c583c;top: 0;left: 0;width: 100%;height: 70px;position: absolute;">
        <form  style="padding: 1% 0% 1% 1%;direction: ltr;" action="/login" method="get">
            <input style="background-color: #70b270;padding: 10px;border: none;border-radius: 5%;color: #182218;font-family: system-ui;font-weight: 800;"
            type='submit' value="ورود به بخش مدریت">    
        </form>   
        <p style="margin-top: -3%;font-weight: 800;padding-right: 20px;">FOREST</p> 
    </header>

 

    <table style="text-align:center;border-collapse:collapse;border-bottom:0px solid black;width:50%;margin: 10% 5% 0% 0%">
        <thead>
            <tr>
                <th style="border:0px solid black;background-color: #d8ffd8;padding: 2%;width: 20%;height: 50px;border-radius:10px 10px 0px 0px;text-align: right;">{{$post->title}}</th>          
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border:0px solid black;background-color: #d8ffd8;padding: 2%;width: 20%;height: 50px;border-radius:0px 0px 10px 10px;;text-align: right;">{{$post->text}}</td>
            </tr>
            <tr>
                <td style="border:0px solid black;background-color: #d8ffd8;padding: 2%;width: 20%;height: 50px;border-radius:0px 0px 10px 10px;;text-align: right;">{{$post->created_at}}</td>
            </tr>
        </tbody>
    </table>
    
</body>
</html> 