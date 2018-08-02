<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="user-panel">
    <div class="pull-left image">
        <img src="<?= $avatar ?>" class="img-circle" alt="User Image"/>
    </div>
    <div class="pull-left info">
        <p><?= $name ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>
