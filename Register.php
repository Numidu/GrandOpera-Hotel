<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
  <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
    <div class="bg-blue-500 min-h-screen flex items-center justify-center p-5">
        <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

            <div class="space-y-4">
                <input type="text" name="first_name" id="fname" placeholder="First Name"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                
                <input type="text" name="last_name" id="lname" placeholder="Last Name"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                
                <input type="email" name="email" id="email" placeholder="Email"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                
                <input type="password" name="password" id="pwd" placeholder="Password"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                
                <input type="tel" name="tel" id="tel" placeholder="Phone Number"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                
                <input type="text" name="address" id="add" placeholder="Address"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <button onclick="register()"
                class="mt-6 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition duration-200">
                Register
            </button>

            <p id="error" class="text-red-500 text-sm mt-4 text-center"></p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>