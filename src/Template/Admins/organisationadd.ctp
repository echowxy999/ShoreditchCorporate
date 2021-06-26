<div>
    <?= $this->Flash->render() ?>
</div>
<div class="card">
<?= $this->Form->create('$organisation',['type' =>'file']); ?>
<div class="card-header">
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-4">
            <h3>New Organisation</h3>
        </div>
        <div class="col-lg-4">
            <?php echo $this->Html->link('< Back to organisation list',
                    ['controller'=>'Admins', 'action'=>'organisationlist'],
                    ['escape' => false, 'class' => 'btn btn-outline-secondary']); ?>
        </div>
    </div>
</div>

<div class="card-body">
    <div class="form-group">

    </div>
    <div class="form-group">
        <label>Name</label><?php echo $this->Form->organisationname('organisationname', ['class'=>'form-control', 'required']) ?>
    </div>
    <div class="form-group">
        <label>Access code</label><?php echo $this->Form->accesscode('accesscode', ['class'=>'form-control', 'required']) ?>
    </div>
    <div class="form-group">
        <label>Bypass code</label><?php echo $this->Form->bypasscode('bypasscode', ['class'=>'form-control', 'required']) ?>
    </div>
    <div class="form-group">
        <label style="padding-right: 10px">Organisation Status </label><?php echo $this->Form->select('active', $statusSelect);?>
    </div>
    <div class="form-group">
        <label>Logo</label><?php echo $this->Form->control('logopath', ['type'=>'file', 'required']) ?>
    </div>


</div>
<div>
    <?php echo $this->Form->submit('Save', ['class'=>'btn akame-btn active','style'=>'margin-left:35%']); ?>
    <?php echo $this->Form->end(); ?>
</div>
<br/>
</div>



