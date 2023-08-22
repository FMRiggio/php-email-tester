# PHP Email Tester
=============

A little script to test HTML emails

It uses PHPMailer.

####Customize your .env configuration
```
EMAIL_HOST=
EMAIL_PORT=
EMAIL_USERNAME=
EMAIL_PASSWORD=
EMAIL_ENCRYPTION=TLS
EMAIL_FROM_ADDRESS=
EMAIL_FROM_NAME=
EMAIL_TO_ADDRESS=
EMAIL_TO_NAME=
```


####Add the HTML Email template
```html
<!-- email.html -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Newsletter Title</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta charset="UTF-8">
</head>

<body>

    <h1>Email template body</h1>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a dolor vehicula, aliquam nisl pretium, porta sapien. Nulla id tempor lacus.
        Vestibulum fermentum ipsum libero, nec tristique erat ultricies eget. Aenean a volutpat orci, in tempus lorem. Ut velit erat, ornare ac feugiat dignissim, venenatis ut turpis...
    </p>

</body>
</html>
```



####Launch the PHP script
```php
$ php send.php
```

