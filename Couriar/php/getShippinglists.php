<?php
    include_once "db_config.php";
    if(isset($_POST['fil'])&&isset($_POST['sfil'])&&isset($_POST['find']))
    {
        $search = str_replace("_"," ",$_POST['find']);
        $sql = getQuery($_POST['fil'],$_POST['sfil'],$search);
        $query = mysqli_query($conn,$sql);
        $ocount = 0;
        $gtotal = 0;
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                echo "<div class='listcontainer'>";
                    echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            echo "Shipping Id";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $row['sid'];
                    echo "</div>";
                echo "</div>";
                echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            echo "Order Id";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $row['oid'];
                    echo "</div>";
                echo "</div>";
                echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            echo "Admin Id";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $row['aid'];
                    echo "</div>";
                echo "</div>";
                echo "<div class='shippingiddiva'>";
                        echo "<div class='titlelbl'>";
                            echo "Admin Name";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $row['adminname'];
                    echo "</div>";
                echo "</div>";
                echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            echo "User Id";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $row['uid'];
                    echo "</div>";
                echo "</div>";
                 echo "<div class='shippingiddiva'>";
                        echo "<div class='titlelbl'>";
                            echo "Sender contact";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $row['sphone'];
                    echo "</div>";
                echo "</div>";
                 echo "<div class='shippingiddiva'>";
                        echo "<div class='titlelbl'>";
                            echo "Shipping Date";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $row['date'];
                    echo "</div>";
                echo "</div>";
                 echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            echo "Shipping Charg";
                        echo "</div>";
                    echo "<div class='titlevaluea'>";
                        echo $row['total'];
                    echo "</div>";
                echo "</div>";
                echo "</div>";
                
                
                
                
                $ocount = $ocount + 1;
                $gtotal = $gtotal + $row['total'];
            }
        }else
        {
            echo "no data found";
        }

        printtotal($ocount,$gtotal);
        mysqli_close($conn);
    }
    function getQuery($a,$b,$c)
    {
        if($a == 21)
        {
            if($b == 225)
            {
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.sid like '*$c' ORDER BY s.sid DESC";
            }
            else if($b == 226)
            {
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.sid like '*$c' ORDER BY s.sid ASC";
            }  
            else
            {
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid = s.aid ORDER BY s.sid DESC";
            }
        }
        else if($a == 22)
        {
            if($b == 225)
            {
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.oid like '*$c' ORDER BY s.oid DESC";
            }
            else if($b == 226)
            {
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.oid like '*$c' ORDER BY s.oid ASC";
            }
            else
        {
            $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid = s.aid ORDER BY s.sid DESC";//getQuery($_POST['fil'],$_POST['sfil'],$search);
            return $sql;
        }
        }else if($a == 23)
        {
            if($b == 225)
            {
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.aid like '*$c' ORDER BY s.aid DESC";
            }
            else if($b == 226)
            {
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.aid like '*$c' ORDER BY s.aid ASC";
            }
            else
        {
            $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid = s.aid ORDER BY s.sid DESC";//getQuery($_POST['fil'],$_POST['sfil'],$search);
            return $sql;
        }
        }else if($a == 24)
        {
            if($b == 229){
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.date= CURRENT_DATE ORDER BY s.aid DESC";
            }
            else if($b == 230){
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.date=(CURRENT_DATE - 1) ORDER BY s.aid DESC";}

            else if($b == 231){
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.date>= DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY s.aid DESC";
                }
            else if($b == 232){
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.date between DATE_FORMAT(CURDATE() ,'%Y-%m-01') AND CURDATE() ORDER BY s.aid DESC";
                }
            else if($b == 233){
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.date  BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 3 MONTH ) AND DATE_SUB( CURDATE( ) ,INTERVAL 0 MONTH ) ORDER BY s.aid DESC";
                }
            else if($b == 234){
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.date BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 6 MONTH ) AND DATE_SUB( CURDATE( ) ,INTERVAL 0 MONTH ) ORDER BY s.aid DESC";
            }
            else if($b == 235){
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.date BETWEEN DATE_SUB( CURDATE( ) ,INTERVAL 12 MONTH ) AND DATE_SUB( CURDATE( ) ,INTERVAL 0 MONTH ) ORDER BY s.aid DESC";
            }
            else if($b == 236){
                $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid=s.aid where s.date like '$c%' ORDER BY s.aid DESC";
                }
                else
                {
                    $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid = s.aid ORDER BY s.sid DESC";//getQuery($_POST['fil'],$_POST['sfil'],$search);
                    return $sql;
                }
                return $sql;
        }
        else
        {
            $sql = "SELECT s.* , a.adminname, o.sphone,o.total,o.uid FROM shipment s INNER JOIN orders o on o.o_id = s.oid INNER JOIN adminlogin a on a.aid = s.aid ORDER BY s.sid DESC";//getQuery($_POST['fil'],$_POST['sfil'],$search);
            return $sql;
        }
    }
   
    function printtotal($orders,$gtotal)
    {
        echo "<div class='listcontainer'>";
                    echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                       
                    echo "</div>";
                echo "</div>";
                echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                      
                    echo "</div>";
                echo "</div>";
                echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                           
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        
                    echo "</div>";
                echo "</div>";
                echo "<div class='shippingiddiva'>";
                        echo "<div class='titlelbl'>";
                            echo "total orders";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $orders;
                    echo "</div>";
                echo "</div>";
                echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        
                    echo "</div>";
                echo "</div>";
                 echo "<div class='shippingiddiva'>";
                        echo "<div class='titlelbl'>";
                          
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        
                    echo "</div>";
                echo "</div>";
                 echo "<div class='shippingiddiva'>";
                        echo "<div class='titlelbl'>";
                            echo "total payment";
                        echo "</div>";
                    echo "<div class='titlevalue'>";
                        echo $gtotal;
                    echo "</div>";
                echo "</div>";
                 echo "<div class='shippingiddiv'>";
                        echo "<div class='titlelbl'>";
                            
                        echo "</div>";
                    echo "<div class='titlevaluea'>";
                      
                    echo "</div>";
                echo "</div>";
                echo "</div>";
    }
?>