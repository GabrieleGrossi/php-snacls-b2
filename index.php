<!--
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
- name sia più lungo di 3 caratteri,
- mail contenga un punto e una chiocciola e
- age sia un numero.
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack php </title>
</head>
<body>
    <?php
        $accessDenied = 'Mi dispaice, ma hai sbagliato ad inserire nome, email o età';
        $accessGranted = 'Access granted';


        if ( empty($_GET['name'])
        || empty($_GET['mail'])
        || empty($_GET['age'])){
            echo 'Please insert your name, email and age';
        } else {

            if (!strlen($_GET['name']) > 3){
                echo $accessDenied;
            } elseif (! (str_contains($_GET['mail'], '@') &&  str_contains($_GET['mail'], '.')) ){
                echo $accessDenied;
            } elseif (!is_numeric($_GET['age'])){
                echo $accessDenied;
            } else {
                echo $accessGranted;
            }
        }
    ?>

    <form action="./index.php" method="get">
        <label for="word">
            Please compila il form
        </label>
        <input type="text" name="name" id="word" placeholder="Insert your name">
        <input type="text" name="mail" placeholder="Insert your email">
        <input type="number" name="age" placeholder="Insert your age">
        <input type="submit" value="Enter">
    </form>
</body>
</html>