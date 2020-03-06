<?

 

require_once('include/init.phph');

require_once(get_cfg_var("doc_root") . "/ConnectPHP/Connect_init.php");

use RightNow\Connect\v1_2 as RNCPHP;
initConnectAPI(); 

 


try{
$result = RNCPHP\ROQL::queryObject("SELECT Contact FROM Contact WHERE Contact.CustomFields.c.memberid='$memberid'")->next();


foo();
bar();
//$first_name = $row->Name->First;

while ($row = $result->next())
 
{
    $contact_id = $row->ID;
  
  $first_name = $row->Name->First;
   
 $last_name = $row->Name->Last;
    
}
}


catch(Exception $e)

{
    print_r($e->getMessage());
}


?>