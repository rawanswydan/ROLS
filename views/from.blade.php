<form action="{{ route('submitForm') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="file">Upload File</label>
        <input type="file" name="file" id="file" required>
    </div>
    <button type="submit">Submit</button>
</form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
