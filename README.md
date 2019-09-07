# PhpAmp4Email
PhpAmp4Email

1) sudo apt-get install ssmtp

After Successful Install add the following details for the smtp

vi /etc/ssmtp/ssmtp.conf

mailhub=smtp.gmail.com:587
UseSTARTTLS=YES
AuthUser=xxxx@gmail.com
AuthPass=xxxx



2) Also install sudo apt-get install php7.0-imap 
After installing enable extension=php_imap.so

/etc/php/7.0/apache2/php.ini

3) That's it. Now you can use php mail function to send mails.
