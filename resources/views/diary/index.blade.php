<x-layout>
  <x-slot:title>
      Visas dienasgrāmatas
  </x-slot:title>
  <h1>Visi dienasgrmatas titlez</h1>
    <ul>
      @foreach ($diaries as $diary)
          <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</a></li>
      @endforeach
    </ul>
</x-layout>
