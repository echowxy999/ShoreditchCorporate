
<div>
    <?= $this->Flash->render() ?>
</div>

<div class="card">
    <?= $this->Form->create($organisation,['url' => ['controller' => 'admins', 'action' => 'organisationedit']]); ?>
    <h3 class="card-header">Edit Organisation</h3>


    <div class="card-body">
        <div class="form-group">
            <label style="padding-right: 10px">Organisation Status</label><?php echo $this->Form->select('active', $statusSelect, array('default' => $activeStatus));?>
        </div>
        <div class="form-group">
            <label>Name</label><?php echo $this->Form->name('organisationname', ['class'=>'form-control', 'required']) ?>
        </div>
        <div class="form-group">
            <label>Accesscode</label><?php echo $this->Form->accesscode('accesscode', ['class'=>'form-control', 'required']) ?>
        </div>
        <div class="form-group">
            <label>Bypasscode</label><?php echo $this->Form->bypasscode('bypasscode', ['class'=>'form-control', 'required']) ?>
        </div>
        <div class="form-group">
            <?php echo $this->Html->link('Edit Logo Picture',
                ['controller'=>'Admins', 'action'=>'organisationlogoedit',$organisation->_id],
                ['escape' => false, 'class' => 'btn btn-primary']); ?>
            <div class="product-image" style="float: none">
            <?php echo $this->Html->image("../files/Organisations/logopath/{$organisation->logopath}"); ?>

            </div>
        </div>

    </div>
    <div class="col-lg-4">
        <?php echo $this->Form->submit('Save', ['class'=>'btn btn-outline-success btn-block']); ?>
        <?php echo $this->Form->end(); ?>
        <br>
        <?php echo $this->Html->link('<span class="m-menu__link-text">' . h('Cancel') . '</span>',
            ['controller'=>'admins', 'action'=>'organisationdetails',$organisation->_id],
            ['escape' => false, 'class' => 'btn btn-outline-danger btn-block']); ?>
    </div>
</div>



