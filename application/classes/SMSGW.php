<?
Class SMSGW Extends PDOStatement {
    private $db_sms;
    private $db_sms_host    = "";
    private $db_sms_name    = "";
    private $db_sms_user    = "";
    private $db_sms_pw      = "";

    public $smsText;
    public $phoneNumber;

    function __construct()
    {
        try {
            $this->attr = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->db_sms = new PDO('mysql:host=' . $this->db_sms_host . ';dbname=' . $this->db_sms_name . '', $this->db_sms_user, $this->db_sms_pw, $this->attr);
            $this->db_sms->exec("set names utf8");
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }

    }
    function setSMSText($smsText) {
        $this->smsText = $smsText;
    }
    function sendMessage() {
        $phone = Model\SettingsQuery::create()->findOneByName('admin_phone')->getValue();
        $this->db_sms->query("INSERT INTO `auth_data` SET number='{$phone}', sign='StudFamily', message='{$this->smsText}'");
    }

}