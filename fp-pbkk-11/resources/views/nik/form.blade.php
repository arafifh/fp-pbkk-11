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
        <form action="{{ route('nik.submit') }}" method="post">
            @csrf
            <div class="user-box">
                <input type="text" name="nik" required="">
                <label>NIK</label>
                @error('nik')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">
                
                Submit
            </button>
        </form>
    </div>
</body>
</html>