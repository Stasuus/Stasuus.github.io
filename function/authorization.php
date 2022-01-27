<?php
    $link = mysqli_connect('localhost','root','root','university');

    if(mysqli_connect_errno()){
        echo 'asd';
        die();
    }

    $login = $_POST['Login'];
    $password = $_POST['Password'];

    print_r($password);
    die();

    $position = [];

    if($login === ''){
        $position[] = 'login';
    }

    if($password === ''){
        $position[] = 'password';
    }

    if(!empty($position)){
        $resulte = [
            "status" => false,
            "type" => 1,
            "msg" => "Проверьте правильность заполнения полей",
            "position" => $position
        ];

        echo json_encode($resulte);
        die();
    }

    $sql = "SELECT * FROM `person` WHERE `Login` = '$login' AND `Password` = '$password'";
    $result = mysqli_query($link, $sql);

    $base = mysqli_fetch_assoc($result);

    echo $base['id'];
    die();

    if(mysqli_num_rows($result) < 0 ){
        $resulte = [
            "status" => false,
            "type" => 1,
            "msg" => "пользователь не найден",
            "position" => $position
        ];

        echo json_encode($resulte);
        die();
    }else{
        $base = mysqli_fetch_assoc($result);
        setcookie('LastName', $base['LastName'], time() + 3600, "/");
        setcookie('FirstName', $base['FirstName'], time() + 3600, "/");
        setcookie('MiddleName', $base['MiddleName'], time() + 3600, "/");

        $resulte = [
            "status" => true
        ];

        echo json_encode($resulte);
    }

    
?>