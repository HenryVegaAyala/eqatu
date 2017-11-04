<?php
use yii\helpers\Url;

?>
<nav>
    <div class="nav-wrapper title-eqatu">
        <a href="<?php Url::to('/') ?>" class="brand-logo center"><img class="logo" src="<?php echo Yii::getAlias('@LogoEqatu') ?>"></a>
        <a href="" data-activates="mobile-demo" id="id-mobile-show" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#contact">Regístrarse</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#contact" id="id-mobile">Regístrarse</a></li>
        </ul>
    </div>
</nav>
