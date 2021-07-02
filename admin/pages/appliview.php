<?php 
include('./header.php');
include('./sidebar.php');
 ?>

<div class="card-body" style="background-color: #E0E0E0">
    <div class="table-responsive" style="font-size:14px">
       <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-primary text text-white">
                <h2>The following are applicants for different Job Post</h2>
                <tr>
                <tr>
                    <th style="font-size:14px">#</th>
                    <th style="font-size:14px">NAME</th>
                    <th style="font-size:14px">EMAIL</th>
                    <th style="font-size:14px">JOB APPLIED</th>
                    <th style="font-size:14px">APPLICATION DATE</th>
                </tr>
            </thead>
            <tbody>
                <?php
$stmt=$conn->prepare("SELECT user.fname,user.lname,user.email,applicants.appl_date,applicants.jobType FROM user JOIN applicants on applicants.email=user.email");
$stmt->execute();
#$user=$stmt->fetch(PDO::FETCH_ASSOC);
$i=1;
foreach ($stmt as $row) {
    echo '<tr>';
    echo '<td style="font-size:14px">'.$i.'</td>';
    echo '<td style="font-size:14px">' . $row['fname'] . ' '. $row['lname'] .  '</td>';
    echo '<td style="font-size:14px">' . $row['email'] . '</td>';
    echo '<td style="font-size:14px">' . $row['jobType'] . '</td>';
    echo '<td style="font-size:14px">' . $row['appl_date'] . '</td>';
  echo '</tr> ';
  $i++;
}?>
            </tbody>
        </table>
    </div>
</div>
<?php 
include('../../includes/footer.php');
?>