<?php

//Header location

if (!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['message'])) {

    header('Location: index.php');
    exit();

}

//Set Get's variables

if (isset($_GET['ajax'])) {

    if ($_GET['ajax'])
        $ajax = true;
    else 
        $ajax = false;

} else {
    $ajax = false;
}

//Functions

function check() {

    $validation = true;

    $name = $_POST['name'];

    if (strlen($name) < 3 && strlen($name) > 40 && ctype_alnum($name) == false) {
        $validation = false;
    }

    $email = $_POST['email'];

    $email_filter = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (filter_var($email_filter, FILTER_SANITIZE_EMAIL == false) || ($email_filter != $email)) {
        $validation = false;
    }

    $message = $_POST['message'];

    if (strlen($message) < 15) {
        $validation = false;
    }

    if ($validation)
        return true;
    else
        return false;

}

function respond( $type, $mute ) {

    if ( $mute ) {

        if ( $type )
            echo json_encode( array( "status" => true ) );
        else
            echo json_encode( array( "status" => false ) );

    } else {

        if ( $type )
            echo "Wiadomość została wysłana poprawnie!";
        else
            echo "Wiadomość nie została wysłana poprawnie! Coś poszło nie tak!";

    }
         
}
    
//Main

if ( check() ) {

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "<br>";
    $from = "Wiadomość od: <br>Email: " . $_POST['email'] . "<br>" . $_POST['name'] . "<br>----------------------------------------------<br>";
    $message = $from . $_POST['message'];

    if( @mail('kontakt@szplotka.pl', "Wiadomość od " . $_POST['email'], $message, $headers) ) {

        respond(true, $ajax);

    } else {

        respond(false, $ajax);

    }


} else {

    respond(false, $ajax);

}

//respond(false, $ajax);

?>