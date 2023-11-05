<?php
    include'check-login.php';
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="css/icon.png" type="image/icon">
    <link rel="stylesheet" href="css/Style.css">
    <script src="https://kit.fontawesome.com/8ee3786d3d.js" crossorigin="anonymous"></script>
    <title>Burguer Mania</title>
</head>
<body>
    
    <header>
        <div class="icon-social">
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a> 
            <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
        </div>
        <div class="caixa">
            <img id="logo" src="css/burguermania.png" alt="logo">
            <nav>
                <ul class="menu">
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#cardapio">Cardápio</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section>
        <img id="banner" src="css/banner.jpg" alt="Banner">
    </section>


    <section id="sobre">
            
        <div class="textosobre">
            <h2 class="titulosobre">Sobre a Burguer Mania</h2>
            <p class="paragrafosobre">Na Burger Mania, nos dedicamos à preparação de hambúrgueres artesanais feitos na lenha. Nossa abordagem culinária é centrada na qualidade e no sabor autêntico. Cada hambúrguer é cuidadosamente grelhado, resultando em uma experiência gastronômica única. Convidamos você a compartilhar essa jornada culinária conosco e a desfrutar de hambúrgueres excepcionais em um ambiente aconchegante e amigável.</p>
            <h2 class="titulosobre">Compromisso com a Qualidade e Sustentabilidade</h2>
            <p class="paragrafosobre">Nossa paixão não se limita apenas aos sabores excepcionais, mas também ao nosso compromisso com a sustentabilidade. Trabalhamos com fornecedores locais e sustentáveis para garantir que nossos ingredientes sejam produzidos de maneira responsável. Além disso, estamos constantemente procurando maneiras de reduzir nosso impacto ambiental, desde práticas de reciclagem até a minimização de resíduos.</p>
            <h2 class="titulosobre">Ambiente Acolhedor e Amigável</h2>
            <p class="paragrafosobre">Não somos apenas apaixonados por hambúrgueres; somos apaixonados por proporcionar um ambiente acolhedor e amigável para nossos clientes. Nossa equipe é calorosa e atenciosa, pronta para tornar sua visita agradável em todos os aspectos. Quer você esteja aproveitando uma refeição rápida durante a pausa para o almoço, celebrando um aniversário ou simplesmente passando um tempo de qualidade com amigos e familiares, estamos aqui para tornar sua experiência inesquecível.</p>
            <h2 class="titulosobre">Visite a Burger Mania hoje!</h2>
            <p class="paragrafosobre">
                Venha fazer parte da revolução do sabor na Burger Mania. Se você é um amante de hambúrgueres, um explorador de sabores ou simplesmente alguém em busca de uma refeição deliciosa, estamos ansiosos para recebê-lo. Junte-se a nós e descubra por que a Burger Mania é mais do que uma hamburgueria; é uma experiência culinária que alimenta a sua paixão pelo sabor.
            </p>
        </div>
            
        <img id="burguersobre" src="css/burguersobre.jpg" alt="burguersobre">
    
    </section>

    <main>

        <section id="cardapio">
            <h2 class="cardapio">Cardápio</h2>
            <div class="imgcardapio">
            
                <img id="burguer" src="css/burguer1.jpg" alt="Hamburgueres">
                <img id="burguer" src="css/burguer2.jpg" alt="Hamburgueres">
                <img id="burguer" src="css/burguer3.jpg" alt="Hamburgueres">
                <img id="burguer" src="css/burguer4.jpg" alt="Hamburgueres">
            
            </div>
            <div class="textocardapio">
                
                <h2 class="titulocardapio">Número 1</h2>
                <p class="paragrafocardapio">O clássico que nunca sai de moda! Nosso hamburguer tradicional é preparado com carne suculenta grelhada, queijo derretido e acompanhado por alface crocante, tomate fresco e nossa irresistível maionese especial. Uma explosão de sabor em cada mordida, este hamburguer vai te levar de volta às raízes da comida rápida.</p>

                <h2 class="titulocardapio">Número 2</h2>
                <p class="paragrafocardapio">Uma opção deliciosa e saudável para os amantes de vegetais! Nosso hamburguer vegetariano é feito com uma base de vegetais frescos, cogumelos e temperos secretos que dão um toque de sabor inigualável. Servido com queijo derretido, alface, tomate e maionese vegana, este hamburguer é uma experiência que agrada a todos os paladares, independentemente da preferência de carne.</p>

                <h2 class="titulocardapio">Número 3</h2>
                <p class="paragrafocardapio">Um hamburguer para os amantes de saladas com um toque especial! Nosso Cheddar Barbecue Salad Hamburguer combina a suculência de um hamburguer de carne com a frescura de uma salada crocante. Coberto com queijo cheddar derretido, ele é servido com uma generosa porção de alface, tomate, cebola roxa e molho especial de salada. Uma explosão de sabores e texturas em cada mordida.</p>
            
                <h2 class="titulocardapio">Número 4</h2>
                <p class="paragrafocardapio">Uma explosão de sabor que vai satisfazer sua fome! O Cheddar Bacon Hamburguer é um verdadeiro deleite para os amantes de bacon. Feito com nosso hamburguer suculento, ele é coberto com fatias crocantes de bacon e queijo cheddar derretido. Para dar um toque de frescura, acrescentamos alface, tomate e uma pitada do nosso molho especial. Prepare-se para uma experiência de sabor intensa e irresistível.</p>
            
            </div>


        </section>  
    </main>

    <footer id=contato class="burguer-footer">

            <img id="logo-footer" src="css/burguermania.png" alt="logo">

            <div class="message-contato">
                <label for="form-nome">Nome: </label>
                <input class="input-contato" type="text" name="form-nome" id="form-nome">
                <label for="form-mail">E-mail: </label>
                <input class="input-email" type="email" name="form-email" id="form-email">
                <label for="message">Mensagem: </label>
                <textarea class="input-message name="message" id="form-text" cols="30" rows="5"></textarea>
                <input type="submit" value="Enviar" class="enviar">
            </div>

    </footer>
    <p class="copyright">&copy; 2023 Jorge Rangel, Burguer Mania</p>
</body>
</html>