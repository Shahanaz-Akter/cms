<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <section class="bg-light p-5">
        <div>Template-02</div>

        <div class="">
            <a href="{{ route('template') }}">
           <button class="btn btn-dark">← Back</button></a>
        </div>

        @if($content)
        <div>
        
            <div>
                <h2>{{ $content->h2_title }}</h2>
        
                <div>{{ $content->h2_des}}</div>
            </div>
            
            <div>{{ $content->title }}</div>
        
            <br>
        
            <div>
                <h1>{{ $content->h1_title }}</h1>
                <div>{{ $content->h1_des}}</div>
            </div>
        
        </div>
@else
<div>
        
    <div>
        <h2>H2 tag</h2>

        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At dolor magnam tenetur voluptate
             reprehenderit doloremque, libero ex ratione officia error!</div>
    </div>
    
    <div>I am from Template 2.</div>

    <br>

    <div>
        <h1>H1 tag</h1>
        <div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At dolor magnam tenetur voluptate
             reprehenderit doloremque, libero ex ratione officia error!</div>
    </div>

</div>
        @endif
   


</section>

</body>
</html>