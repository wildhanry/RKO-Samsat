<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-pink-500 to-indigo-600 flex items-center justify-center">
    <div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-md">
        <div class="text-center">
            <img src="img/logo_uppd.png" alt="Logo" class="mx-auto h-16">
            <h2 class="text-2xl font-bold text-gray-800 mt-4">Login</h2>
            <p class="text-sm text-gray-500">Selamat datang di Sistem Rekapitulasi Anggaran (DILARANG KORUPSI)</p>
        </div>
        <form class="mt-6 space-y-4" action="/login" method="POST">
            <!-- CSRF Token -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required class="block w-full mt-1 p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="block w-full mt-1 p-2 border rounded-md focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Login</button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-4">
            Belum memiliki akun? <a href="/register" class="text-blue-600 hover:underline">Daftar di sini</a>
        </p>
    </div>
</body>
</html>
