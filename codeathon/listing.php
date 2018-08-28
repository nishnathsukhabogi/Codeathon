<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from codeathon where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select mr,fri,fc,fs from codeaton ";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                
                <td>Monthly Rental</td>    
                <td>Free Internet</td>    
                <td>Free Calls</td>    
                <td>Free SmS</td>    
                   
                  
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    