<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 26/11/2015
 * Time: 10:21
 */
class asc_resultat
{
    public function sum_resultat()
    {
        $sql1 = mysql_query("SELECT SUM(debit) FROM cpt_resultat")or die(mysql_error());
        $data1 = mysql_result($sql1, 0);
        $sql2 = mysql_query("SELECT SUM(credit) FROM cpt_resultat")or die(mysql_error());
        $data2 = mysql_result($sql2, 0);

        $calc = $data2 - $data1;
        return $calc;
    }
}