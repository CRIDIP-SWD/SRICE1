<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 25/11/2015
 * Time: 17:47
 */
class salarie
{
    public function count_salarie()
    {
        $sql = mysql_query("SELECT COUNT(*) FROM salarie")or die(mysql_error());
        $data = mysql_fetch_array($sql);
        return $data;
    }

    public function count_ad()
    {
        $sql = mysql_query("SELECT COUNT(*) FROM ayant_droit")or die(mysql_error());
        $data = mysql_fetch_array($sql);
        return $data;
    }
}