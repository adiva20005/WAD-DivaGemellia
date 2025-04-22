<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stasiun Berhantu</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 2rem;
            background-color: #1a1a1a;
            color: white;
        }
        h1 {
            color: crimson;
        }
        .station {
            border-left: 5px solid crimson;
            padding: 1rem;
            margin-bottom: 1rem;
            background-color: #2a2a2a;
        }
    </style>
</head>
<body>
    <h1>👻 Stasiun Kereta Berhantu</h1>
    @foreach($data as $s)
        <div class="station">
            <h2>{{ $s->name }} ({{ $s->country }})</h2>
            <p><strong>Dibangun:</strong> {{ $s->year_built }}</p>
            <p><strong>Status:</strong> {{ $s->is_active ? 'Aktif' : 'Nonaktif' }}</p>
            <p>{{ $s->haunted_story }}</p>
        </div>
    @endforeach
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stasiun Kereta Berhantu</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #1a1a1a;
            color: white;
            padding: 2rem;
        }
        h1 {
            color: crimson;
            margin-bottom: 1rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #2a2a2a;
        }
        th, td {
            padding: 12px;
            border: 1px solid #444;
            text-align: left;
        }
        th {
            background-color: #3a3a3a;
            color: crimson;
        }
        tr:nth-child(even) {
            background-color: #1f1f1f;
        }
    </style>
</head>
<body>
    <h1>👻 Daftar Stasiun Kereta Berhantu</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Stasiun</th>
                <th>Negara</th>
                <th>Tahun Dibangun</th>
                <th>Status</th>
                <th>Cerita Horor</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $s)
                <tr>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->country }}</td>
                    <td>{{ $s->year_built }}</td>
                    <td>{{ $s->is_active ? 'Aktif' : 'Nonaktif' }}</td>
                    <td>{{ $s->haunted_story }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
