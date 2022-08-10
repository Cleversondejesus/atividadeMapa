<?php
    include("dados.php");
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dona Rita marmitas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/marmita.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>    
    <header>
        <nav>
            <ul>                
				<li><a href="#" title="home" alt="home">home</a></li>
				<li><a href="#" title="blog" alt="blog">blog</a></li>
				<li><a href="#" title="contato" alt="contato">Suporte</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Faça seu pedido oline.</h1>
                    </header>
                    <p> Confira todos os modelos disponiveis</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>                    
                </div>
            </article>
        </div>
		    <section class="main_tutorial">
			    <header class="main_tutorial_header">
				    <h1>Confira nossas Marmitas</h1>
                    <p>Aqui você encontra o nosso cardápio das marmitas</p>			    
                </header>
			    <?php
				foreach($marmitas as $key => $value){
			    ?>
			    <article>
				    <a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				    <h2><?=$value['titulo'];?></h2>
                    <p>Tamanho: <?=$value['tamanho'];?></p>
                    <p>Preço: <?=$value['preco'];?></p>				
			    </article>
			    <?php
				    }
			    ?>			
		</section>   
	    </main>
        <footer class="footer">
            <div class="container">
                <div class="sobre-nos">
                    <h1>Sobre nós</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, 
                        natus. Exercitationem temporibus dolor totam non illum voluptate 
                        saepe in provident, laboriosam dolorum, hic molestiae? In pariatur
                        sunt sint commodi officiis!</p>
                    </div>
                    <div class="contatos">
                        <h1>Contatos</h1>
                        <p>donaritamarmitas@gmail.com</p>
                        <p>(44) 9 9124-6648</p>
                </div>
                <div class="fale-conosco">
                    <a href="#">
                        <H1>Fale Conosco</H1>
                    </a>
                    <div class="flex-row">
                    </div>
                </div>
                <div class="rede-sociais">
                    <h1>Rede sociais</h1>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>            
            <div class="texto-copy">
                Desenvolvido por Cleverson Izidorio de Jesus
            </div>
        </footer>                
    </body>
</html>