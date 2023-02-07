<?php

use yii\bootstrap4\ActiveForm;


/* @var $this \yii\web\View */
/* @var $userAddress */
/* @var $success bool */
?>
<?php $addressForm = ActiveForm::begin([
    'action' => ['/profile/update-address'],
    'options' => [
        'data-pjax'=>1
    ]
]); ?>
<?= common\widgets\Alert::widget() ?>
<?= $addressForm->field($userAddress, 'address') ?>
    <br>
<?= $addressForm->field($userAddress, 'city') ?>
    <br>
<?= $addressForm->field($userAddress, 'state') ?>
    <br>
<?= $addressForm->field($userAddress, 'country') ?>
    <br>
<?= $addressForm->field($userAddress, 'zipcode') ?>
    <br>
    <button class="btn btn-primary">Update</button>
<?php ActiveForm::end() ?>
