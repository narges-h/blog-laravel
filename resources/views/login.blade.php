<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;background-color: linen;" >
<div>
    <h2>Login</h2>

    <form>
        @csrf
        <div >
            <label>UserName</label>
            <input type="text" name="username">
        </div>
        <div>
            <label>password</label>
            <input type="password" name="password">
        </div>
        
        <div >
            <input  type='submit' value="Login">
        </div>
    </form>
   

</div>

  
</body>
</html>