<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 25/11/2015
 * Time: 17:51
 */
class remise
{
    public function sum_reglement()
    {
        $sql = mysql_query("SELECT SUM(montant_reglement) FROM reg_billet_salarie")or die(mysql_error());
        $data1 = mysql_result($sql, 0);

        $sql2 = mysql_query("SELECT SUM(montant_reglement) FROM reg_billet_ayant_droit")or die(mysql_error());
        $data2 = mysql_result($sql, 0);

        $calc = $data1 =+ $data2;

        return $calc;
    }

    public function sum_remise()
    {
        $sql = mysql_query("SELECT SUM(montant_remise) FROM remise_banque")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function compar()
    {
        $calc = $this->sum_reglement() - $this->sum_remise();
        return $calc;
    }
}