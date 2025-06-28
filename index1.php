
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
     <body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

  <div class="bg-white p-8 rounded shadow-md w-full max-w-md space-y-4">
    <h2 class="text-2xl font-bold text-center text-blue-600 mb-4">Contact Us</h2>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
      <input type="text" id="name"
             class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Your Email</label>
      <input type="text" id="email"
             class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Select Hotel</label>
      <select id="hotel"
              class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="av">Avendra Garden Hotel</option>
        <option value="ab">Avendra Beach Hotel</option>
        <option value="ag">Avendra Gangaara Hotel</option>
      </select>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
      <input type="text" id="description"
             class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <button onclick="Contactus()"
            class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition duration-200">
      Submit
    </button>

    <p id="mess" class="text-red-500 text-sm text-center mt-2"></p>
  </div>

  <script src="script.js"></script>
</body>


</body>
</html>
