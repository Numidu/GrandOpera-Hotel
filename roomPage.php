<?php  include ("Connection1.php");
$id=$_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Villa Gallery</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
  <div class="w-screen h-screen mx-auto p-4 ">
    <div class="flex flex-col lg:flex-row gap-6 h-full">

      <!-- Left Side: Vertical Gallery -->
      <div class="flex lg:flex-col gap-4 w-screen   lg:w-1/4">
        <?php
          
          $sql = "SELECT path FROM product_image WHERE product_id = $id limit 4";
          $result = mysqli_query($conn, $sql);

          $images = [];
          while ($row =$result->fetch_assoc()) {
              $images[] = $row['path'];
          }

          foreach ($images as $img) {
              echo "<img src='$img' class='rounded-lg h-40 w-full object-cover' />";
          }
        ?>
      </div>

      <!-- Center: Main Image -->
      <div class="w-full lg:w-2/4">
        <?php if (!empty($images)): ?>
          <img src="<?= $images[0] ?>" class="rounded-xl w-full h-full object-cover shadow-lg" />
        <?php endif; ?>
      </div>

      <!-- Right Side: Info Section -->
      <div class="w-full  lg:w-1/4 bg-purple-100 p-6 rounded-xl shadow-lg space-y-16">
        <h2 class="text-2xl font-bold text-purple-900">Villa in Kecamatan Ubud</h2>
        <p class="text-gray-700">Canggu Villa 1BR Private Pool Albimanyu</p>

        <div class="grid grid-cols-2 gap-4 text-lg">
          <div>
            <h3 class="font-semibold text-gray-800">Bathroom</h3>
            <ul class="list-disc ml-5 text-gray-600">
              <li>Hair dryer</li>
              <li>Shampoo</li>
              <li>Hot water</li>
              <li>Shower gel</li>
            </ul>
          </div>
          <div>
            <h3 class="font-semibold text-gray-800">Bedroom</h3>
            <ul class="list-disc ml-5 text-gray-600">
              <li>Essentials</li>
              <li>Hangers</li>
              <li>Safe</li>
              <li>Wardrobe</li>
            </ul>
          </div>
        </div>

        <div class="bg-white rounded-lg p-4 shadow">
          <p class="font-semibold">Hosted by <span class="text-purple-700">Grün</span></p>
          <p class="text-gray-500 text-lg">⭐ 340 reviews · Superhost</p>
        </div>

        <div class="text-right">
          <p class="text-lg font-bold text-purple-900">$526 <span class="text-sm text-gray-600">/ night</span></p>
          <button class="mt-2 px-4 py-2 bg-purple-700 text-white rounded-lg hover:bg-purple-800 transition">Reserve</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
