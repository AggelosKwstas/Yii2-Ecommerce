<?php

/** @var \yii\web\View $this */

/** @var string $content */

use backend\assets\AppAsset;
use yii\helpers\Html;


AppAsset::register($this);
?>

<section class="vh-100" style="background-color: #3d63d2;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-md-9 col-lg-7 col-xl-7">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="flex-shrink-0">
                                <img src="img/user.png"
                                     alt="Generic placeholder image" class="img-fluid"
                                     style="width: 140px; border-radius: 10px;">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1" style="text-align: center"><b>name: <?php echo Yii::$app->user->identity->getDisplayName()?></b></h5>
                                <hr>
                                <h5 class="mb-2 pb-1" style="color: #2b2a2a;text-align: center"><b>Last accessed IP: <?php echo Yii::$app->getRequest()->getUserIP()?>
                                    </b>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
