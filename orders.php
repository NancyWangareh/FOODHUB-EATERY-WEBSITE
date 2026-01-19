<?php
session_start();

if (isset($_POST['submit'])) {
    include 'config.php';

    // We change the keys to match your HTML exactly:
    $Name          = $_POST['txtname'];         // Matches name="txtname"
    $ID_Number     = $_POST['txtId'];           // Matches name="txtId"
    $Meal          = $_POST['Main_Dishes'];     // Change HTML to Main_Dishes (no spaces)
    $Side_dish     = $_POST['Side_Dish'];       // Matches name="Side Dish"
    $Dessert       = $_POST['Desserts'];        // Matches name="Desserts"
    $Beverage      = $_POST['Beverages'];       // Matches name="Beverages"
    $Pickup_Point  = $_POST['Pickup_point'];    // Matches name="Pickup point"
    $Phone_Number  = $_POST['txtphonenumber'];  // Matches name="txtphonenumber"

    $sql = "INSERT INTO orders (`Name`, ID_Number, Meal, Side_Dish, Dessert, Beverage, Pickup_Point, Phone_Number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssssssss", $Name, $ID_Number, $Meal, $Side_dish, $Dessert, $Beverage, $Pickup_Point, $Phone_Number);
        
        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
            echo "<script>
                    alert('Order saved successfully!');
                    window.location.href='Project.php';
                  </script>";
            exit();
        } else {
            die("Error executing: " . $stmt->error);
        }
    } else {
        die("Error preparing: " . $conn->error);
    }
}
?>