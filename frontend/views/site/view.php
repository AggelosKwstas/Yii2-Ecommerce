<?php
use yii\helpers\Html;
?>

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo $product->getImageUrl() ?>"/></div>
            <div class="col-md-6">
                <div class="small mb-1">STORE ID: <?=$product->id?></div>
                <h1 class="display-5 fw-bolder"><?=$product->name?></h1>
                <div class="fs-5 mb-5">
                    <span><?php echo Yii::$app->formatter->asCurrency($product->price)?></span>
                </div>
                <p class="lead"><?php echo \yii\helpers\StringHelper::truncateWords($product->description,30)?></p>
                <div class="d-flex">
                    <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
