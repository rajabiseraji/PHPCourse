
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <form action="test.php" enctype="multipart/form-data" method="POST">
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
            <input type="file" name="file_upload" />
            <input type="submit" name="submit" value="upload" />
        </form>

        <?php
        $upload_errors = array(
            // http://www.php.net/manual/en/features.file-upload.errors.php
            UPLOAD_ERR_OK 				=> "No errors.",
            UPLOAD_ERR_INI_SIZE  	=> "Larger than upload_max_filesize.",
            UPLOAD_ERR_FORM_SIZE 	=> "Larger than form MAX_FILE_SIZE.",
            UPLOAD_ERR_PARTIAL 		=> "Partial upload.",
            UPLOAD_ERR_NO_FILE 		=> "No file.",
            UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
            UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
            UPLOAD_ERR_EXTENSION 	=> "File upload stopped by extension."
        );
        if(isset($_POST['submit'])) {
            // process the form data
            $tmp_file = $_FILES['file_upload']['tmp_name'];
            $target_file = basename($_FILES['file_upload']['name']);
            $upload_dir = "uploads";

            // You will probably want to first use file_exists() to make sure
            // there isn't already a file by the same name.

            // move_uploaded_file will return false if $tmp_file is not a valid upload file
            // or if it cannot be moved for any other reason
            if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)) {
                $message = "File uploaded successfully.";
            } else {
                $error = $_FILES['file_upload']['error'];
                echo $message = $upload_errors[$error];
            }

        }

        ?>
</body>
</html>
