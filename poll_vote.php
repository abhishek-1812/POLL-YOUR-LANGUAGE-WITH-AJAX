<?php
/**
 * Short description for code
 * php version 7.2.10
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <singh51.abhi@gmail.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock."
 */ 
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);
$yes='';
$java='';

//put content in array
$array = explode("||", $content[0]);
$py = $array[0];
$java = $array[1];
$C = $array[2];
$Php = $array[3];

if ($vote == 0) {
    $py = $py + 1;
}
if ($vote == 1) {
    $java = $java + 1;
}
if ($vote == 2) {
    $C = $C + 1;
}
if ($vote == 3) {
    $Php = $Php + 1;
}

//insert votes to txt file
$insertvote = $py."||".$java."||".$C."||".$Php;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<h2 class="text-warning">Result:</h2>
<table class="table table-bordered text-white">
    <tr>
        <td>Python:</td>
        <td><img src="im.png" width='<?php echo(100*round($py/($java+$py+$C+$Php), 2)); ?>'
        height='20'>
        <?php echo(100*round($py/($java+$py+$C+$Php), 2)); ?>%
        </td>
    </tr>
    <tr>
        <td>Java:</td>
        <td><img src="im.png"
        width='<?php echo(100*round($java/($java+$py+$C+$Php), 2)); ?>'
        height='20'>
        <?php echo(100*round($java/($java+$py+$C+$Php), 2)); ?>%
        </td>
    </tr>
    <tr>
        <td>C:</td>
        <td><img src="im.png"
        width='<?php echo(100*round($C/($java+$py+$C+$Php), 2)); ?>'
        height='20'>
        <?php echo(100*round($C/($java+$py+$java+$Php), 2)); ?>%
        </td>
    </tr>
    <tr>
        <td>Php:</td>
        <td><img src="im.png"
        width='<?php echo(100*round($Php/($java+$py+$C+$Php), 2)); ?>'
        height='20'>
        <?php echo(100*round($Php/($java+$py+$C+$Php), 2)); ?>%
        </td>
    </tr>
</table>