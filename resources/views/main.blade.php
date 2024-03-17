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
            <input style="background-color: #d8ffd8;padding: 10px;border: none;border-radius: 5%;color: #182218;font-family: system-ui;font-weight: 800;"
            type='submit' value="ورود به بخش مدریت">    
        </form>   
        <p style="margin-top: -3%;font-weight: 800;padding-right: 20px;">FOREST</p> 
    </header>
    <div style="background-image:url('geranimo-qzgN45hseN0-unsplash.jpg');background-attachment:fixed;background-size:cover;padding-top: 20%;">
        <p style="background-color:#d8ffd8;text-align: center; padding: 1%;font-weight: 800;
        direction: rtl;opacity: 0.6;">به جنگل من خوش اومدی!</p>
    </div> 

    <p style="font-family: system-ui;color:#182218;font-weight: 800;font-size: x-large;text-align:center;">آخرین مطالب منتشر شده</p>
 

    <table>
        <tbody style="direction: rtl;">
            @foreach($post as $i)
            <tr>
                <td style="border:0px solid black;background-color: #d8ffd8;width: 20%;height: 50px;border-radius: 10px;margin-bottom: 2%;">
                <a style="text-decoration:none;color:#182218;padding-right: 15px;" href="http://127.0.0.1:8000/detail/{{$i->id}}">{{$i->title}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
</body>
</html>