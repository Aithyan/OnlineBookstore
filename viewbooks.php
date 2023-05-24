<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Book Store
          
        </title>
        
    </head>
    <body>
        
        <?php include_once "header.php";?>
        <div class="middle">
       <div id="page">
          <!-- start content -->
          <div id="content">
            <div class="post">
              <h1 class="title" align=center>Listing the Added Books</h1>
              <div class="entry">
            
              <pre><?php

include "db_conn.php";
              ?></pre>
            
              <form action="#" method="POST">
              <table width="100%" border="0">
                <tr >
                  
                  <td> <b>Category
                  <td> <b>Product
                  <td> <b>Qty
                  <td> <b>Rate
                  
                 </tr>
  
              
<?php


$query=mysqli_query($conn,"select * from books");
$r=mysqli_fetch_row($query);


if($r){
	do{

echo "<tr><td>$r[0]</td>";
echo "<td>$r[1]</td>";
echo "<td>$r[2]</td>";
echo "<td>$r[3]</td>";
echo "</tr>";
$r=mysqli_fetch_row($query);
	}while($r);

}

?>
<tr>
              
              <Br>
                </table>            

                <br><br>
           
              </form>
              </div>
              
            </div>
            
          </div>
          <!-- end content -->
          
        <div style="clear: both;">&nbsp;</div>
      </div>
      </div>
        <?php include_once "footer.php";?>
        
    </body>
</html>
