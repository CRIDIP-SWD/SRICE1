<?php
if(isset($_POST['action']) && $_POST['action'] == 'connexion')
{
    include "../config.php";
    include "../classe.php";

    $login = $_POST['login'];
    $password = $_POST['password'];
    $md5_pass = md5($password);

    if((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password'])))
    {
        $sql = mysql_query("SELECT COUNT(*) FROM membre WHERE login = '$login' AND pass_md5 = '$md5_pass'")or die(mysql_error());
        $data = mysql_fetch_array($sql);

        if($data[0] == 1)
        {
            session_start();
            $_SESSION['login'] = $login;
            header("Location: ../../index.php?view=index");
            exit();
        }elseif($data[0] == 0)
        {
            header("Location: ../../index.php?view=login&warning=no-compte");
        }else{
            header("Location: ../../index.php?view=login&error=base");
        }
    }else{
        header("Location: ../../index.php?view=login&warning=champs");
    }
}
if(isset($_GET['action']) && $_GET['action'] == 'logout')
{
    include "../config.php";
    include "../classe.php";

    session_start();
    session_destroy();
    header("Location: ../../index.php?view=login");
    exit();
}