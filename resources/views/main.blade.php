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

    <form  style="text-align:center" action="/login" method="get">
        <input style="background-color: deepskyblue;padding: 1%;border: none;border-radius: 5%;color: white;font-family: system-ui;"
         type='submit' value="ورود به بخش مدریت">    
    </form>

    <table style="text-align:center;border-collapse:collapse;border-bottom:1px solid black;width:50%">
        <tbody>
            @foreach($post as $i)
            <tr>
                <td style="border-bottom:1px solid black">
                <a style="text-decoration:none;color:black;" href="http://127.0.0.1:8000/detail/{{$i->id}}">{{$i->title}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
  


    
</body>
</html>