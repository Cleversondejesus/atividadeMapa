<?php
    include("dados.php");
    

?>
<!DOCTYPE html>
<html lang="pt-br">
		<head>
    		<meta charset="UTF-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    		<title>Descricao das marmitas</title>
			<link rel="icon" href="img/marmita2.jpg">
			<link rel="stylesheet" href="pagina2.css">		
		</head>
	<body>
		<header>
			<div class="container-logo">
				<div class="logo-imagem"></div>			
					<div class="logo-texto">
					<h1>Marmitas dona Rita</h1>
				</div>
			</div>
				<div class="menu">
					<ul>
						<li><a href="index.php">Pagina Principal</a></li>
						<li><a href="#">loja</a></li>
						<li><a href="#">contato</a></li>
					</ul>
				</div>
	
		</header>
			<main>
				<section class="main_tutorial">
					<head class="marmitas_header">
						<h1>Sobre a nossa Marmita</h1>
				
					</header>
					<?php
                	$id = $_GET['id'];

					foreach($marmitas as $key => $value){
                    if ($value['id'] == $id){
					?>
					<article class="main_tutorial_header">
							<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
							<h1><?=$value['titulo'];?></h1>
							<h3>Descrição:</h3>
							<?=$value['descricao'];?>
						
					</article>						
						<?php 
                    		}
						}
					?>		
				</section>
				<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Entra em contato pelo nosso whatsapp (44) 9 9124-6648 e faço o  seu pedido</h1>
                    </header>
                 
                </div>
            </article>
        </div>
    		</main>
	</body>
</html>