<?php  
 $connect = mysqli_connect("localhost", "root", "", "search");  
 $output = '';  
 $sql = "SELECT * FROM search WHERE ObjectName LIKE '%".$_POST["search"]."%'";  
 $result = mysqli_query($connect, $sql);  
 if(mysqli_num_rows($result) > 0)  
 {  
      $output .= '<h4 align="center">Search Result</h4>';  
      $output .= '<div class="table-responsive">  
                          <table class="table table bordered">  
                               <tr>  
                                    <th>ObjectName</th>  
                                    <th>DecimalValue</th>  
                                    <th>HexadecimalValue</th>  
                               </tr>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["ObjectName"].'</td>  
                     <td>'.$row["DecimalValue"].'</td>  
                     <td>'.$row["HexadecimalValue"].'</td>   
                </tr>  
           ';  
      }  
      echo $output;  
 }  
 else  
 {  
      echo 'Data Not Found';  
 }  
 ?>
