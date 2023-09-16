<?php
    session_start();

require_once('vendor/autoload.php');
$_SESSION['Checkout']=$_POST;
$total_bill=$_SESSION['Checkout']['price'];
$total =$total_bill*100;
$shoping="Checkout";
\Stripe\Stripe::setApiKey('sk_test_lHcxrCqEsJZZME61dGc6Uz9n');
$session = \Stripe\Checkout\Session::create([
'payment_method_types' => ['card'],
'line_items' => [[
'price_data' => [
    'currency' => 'usd',
    'product_data' => [
        'name' => $shoping,
    ],
    'unit_amount' => $total,
],
'quantity' => 1,
]],
'mode' => 'payment',
'success_url' => 'http://localhost/php-works/p4/stripe/payment.php',
'cancel_url' => 'http://localhost/php-works/p4/stripe/fail_payment.php',
]);
?>
<html>
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<script>
    var stripe = Stripe('pk_test_ZWkO5QcbNkrclct835JtJRfK');
    stripe.redirectToCheckout({
        sessionId: "<?php echo $session->id; ?>"
    });
</script>
</body>
</html>