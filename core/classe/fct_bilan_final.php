<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 26/11/2015
 * Time: 10:43
 */
class fct_bilan_final
{
    public function cooerance()
    {
        $sql1 = mysql_query("SELECT SUM(montant) FROM compta_bilan_actif")or die(mysql_error());
        $sql2 = mysql_query("SELECT SUM(montant) FROM compta_bilan_passif")or die(mysql_error());
        $sql3 = mysql_query("SELECT SUM(debit) FROM compta_resultat")or die(mysql_error());
        $sql4 = mysql_query("SELECT SUM(credit) FROM compta_resultat")or die(mysql_error());
        $data1 = m
    }
}