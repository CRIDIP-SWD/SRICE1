<?php
if(isset($_GET['action']) && $_GET['action'] == 'new-save-bdd')
{
    include "../config.php";
    include "../classe.php";

    $nom_save = "srice-".date('d').date('m').date('Y')."-nometablissement.sql";

    try{
        $dump = new \Ifsnop\Mysqldump\Mysqldump("mysql:host=localhost;dbname=srice", "root", "1992maxime");
        $save =  $dump->start("../../data/".$nom_save);
        $filesize = filesize("../../date/".$nom_save);
    }catch (Exception $e){
        header("Location: ../../index.php?view=index&sub=parametrage&warning=file-no-save");
    }

    if($save === TRUE)
    {
        $ftp_connect = ftp_connect("ftp.cluster011.ovh.net", 21, 5);
        ftp_login($ftp_connect, "mockelynhp", "1992Maxime");
        ftp_pasv($ftp_connect, true);

        if(ftp_put($ftp_connect, '/www/save/srice/'.$nom_save, "../../data/".$nom_save, FTP_ASCII))
        {
            $sql = mysql_query("INSERT INTO sauvegarde (id, nom_sauvegarde, date_sauvegarde, taille_sauvegarde) VALUES (NULL, '$nom_save', '$date_jour_strt', '$filesize')")or die(mysql_error());
            header("Location: ../../index.php?view=index&sub=parametrage&success=new-save-bdd");
        }else{
            header("Location: ../../index.php?view=index&sub=parametrage&error=new-save-bdd");
        }
    }else{
        header("Location: ../../index.php?view=index&sub=parametrage&warning=file-no-save");
    }
}