<!DOCTYPE html>
<html>

<?php
/*Class  ConvisoPerson
{
    public $username =  'Antony';
    public $team =  'PTaaS';
    public $age =  17;
    public $office =  'Intern';
    public $accountAdmin =  False;
    public  function  validateAdmin(){
    if ($this->accountAdmin){
        echo  ' [+] '  .  $this->username .  ' is administrator\n';
    } else {
        echo  ' [+] '  .  $this->username .  ' not is administrator\n';
        }
    }
}
 */
Class  Flag
{
    public $name =  'Secret Object';
    public $flag =  '!YouWerentSuppossedToSeeThisObject!';
    public function getFlag(){
        echo $flag;
    }
}
 
 
//$admin = new ConvisoPerson();
//$admin_serialize = serialize($admin);
$flag = new Flag();
$serialize_flag = serialize($flag);
echo $serialize_flag;
$flag_unserialize = unserialize($serialize_flag);
echo $flag_unserialize->getFlag();
 
 
 
//$admin_unserialize = unserialize($admin_serialize);
//echo $admin_unserialize;
?>