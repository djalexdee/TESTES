<div class="container" id="refresh">
	<div class="card card-block text-xs-center">
	  <h3 class="card-title">Lista de Tarefas</h3>
	  <div class="col-md-12">
		  <table class="table-responsive">
			  <thead class="thead-inverse">
			    <tr>
			      <th style="height:'10px;'">ID</th>
			      <th>TITLE</th>
			      <th>DISCRIPTION</th>
			      <th>PRIORITY</th>
			      <th>STATUS</th>
			    </tr>
			  </thead>
			  <tbody>
			  <?php
				foreach ($tasks as $task) { ?>
				 	<tr>
				      <th scope="row"><?= h($task->id); ?></th>
				      <td><?= h($task->title); ?></td>
				      <td><?= h($task->description); ?></td>
				      <td><?= h($task->priority); ?></td>
				      <td><?php 
				      if($task->status == 1){
							$status = "Em andamento";
						}
						elseif($task->status == 2){	
								$status = "Finalizada";
						}
				       echo $status; ?></td>
				    </tr>
				<?php } ?>
			  </tbody>
		  </table>
		</div>  
	</div>
</div>