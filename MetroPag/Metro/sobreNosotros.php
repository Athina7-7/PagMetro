<?php
include('menu.php');
if(!isset($_SESSION['usuario'])){
    header('location:login.php');
    exit;
}
?>
    <section class="restoClase">
        <h2>Conócenos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus fuga dicta eaque omnis molestias animi at
            accusantium quidem voluptates nostrum architecto possimus dolores dolor ipsa, sit voluptatum illum, ad
            dolore.</p>
            <img src="https://www.metrodemedellin.gov.co/hubfs/Imported_Blog_Media/_MG_6758.jpg" alt="persona metro">
    </section>

    <footer>
        <ul>
            <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><a href="https://www.whatsapp.com/?lang=es_LA/" target="_blank">WhatsApp</a></li>
            <li><a href="hhttps://twitter.com/?lang=es" target="_blank">X</a></li>
        </ul>
    </footer>

    
</body>

</html>