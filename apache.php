<?php

//add_new_domain();

class Apache {

    function add_new_domain($user, $domain, $alias) {
        $document_root = "/home/$user/whatever";
        $server_name = "$domain";
        $server_alias = "$alias";
        
        ob_start();
        include('templates/apache/domain.conf');
        $domain_file = ob_get_clean();
        
        if ( file_put_contents("/tmp/$user-apache.conf", $domain_file) !== true ) {
            return false;
        } else {
            return true;
        }
    }

}