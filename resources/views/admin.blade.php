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
                <th style="border-bottom:1px solid black">...</th>
                <th style="border-bottom:1px solid black">...</th>
            </tr>
        </thead>
        <tbody>
            @foreach($post as $i)
            <tr>
                <td>{{$i->title}}</td>
                <td>{{$i->text}}</td>
                <td >
                    <form  action="/admin/{{$i->id}}" method="post">
                        @csrf
                        @method('delete')
                        <div >
                            <input style="background-color: deepskyblue;padding: 1%;border: none;border-radius: 5%;color: white;font-family: system-ui;"
                             type='submit' value="حذف پست">
                        </div>
                    </form>
                </td>
                <td >
                    <form  action="/admin/{{$i->id}}" method="get">
                        @csrf
                        <div>
                            <input style="background-color: deepskyblue;padding: 1%;border: none;border-radius: 5%;color: white;font-family: system-ui;"
                             type='submit' value="ویرایش پست">
                        </div>  
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="/addPost" method="get">
        <input style="background-color: deepskyblue;padding: 7px;border: none;border-radius: 5%;color: white;font-family: system-ui;"
         type='submit' value="افرودن پست جدید">   
        @csrf
    </form>


  


    
</body>
</html>