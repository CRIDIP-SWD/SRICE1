<?php
if(isset($_GET['action']) && $_GET['action'] == 'new-save-bdd')
{
    include "../config.php";
    include "../classe.php";

    $nom_save = "srice-".date('d').date('m').date('Y')."-nometablissement.sql";

    try{
        $dump = new \Ifsnop\Mysqldump\Mysqldump("mysql:host=localhost;dbname=srice", "root", "1992maxime");
        $save =  $dump->start("../../data/".$nom_save);
        $filesize = filesize("../../data/".$nom_save)/100000;
    }catch (Exception $e){
        echo "Impossible de sauvegarder pour cause:". $e->getMessage();
    }

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
}
if(isset($_GET['action']) && $_GET['action'] == 'rest-save-bdd')
{
    include "../config.php";
    include "../classe.php";

    $idsauvegarde = $_GET['idsauvegarde'];

    $sql_save = mysql_query("SELECT * FROM sauvegarde WHERE id = '$idsauvegarde'")or die(mysql_error());
    $save = mysql_fetch_array($sql_save);
    $nom_fichier = $save['nom_sauvegarde'];

    $fichier = file_get_contents("../../data/".$nom_fichier);
    if(isset($fichier))
    {
        $delete_table = mysql_drop_db("srice");

        $fichier_array = explode(";", $fichier);
        foreach($fichier_array as $val)
        {
            mysql_query($val);
        }
        header("Location: ../../index.php?view=index?sub=parametrage&success=rest-save-bdd");
    }else{
        header("Location: ../../index.php?view=index?sub=parametrage&warning=file-not-found");
    }
}