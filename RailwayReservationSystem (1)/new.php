<?php 

 $servername = "localhost";
 $username = "root";
 $password = ""
 $database = "finalsPrep";

 $conn = new mysqli($servername , $username , $password , $database);


 if ($conn->connect_error) {
     die("connection failed " , $conn->connect_error);
 } else{
     echo"connection successfull";
 }



 $sql = "CREATE TABLE employees (
 
     emp_id INT,
     emp_name VARCHAR(100),
     emp_designation VARCHAR(100)
 )"

if ($conn->query($sql) === TRUE) {
     echo "table created successfully";
} else {
     echo " failed";
     
}



$gettingAllEmp = "SELECT * FROM employees";

$result = $conn->query($gettingAllEmp);

if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
          echo "
          
          <table> 
          
               <tr>
                    <td> emp id</td> 
                    <td> emp name</td> 
                    <td> emp designation</td> 

               </tr>

               
               <tr>
                    <td> .$row["emp_id"].</td> 
                    <td> emp name</td> 
                    <td> emp designation</td> 

               </tr>
          </table>
          
          
          
          "
     }
}

?>