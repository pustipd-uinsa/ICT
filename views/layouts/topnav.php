<?php
 use yii\helpers\Url;

?>

    <?php if (!Yii::$app->user->isGuest) { ?>
  <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
    <img alt="image" src="<?=Url::to(['img/avatar/avatar-1.png'])?>" class="rounded-circle mr-1">
    <div class="d-sm-none d-lg-inline-block">Hi, <?=Yii::$app->user->identity->username?>  </div></a>
    <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-title">Welcome, <?=Yii::$app->user->identity->username?> </div>
      <a href="" class="dropdown-item has-icon">
        <i class="far fa-user"></i> Profile Settings
      </a>
      <div class="dropdown-divider"></div>
      <a href="<?=Url::to(['/site/logout'])?>" data-method="POST" class="dropdown-item has-icon text-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>
  </li>
    <?php } ?>
</ul>
