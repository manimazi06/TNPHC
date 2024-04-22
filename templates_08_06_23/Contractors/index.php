<style>
    .mdl-tabs__tab.tabs_three:hover {
        color: #6610f2 !important;
    }

    a.mdl-tabs__tab.tabs_three {
        max-width: 20%;
    }
</style>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <header>Contractors</header>
                <div class="tools">
                    <?php echo $this->Html->link(__('Add Contractors<i class="fa fa-plus"></i>'), ['action' => 'add'], ['escape' => false, 'class' => 'mdl-button mdl-js-button mdl-js-ripple-effect m-b-10 btn btn-info']); ?>
                </div>
            </div>
            <div class="card-body ">
                <div class="mdl-tabs mdl-js-tabs">
                    <div class="mdl-tabs__panel is-active p-t-20">
                        <div class="col-md-12">
                            <div class="card-body">

                                <div class="table-scrollable">
                                    <table class="table  table-bordered table-checkable order-column" style="width: 100%" id="example4">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="width:1%"> Sno </th>
                                                <th style="width:25%"> Contractor/Company Name </th>
                                                <th style="width:10%"> Mobile No</th>
                                                <th style="width:10%"> GST No</th>
                                                <th style="width:10%"> Register Date</th>
                                                <th style="width:10%"> License Validity upto </th>
                                                <th style="width:20%"> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sno = 1;
                                            foreach ($contractors as $contractor) : ?>
                                                <tr class="odd gradeX">
                                                    <td class="text-center"><?php echo $sno; ?></td>
                                                    <td class="text-center"><?php echo $contractor['name'] ?></td>
                                                    <td class="text-center"><?php echo $contractor['mobile_no'] ?></td>
                                                    <td class="text-center"><?php echo $contractor['gst_no'] ?></td>
                                                    <td class="text-center"><?php echo date('d-m-Y', strtotime($contractor['register_date'])) ?></td>
                                                    <td class="text-center"><?php echo date('d-m-Y', strtotime($contractor['validity_upto'])) ?></td>
													<td class="text-center" style="width:20%">
												      <?php echo $this->Html->link(__('<i class="fa fa-pencil"></i> Edit'), ['action' => 'edit',$contractor['id']], ['escape' => false, 'class' => 'btn btn-outline-primary btn-sm','target'=>'_blank']); ?>&nbsp;&nbsp;
												      <?php echo $this->Html->link(__('<i class="fa fa-trash"></i> Delete'), ['action' => 'delete',$contractor['id']], ['confirm' => __('Are you sure you want to delete Contractor - {0}?',  $contractor['name']), 'class' => 'btn btn-outline-danger btn-sm', 'escape' => false]); ?><br><br>
										      	      <?php  if($role_id == 1){ ?>
													  <?php echo $this->Html->link('<i class="fa fa-recycle"></i>Renewal', ['action' => 'licenserenewal', $contractor['id']], ['escape' => false, 'class' => 'btn btn-outline-info btn-sm','target'=>'_blank']); ?>
												      <?php  } ?>
												   </td>                                                

                                                </tr>
                                            <?php $sno++;
                                            endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".btn-sweetalert").attr("onclick", "").unbind("click"); //remove function onclick button
</script>