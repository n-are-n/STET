<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=x`, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="paypal-payment-button"></div>
    <script src="https://www.paypal.com/sdk/js?client-id=AY_txW3QeCYzYvwmuh43ilwYiVdkQWnDiKeNc3EUjkE1snzaGpXFIjEiz4KglGEB6mu-sNEyBeR9GHB6"></script>
    <script>
        paypal.Buttons({
            style: {
                shape: 'pill'
            },
        }).render('#paypal-payment-button');
    </script>
</body>

</html>
