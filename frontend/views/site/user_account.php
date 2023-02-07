<?php
/** @var \common\models\User $user */
/* @var $this \yii\web\View */

/** @var \common\models\UserAddress $userAddress */

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;

?>
<?php \yii\widgets\Pjax::begin([
    'enablePushState' => false
]) ?>
<?php $form = ActiveForm::begin([
    'action' => ['/site/update-account'],
        'options' => [
            'data-pjax' => 1
        ]
]); ?>
<?= common\widgets\Alert::widget() ?>
<?= $form->field($user, 'firstname')->textInput(['autofocus' => true]) ?>
<br>
<?= $form->field($user, 'lastname')->textInput(['autofocus' => true]) ?>
<br>
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
<?php \yii\widgets\Pjax::end() ?>
