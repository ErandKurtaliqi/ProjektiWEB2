<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Payment Form</title>
    <link rel="stylesheet" href="pay.css">
</head>
<body>
    
    <div class="container">
        <h2>Online Payment Form</h2>
        <form method="post" action="pay-php.php">
            <div class="form-control">
                <label for="name">First name</label>
                <input type="text" name="firstname" id="name" required>
            </div>
            <div class="form-control">
                <label for="name">Last name</label>
                <input type="text" name="lastname" id="name" required>
            </div>
            <div class="form-control">
            <select 
                 name="address" 
                 id="address"
                >
                <option>Prishtinë</option>
                <option>Mitrovicë</option>
                <option>Pejë</option>
                <option>Prizeren</option>
                <option>Ferizaj</option>
                <option>Gjilan</option>
                <option>Gjakovë</option>
                <option>Podujevë</option>
                <option>Vushtrri</option>
                <option>Suharekë</option>
                <option>Rahovecë</option>
                <option>Drenas</option>
                <option>Lipjan</option>
                <option>Malishevë</option>
                <option>Kamenicë</option>
                <option>Viti</option>
                <option>Deçan</option>
                <option>Istog</option>
                <option>Klinë</option>
                <option>Skenderaj</option>
                <option>Dragash</option>
                <option>Fushë Kosovë</option>
                <option>Kaçanik</option>
                <option>Shtime</option>
                <option>Obiliq</option>
                <option>Leposaviq</option>
                <option>Graçanicë</option>
                <option>Han i Elezit</option>
                <option>Zveqan</option>
                <option>Shtërpcë</option>
                <option>Novobërdë</option>
                <option>Zubin Potok</option>
                <option>Junik</option>
                <option>Mamusha</option>
                <option>Ranillug</option>
                <option>Kllokoti</option>
                <option>Parteshi</option>
        </select>
            </div>
            <div class="form-control">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-control">
                <label for="id_person">Personal identification</label>
                <input type="number" name="id_person" id="id_person" required>
            </div>
            <div class="form-control">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" required>
            </div>
            <div class="form-control">
                <label for="card">Credit/Debit Card Number</label>
                <input type="text" name="card" id="card" required>
            </div>
            <div class="form-control">
                <input type="submit" name="submit" value="Submit">
            </div>
            <div class="form-image">
   <img src="images/visa.png" alt="Image 1">
   <img src="images/mastercard.png" alt="Image 2">
   <img src="images/paypal.png" alt="Image 3">
</div>
        </form>
    </div>
</body>
</html>
