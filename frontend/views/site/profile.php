<?php


/** @var \common\models\User $user */
/* @var $this \yii\web\View */
/** @var \common\models\UserAddress $userAddress */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>



<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Address Information
            </div>
            <div class="card-body">
               <?php echo $this->render('user_address',[
                       'userAddress'=>$userAddress
]);?>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                Account Information
            </div>
            <div class="card-body">
                <?php $form = ActiveForm::begin([

                ]); ?>

                <div class="row">
                    <div class="col-md-6">
                        <?= $form->field($user, 'firstname')->textInput(['autofocus' => true]) ?>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <?= $form->field($user, 'lastname')->textInput(['autofocus' => true]) ?>
                        <br>
                    </div>
                </div>
                <?= $form->field($user, 'username')->textInput(['autofocus' => true]) ?>
                <br>
                <?= $form->field($user, 'email') ?>
                <br>
                <?= $form->field($user, 'password')->passwordInput() ?>
                <br>
                <?= $form->field($user, 'passwordConfirm')->passwordInput() ?>
                <br>
                <div class="form-group">
                    <?= Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
