<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;background-color: linen;" >
<div style="background-color: cornsilk">
    <h2>ویرایش</h2>
   

    <form  action="/admin/{{$post->id}}" method="post">
        @if($errors->any())
                <div >
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
        @csrf
        @method('put')

        <div style="padding: 1% 0% 1% 0%;">  
            <input style="width:20%;direction: rtl;" type="text" name="title" value="{{$post->title}}">
            <label>عنوان</label>
        </div>

        <div style="padding: 1% 0.5% 1% 0%;">
            <input style="width:20%;direction: rtl;" type="text" name="text" value="{{$post->text}}">
             <label>متن</label>
        </div>
        
        <div>
            <input style="background-color: deepskyblue;padding: 1%;border: none;border-radius: 5%;color: white;font-family: system-ui;"
              type='submit' value=" ثبت ویرایش">
        </div>
        @if(session('success'))
                <script>
                    window.alert("{{ session('success') }}");
                </script>
        @endif
    </form>
            

        </div>
    </form>
</div>




    
    
</body>
</html>