<?php
use yii\helpers\Url;

?>
<nav>
    <div class="nav-wrapper title-eqatu">
        <a href="<?php Url::to('/') ?>" class="brand-logo center ">Eqatu</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#contact">Regístrarse</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="#contact">Regístrarse</a></li>
        </ul>
    </div>
</nav>
