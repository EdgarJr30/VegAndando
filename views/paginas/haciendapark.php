<main>
    <?php include_once __DIR__ . './../../templates/headerNavbar.php'; ?>
    <?php include_once __DIR__ . './../../templates/cookies.php'; ?>

    <!-- ============= Heading Section ============= -->
    <section class="heading_viaje top60px">
        <picture>
            <img class="img_viaje img_viaje--swiper" loading="lazy" src="https://i.imgur.com/gd8PmJr.png" alt="">
        </picture>

        <!-- ============= Rating y Lugares a visitar Section =================  -->
        <div class="rating_places width-aviable">
            <!-- ============= Rating y tag Section =================  -->
            <div class="rating_tag">
                <div class="title_viaje width-aviable top60px">
                    <h1>
                        <?php echo $titulo; ?>
                    </h1>

                    <span class="top15px">
                        Un parque de aventuras, con atracciones exclusivas en Republica Dominicana,
                        como la única telesilla del país, y el zipline más largo y rápido.
                        <br>
                        <br>
                        También podrás sentir la adrenalina del recorrido en buggy, darte un refrescante
                        chapuzon en el rio, montar a caballo, caída libre, paseo en safari, contacto con
                        animalitos criollos, degustación de productos locales y mucho mas.
                    </span>
                </div>
            </div>

            <!-- ============= Price Section =================-->
            <?php include __DIR__ . '/priceButton.php'; ?>
        </div>
    </section>

    <!-- ============= Price y Ver mas Section =================-->
    <section class="price_rutes top60px width-aviable">
        <!-- ============= Rutas de Salida =================-->
        <div class="go_routes_content">
            <h4>Que incluye</h4>
            <div class="horarios">
                <div class="hora">
                    <p>Zipline</p>
                    <p>Paseo a caballo</p>
                    <p>Buggy</p>
                    <p>Caída libre</p>
                </div>
                <div class="provincia">
                    <p>Ruta en safari</p>
                    <p>Telesilla</p>
                    <p>Almuerzo criollo</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============= Frase Section =================-->
    <section class="frase_section--viaje top60px">
        <p>Un parque de aventuras, con atracciones exclusivas en Republica Dominicana, como la única telesilla del
            país, y el zipline más largo y rápido.</p>
    </section>

    <!-- Politicas del viaje -->
    <section class="privacy width-aviable">
        <div class="new_travel_title width-aviable top60px">
            <img class="img_flecha" src="/img/png/Icono Logo VegAndando.png" alt="">
            <h1>Políticas del viaje</h1>
        </div>
        <p>SOLO INCLUYE TRANSPORTE DESDE LOS HOTELES DE BAVARO, PUNTA CANA Y
            BAYAHIBE (Sujeto a disponibilidad, se debe consultar)</p>
        <div class="privacy_policy top60px">
            <div>
                <h2>Política de Reservaciones</h2>
                <p>Una semana antes de la fecha del programa se puede reservar con un 30%</p>
                <p>Si la reservación se realiza en la misma semana del viaje se debe pagar en su totalidad 100%</p>
                <p>El pago total debe ser completado 3 dias antes de la fecha.</p>
                <p>El transporte solo esta incluido para los huéspedes de los hoteles de Bavaro, Punta Cana y
                    Bayahibe <span>sujeto a disponibilidad</span> sino esta en uno de estos alojamientos y necesita
                    el servicio,
                    puede cotizarlo de forma adicional.</p>
            </div>

            <div>
                <h2>Política de cancelación</h2>
                <p>Las cancelaciones deben realizarse en u plazo mínimo de 48 horas antes de la fecha y la hora
                    programada, debiendo hacerse por llamadas telefónicas o por whatsapp.</p>
                <p>Aplican al 90% de reembolso solo las cancelaciones dentro del plazo mencionado.</p>
                <p>Cancelaciones fuera del plazo no aplican para reembolso.</p>

            </div>

            <div>
                <h2>Política de descuento</h2>
                <p>5% de descuento para grupos de 6-15 personas.</p>
                <p>10% de descuento para grupos mayor de 15 personas.</p>
            </div>
        </div>
    </section>

    <!-- ========== MENU ========== -->
    <?php include_once __DIR__ . './../../templates/menu.php'; ?>

    <!-- ========== Footer ========== -->
    <?php include_once __DIR__ . './../../templates/footer.php'; ?>

</main>