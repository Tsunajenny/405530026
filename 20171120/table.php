
<html>
<head>
<style type="text/css">
th{border-bottom: 1px solid #ddd;}
td{border-bottom: 1px solid #ddd;}
</style>
</head>

<?php 

$data = array(
    array("Volvo","22","18"),
    array("BMW","15","13"),
    array("Saab","5","2"),
    array("Land Rover","17","15")
);
/*function tr($x){
    return $x;   
}

function row($x){
    return ("<td>$x</td>");
}
*/
    
echo "<table><tr><th>Name</th> <th>Stock</th> <th>Sold</th></tr>";
echo "<tr>";
for($i = 0; $i<count($data); $i++){
    echo '<td>'.$data[$i][0].'</td>';
    echo '<td>'.$data[$i][1].'</td>';
    echo '<td>'.$data[$i][2].'</td>';
    echo "</tr>";
}

echo "</table><br>";
echo "<table><th>Name</th> <th>Stock</th> <th>Sold</th>";
foreach($data as $table){
    echo '<tr>';
    foreach($table as $data){
            echo '<td>'.$data.'</td>';
        }
        echo '</tr>';
    }
echo '</table><br>';

echo "<table><th>Name</th> <th>Stock</th> <th>Sold</th>";
       /* $rdata=array_map("row",$data);
        $ddata=array_map("td",$rdata);
        $result=join("",$rdata);
        echo $result;
    */
echo "</table>";
echo "Array_map + join 我寫不出來QQ";
?>

</html>



