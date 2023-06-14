        <?php 
        if($_POST['sort_task_status'] == false && $_POST['sort_task_tijd'] == false) { 
          	$query = $connec->prepare("SELECT * FROM tasks where lijsten_id = ".$counting["lijst_id"]);
         	$query->execute();
          	$taken = $query->fetchall();
          	foreach($taken as $count){
      ?>
      		<div class="mt-3 mr-3">
        		<div class="card">
          			<div class="card-body">
            			<h1><u> Taak </u></h1>
            			<h4> Taak: <?php echo $count["taak"]; ?> </h4>
            			<h4> Naam: <?php echo $count["naam"]; ?> </h4>
            			<h4> Deadline: <?php echo $count["deadline"]; ?> </h4>
            			<h4> Tijd: <?php echo $count["tijd"]; ?> uur </h4>
            			<h4> Status: <?php echo $count["status"]; ?> </h4>
            			<a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="updateTask.php?id=<?= $count["taak_id"] ?>">Update taak </a>
            			<a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="deleteTask.php?id=<?= $count["taak_id"] ?>">Delete taak </a>
          			</div>
        		</div>
      		</div>
    <?php 
    		}
        } elseif ($_POST['sort_task_status'] == true) {
        	$query = $connec->prepare("SELECT * FROM tasks where lijsten_id = ".$counting["lijst_id"].  " ORDER BY status ASC"); 
     		  $query->execute();
       		$taken = $query->fetchall();
       		foreach($taken as $count){        
    ?>
      		<div class="mt-3 mr-3">
        		<div class="card">
          			<div class="card-body">
            			<h1><u> Taak </u></h1>
            			<h4> Taak: <?php echo $count["taak"]; ?> </h4>
            			<h4> Naam: <?php echo $count["naam"]; ?> </h4>
            			<h4> Deadline: <?php echo $count["deadline"]; ?> </h4>
            			<h4> Tijd: <?php echo $count["tijd"]; ?> uur </h4>
            			<h4> Status: <?php echo $count["status"]; ?> </h4>
            			<a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="updateTask.php?id=<?= $count["taak_id"] ?>">Update taak </a>
            			<a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="deleteTask.php?id=<?= $count["taak_id"] ?>">Delete taak </a>
          			</div>
        		</div>
      		</div>
    <?php 
			} 
		} 
		elseif ($_POST['sort_task_tijd'] == true) {


        		$query = $connec->prepare("SELECT * FROM tasks where lijsten_id = ".$counting["lijst_id"].  " ORDER BY tijd ASC");       
     			$query->execute();
       			$taken = $query->fetchall();
       			foreach($taken as $count){ 
	?>
      		<div class="mt-3 mr-3">
        		<div class="card">
          			<div class="card-body">
            			<h1><u> Taak </u></h1>
            			<h4> Taak: <?php echo $count["taak"]; ?> </h4>
            			<h4> Naam: <?php echo $count["naam"]; ?> </h4>
            			<h4> Deadline: <?php echo $count["deadline"]; ?> </h4>
            			<h4> Tijd: <?php echo $count["tijd"]; ?> uur </h4>
            			<h4> Status: <?php echo $count["status"]; ?> </h4>
            			<a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="updateTask.php?id=<?= $count["taak_id"] ?>">Update taak </a>
            			<a class="btn-lg btn btn-dark text-white align-self-center mt-3" href="deleteTask.php?id=<?= $count["taak_id"] ?>">Delete taak </a>
          			</div>
        		</div>
      		</div>	
    <?php
    			}
    		}
    		
   	?>