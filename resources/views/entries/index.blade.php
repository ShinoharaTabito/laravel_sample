<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Blog</h1>

    <ul>
    @foreach ($entries as $entry)
        <li><a href="{{ action("EntriesController@view", $entry->id) }}"> {{ $entry->title }}</li>
    @endforeach
    </ul>
</body>
</html>