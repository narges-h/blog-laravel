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
        <form  style="padding: 1% 0% 1% 1%;direction: ltr;" action="/main" method="get">
            <input style="background-color: #70b270;padding: 10px;border: none;border-radius: 5%;color: #182218;font-family: system-ui;font-weight: 800;"
            type='submit' value="صفحه اصلی">    
        </form>   
        <p style="margin-top: -3%;font-weight: 800;padding-right: 20px;">FOREST</p> 
    </header>
    <div style="background-image:url('geranimo-qzgN45hseN0-unsplash.jpg');background-attachment:fixed;background-size:cover;padding-top: 20%;">
        <p style="background-color:#d8ffd8;text-align: center; padding: 1%;font-weight: 800;
        direction: rtl;opacity: 0.6;">به جنگل من خوش اومدی!</p>
    </div> 

    <p style="font-family: system-ui;color:#182218;font-weight: 800;font-size: x-large;text-align:center;">آخرین مطالب منتشر شده</p>
 


    <table >
        <tbody style="direction: rtl;">
            @foreach($post as $i)
            <tr>
                <td style="border:0px solid black;background-color: #d8ffd8;padding-left: 10px;height: 50px;border-radius: 10px;margin-bottom: 2%;">
                <a style="text-decoration:none;color:#182218;padding-right: 15px;" href="http://127.0.0.1:8000/detail/{{$i->id}}">{{$i->title}}</td>
                <td>
                    <form  action="/admin/{{$i->id}}" method="post">
                        @csrf
                        @method('delete')
                        <div >
                        <input style="border-style: none;background-color: #70b270;width: 150%;height: 50px;border-radius: 10px;padding-left: 40px;"
                             type='submit' value="حذف پست">
                        </div>
                    </form>
                </td>
                <td >
                    <form  action="/admin/{{$i->id}}" method="get">
                        @csrf
                        <div>
                            <input style="border-style: none;background-color:  #70b270;width: 150%;height: 50px;border-radius: 10px;"
                             type='submit' value="ویرایش پست">
                        </div>  
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="/addPost" method="get">
        <input style="background-color: #70b270;padding: 15px;border: none;border-radius: 10%;color: black;font-weight: 800;"
         type='submit' value="افرودن پست جدید">   
        @csrf
    </form>


  


    
</body>
</html>