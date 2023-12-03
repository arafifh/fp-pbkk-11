<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Form Pemilih</title>
</head>
<body>
    <div class="form-box">
        <h2>NIK</h2>
        <form action="{{ route('pemilih.create') }}" method="post">
            @csrf
            <div class="user-box">
                <input type="text" name="nik" required="">
                <label>NIK</label>
                @error('nik')
                    <span style="color: white;">{{ $message }}</span>
                @enderror
            </div>
            <div class="user-box">
                <input type="text" name="name" required="">
                <label>Name</label>
                @error('name')
                    <span style="color: white;">{{ $message }}</span>
                @enderror
            </div>
            <div class="user-box">
                <input type="text" name="tps" required="">
                <label>TPS</label>
                @error('tps')
                    <span style="color: white;">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">              
                Submit
            </button>
        </form>
    </div>
</body>
</html>