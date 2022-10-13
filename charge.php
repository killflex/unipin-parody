    <?php

    use function PHPSTORM_META\map;

    require_once('vendor/autoload.php');
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/customer.php');
    require_once('models/transaction.php');

    header('Content-Type: application/json');

    \Stripe\Stripe::setApiKey('sk_test_51KczwTHzGIr65Dz3sxChqpmFSRfLUHeTapV7mtTCPT8kAu9hGwyLVEN1ZLPlax0KZCn5Tzy5XFe7vmPO6xQ2Zeek00xBFK9OgK');

    // Sanitize POST Array
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

    $nominal = $POST['nominal'];
    $email = $POST['email'];
    $token = $POST['stripeToken'];

    // Create Customer In Stripe
    $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
    ));

    // Charge Customer
    $charge = \Stripe\Charge::create(array(
        "amount" => $nominal,
        "currency" => "usd",
        "description" => "Steam Wallet (USD)",
        "customer" => $customer->id
    ));

    // CustomerData
    $customerData = [
        'id_customer' => $charge->customer,
        'email' => $email
    ];

    // print_r($charge);

    // Instatiate Customer
    $customer = new Customer();

    // Add Customer to DB
    $customer->addCustomer($customerData);

    // TransactionsData
    $transactionData = [
        'id_transaction' => $charge->id,
        'customer_id' => $charge->customer,
        'product' => $charge->description,
        'amount' => $charge->amount,
        'currency' => $charge->currency,
        'status' => $charge->status,
        'country' => $charge->country,
        'risk' => $charge->risk,
        'card' => $charge->last4
    ];

    // Instatiate Transactions
    $transaction = new Transactions();

    // Add Transactions to DB
    $transaction->addTransactions($transactionData);

    // Redirect to Success
    header('Location: send_email.php?tid=' . $charge->id . '&product=' . $charge->description . '&email=' . $email . '&amount=' . $charge->amount . '&currency' . $charge->currency); 
