<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
<div>
    <p style="text-align: center;color: cornflowerblue;font-family: system-ui;">وبلاگ های امروز</p>

    <form style="text-align:center" action="/addPost" method="post">
    @if($errors->any())
                <div style="color:red;padding-right:3%">
                    <ul style="list-style: none;">
                        @foreach($errors->all() as $error)
                            <li>{{$error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

        @csrf
        <div style="padding: 1% 0% 1% 0%;">  
            <input style="width:20%;direction: rtl;" type="text" name="title">
            <label>عنوان</label>
        </div>

        <div style="padding: 1% 0.5% 1% 0%;">
            <input style="width:20%;direction: rtl;" type="text" name="text">
             <label>متن</label>
        </div>
        
        <div>
            <input style="background-color: deepskyblue;padding: 1%;border: none;border-radius: 5%;color: white;font-family: system-ui;"
              type='submit' value="ثبت">
        </div>
    </form>
   

</div>

  
</body>
</html>