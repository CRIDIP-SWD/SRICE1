<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 26/11/2015
 * Time: 10:40
 */
class fct_pret
{
    public function sum_pret()
    {
        $sql1 = mysql_query("SELECT SUM(debit) FROM compta_compte WHERE idcomptaplan = '7'")or die(mysql_error());
        $data1 = mysql_result($sql1, 0);
        $sql2 = mysql_query("SELECT SUM(credit) FROM compta_compte WHERE idcomptaplan = '7'")or die(mysql_error());
        $data2 = mysql_result($sql2, 0);

        $calc = $data1 - $data2;
        return $calc;
    }
}