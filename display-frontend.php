<?php
function dm_dashboard(){

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
.dm_profile{
  background-color: grey;
  width: 35%;
  height: 300px;
  float: left;
  margin-left: 15px;
  margin-bottom: 10px;
  border-radius: 10px;
}

.dm_img_profile{
  width: 200px;
  height: auto;
  padding-top: 10px;
  margin-left: auto;
  margin-right: auto;
  display: block;
}

.dm_welcome_sen{
  text-align: center;
}

.dm_column_right{
  background-color: #835243;
  width: 60%;
  height: auto;
  float: right;
  margin-right: 15px;
  margin-bottom: 10px;
  border-radius: 10px;
}

.dm_main{
  margin-left: 15px;
  margin-top: 15px;
}

td, th, tr, table{
  border: none;
}

.dm_project_title{
  font-weight: bold;
  font-size: 23px;
}

.dm_client{
  font-style: italic;
}

.dm_date{
  width: 50%;
  margin-top: 14px;
  margin-left: 15px;
  margin-bottom: 20px;
}

.footer{
  clear: both;
}

</style>

<div class="">
  <form action="frontend_search_result.php" method="post">
    <input type="text" name="search_field" placeholder="Enter Keywords">

    <select>
    <?php
    global $wpdb;
      $result_option = $wpdb->get_results("SELECT * FROM wp_stwppm_project_types_form");
      foreach ($result_option as $print_option) {
      echo '
          <option>'. $print_option->project_type .'</option>';
      }
    ?>
  </select>

    <input type="submit" name="submit_search" id="submit_search" value="Search" style="padding:3px 10px;">
  </form>
</div>


<div class="dm_profile">
  <img class="dm_img_profile" src="http://www.005.tv/uploads/allimg/160627/22-16062G31102311.jpg">
  <p class="dm_welcome_sen">Welcome! Rean Tong</p>
</div>

<?php

global $wpdb;
$table_name = $wpdb->prefix ."stwppm_project_details";

$result = $wpdb->get_results("SELECT * FROM ".$table_name);
  foreach ($result as $print) {
    ?>
<div class="dm_column_right">
  <div class="dm_big_table">

    <div class="dm_row">
      <table class="dm_main">
        <tr>
          <?php
          echo '<th class="dm_project_title">'. $print->pro_title .'</th>';
          ?>
        </tr>

        <tr>
          <?php
          echo '<td class="dm_client">'. $print->name .'</td>';
          ?>
        </tr>
      </table>

      <?php
      echo '<div style="margin: 5px 15px;" class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
          style="width:'. $print->project_progress .'%">'. $print->project_progress .'% Complete
          </div>
        </div>';
      ?>



      <?php
      echo '<div class="dm_progress_bar" style="--width:'. $print->project_progress .'" data-label='. $print->project_progress .'%></div>';
      ?>

      <table class="dm_date">
        <tr>
          <td class="dm_head">START DATE</td>
          <td class="dm_head">END DATE</td>
        </tr>

        <tr>
          <?php
          $result_date = $wpdb->get_results("SELECT start_date,end_date FROM ".$table_name);
          if($result_date >= 1){
          echo '<td>'. $print->start_date .'</td>';
          echo '<td>'. $print->end_date .'</td>';
        }else if($result_date = 0){
          echo '<td> </td>';
          echo '<td> </td>';
        }
          ?>
        </tr>
      </table>
    </div>

  </div>
</div>

<?php
}
}
add_shortcode('display_shortcode_content','dm_dashboard');
?>
