<?php
include("menu.php");

if(!isset($_SESSION['name'])){
    header('location:login.php');
}
$name = $_SESSION['name'];
?>

    <section class="restoClase">
        <h2>Horarios</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur sint vel suscipit dolor. Maxime, eveniet?
            Nihil doloribus, nemo ipsam nostrum quas atque explicabo? Perferendis quidem est odit voluptas, atque
            tempore.</p>
        <img src="https://telemedellin.tv/wp-content/uploads/2023/07/Metro-de-Medellin-1024x576.jpg" alt="img horaios">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore obcaecati eum voluptatem? A qui, explicabo
            neque doloremque, asperiores illum autem ab nesciunt recusandae eos voluptatibus at, quaerat sunt architecto
            nostrum?</p>
        <a href="https://www.metrodemedellin.gov.co/" target="_blank"><img src="https://cloudfront-us-east-1.images.arcpublishing.com/elespectador/FAG25KWSP5EETN2MHJWDVE3JC4.jpg" alt="mapa metro"></a>
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