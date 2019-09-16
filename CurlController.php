<?php
    $email = "mahipal001573985@gamil.com";
    $name = "Mahipal Singh";
    $body = "Hey man, how are you? <br><br><a href='https://google.com'>Google</a>";
    $subject = "Test email";
    // $api_key = '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';
    $api_key = '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';
    // echo $api_key;
    $header = array(
        'Authorization: Bearer $api_key',
        'Content-Type: application/json'
    );

    $data = array(
        "personalizations" => array(
            array(
                "to" => array(
                    array(
                        "email" => $email,
                        "name" => $name
                    )
                )
            )
        ),
        "from" => array(
            "email" => "mahi456828@gmail.com"
        ),
        "subject" => $subject,
        "content" => array(
            array(
                "type" => "text/html",
                "value" => $body
            )
        )
    );


    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($data));
    curl_setopt($ch, CURL_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    // curl_setopt($ch, CURLOPT_SSLVERSION, 1);
    // curl_setopt($ch, CURLOPT_SSL_CIPHER_LIST, 'TLSv1');
    $error = curl_error($ch);
    echo $error;
    $response = curl_exec($ch);
    echo $response;
    curl_close($ch);
?>
