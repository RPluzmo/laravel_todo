<x-layout>
    <x-slot:title>
       Rediģēt dienasgrāmatu
    </x-slot:title>
    <h1>Redidždždžģēt dieansgr. ierrrrakstu</h1>
    <form action="/diaries/{{ $diary->id }}" method="POST">
        @csrf
        @method('PUT')
        <ul>
            <li>
                <label>Title:
                    <input name="title" type="text" value="{{ old('title', $diary->title) }}">
                    @error("title")
                        <p>{{ $message }}</p>
                    @enderror
                </label>
            </li>
            <li>
                <label>Body saturs:
                    <textarea name="body" rows="1">{{ old('body', $diary->body) }}</textarea>
                    @error("body")
                        <p>{{ $message }}</p>
                    @enderror
                </label>
            </li>
            <li>
                <label>Date:
                    <input name="date" type="date" value="{{ old('date', $diary->date) }}">
                    @error("date")
                        <p>{{ $message }}</p>
                    @enderror
                </label>
            </li>
        </ul>
        <button>Saglabāt</button>
    </form>
</x-layout>