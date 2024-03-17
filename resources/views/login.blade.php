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
    <h2 style="text-align:center">Login</h2>
  

    <form style="text-align:center" action="/login" method="post">
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
            <label>username</label>
            <input  type="text" name="username">
        </div>
        @if (isset($errorPass))
            <div style="color:red">
                {{ $errorPass }}
            </div>
        @endif
        <div style="padding: 1% 3.5% 1% 0%;">
            <label>password</label>
            <input  type="password" name="password">
        </div>
        
        <div style="padding-left: 8%">
            <input style="background-color: deepskyblue;padding: 1%;border: none;border-radius: 5%;color: white;font-family: system-ui;"
              type='submit' value="Login">
        </div>
    </form>
   

</div>

  
</body>
</html>