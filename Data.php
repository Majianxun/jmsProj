你的问题：  <?php echo htmlspecialchars($_POST["cc"]); ?> 已提交.<br />

<?php

echo "<div>";
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('db\projDB.s3db');
    }
}

$db = new MyDB();
$cc = $_POST["cc"];
$dt = date("m/d/y");
$insertstr = sprintf("INSERT INTO Requirement ('Time','Content','Ip') VALUES ('%s','%s','%s')",$dt,$cc,"12.1.1.2");

$db->exec($insertstr);

$result = $db->query("SELECT * FROM Requirement");
$cols = $result->numColumns(); 
        while ($row = $result->fetchArray()) { 
            for ($i = 1; $i < $cols; $i++) { 
                echo $results->columnName($i). ': '; 
                echo $row[$i] .'<br />'; 
            } 
         
        } 
echo "插入成功！";
echo "</div>";
 echo "共0条数据";
 ?> 