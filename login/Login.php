<?php

include_once '../db/error.php';
include_once ('../db/db2.php');
//include_once ('../db/error.php');

  $db = new DB2('babyplanID');
   if (isset($_POST["userName"]) 
        && $_POST["userName"] != ''
        && isset($_POST["pwd"])
        && $_POST["pwd"] != '')
    {
        $result = $db->select2('userID','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
        if(strcmp($result[0]["pwd"],$_POST["pwd"]) == 0)
        {
            SendOk2();
        }
        else
        {
            SendError2(E_AUTH,"Login Fail");
        }
    }
    else 
    {
        SendError2(E_AUTH,"Accept LoginInfo Error !!!");
    }
?>
