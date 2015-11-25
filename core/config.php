<?php
//DEFINE STORK
DEFINE("NOM_LOGICIEL", "SRICE");
DEFINE("VERSION_LOGICIEL", "1.0.0 Béta");
DEFINE("BUILD_LOGICIEL", "1025");

//DEFINE LINK
DEFINE("ROOT", "http://vps221243.ovh.net/srice/");
DEFINE("ROOTS", "https://vps221243.ovh.net/srice/");
DEFINE("ASSETS", "assets/");
DEFINE("CSS", "css/");
DEFINE("IMG", "img/");
DEFINE("JS", "js/");
DEFINE("CORE", "core/");
DEFINE("CLASSE", "classe/");
DEFINE("CONTROL", "control/");

//DATE
$date_jour = date("d-m-Y");
$date_jour_strt = strtotime(date("d-m-Y 00:00"));

$date_jour_heure = date("d-m-Y H:i");
$date_jour_heure_strt = strtotime(date("d-m-Y H:i"));

$heure_jour = date("H:i");

$jour_num = date("N");
$mois_num = date("n");

$jour = date("d");
$semaine = date("W");
$mois = date("m");
$years = date("Y");
$heure = date("H");
$minutes = date("i");
class date_format{
    public function jour_semaine($jour)
    {
        switch($jour)
        {
            case 1: echo "Lundi"; break;
            case 2: echo "Mardi"; break;
            case 3: echo "Mercredi"; break;
            case 4: echo "Jeudi"; break;
            case 5: echo "vendredi"; break;
            case 6: echo "Samedi"; break;
            case 7: echo "Dimanche"; break;
        }
    }

    public function mois($mois)
    {
        switch($mois)
        {
            case 1: echo "Janvier"; break;
            case 2: echo "Février"; break;
            case 3: echo "Mars"; break;
            case 4: echo "Avril"; break;
            case 5: echo "Mai"; break;
            case 6: echo "Juin"; break;
            case 7: echo "Juillet"; break;
            case 8: echo "Aout"; break;
            case 9: echo "Septembre"; break;
            case 10: echo "Octobre"; break;
            case 11: echo "Novembre"; break;
            case 12: echo "Décembre"; break;
        }
    }
    public function formatage($date_format)
    {
        $jour = date("d", $date_format);
        $mois = date("m", $date_format);
        $year = date("Y", $date_format);

        $formatage = $jour." ".$this->mois($mois)." ".$year;
        return $formatage;
    }
    public function format($datetime)
    {
        $now = time();
        $created = $datetime;

        //Calcul de la différence
        $diff = $now-$created;
        $m = ($diff)/(60); // Minutes
        $h = ($diff)/(60*60); // Heures
        $j = ($diff)/(60*60*24); // jours
        $s = ($diff)/(60*60*24*7);

        if($diff < 60) {
            return "Il y à ".$diff." Secondes";
        }elseif ($m < 60) { // "il y a x minutes"
            $minute = (floor($m) == 1) ? 'minute' : 'minutes';
            return 'Il y a '.floor($m).' '.$minute;
        }
        elseif ($h < 24) { // " il y a x heures, x minutes"
            $heure = (floor($h) <= 1) ? 'heure' : 'heures';
            $dateFormated = 'Il y a '.floor($h).' '.$heure;
            if (floor($m-(floor($h))*60) != 0) {
                $minute = (floor($m) == 1) ? 'minute' : 'minutes';
                $dateFormated .= ', '.floor($m-(floor($h))*60).' '.$minute;
            }
            return $dateFormated;
        }
        elseif ($j < 7) { // " il y a x jours, x heures"
            $jour = (floor($j) <= 1) ? 'jour' : 'jours';
            $dateFormated = 'Il y a '.floor($j).' '.$jour;
            if (floor($h-(floor($j))*24) != 0) {
                $heure = (floor($h) <= 1) ? 'heure' : 'heures';
                $dateFormated .= ', '.floor($h-(floor($j))*24).' '.$heure;
            }
            return $dateFormated;
        }
        elseif ($s < 5) { // " il y a x semaines, x jours"
            $semaine = (floor($s) <= 1) ? 'semaine' : 'semaines';
            $dateFormated = 'Il y a '.floor($s).' '.$semaine;
            if (floor($j-(floor($s))*7) != 0) {
                $jour = (floor($j) <= 1) ? 'jour' : 'jours';
                $dateFormated .= ', '.floor($j-(floor($s))*7).' '.$jour;
            }
            return $dateFormated;
        }
        else { // on affiche la date normalement
            return strftime("%d %B %Y à %H:%M", $created);
        }
    }



}
$date_class = new date_format();
//FONCTION CONFIG
function nom_sector($sector)
{
    return $sector;
}

function nom_page($page)
{
    return $page;
}

//Connexion à la base de donnée

class database{
    public $host = "localhost";
    public $user = "root";
    public $pass = "1992maxime";
    public $base = "srice";

    public function __construct()
    {
        $connect = mysql_connect($this->host, $this->user,$this->pass)or die(header("Location: ../index.php?view=error&code=53112244BDD"));
        $database = mysql_select_db($this->base)or die(header("Location: ../index.php?view=error&code=5419412244BDD"));

    }


}

$database_class = new database();

