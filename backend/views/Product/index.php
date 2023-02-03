<?php

use common\models\Product;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

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
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php Pjax::begin();?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'options' => [
        'style'=>'text-align:center'
],

        'columns' => [

            [
                    'attribute' => 'id',
                    'contentOptions' => [
                            'style'=>'text-align: center;width:3%'
]
],
            [
                    'attribute' => 'name',
                    'contentOptions' => [
                            'style'=>'text-align: center'
                    ]
            ],
            [
                    'label'=>'Image',
                    'attribute' => 'image',
                    'content' => function($model){
                        /** @var \common\models\Product $model */

                        $content = Html::img($model->getImageUrl(),['style'=>'width:50px;pointer-events: none;user-drag: none;user-select: none;']);

                        if(!$model->image) {
                                return Html::img($model->getNoImageUrl(),['style'=>'width:50px;pointer-events: none;user-drag: none;user-select: none;']);
                        }
                        else
                            return $content;
                    },
            ],
            [
                'attribute' => 'price',
                'format'=>'currency',
                'contentOptions' => [
                    'style'=>'text-align: center'
                ]
            ],
            [

                    'attribute' => 'status',
                    'content' => function($model){
                        /** @var \common\models\Product $model */
                        return Html::tag('span',$model->status ? 'Active' : 'Draft',[
                                'class'=>$model->status ? 'badge badge-success' : 'badge badge-danger'
                        ]);
                    },
                'contentOptions' => [
                    'style'=>'text-align: center'
                ]
],
            [
            'attribute' => 'created_at',
            'format' => 'datetime',
            'contentOptions' => [
                'style'=>'text-align: center;white-space:nowrap'
            ]
],
            [
                'attribute' => 'updated_at',
                'format' => 'datetime',
                'contentOptions' => [
                    'style'=>'text-align: center;white-space:nowrap'
                ]
            ],
//            'created_by.username',
//            'updated_by.username',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
