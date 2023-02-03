<?php

use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\ProductSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [

            [
                    'attribute' => 'id',
                    'contentOptions' => [
                            'style'=>'text-align: center'
]
],
            'name',
            [
                    'attribute' => 'image',
                    'content' => function($model){
                        /** @var \common\models\Product $model */
                        return Html::img($model->getImageUrl(),['style'=>'width:50px']);
                    }
            ],
            'price:currency',
            [

                    'attribute' => 'status',
                    'content' => function($model){
                        /** @var \common\models\Product $model */
                        return Html::tag('span',$model->status ? 'Active' : 'Draft',[
                                'class'=>$model->status ? 'badge badge-success' : 'badge badge-danger'
                        ]);
                    }
],
            'created_at:datetime',
            'updated_at:datetime',
            //'created_by',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
