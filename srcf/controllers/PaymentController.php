<?php



class PaymentController extends Controller
{
    public function index()
    {
        return self::view('donate');
    }

    public function paying()
    {

        $amount = $_POST['amount'];
        $description = $_POST['description'];


        //echo $amount;    
        //echo "you are nowpaying";
        //still need to add the amount.
        require_once("vendor/autoload.php");

        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey("test_5vAA4EFuGw4yV9bzsxE8tmzPNfheJz");

        $payment = $mollie->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => "10.00"
            ],
            "description" => "thank you for donating to my heroine addiction",
            "redirectUrl" => "https://629860.infhaarlem.nl/"
        ]);

        header("Location: " . $payment->getCheckoutUrl(), true, 303);
     }
}