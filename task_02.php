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

        class MessageFileLogger implements loggingInterfaceSystem{
            public function logging($userMessages){
                echo"message has been logged" . "<br/>";
            }
        }

        class ForDatabaseLogger implements loggingInterfaceSystem{
            public function logging($userMessages){
                echo"messageData has been logged" . "<br/>";
            }
        }

        $_File = new MessageFileLogger();

        $_File->logging("User is Successfully login");
        $_File->logging("User is Successfully register");

        $_File = new ForDatabaseLogger();

        $_File->logging("User is Successfully login");
        $_File->logging("User is Successfully register");
    ?>
</body>
</html>