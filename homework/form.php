<?php
//debug($_FILES);
    if (isset($_FILES['my_file']) && !empty($_FILES['my_file'])) {
        for ($i = 0; $i < count($_FILES['my_file']['name']); $i++) {
            if ($_FILES['my_file']['name'][$i]){
                $path = __DIR__."/../homework/upload/".$_FILES['my_file']['name'][$i];
                    if (file_exists($path)) {
                        $path = __DIR__."/../homework/upload/".uniqid().$_FILES['my_file']['name'][$i];
                    }
                move_uploaded_file($_FILES['my_file']['tmp_name'][$i],$path);
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="my_file[]" multiple="multiple">
    <br><br>
    <button type="submit">Send</button>
</form>
</body>
</html>