<?php

/* @var $this yii\web\View */

$this->title = 'Eqatu | Inicio ';
?>
<div id="preloader"></div>

<div class="parallax-container">
    <div class="slider" style="height: 636px">
        <ul class="slides" style="height: 636px">
            <li>
                <!--<img src="https://lorempixel.com/580/250/nature/1"> <!-- random image -->-->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <!--<img src="https://lorempixel.com/580/250/nature/2"> <!-- random image -->-->
                <div class="caption left-align">
                    <h3>Left Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <!--<img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->-->
                <div class="caption right-align">
                    <h3>Right Aligned Caption</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
            <li>
                <!--<img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->-->
                <div class="caption center-align">
                    <h3>This is our big Tagline!</h3>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>
</div>

<section class="section white">
    <div class="row container">
        <h2 class="center header-1">Quiero Promocionar mi Producto</h2>
        <div class="center header-2">Qué tengo que hacer:</div>
        <div class="row center">
            <div class="col s12 m6 l3">
                <div class="icon-style">
                    <i class="fa fa-address-card-o fa-5x fa-border"></i>
                </div>
                <div class="text-pasos">
                    <a class="numer-bold">1.</a>
                    <a class="check-bold" href="#contact">REGÍSTRATE</a> y completa la solicitud para promocionar tu
                    producto.
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="icon-style">
                    <i class="fa fa-phone-square fa-5x fa-border"></i>
                </div>
                <div class="text-pasos">
                    <a class="numer-bold">2.</a>
                    Los colaboradores de EQATU se contactaran contigo para confirmar tu registro.
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="icon-style">
                    <i class="fa fa-desktop fa-5x fa-border"></i>
                </div>
                <div class="text-pasos">
                    <a class="numer-bold">3.</a>
                    Luego publicaremos tus productos en las diversas plataformas para hacer publicidad a tus
                    poductos.
                </div>
            </div>

            <div class="col s12 m6 l3">
                <div class="icon-style">
                    <i class="fa fa fa-envelope fa-5x fa-border"></i>
                </div>
                <div class="text-pasos">
                    <a class="numer-bold">4.</a>
                    Recibirás nuestras notificaciones cuando un cliente quiera la compra o cotización del producto.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section footer-color-C center">
    <div class="row">
        <div class="center header-2">Suscríbete para recibir información sobre promociones y descuentos.</div>
        <div class="col m2 l4"></div>
        <form>
            <div class="col s9 m8 l4 less-space center">
                <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_telephone" type="email" class="validate" placeholder="Ingresa tu email aquí.">
                    <label for="email" data-error="Email no válido."></label>
                </div>
                <button class="btn waves-effect" type="submit" name="action">Suscribirse
                </button>
            </div>
        </form>
        <div class="col m2 l4"></div>
    </div>
</section>

<section id="contact">
    <div class="section white">
        <div class="row">
            <h2 class="center header-1">Contáctenos</h2>
            <div class="row center">
                <form class="col s12">
                    <div class="row container">
                        <div class="input-field col s12 m6 l6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Nombres</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Apellidos</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="last_name" type="email" class="validate">
                            <label for="last_name" data-error="Email no válido.">Email</label>
                        </div>
                        <div class="input-field col s12 m6 l6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Número de Celular</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Registrarse
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
