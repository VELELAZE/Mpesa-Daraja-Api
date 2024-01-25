<?php
if (isset($_POST['submit']))
{

    $amount = '300'; // Amount to transact
    $phonenuber = $_POST['phone']; // Phone number paying
    $Account_no = 'VELELAZE SOFTWARES'; // Enter account number (optional)
    $url = 'https://tinypesa.com/api/v1/express/initialize';
    $data = array(
        'amount' => $amount,
        'msisdn' => $phonenuber,
        'account_no' => $Account_no
    );
    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'ApiKey: Garp5ROyNo6'
    );
    $info = http_build_query($data);
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    $resp = curl_exec($curl);

    if ($resp === false) {
        echo "CURL ERROR: " . curl_error($curl);
    } else {
        $msg_resp = json_decode($resp);
        if ($msg_resp->success == 'true') 
        
        {
            header("location:success.php");
        } 
        
        else 
        {
            header("location:errors.php");
        }
    }
    
}
?>