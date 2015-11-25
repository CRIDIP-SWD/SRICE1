<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 25/11/2015
 * Time: 14:36
 */
class user
{
    public function info_user($login)
    {
        $sql = mysql_query("SELECT * FROM membre WHERE login = '$login'")or die(mysql_error());
        $data = mysql_fetch_array($sql);
        return $data;
    }
}