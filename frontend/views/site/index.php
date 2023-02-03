<?php

/** @var yii\web\View $this */
/** @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = 'My Yii Application';
/** @var \common\models\Product $model */
?>
<div class="site-index">

    <div class="body-content">
        <?php echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_product_item'
        ]) ?>
    </div>
</div>
