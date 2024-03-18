<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به حساب کاربرری</title>
</head>
<body style="background-image:url('back.jpg');background-attachment:fixed;background-size:cover;">
    <div style="background-color: rgba(255, 255, 255, 0.5);background-blend-mode: multiply;width: 60%;height: 300px;border-radius: 15px;margin-left: 20%;
    margin-top: 10%;">
        <h2 style="text-align:center;padding-right: 9%;">ورود</h2>
        <form style="text-align:center;font-weight: 800;" action="/login" method="post">
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
                @if (isset($errorCode))
                        <div style="color:red">
                            {{ $errorCode }}
                        </div>
                @endif
                <div style="padding: 1% 4% 1% 0%;">
                    <input style="width: 35%;height: 40px;direction: rtl;border-radius: 10px;border-style: none;" type="text" name="username">
                    <label>نام کاربری</label>
                </div>
                @if (isset($errorPass))
                    <div style="color:red">
                        {{ $errorPass }}
                    </div>
                @endif
                <div style="padding: 1% 3.5% 1% 0%;">
                    <input style="width: 35%;height: 40px;direction: rtl;border-radius: 10px;border-style: none;" type="password" name="password">
                    <label>رمز عبور</label>
                </div>
                
                <div style="padding-left: 8%">
                    <input style="background-color:  #70b270;padding: 10px;border: none;color: #182218;font-family: system-ui;font-weight: 800;
                    width: 37%;height: 40px;direction: rtl;border-radius: 10px;border-style: none;margin-right: 19%;font-size: medium;"
                    type='submit' value="ورود">
                </div>
        </form>

    </div>
  
       

   
  
</body>
</html>


        
      
