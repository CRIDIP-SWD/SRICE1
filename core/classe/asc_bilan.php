<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 26/11/2015
 * Time: 10:19
 */
class asc_bilan
{
    public function sum_bilan()
    {
        $sql1 = mysql_query("SELECT SUM(debit) FROM bilan")or die(mysql_error());
        $data1 = mysql_result($sql1, 0);
        $sql2 = mysql_query("SELECT SUM(credit) FROM bilan")or die(mysql_error());
        $data2 = mysql_result($sql2, 0);

        $calc = $data2 - $data1;
        return $calc;
    }
}