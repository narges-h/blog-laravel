<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>افزودن پست جدید</title>
</head>
<body style="background-image:url('forest.jpeg');background-attachment:fixed;background-size:cover;">>
<div  style="background-color: rgba(255, 255, 255, 0.5);background-blend-mode: multiply;width: 60%;height: 550px;border-radius: 15px;margin-left: 20%;">
    <p style="font-family: system-ui;color:#182218;font-weight: 800;font-size: x-large;text-align:center;">پست جدید</p>

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
            <input style="width: 50%;height: 40px;direction: rtl;border-radius: 10px;border-style: none;" type="text" name="title">
            <label>عنوان</label>
        </div>

        <div style="padding: 1% 0.5% 1% 0%;display:flex;justify-content: center;">
            <!-- <input style="width: 50%;height: 300px;direction: rtl;border-radius: 10px;border-style: none;" type="text" name="text"> -->
            <textarea style="width: 50%;height: 300px;direction: rtl;border-radius: 10px;border-style: none;resize:none" type="text" name="text"></textarea>
             <label>متن</label>
        </div>
        
        <div>
            <input style="background-color:  #70b270;padding: 10px;border: none;color: #182218;font-family: system-ui;font-weight: 800;
                    width: 37%;height: 40px;direction: rtl;border-radius: 10px;border-style: none;margin-right: 16%;font-size: medium;"
              type='submit' value="ثبت">
        </div>
    </form>
   

</div>

  
</body>
</html>