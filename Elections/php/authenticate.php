<?php

function authenticate($user, $password, $assignroles = true) {
        // Active Directory server
        $ldap_host = "ldaps://dc3.canterburyschool.local";
        $ldaplocaldomain="canterburyschool.local";
	$ldap_port = '636';

        // Connect to active directory
        $ldap = ldap_connect($ldap_host, $ldap_port);
  	ldap_set_option(NULL,LDAP_OPT_DEBUG_LEVEL,7);
        ldap_set_option($ldap,LDAP_OPT_PROTOCOL_VERSION,3);
        ldap_set_option($ldap,LDAP_OPT_REFERRALS,0);

	if($ldap){
        	$ldap_bind = ldap_bind($ldap, $user."@".$ldaplocaldomain, $password);
		
        	if ($ldap_bind && !empty($password) ) {
            		return true;
    		} else {
        		return false;
    		}
	}
        @ldap_close($ldap);
}

?>

