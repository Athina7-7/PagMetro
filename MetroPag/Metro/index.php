
<?php
include('menu.php');

if(!isset($_SESSION['usuario'])){
    header('location:login.php');
    exit;
    
    
}


?>
  
    <div class="content-wrapper">
    <link rel="stylesheet" href="css/mensajes.css">

        <section>
            <h2>Bienvenido al MetrOnline</h2>
            <?php if (isset($_SESSION['mensaje'])) : ?>
            <div class="notification-box <?php echo strpos($_SESSION['mensaje'], 'Error') !== false ? 'error' : 'success'; ?>">
                <span class="close" onclick="cerrarMensaje()">x</span>
                <h3><?php echo $_SESSION['mensaje']; ?></h3>
            </div>
            <?php unset($_SESSION['mensaje']); ?>
        <?php endif; ?>
    
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Sapiente sint voluptatibus deleniti quidem laudantium et
                omnis modi enim fuga alias, doloribus ullam eius pariatur,
                at ipsam? Commodi eveniet nulla ea!</p>
    
            <img src="https://telemedellin.tv/wp-content/uploads/2022/02/Metro-de-Medellin-scaled-e1644611274536.jpg"
                alt="imagen del metro">
            <h4>Nos basamos</h4>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi aliquid placeat, quas ducimus rem architecto
                unde maxime? Provident nostrum soluta, repellat blanditiis ea sit, reiciendis vel consectetur, harum
                aspernatur magnam!</p>
        </section>
        <section id="sectionDerecha">
            <h2>Recomendaciones de visitas</h2>
            <h4>Poblado</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident earum est dolorem laudantium, labore
                quisquam. Aliquam nostrum expedita omnis commodi est aut doloremque atque odit! Cupiditate excepturi
                voluptate deserunt eligendi?</p>
            <img src="https://estaticos.elcolombiano.com/binrepository/815x565/18c0/780d565/none/11101/DQCY/barrio-estrato-2-en-el-poblado-2_40827131_20221008161407.jpg"
                alt="imgPoblado">
    
            <h4>Parque explora</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid iste libero quo odio, nesciunt quaerat
                nobis quia quos voluptatibus error accusamus? Blanditiis tempore placeat laudantium, ipsa sint ad labore
                itaque!</p>
                <img src="https://estaticos.elcolombiano.com/binrepository/848x565/34c0/780d565/none/11101/BBPB/cvparqueexplora-6-jpg_39667351_20220320165133.jpg" alt="parque explora">
        </section>
    
    </div>
    
    <footer>
        <ul>
            <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><a href="https://www.whatsapp.com/?lang=es_LA/" target="_blank">WhatsApp</a></li>
            <li><a href="hhttps://twitter.com/?lang=es" target="_blank">X</a></li>
        </ul>
    </footer>

    <script src="js/cerrarMensaje.js"></script>
</body>

</html>