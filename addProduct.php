<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Hotel Room</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-2xl">
    <h2 class="text-2xl font-bold mb-6 text-center text-blue-600">Add Hotel Room</h2>
    <form  method="post" enctype="multipart/form-data" class="">
      
      <div>
        <label for="room_name" class="block text-sm font-medium text-gray-700">Room Name/Type</label>
        <input type="text" id="room_name" name="room_name" placeholder="e.g., Deluxe Double Room" required class="mt-5 w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Price per Night (USD)</label>
        <input type="number" id="price" name="price" step="0.01" required class="mt-1 w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="photos" class="block text-sm font-medium text-gray-700">Room Photos</label>
        
        <div class="flex flex-wrap gap-4 mt-4">
  <div class="w-1/4">
    <img src="resources/noimage.png" class="rounded border border-gray-300" id="i0" />
  </div>
  <div class="w-1/4">
    <img src="resources/noimage.png" class="rounded border border-gray-300" id="i1" />
  </div>
  <div class="w-1/4">
    <img src="resources/noimage.png" class="rounded border border-gray-300" id="i2" />
  </div>
  <div class="w-1/4">
    <img src="resources/noimage.png" class="rounded border border-gray-300" id="i3" />
  </div>
  <div class="w-1/4">
    <img src="resources/noimage.png" class="rounded border border-gray-300" id="i4" />
  </div>
</div>

<div class="mt-6">
  <input type="file" multiple id="imageUploader" class="hidden" />
  <label for="imageUploader" onclick="UploadImages()" class="inline-block px-4 py-2 bg-blue-600 text-white rounded cursor-pointer hover:bg-blue-700">
    Upload Images
  </label>
</div>



      </div>

      <div>
        <label for="capacity" class="block text-sm font-medium text-gray-700">Capacity</label>
        <input type="text" id="capacity" name="capacity" placeholder="e.g., 2 adults + 1 child" required class="mt-1 w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="bed_type" class="block text-sm font-medium text-gray-700">Bed Type</label>
        <input type="text" id="bed_type" name="bed_type" placeholder="e.g., King Size Bed" required class="mt-1 w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="room_size" class="block text-sm font-medium text-gray-700">Room Size</label>
        <input type="text" id="room_size" name="room_size" placeholder="e.g., 30 m²" required class="mt-1 w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div>
        <label for="facilities" class="block text-sm font-medium text-gray-700">Facilities</label>
        <textarea id="facilities" name="facilities" rows="3" placeholder="e.g., Wi-Fi, A/C, TV, Mini Fridge" required class="mt-1 w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
      </div>

      <div>
        <label for="availability" class="block text-sm font-medium text-gray-700">Availability Date</label>
        <input type="date" id="availability" name="availability" class="mt-1 w-full rounded-md border border-gray-300 p-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <p id="mess"></p>

      <div class="text-center">
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition duration-200" onclick="Product()" >
          Add Details
        </button>
      </div>

    </form>
  </div>
   <script src="script.js"></script>
</body>
</html>
