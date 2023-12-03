<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/data.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Data Pemilih</title>
</head>
<body>
<div class="container">
    <h2>Pemilih</h2>
    <ul class="responsive-table">
        @foreach($data as $item)
        <li class="table-row">
            <div class="col col-1" data-label="ID Pemilih">{{ $item->pemilih_id }}</div>
            <div class="col col-1" data-label="NIK">{{ $item->nik }}</div>
            <div class="col col-2" data-label="Name">{{ $item->name }}</div>
            <div class="col col-3" data-label="TPS">{{ $item->tps }}</div>
            <div class="col col-3" data-label="Status">{{ $item->status ? 'True' : 'False' }}</div>
        </li>
        @endforeach
    </ul>
</div>
</body>
</html>