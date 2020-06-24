<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample_Blog</title>
</head>
<body>
    <h1>Blog</h1>

    <ul>
    @foreach ($portfolios as $portfolio)
    <p>タイトル：<a href="/portfolio/{{$portfolio -> id}}">{{$portfolio -> title}}</a></P>
    <p>-----------------------------------------------------------</P>
    @endforeach
    </ul>
</body>
</html>