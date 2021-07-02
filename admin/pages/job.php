<?php 
include('./header.php');
include('./sidebar.php');
 ?>

 <div class="card-body" >
    <div class="table-responsive " style="font-size:14px">
        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" style="background-color: #E0E0E0">
            <thead class="bg-primary text text-white">

                <p>The following are Jobs Post</p>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Job Category <span class="fa fa-plus"></span>
                </button>
                <tr>
                	<td >#</td>
                	<td>Job Type</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=1;
                $sql=$conn->query('SELECT jobs.jobName as job FROM jobs');
                $user=$sql->fetchAll();
                foreach ($user as $row) {
                	echo "<tr>";
                	echo '<td style="font-size:14px">' . $i. '</td>';
                	echo '<td style="font-size:14px">' . $row['job'] . '</td>';
                	echo '</tr> ';
                	$i++;
                }
                ?>


            </tbody>
        </table>
        

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Job Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="addjob.php">
            <div class="form-group">
                        <input class="form-control" placeholder="Enter Job ID" name="jid" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Enter Job Name" name="jname" required>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit"  name="save" class="btn btn-primary">Add Job</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
    </div>

</div>
<?php 
include('../../includes/footer.php');
?>
</body>
