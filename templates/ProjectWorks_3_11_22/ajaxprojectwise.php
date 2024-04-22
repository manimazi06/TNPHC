   <?php //echo $this->Html->css('/plugins/bootstrap/css/bootstrap.min'); ?>
   <?php echo $this->Html->css('/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min'); ?>
    <?php echo $this->Html->css('/plugins/datatables/export/buttons.dataTables.min'); ?>	
	<?php echo $this->Html->script('/plugins/datatables/jquery.dataTables.min'); ?>
    <?php echo $this->Html->script('/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min'); ?>
    <?php echo $this->Html->script('/plugins/datatables/export/dataTables.buttons.min'); ?>
    <?php echo $this->Html->script('/plugins/datatables/export/buttons.flash.min'); ?>
    <?php echo $this->Html->script('/plugins/datatables/export/jszip.min'); ?>
    <?php // echo $this->Html->script('/plugins/datatables/export/pdfmake.min'); ?>
    <?php echo $this->Html->script('/plugins/datatables/export/vfs_fonts'); ?>
    <?php echo $this->Html->script('/plugins/datatables/export/buttons.html5.min'); ?>
    <?php echo $this->Html->script('/plugins/datatables/export/buttons.print.min'); ?>
    <?php echo $this->Html->script('/js/pages/table/table_data'); ?>
	
    <?php if($projectdetails != ""){  ?>
	<table class="table table-hover table-bordered table-advanced tablesorter display" style="width: 100%" id="example4">

        <thead>
            <tr class="text-center">
                <th> Sno </th>
                <th> Department </th>
                <th> Financial year </th>
                <th> Work Code </th>
                <th> Work Name </th>
                <th> Sanctioned Amount <br> (Rs.) </th>
                <th> Project Status </th>
            </tr>
        </thead>
        <tbody>
            <?php $sno =1; 
            foreach ($projectdetails as $projectdetail): ?>
           <tr class="text-center">
                <td><?php echo($sno); ?></td>
                <td><?php echo $projectdetail['dname']; ?></td>               
                <td><?php echo $projectdetail['financial_yeartname']; ?></td>
                <td><?php echo $projectdetail['work_code']; ?></td>
                <td><?php echo $projectdetail['work_name']; ?></td>
                <td><?php echo $projectdetail['amount']; ?></td>
                <td><?php echo $projectdetail['pws']; ?></td>            
           
            </tr>
            <?php $sno++; endforeach; ?>
        </tbody>
       </table>
    <?php } ?>


