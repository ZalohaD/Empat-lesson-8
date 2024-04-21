<x-layout>
    <h2>Add a song</h2>
    <form action="{{ route('beats.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name of a beat</label>
            <input type="text" id="name" name="name" required>
        </div>
        <button type="submit">Add</button>
    </form>
</x-layout>