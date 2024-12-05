<!DOCTYPE html>
<html>
<head>
    <title>Data Google Sheets</title>
</head>
<body>
    <h1>Data Google Sheets</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Gaji</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($data))
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row['Nama'] }}</td>
                        <td>{{ $row['Posisi'] }}</td>
                        <td>{{ $row['Gaji'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3">Data tidak tersedia.</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>
</html>
