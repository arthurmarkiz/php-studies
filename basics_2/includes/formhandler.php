<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $favouritepet = htmlspecialchars($_POST['favouritepet']);

    // A little security handler
    if (empty($firstname || empty($lastname))) {
        header('Location: ../form.php');
        exit();
    }
    
    echo "These are the data, that the user submitted: <br/><br/>";
    echo $firstname . '<br/>';
    echo $lastname . '<br/>';
    echo $favouritepet . '<br/>';

    header('Location: ../form.php');

}
else {
    header('Location: ../form.php');
}