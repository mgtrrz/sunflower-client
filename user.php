<?php

class User {
    
    function add_user($user) {
    
        if ( shell_exec("useradd -m $username") ) {
            if ( mkdir("/home/$username/public_html/") ) {
                chmod("/home/$username", 0711);
                chmod("/home/$username/public_html/", 0755);
                return true;
            } else {
                echo "Error, could not create user public_html directory";
                return false;
            }
        } else {
            echo "Could not create user.";
            return false;
        }
    
    }
    
    function remove_user($user) {
        if ( shell_exec("userdel -r $username") ) {
            echo "Deleted user.";
            return true;
        } else {
            echo "Could not delete user.";
            return false;
        }
    
    }
    
}