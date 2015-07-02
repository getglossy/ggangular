<?php
require_once('email.php');
/**
 * If you variables may contain single and double quotes in the strings be sure
 * to escape them with addslashes($str);
 */

$email = new email;

try
{
    $email->to = 'will@getglossy.com.au';
    $email->from = 'someone@example.com.au';
    $email->recieverName = 'Dale Moore';
    $email->senderName = 'Will Shalders';
    $email->subject = 'Test email';
    $email->message = <<<MESSAGE
    Dear Dale,

    This is a test meassage.
    Please feel free to delete this if you wish.

    Regards,
    Will
MESSAGE;

    if ( $email->actionSubmit() )
    {
        echo '<h1>email sent</h1>';
    }
    else
    {
        echo '<h1>email failed</h1>';
    }
}
catch (Exception $e)
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}