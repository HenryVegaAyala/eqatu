<?php
use yii\helpers\Url;

?>
<div class="navbar-fixed">
    <nav class="nav-color">
        <a href="<?php Url::to('/') ?>" class="brand-logo center"><i class="size-title">EQATU</i></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#about">Regístrarse</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#about">Regístrarse</a></li>
        </ul>
    </nav>
</div>