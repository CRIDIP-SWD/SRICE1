<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 26/11/2015
 * Time: 10:26
 */
class fct_banque
{
    public function sum_banque()
    {
        $sql1 = mysql_query("SELECT SUM(debit) FROM compta_compte WHERE idcomptaplan = '3'")or die(mysql_error());
        $data1 = mysql_result($sql1, 0);
        $sql2 = mysql_query("SELECT SUM(credit) FROM compta_compte WHERE idcomptaplan = '3'")or die(mysql_error());
        $data2 = mysql_result($sql2, 0);

        $calc = $data1 - $data2;
        return $calc;
    }
}