<?php

// Show the table of the selected supplier
$dbfs = array("catn","natm","ncar","nnit","noxy","nsul","ncycl","nhdon","nhacc","nrotb","mw","TPSA","XLogP");
$nms = array("catid","n atoms","n carbons","n nitrogens","n oxygens","n sulphurs","n cycles","n H donors","n H acceptors","n rot bonds","mol wt","TPSA","XLogP");
$rowid = array(11,1,2,3,4,5,6,7,8,9,12,13,14);

if(!$result) die("unable to process query: " . mysql_error());
$manrows = mysql_num_rows($result);
$manarray = array();
$manid = array();
$chosen = $_POST['tgval'];
for($j = 0 ; $j < $manrows ; ++$j)
{
    $row = mysql_fetch_row($result);
    $manarray[$j] = $row[1];
    $manid[$j] = $j + 1;
}
$query = "select * from Compounds where ManuID = ".$chosen;
$result = mysql_query($query);
if(!$result) die("unable to process query: " . mysql_error());
$resrows = mysql_num_rows($result);

?>