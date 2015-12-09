<?php
if(isset($_GET['action']) && $_GET['action'] == 'new-save-bdd')
{
    include "../config.php";
    include "../classe.php";

    $nom_save = "srice-".date('d').date('m').date('Y').date('H').date('i')."-nometablissement.sql";

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
            $sql = mysql_query("INSERT INTO sauvegarde (id, nom_sauvegarde, date_sauvegarde, taille_sauvegarde) VALUES (NULL, '$nom_save', '$date_jour_heure_strt', '$filesize')")or die(mysql_error());
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
        $delete_table = mysql_query("DROP DATABASE srice")or die(mysql_error());
        $create_db = mysql_query("CREATE DATABASE srice")or die(mysql_error());
        $import = system("cat /var/www/vps221243.ovh.net/srice/data/".$nom_fichier." | mysql --host=localhost --user=root --password=1992maxime --database=srice");
        header("Location: ../../index.php?view=index&sub=parametrage&success=rest-save-bdd");
    }else{
        header("Location: ../../index.php?view=index&sub=parametrage&warning=file-not-found");
    }
}
if(isset($_GET['action']) && $_GET['action'] == 'del-save-bdd')
{
    include "../config.php";
    include "../classe.php";

    $idsauvegarde = $_GET['idsauvegarde'];

    $sql = mysql_query("SELECT * FROM sauvegarde WHERE id = '$idsauvegarde'")or die(mysql_error());
    $data = mysql_fetch_array($sql);
    $nom_fichier = $data['nom_sauvegarde'];

    $del_fichier = unlink("../../data/".$nom_fichier);

    $ftp_connect = ftp_connect("ftp.cluster011.ovh.net", 21, 5);
    ftp_login($ftp_connect, "mockelynhp", "1992Maxime");
    ftp_pasv($ftp_connect, true);
    $del_fichier .= ftp_delete($ftp_connect, "/www/save/srice/".$nom_fichier);
    $del_fichier .= mysql_query("DELETE FROM sauvegarde WHERE id = '$idsauvegarde'")or die(mysql_error());

    if($del_fichier === TRUE)
    {
        header("Location: ../../index.php?view=index&sub=parametrage&success=del-save-bdd");
    }else{
        header("Location: ../../index.php?view=index&sub=parametrage&error=del-save-bdd");
    }
}