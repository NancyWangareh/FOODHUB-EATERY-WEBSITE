<?php
include 'config.php';
include 'orders.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
    <body>
        <div class="page">
        <main class="container" role="main" aria-labelledby="about-title">
            <div class="h1">
        <h1>Make an Order</h1>
    
        <form method="POST" action="orders.php">
            <table width = "70%" align="centre">
                <tr>
                    <td><strong>Name</strong> </td>
                    <td><input type="text" name="txtname"  placeholder="Your Name" required></td>
                </tr>
                <tr>
                    <td><strong>ID_Number</strong> </td>
                    <td><input type="text" name="txtId" placeholder="Your ID Number" required></td>
                </tr>
                <tr>
                <td><strong>Meal</strong></td>
                <td>
                    <select name="Main Dishes"  id="Main dishes" placeholder="Main Dishes" required >
                        <option selected >choose</option>
                        <option value="Nyama Choma">Nyama Choma</option>
                        <option value="Ugali Beef">Ugali Beef</option>
                        <option value="1kg Nyama Choma" >1kg Nyama Choma</option>
                        <option  value="Ugali with Sukumawiki">Ugali with Sukumawiki</option>
                        <option value="Fish stew">Fish stew</option>
                         <option value="Plain Rice">Plain Rice</option>
                        <option value="Plain Ugali">Plain Ugali</option>
                        <option value="Rice/Ugali with cereals">Rice/Ugali with cereals</option>
                        <option value="Githeri">Githeri</option>    
                    </select>
                </td></tr>  
                <tr>
                <td><strong>Side_Dish / Dessert / Beverage</strong></td>
                <td>
                    <select name="Side Dish"  id="" placeholder="Side Dish" >
                        <option selected >choose</option>
                        <option value="none">None</option>
                        <option value="Chapati">Chapati</option>
                        <option value="Samosas">Samosas</option>
                        <option value="Mandazi">Mandazi</option>
                    </select>
                    <select name="Desserts"  id="" placeholder="Desserts" >
                        <option selected >choose</option>
                        <option value="none">None</option>
                        <option value="Mango Sorbet">Mango Sorbet</option>
                        <option value="Coconut Rice Pudding">Coconut Rice Pudding</option>
                        <option value="Fruit Salad">Fruit Salad</option>

                    </select>
                    <select name="Beverages"  id="" placeholder="Beverages" >
                        <option selected >choose</option>
                        <option value="none">None</option>
                        <option value="Kenyan Chai">Kenyan Chai</option>
                        <option value="Fresh Juice">Fresh Juice</option>
                        <option value="Cocktail">Cocktail</option>
                        <option value="Coconut Water">Coconut Water</option>
                        <option value="Coffee">Coffee</option>
                        <option value="Hot cocoa">Hot cocoa</option>
                    </select>
                </td></tr>
                <tr>
                <td><strong>Pickup_Point</strong></td>
                <td>
                    <select name="Pickup point"  id="" placeholder="Pickup Point" >
                        <option selected >choose</option>
                        <option >FuelMart, Ndagani</option>
                        <option >Almark, Mungoni</option>
                        <option >Rubis, Lowland</option>
                        <option >Marine Park, Ndagani</option>
                        <option >Opposite Gate F, Mungoni</option>
                        <option > Near Carlifonia Apartments, Kibumbu</option>
                        <option >Opposite Magunas Supermarket, Chuka Town</option>
                    </select>
                </td></tr>
                <tr>
                    <td><strong>Phone_Number</strong> </td>
                    <td><input type="text" name="txtphonenumber" placeholder="Phone Number" required></td>
                </tr>
                <div class="form-group">

                <tr>
                
                    <td><button type="submit" name="submit" value="Order" onclick="displayMessage()">Order</button>
                    <script src="submit.js"></script></td>
                    <td><button type="reset" value="cancel">Reset</button></td>
               
                </tr>
            
                </div></div></div>
            </table>
        </form>
    </body>
</html>
