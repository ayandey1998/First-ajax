<?php

include("db.php");
$db=$conn;

// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * from ajax_form";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
  /*
 echo '<table border="5">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>DATE_OF_BIRTH</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
        </tr>';
  */
 if(count($fetchData)>0){
      $id=1;
      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$id."</td>
          <td>".$data['name']."</td>
          <td>".$data['email']."</td>
          <td>".$data['date_of_birth']."</td>
          <td>".$data['username']."</td>
          <td>".$data['password']."</td>
   </tr>";
       
  $id++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>