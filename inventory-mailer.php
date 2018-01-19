<?php
        include '../../../wp-load.php';

        if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

            // sanitize form values
            $name    = sanitize_text_field( $_POST["sb-name"] );
            $email   = sanitize_email( $_POST["sb-email"] );
            $phone =   sanitize_text_field( $_POST["sb-phone"] );
            $subject = sanitize_text_field( $_POST["sb-subject"] );
            $message = $_POST["sb-enquiry"];

            // get the blog administrator's email address
            //$to = get_option( 'admin_email' );
            $to = 'luke@torxmedia.com';
            $headers = "From: $name <$email>" . "\r\n";
            
            if ( wp_mail( $to, $subject, $message, $headers ) ) {
                echo 'Message Sent Successfully';
            } else {
                echo 'An unexpected error occurred';
            }
        }else{
            echo 'Posts only!';
        }
?>