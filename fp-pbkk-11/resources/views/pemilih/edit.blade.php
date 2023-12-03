<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Edit Pemilih</title>
</head>
<body>
    <div class="form-box">
        <h2>NIK</h2>
        <form action="{{ route('pemilih.update', ['id' => $data->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="user-box">
                <input type="text" name="nik" required="" value="{{ $data->nik }}">
                <label>NIK</label>
                @error('nik')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="user-box">
                <input type="text" name="name" required="" value="{{ $data->name }}">
                <label>Name</label>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="user-box">
                <input type="text" name="tps" required="" value="{{ $data->tps }}">
                <label>TPS</label>
                @error('tps')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
        </form>
    </div>
</body>
</html>