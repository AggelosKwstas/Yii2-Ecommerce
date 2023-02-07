<?php

/** @var \common\models\Product $model */

use yii\helpers\Html;


?>

        <div class="card h-100">
            <img class="card-img-top" src="<?php echo $model->getImageUrl() ?>"/>
            <div class="card-body">
                <h4 class="card-title">
                    <?= Html::a($model->name,['/site/view', 'model_id'=>$model->id])?>
                </h4>
                <h6><?php echo Yii::$app->formatter->asCurrency($model->price)?></h6>
                <h6><?php echo \yii\helpers\StringHelper::truncateWords($model->description,30)?></h6>
            </div>
            </div>
