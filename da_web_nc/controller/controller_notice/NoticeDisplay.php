<?php
    include_once "../../controller/connection.php";
?>
<?php
        $sql = "SELECT * FROM `tbl_notice` WHERE status = 1  \n"

        . "ORDER BY `tbl_notice`.`addAt` DESC;";
         $result = $mysqli->query($sql);
         if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
?>
<tr>
  <td><?php echo " " . $row["notice"]; ?></td>
  <td style="text-align: right;">
  <a onclick="return confirm('Are u sure about that ?')" href="../../controller/controller_notice/NoticeDelete.php?id=<?php echo $row["id"]; ?>"><i class="fa-solid fa-trash fa-xs" style="color: #213454;"></i></a>
  </td>
  <?php echo "<br>"; ?>
</tr>
            
<?php

            }
          } else {
            echo "0 results";
          }
        ?>    


<?php
$mysqli -> close();
?>
