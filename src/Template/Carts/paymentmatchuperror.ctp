<div id="container" style="margin-top: 20px;">
    <div id="header" class="text-center">
        <h3> <?= __('Oh no! Something went wrong...') ?></h3>
        <p>An error has occurred</p>
        <br>
        <?php echo $this->Html->image('brokenshoe.png'); ?>
        <br><br>
        <p>
            <br>The payment approved on PayPal and the total amount of your order did not match up!
            <br> We may have received your approved amount, but unfortunately we could not save your order.
            <br><br>
            Please contact us as soon as possible. </p>

    </div>
</div>
