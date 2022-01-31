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
                $field = array($print["FIELD"] => $print[$lang]); 
                array_push($table, $field);
            }
            return $table;
        } else {
            return $table;
        }
    }

    public function Translate($translate)
    {
        $table = $this->Language();
        foreach($table as $fields) {
            echo $fields[$translate];
        }
    }
}

$lang = new Lang();

$lang->Translate("LOGIN");
$lang->Translate("USERNAME");
$lang->Translate("PASSWORD");

?>


