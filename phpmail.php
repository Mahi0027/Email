<html>
    <head>
    <link rel="icon" href="image/logo.svg" type="image/gif" sizes="16x16">
    </head>
</html>
<?php
require 'vendor/autoload.php';
$api_key = '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';


if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $fromemail = $_POST['From'];
    $toemail = $_POST['To'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $email = new \SendGrid\Mail\Mail(); 
    $email->setFrom($fromemail, $name);
    $email->setSubject($subject);
    $email->addTo($toemail);
    $email->addContent("text/html", $message);
    // $email->addContent(
    //     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
    // );
    
    $sendgrid = new \SendGrid($api_key);
    $response = $sendgrid->send($email);
    $statuscode = $response->statusCode();
    if($response->statusCode()==NULL){
        $statuscode=400;
    }
    
    try {
        ?>
            <form action="home.php" method="post" id="success">
                <input type="hidden" name="statusvalue" value="<?php echo $statuscode; ?>" >
                <button type="submit" name="success" style="display:none;"></button>
            </form>
        <?php
    } catch (Exception $e) {
        
        ?>
        
            <form action="home.php" method="post" id="success">
                <input type="hidden" name="statusvalue" value="<?php echo 400; ?>" >
                <button type="submit" name="success" style="display:none;"></button>
            </form>
        <?php
        // echo 'Caught exception: '. $e->getMessage() ."\n";
    }finally{
        ?>
            <script type="text/javascript">
                document.getElementById('success').submit();
            </script>        
        <?php
    }
    ?>   
    <?php
}
?>
