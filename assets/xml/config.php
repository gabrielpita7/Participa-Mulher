<?php if(basename(__file__) == 'config.php') exit; ?>
<?xml version="1.0" encoding="utf-8"?>
<xml>
    <Addresses>
        <!-- put your email here -->
        <address>dankov.theme@gmail.com</address>
    </Addresses>
    <Config>
        <smtp>
        <!-- smtp gmail config -->
            <use>no</use>
            <auth>yes</auth>
            <secure>tls</secure>
            <host>smtp.example.com</host>
            <username>example@server.com</username>
            <password>123456</password>
            <port>25</port>
        </smtp>
        <charset>iso-8859-1</charset>
    </Config>
</xml>
