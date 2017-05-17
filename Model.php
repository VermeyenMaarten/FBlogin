<?php

class Model
{

    public function __construct(){


       echo '<form action="https://www.facebook.com/v2.9/dialog/oauth?">';
       			echo '<input type="hidden" name="client_id" value="809797432512443" />';
    			echo '<input type="hidden" name="redirect_uri" value="http://syntra.dev/login_success.php/" />';
    			echo '<input type="hidden" name="response_type" value="code" />';
       		echo '<input type="submit" value="Login with facebook" />';
       echo '</form> ';

    }
}