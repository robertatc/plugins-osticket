<?php

return array(
    'id' =>             'auth:oath2', # notrans
    'version' =>        '0.1',
    'name' =>           'Oauth2 Authentication and Lookup',
    'author' =>         'Jared Hancock',
    'description' =>    'Provides a configurable authentication backend
        for authenticating staff and clients using an OATH2 server
        interface.',
    'url' =>            'http://www.osticket.com/plugins/auth/oauth',
    'plugin' =>         'authentication.php:OauthAuthPlugin',
    'requires' => array(
        "ohmy/auth" => array(
            "version" => "*",
            "map" => array(
                "ohmy/auth/src" => 'lib',
            )
        ),
    ),
);

?>
