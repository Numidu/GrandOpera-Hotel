<?php
// Assuming you already have a valid DB connection $conn
include "Connection1.php";

extract($_POST);

// Validate fields
if (empty($_POST["n"])) {
    echo "Name is empty";
} else if (empty($_POST["p"])) {
    echo "Price is empty";
} else if (empty($_POST["c"])) {
    echo "Capacity is empty";
} else if (empty($_POST["b"])) {
    echo "Bed is empty";
} else if (empty($_POST["r"])) {
    echo "Room is empty";
} else if (empty($_POST["f"])) {
    echo "Facility is empty";
} else if (empty($_POST["d"])) {
    echo "Date is empty";
} else if (empty($_FILES["image"])) {
    echo "Image is empty";
} else {
    // Clean inputs
    $name = mysqli_real_escape_string($conn, $_POST["n"]);
    $price = mysqli_real_escape_string($conn, $_POST["p"]);
    $capacity = mysqli_real_escape_string($conn, $_POST["c"]);
    $bed = mysqli_real_escape_string($conn, $_POST["b"]);
    $room = mysqli_real_escape_string($conn, $_POST["r"]);
    $facility = mysqli_real_escape_string($conn, $_POST["f"]);
    $date = mysqli_real_escape_string($conn, $_POST["d"]);

    // Insert into product table
    $sql = "INSERT INTO product (name, price, capacity, bed, size, facilities, date) 
            VALUES ('$name', '$price', '$capacity', '$bed', '$room', '$facility', '$date')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $product_id = $conn->insert_id;

        $uploaded_count = 0;
        $allowed_types = ["image/jpeg", "image/png", "image/svg+xml"];

        foreach ($_FILES["image"]["tmp_name"] as $index => $tmp_name) {
            if ($uploaded_count > 5) break;

            $type = $_FILES["image"]["type"][$index];
            $name = $_FILES["image"]["name"][$index];

            if (in_array($type, $allowed_types)) {
                $ext = pathinfo($name, PATHINFO_EXTENSION);
                $file_name = "resources/product_images/" . uniqid("product_") . "." . $ext;

                if (move_uploaded_file($tmp_name, $file_name)) {
                    mysqli_query($conn, "INSERT INTO product_image (path, product_id) VALUES ('$file_name', '$product_id')");
                    $uploaded_count++;
                } else {
                    echo "Failed to upload image: $name<br>";
                }
            } else {
                echo "Invalid image type for: $name<br>";
            }
        }

        if ($uploaded_count == 0) {
            echo "Invalid image count";
        } else {
            echo "Success";
        }
    } else {
        echo "Product insert failed: " . mysqli_error($conn);
    }
}
?>
