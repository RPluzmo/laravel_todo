<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dienasgrmatas titlez</title>
</head>
<body>

<x-navigation></x-navigation>

<h1>Visi dienasgrmatas titlez</h1>
<ul>
  @foreach ($diaries as $diary)
  <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
  @endforeach
</ul>

</body>
</html>