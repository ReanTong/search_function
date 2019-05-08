<?php


$server = "localhost";
$username = "root";
$password = "";
$dbname = "wordpress";
$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit_search'])){
  $search =  mysqli_real_escape_string($conn,$_POST['search_field']);

  $sql = "SELECT * FROM wp_stwppm_project_details WHERE pro_title LIKE '%$search%' OR
   name LIKE '%$search%' OR start_date LIKE '%$search%' OR end_date LIKE '%$search%'";

  $result = mysqli_query($conn, $sql);
  $queryResult = mysqli_num_rows($result);
}
echo "There are ".$queryResult." result(s)";

if($queryResult > 0){
  while($row = mysqli_fetch_assoc($result)){



  echo  '<div class="dm_column_right">
      <div class="dm_big_table">

        <div class="dm_row">
          <table class="dm_main">
            <tr>
              <?php
              <th class="dm_project_title">'. $row['pro_title'] .'</th>
            </tr>

            <tr>
              <td class="dm_client">'. $row['name'] .'</td>
            </tr>
          </table>

          <div style="margin: 5px 15px;" class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
              style="width:'. $row['project_progress'] .'%">'. $row['project_progress'] .'% Complete
              </div>
            </div>


          <div class="dm_progress_bar" style="--width:'. $row['project_progress'] .'" data-label='. $row['project_progress'] .'%></div>

          <table class="dm_date">
            <tr>
              <td class="dm_head">START DATE</td>
              <td class="dm_head">END DATE</td>
            </tr>

            <tr>
              <td>'. $row['start_date'] .'</td>
              <td>'. $row['end_date'] .'</td>
            </tr>
          </table>
        </div>

      </div>
    </div>';
}else{
  echo 'There is no any related result';
}


?>
