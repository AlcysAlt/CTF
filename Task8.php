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
    public function getFlag(){
        global $flag;
        $flag =  '!YouWerentSuppossedToSeeThisObject!';
        return $flag;
    }
};
function takeData($userInput){
    return serialize($userInput);

};
//Data is parsed and used to access the required variable from a deserialized object
function parseData($data2deserialize, $requiredVariable){

    $parsedData = unserialize($data2deserialize);

    if (null !== $parsedData){
        return eval($parsedData->requiredVariable);
    }
    else{
        return 'Error: No data provided';
    }
    

};
 
//$admin = new ConvisoPerson();
//$admin_serialize = serialize($admin);
$flag = new Flag();
$serialize_flag = serialize($flag);
//echo $serialize_flag;
$flag_unserialize = unserialize($serialize_flag);
//echo $flag_unserialize->getFlag();
echo $flag_unserialize;
 
 
 
//$admin_unserialize = unserialize($admin_serialize);
//echo $admin_unserialize;
?>