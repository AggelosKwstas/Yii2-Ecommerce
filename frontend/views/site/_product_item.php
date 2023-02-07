<?php

/** @var \common\models\Product $model */

use yii\helpers\Html;


?>

        <div class="card h-100">
            <img class="card-img-top" src="<?php echo $model->getImageUrl() ?>" alt="..." />
            <div class="card-body">
                <h4 class="card-title">
                    <?= Html::a($model->name,['/site/view', 'model'=>$model])?>
                </h4>
                <h6><?php echo Yii::$app->formatter->asCurrency($model->price)?></h6>
                <h6><?php echo \yii\helpers\StringHelper::truncateWords($model->description,30)?></h6>
            </div>
            <div class="card-footer" style="text-align: right">
                <a href="#" class="btn btn-primary">
                    Add to cart
                </a>
            </div>
        </div>