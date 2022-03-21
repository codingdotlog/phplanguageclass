<?php
class Lang {

    public function Language()
    {
        static $table = array();
        static $loaded = false;
        if (!$loaded) {
            $loaded = true;
            $lang = strtoupper(substr($_SERVER["HTTP_ACCEPT_LANGUAGE"], 0, 2));
            include("settings.php"); //DB Connection
            $sql = $MYSQLdb->prepare("SELECT * FROM language");
            $sql->execute();
            while($print = $sql->fetch(PDO::FETCH_ASSOC))
            {
                $table[$print["FIELD"]] = $print[$lang];
            }
            return $table;
        } else {
            return $table;
        }
    }

    public function Translate($translate)
    {
        $table = $this->Language();
    	return $table[$translate];
    }
}

$lang = new Lang();

echo $lang->Translate("LOGIN");
echo $lang->Translate("USERNAME");
echo $lang->Translate("PASSWORD");

?>


