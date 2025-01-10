<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
     <p>This is my blog page</p>

     @foreach($blogs as $blog)
        <h4>{{ $blog->title }}</h4>
        <p>{{ $blog->desc }}</p>
        <hr>
     @endforeach
</body>
</html>