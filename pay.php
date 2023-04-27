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
        <form method="post" action="payment.php">
            <div class="form-control">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-control">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-control">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" id="phone" required>
            </div>
            <div class="form-control">
                <label for="amount">Amount</label>
                <input type="number" name="amount" id="amount" min="1" required>
            </div>
            <div class="form-control">
                <label for="card">Credit/Debit Card Number</label>
                <input type="text" name="card" id="card" required>
            </div>
            <div class="form-control">
                <label for="expiry">Expiry Date</label>
                <input type="month" name="expiry" id="expiry" required>
            </div>
            <div class="form-control">
                <label for="cvv">CVV</label>
                <input type="text" name="cvv" id="cvv" maxlength="3" required>
            </div>
            <div class="form-control">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
