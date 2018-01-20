<?php
$f=fopen("dokumenty/fxml.xml","w");
fwrite($f,"<eg>\n");
$con=pg_connect("host=sbazy dbname=s178253 user=s178253 password=bre4kops");
$z="select * from pracownicy";
$r=pg_exec($con,$z);
$lw=pg_numrows($r);
$lk=pg_numfields($r);
for($i=0;$i<$lw;$i++){
$iw=$i+1;
fwrite($f,"<p".$iw.">\n");
for($j=0;$j<$lk;$j++){
$field=pg_field_name($r,$j);
fwrite($f,"\t<$field>".pg_result($r,$i,$j)."</$field>\n");
}
fwrite($f,"</p".$iw.">\n");
}
fwrite($f,"</eg>");
fclose($f);
?>
