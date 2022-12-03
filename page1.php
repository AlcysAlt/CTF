<!DOCTYPE html>


<?php
// Starts the PHP session, to allow persistence of variables between web pages.
session_start();
// Resets the redirected variable to False.
$_SESSION['redirected'] = False;
echo 'page 1';





<!DOCTYPE html>
<html>
<body>

<?php
Class  Flag
{
    public $name =  'Secret Object';
    public function getFlag(){
        global $flag;
        $flag =  '!YouWerentSuppossedToSeeThisObject!';
        return $flag;
    }
};

$flag = new Flag();

$sflag = serialize($flag);
//echo ($serialize_flag);
$flag_uns = unserialize($sflag);
$var = 'getFlag()';
$string = 'echo(' . '$flag_uns' . '->' . 'getFlag()' . ');';
echo ($string);
eval($string);
?>

</body>
</html>





?> 

<html>

</html>