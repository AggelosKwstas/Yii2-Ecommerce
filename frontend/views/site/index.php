<?php

/** @var yii\web\View $this */
/** @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Bob-X';
/** @var \common\models\Product $model */
?>
<div class="site-index">

    <div class="body-content">
        <?php echo \yii\widgets\ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_product_item',
            'layout' => '{summary}<div class="row">{items}</div>{pager}',
            'pager' => [
                'class' => 'yii\bootstrap5\LinkPager'
            ],
            'itemOptions' => [
                'class' => 'col-lg-4 col-md-6 mb-4'
            ]
        ]) ?>
    </div>
</div>
