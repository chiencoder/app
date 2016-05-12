<!DOCTYPE html>
<html>
    <head>
        <title><?php echo isset($title)? $title : 'khong co biet title'; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div><?php echo isset($content)? $content : 'khong co bien noi dung'; ?></div>
    </body>
</html>