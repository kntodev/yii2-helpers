<?php
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="<?= $avatar1 ?>" class="user-iImage"/>
        <span class="hidden-xs"><?= $name ?></span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="<?= $avatar2 ?>" class="img-circle"
                 alt="User Image"/>
            <p>
            	<?= $name.' - '.$role ?>
                <small><?= 'Mitglied seit '.$created_at ?></small>
            </p>
        </li>
        <!-- Menu Body 
        <li class="user-body">
            <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
            </div>
            <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
            </div>
        </li>-->
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="http://develop.duebeck-it.eu//user/settings/profile" class="btn btn-default btn-flat"><?= Yii::t('app', 'Profile') ?></a>
            </div>
            <div class="pull-right">
                <?= Html::a(
                    Yii::t('app', 'Sign out'),
                    ['/site/logout'],
                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                ) ?>
            </div>
        </li>
    </ul>
</li>