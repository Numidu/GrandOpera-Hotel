
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  
</head>
  <body>
    <div class="bg-blue-500 h-screen w-full flex items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h2 class="text-2xl font-bold mb-4">Login</h2>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="uemail" id="email"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="pwd"
                    class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div class="mb-4 flex items-center">
                <input type="checkbox" id="remember" class="mr-2">
                <label for="remember" class="text-sm text-gray-600">Remember me</label>
            </div>

            <div id="mess" class="text-red-500 text-sm mb-2"></div>

            <button onclick="Loging()"
                class="mb-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">
                Login
            </button>
             <button onclick="window.location = 'register.php'"
                class="mb-4 w-full bg-red-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">
                Sign In
            </button>
        </div>
    </div>

    <script src="script.js"></script>
</body>

 </body>
</html>



