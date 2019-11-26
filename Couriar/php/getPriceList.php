<?php
     include_once "db_config.php";
     $sql = "SELECT * FROM `servicecharge`";
     $query = mysqli_query($conn,$sql);
     if(mysqli_num_rows($query))
     {
         while($row = mysqli_fetch_assoc($query))
         {
             $result['dA'] = $row['dTypeNormal'];
             $result['dB'] = $row['dTypeFast'];
             $result['dC'] = $row['dTypeSuper'];
             $result['dD'] = $row['dTypeQuick'];
             $result['sA'] = $row['pSizeNormal'];
             $result['sB'] = $row['pSizeMedium'];
             $result['sC'] = $row['pSizeBig'];
             $result['wA'] = $row['pWeightLow'];
             $result['wB'] = $row['pWeightMedium'];
             $result['wC'] = $row['pWeightBig'];
             $result['wD'] = $row['pweightHavy'];
             $result['protact'] = $row['pProtect'];
             $result['gift'] = $row['pGift'];
             $result['tax'] = $row['tax'];
             $result['discount'] = $row['Discount'];      
         }
     }
     echo json_encode($result);
?>