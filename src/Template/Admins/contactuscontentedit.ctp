<div>                                                                                                                                                                                                                                                                    <div>
    <?= $this->Flash->render() ?>
</div>

    <div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-4">
                        <h3>Edit Contact Us Page Content</h3>
                    </div>
                    <div class="col-lg-4">
                        <?php echo $this->Html->link('< Change other website contents',
                                ['controller'=>'Admins', 'action'=>'websitecontents'],
                                ['escape' => false, 'class' => 'btn btn-outline-secondary']); ?>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table style="width: 100%;" class="cartlabel">
                    <thead>
                    <tr>
                        <th align="right">Content Name</th>
                        <th align="right">Content Value</th>

                        <th align="right"></th>
                        <th align="right"></th>
                    </tr>
                    </thead>
                    <?php $sum=0; ?>
                    <?php foreach($contactuscontents as $contactuscontent){ ?>
                    <tbody>
                    <tr>
                        <?= $this->Form->create($contactuscontent, ['url' => ['controller' => 'admins', 'action' => 'contentsave', $contactuscontent->_id]]);?>
                        <th align="right"> <p> <?php echo $contactuscontent->contentname ?> </p></th>
                        <th align="right"> <p> <?php echo $this->Form->textarea('contentvalue', ['class'=>'form-control', 'required']) ?> </p></th>

                        <th align="right"><p> <?php echo  $this->Form->submit(__('Update'),['class' => 'btn-sm btn-info']) ?> </p></th>
                        <?= $this->Form->end(); ?>


                    </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>

    </div>

