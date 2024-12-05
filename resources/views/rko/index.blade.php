<!DOCTYPE html>
<html>
<head>
    <title>RKO Data</title>
</head>
<body>
    <h1>RKO Data</h1>
    
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Gunakan @forelse untuk mengulang data -->
            @forelse ($data as $key => $row)
                <tr>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['name'] }}</td>
                    <td>{{ $row['email'] }}</td>
                </tr>
            @empty
                <!-- Jika data kosong, tampilkan pesan ini -->
                <tr>
                    <td colspan="3">No data available</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <h2>Add New Data</h2>
    <form action="/rko/add" method="POST">
        @csrf
        <label for="id">ID:</label>
        <input type="text" name="id" required>
        <br>
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <button type="submit">Add Data</button>
    </form>
</body>
</html>
