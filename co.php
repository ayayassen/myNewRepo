<?php
$db=mysqli_connect('localhost','root','','nb-db');
if(mysqli_connect_errno()){exit;}
$output='';
if (isset($_REQUEST['fille'])) {ECHO "hello";
    $fiidd = $_REQUEST['fille'];

    $sql_str44 = $db->prepare("SELECT * FROM  files  where  filename LIKE CONCAT('%',?,'%')");
    $sql_str44->bind_param("ss", $fiidd, $fiidd);
    // mysqli_query($db,$sql_str44);


}
else{
    $sql_str44=$db->prepare("SELECT * FROM  files  ");
    // mysqli_query($db,$sql_str44);
}
//$result =$db->query($sql_str44);
$sql_str44 ->execute();
$result = $sql_str44 ->get_result();
if ( $result ->num_rows > 0) {
    $output="<thead><tr>
<th>file's name</th>
<th>user's gmail</th>
<th> folder</th>
<th>file type</th>
<th>page number</th></tr></thead> 
<tbody>";
    while ($row =$result ->fetch_assoc()){
        $output.="<tr>
<td>". $row['filename']."</td>
<td>". $row['userid']."</td>
<td> ".$row['folderid']."</td>
<td> ".$row['ftype']."</td>
<td> ".$row['pagenum']."</td>
</tr>";
    }
    $output.="</tbody>";
    echo $output;
}
else{
    echo "<h2> No Result</h2>";
}
/*  $res4 =$db->query($sql_str44);
for ($m=0;$m< $res4 ->num_rows;$m++){
   $row4 =$res4 -> fetch_assoc();
  if ($row4['filename'] ==$fiidd)
   {$f=$row4['filename'];
       $foldr=$row4['folderid'];
       $usr= $row4['userid'];
       $pat= $row4['path'];
       $ftyp= $row4['ftype'];
       $pagen= $row4['pagenum'];

       break;
   }

*/



?>