<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Orders</title>
</head>
<body>
<form action="addOrders-php.php" method="post"><br><br>
<label for="id_orders">Shto id e orders</label><br>
    <input type="number" placeholder="id_orders" id="id_orders" name="id_orders"><br><br>
    <label for="id_booking">Shto id e booking</label><br>
    <input type="number" placeholder="id_booking" id="id_booking" name="id_booking"><br><br>
    <label for="id_user_reg">Shto id e perdoruesit</label><br>
    <input type="number" placeholder="id_user_reg" id="id_user_reg" name="id_user_reg"><br><br>
    <label for="id_countries">Shto id e countries</label><br>
    <input type="number" placeholder="id_countries" id="id_countries" name="id_countries"><br><br>
    <label for="id_hotels">Shto id e hotels</label><br>
    <input type="number" placeholder="id_hotels" id="id_hotels" name="id_hotels"><br><br>
    <label for="id_company_fly">Shto id e company_fly</label><br>
    <input type="number" placeholder="id_company_fly" id="id_company_fly" name="id_company_fly"><br><br>
    <label for="user_name">Shto user_name</label><br>
    <input type="text" placeholder="user_name" id="user_name" name="user_name"><br><br>
    <button type="submit">Add</button>
</form>

</body>
</html>