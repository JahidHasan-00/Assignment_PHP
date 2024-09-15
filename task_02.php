<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface Implementation</title>
</head>
<body>
<!-- Task 2: Interface Implementation**
    Develop a logging system using interfaces. Create classes that implement a logging interface and demonstrate their usage. -->

    <?PHP 
        interface loggingInterfaceSystem{
            public function logging($userMessages);
        }

        class FileLogger implements loggingInterfaceSystem{
            public function logging($userMessages){
                file_put_contents("user.msg", $userMessages . "<br/>", FILE_APPEND);
            }
        }

        $_File = new FileLogger();

        $_File->logging("User is Successfully login");
        $_File->logging("User is Successfully register");
    ?>
</body>
</html>