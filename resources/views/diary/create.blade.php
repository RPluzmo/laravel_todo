<x-layout>
    <x-slot:title>
        Izveidot dienasgr.
    </x-slot:title>
<h1>Izveidot dienasgrāmatas ierakstu</h1>
    <form action="/diaries" method="POST">
        @csrf
        <ul>
            <li>
                <label>Virsraksts
                    <input name="title" />
                    @error("title")
                        <p>{{ $message }}</p>
                    @enderror
                </label>
            </li>
            <li>
                <label>Saturs
                <textarea name="body" rows="1" ></textarea>
                    @error("body")
                        <p>{{ $message }}</p>
                    @enderror
                </label>
            </li>
            <li>
                <label>Datums
                    <input type="date" name="date" />
                    @error("date")
                        <p>{{ $message }}</p>
                    @enderror
                </label>
            </li>
        </ul>
        <button>Saglabāt</button>
    </form>
  </x-layout>