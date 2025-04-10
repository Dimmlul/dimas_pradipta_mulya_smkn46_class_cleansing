<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/resources/css/app.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>

<!-- CSS Buat center -->
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        background-color: #f9fafb;
    }
</style>

<!--todo add logic-->

<body>

    <form class="bg-white rounded-lg shadow-xl text-sm text-gray-500 border border-gray-200 p-8 py-12 w-80 sm:w-[352px]">
        <p class="text-2xl font-medium text-center">
            <span class="text-indigo-500">Login</span>
        </p>

        <div class="mt-4">
            <label class="block">Email</label>
            <input type="email" placeholder="type here" required
                class="border border-gray-200 rounded w-full p-2 mt-1 outline-indigo-500">
        </div>

        <div class="mt-4">
            <label class="block">Password</label>
            <input type="password" placeholder="type here" required
                class="border border-gray-200 rounded w-full p-2 mt-1 outline-indigo-500">
        </div>

        <p class="mt-4">
            Belum punya akun?
            <a href="/register" class="text-indigo-500">Register</a>
        </p>

        <button type="submit"
            class="bg-indigo-500 hover:bg-indigo-600 transition-all text-white w-full py-2 rounded-md mt-4 cursor-pointer">
            Login
        </button>
    </form>
</body>

</html>
