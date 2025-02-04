<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="overflow-hidden">
    <div class="absolute top-0 left-0 m-4 z-20"> <!-- Added z-20 -->
        <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="h-20 drop-shadow-lg"> 
    </div>
    
    <div class="container h-screen bg-cover bg-center relative" style="background-image: url('{{ asset('storage/images/oujda_bg.png') }}');">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10">
            <h1 class="text-center text-white font-bold text-5xl pt-10 mb-0">AUTHENTIFICATION</h1>
        </div>
        <div class="flex justify-center items-center h-screen">
            <div class="bg-gray-300 p-8 rounded-lg shadow-lg w-full max-w-md relative z-20">
                <h2 class="text-2xl font-bold mb-6 text-center">SE CONNECT</h2>
                <form action="" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">CIN</label>
                        <input type="email" name="email" id="email" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700">NUMERO DE MATRICULATION</label>
                        <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                    </div>
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <input type="checkbox" name="remember" id="remember" class="mr-1">
                            <label for="remember" class="text-gray-700">Remember Me</label>
                        </div>
                       
                    </div>
                    <button type="" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>