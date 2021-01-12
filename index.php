<?php include('partes/cabecalho.php')?>
    <header class="cabecalho-home">
        <h2 class="cabecalho-home__titulo">Texto grande bem aqui</h2>
        <p class="cabecalho-home__subtitulo">Texto menor aqui</p>
        <a class="cabecalho-home__role" href="#servicos">Role para ver mais</a>
    </header>
    <section id="servicos" class="servicos"><!-- Seção serviços-->
        <div class="container">
            <h2 class="home__titulo">O que fazemos</h2>
            <section class="servicos__item">
                <img src="img/icone-desenvolvimento-web.png" alt="Icone planeta terra">
                <h3>Desenvolvimento Web</h3>
                <p class="servicos__texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum ex a nunc fermentum congue. Aliquam dignissim pulvinar arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>   
            </section>
            <section class="servicos__item">
                <img src="img/icone-carrinho-compras.png" alt="Icone Carrinho de compras">
                <h3>E-commerce</h3>
                <p class="servicos__texto">In hac habitasse platea dictumst. Proin ut pellentesque mauris. Nunc in varius justo. Phasellus vulputate ut neque non auctor. Fusce vitae urna egestas, finibus ante non, laoreet nunc.</p> 
            </section>
            <section class="servicos__item">
                <img src="img/icone-cafe.png" alt="Icone xicara de café">
                <h3>Café</h3>
                <p class="servicos__texto">Aliquam ac lorem sapien. Nullam suscipit purus vel erat aliquam scelerisque. Aenean sed turpis a nibh laoreet iaculis a et nulla. Aenean at felis ex. Nulla ut dui aliquet, fermentum massa vitae, accumsan erat.</p> 
            </section>
        </div><!--Fim container-->
    </section><!-- Fim seção serviços-->
    <section class="depoimentos"><!-- seção depoimentos-->
        <div class="container">
            <h2 class="home__titulo home__titulo--branco">O que falam de nós</h2>
            <div class="depoimentos__caixa">
                <section class="depoimentos__item">
                    <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto de fulana">
                    <p class="depoimentos__texto">ASUHAUSVAHUDYGUHAJBSUDHIASBJDVUABSJDUABJS</p>
                    <P class="depoimentos__pessoa">Fulana - Xiaomi</P>
                </section>
                <section class="depoimentos__item">
                    <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto de fulana">
                    <p class="depoimentos__texto">ASUHAUSVAHUDYGUHAJBSUDHIASBJDVUABSJDUABJS</p>
                    <P class="depoimentos__pessoa">Fulana - Xiaomi</P>
                </section>
                <section class="depoimentos__item">
                    <img class="depoimentos__img" src="img/depoimentos/pessoa-1.jpg" alt="Foto de fulana">
                    <p class="depoimentos__texto">ASUHAUSVAHUDYGUHAJBSUDHIASBJDVUABSJDUABJS</p>
                    <P class="depoimentos__pessoa">Fulana - Xiaomi</P>
                </section>
            </div><!--Fim depoimentos__caixa-->
        </div>
    </section><!-- Fim seção depoimentos-->
<?php include('partes/rodape.php')?>