<?php

/** @var \common\models\Product $model */


?>

        <div class="card h-100">
            <a href="#!"><img class="card-img-top" src="<?php echo $model->getImageUrl() ?>" alt="..." /></a>
            <div class="card-body">
                <h4 class="card-title"><a href="#!"><?php echo $model->name ?></a></h4>
                <h6><?php echo Yii::$app->formatter->asCurrency($model->price)?></h6>
                <h6><?php echo \yii\helpers\StringHelper::truncateWords($model->description,30)?></h6>
            </div>
            <div class="card-footer" style="text-align: right">
                <a href="#" class="btn btn-primary">
                    Add to cart
                </a>
            </div>
        </div>