<?php

/**
 *  顧客情報
 */
class Customer
{
    private $CTMID;    // 顧客ID
    private $FNAME;    // 名(漢字)
    private $LNAME;    // 姓(漢字)
    private $FFRGN;    // 名(フリガナ)
    private $LFRGN;    // 姓(フリガナ)
    private $TEL;      // 電話番号
    private $MAIL;     // メールアドレス
    private $PSTCD;    // 郵便番号
    private $ADRS1;    // 住所(都道府県)
    private $ADRS2;    // 住所(市町村)
    private $ADRS3;    // 住所(番地)
    private $CTYPE;    // 個人[0]/法人[1]

    public function __construct()
    {
        $CTMID = '';
        $FNAME = '';
        $LNAME = '';
        $FFRGN = '';
        $LFRGN = '';
        $TEL   = '';
        $MAIL  = '';
        $PSTCD = '';
        $ADRS1 = '';
        $ADRS2 = '';
        $ADRS3 = '';
        $CTYPE = '';
    }

    public function setCTMID($ctmid)
    {
        $this->CTMID = $ctmid;
    }
    public function getCTMID()
    {
        return $this->CTMID;
    }
    public function setFNAME($fname)
    {
        $this->FNAME = $fname;
    }
    public function getFNAME()
    {
        return $this->FNAME;
    }
    public function setLNAME($lname)
    {
        $this->LNAME = $lname;
    }
    public function getLNAME()
    {
        return $this->LNAME;
    }
    public function setFFRGN($ffrgn)
    {
        $this->FFRGN = $ffrgn;
    }
    public function getFFRGN()
    {
        return $this->FFRGN;
    }
    public function setLFRGN($lfrgn)
    {
        $this->LFRGN = $lfrgn;
    }
    public function getLFRGN()
    {
        return $this->LFRGN;
    }
    public function setTEL($tel)
    {
        $this->TEL = $tel;
    }
    public function getTEL()
    {
        return $this->TEL;
    }
    public function setMAIL($mail)
    {
        $this->MAIL = $mail;
    }
    public function getMAIL()
    {
        return $this->MAIL;
    }
    public function setPSTCD($pstcd)
    {
        $this->PSTCD = $pstcd;
    }
    public function getPSTCD()
    {
        return $this->PSTCD;
    }
    public function setADRS1($adrs1)
    {
        $this->ADRS1 = $adrs1;
    }
    public function getADRS1()
    {
        return $this->ADRS1;
    }
    public function setADRS2($adrs2)
    {
        $this->ADRS2 = $adrs2;
    }
    public function getADRS2()
    {
        return $this->ADRS2;
    }
    public function setADRS3($adrs3)
    {
        $this->ADRS3 = $adrs3;
    }
    public function getADRS3()
    {
        return $this->ADRS3;
    }
    public function setCTYPE($ctype)
    {
        $this->CTYPE = $ctype;
    }
    public function getCTYPE()
    {
        return $this->CTYPE;
    }
}
