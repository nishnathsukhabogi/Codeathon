<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->id;?>  
        </td>  
        <td>  
            <?php echo $row->pname;?>  
        </td>  
        <td>  
            <?php echo $row->mr;?>  
        </td>  
        <td>  
            <?php echo $row->fri;?>  
        </td>  
        <td>  
            <?php echo $row->fsms;?>  
        </td>  
        <td>  
            <?php echo $row->fcalls;?>  
        </td>  
        <td>  
            <?php echo $row->CallCharge;?>  
        </td>  
        <td>  
            <?php echo $row->SmsCharge;?>  
        </td>  
        <td>G  
            <?php echo $row->dataCharge;?>  
        </td>  
        <td>  
            <?php echo $row->roamingCharge;?>  
        </td>  

        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="index.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <? php } ?>  