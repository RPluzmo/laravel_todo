<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>{{ $title ?? "Uzdevumi un dienasgrāmata" }}</title>
</head>
<body>

<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
  <p>Izpildīts: {{ $todo->completed ? "Jā" : "Nē" }}</p>
</x-layout>

</body>
</html>