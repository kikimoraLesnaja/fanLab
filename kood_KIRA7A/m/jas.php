
<?php
/*$a = array('<foo>',"'bar'",'"baz"','&blong&', "\xc3\xa9");

echo "Normal: ".  json_encode($a). "\n<br>";

echo "Tags: ",    json_encode($a, JSON_HEX_TAG), "\n";
echo "Apos: ",    json_encode($a, JSON_HEX_APOS), "\n";
echo "Quot: ",    json_encode($a, JSON_HEX_QUOT), "\n";
echo "Amp: ",     json_encode($a, JSON_HEX_AMP), "\n";
echo "Unicode: ", json_encode($a, JSON_UNESCAPED_UNICODE), "\n";
echo "All: ",     json_encode($a, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE), "\n\n";





$b=array('name'=>'kiki', 'id'=>12);*/
$b=array( 'one'=>'Singular sensation', 'two' => 'Beady little eyes', 'three'  =>  'Little birds pitch by my doorstep');

$a1 = array(1,"aaa", 12);
$a2 = array(2,"bbb", 34);
$b=array($a1, $a2);
echo json_encode($b);
?>