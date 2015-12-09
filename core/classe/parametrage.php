<?php

/**
 * Created by PhpStorm.
 * User: CRIDIP-SWD
 * Date: 08/12/2015
 * Time: 11:47
 */
class parametrage
{
    // BASE DE DONNEE
    public function count_achat()
    {
        $sql = mysql_query("SELECT COUNT(idachatpresta) FROM achat_presta")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_billet_salarie()
    {
        $sql = mysql_query("SELECT COUNT(idbilletsalarie) FROM billet_salarie")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_billet_ad()
    {
        $sql = mysql_query("SELECT COUNT(idbilletayantdroit) FROM billet_ayant_droit")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_charge_fixe()
    {
        $sql = mysql_query("SELECT COUNT(idchargefixe) FROM charge_fixe")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_famille_presta()
    {
        $sql = mysql_query("SELECT COUNT(idfamilleprestation) FROM famille_prestation")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_prestation()
    {
        $sql = mysql_query("SELECT COUNT(idprestation) FROM prestation")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_produit_fixe()
    {
        $sql = mysql_query("SELECT COUNT(idproduitfixe) FROM produit_fixe")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_reg_bs()
    {
        $sql = mysql_query("SELECT COUNT(idregbilletsalarie) FROM reg_billet_salarie")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_reg_ad()
    {
        $sql = mysql_query("SELECT COUNT(idregbilletayantdroit) FROM reg_billet_ayant_droit")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_reg_remb_s()
    {
        $sql = mysql_query("SELECT COUNT(idregrembsalarie) FROM reg_remb_salarie")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_reg_remb_ad()
    {
        $sql = mysql_query("SELECT COUNT(idregrembayantdroit) FROM reg_remb_ayant_droit")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_remb_s()
    {
        $sql = mysql_query("SELECT COUNT(idrembsalarie) FROM remb_salarie")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_remb_ad()
    {
        $sql = mysql_query("SELECT COUNT(idrembayantdroit) FROM remb_ayant_droit")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_remise()
    {
        $sql = mysql_query("SELECT COUNT(idremisebanque) FROM remise_banque")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

    public function count_salarie()
    {
        $sql = mysql_query("SELECT COUNT(idsalarie) FROM salarie")or die(mysql_error());
        $data = mysql_result($sql, 0);
        return $data;
    }

}