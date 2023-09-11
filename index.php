<!DOCTYPE html>
<html>

<head>
    <title>Generatore Password</title>
</head>

<body>
    <h1>Genera Password</h1>
    <form action="index.php" method="GET">
        Lunghezza della password: <input type="number" name="length" min="1" max="100" required>
        <input type="submit" value="Genera Password">
    </form>

    <?php
    include 'function.php';

    if (isset($_GET['length'])) {
        $password = generatePassword($_GET['length']);
        echo "<p>La tua password sicura è: $password</p>";
    }

    function generatePassword($length)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
        $password = '';
        $charLength = strlen($characters);

        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, $charLength - 1)];
        }

        return $password;
    }
    ?>
</body>

</html>