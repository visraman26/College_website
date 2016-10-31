<?php
include("Database.php");
$fileId = $_GET["fileId"];
$sql = "SELECT file_type, file_name, file_size, file_bytes FROM documents WHERE file_id = $fileId";
$db = new Database();
$db->query($sql);
$row = $db->fetch();
header("Content-type: $row[0]");
header("Content-length: $row[2]");
header("Content-disposition: attachment; filename=$row[1]");        
print $row[3];
$db->close();
?>