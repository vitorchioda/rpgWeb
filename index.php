	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script language="javascript" type="text/javascript">
 $(document).ready(function(){
        $(".buscarPagina").click(function(){
            //Aqui estau retirando o conteudo da propriedade href “o link destino” e colocando em uma variavel
            var link = $(this).attr('href');
            $.ajax
            ({
                dataType: 'html',
                url: link, //link da pagina que o ajax buscará
                success: function(data)
                {
                    $("#content").html(data).fadeIn(340); //Inserindo o retorno da pagina ajax
                },
                error: function(data){
                    $("#content").html("<center><p>ERRO ao carregar outra pagina</p></center>").fadeIn(300); //Em caso de erro ele exibe esta mensagem
                }
            }); 
         
        });
    });
	
		</script>
	</head>
	<body>
		<header>

			<img id="did" src="img/did.png">
			<img id="logo" src="img/logo.jpg"   />

			<h4>Login | Cadastro</h4>	

			<ul id="menu">
				<li><a onclick="return false;" href="conteudo1.php" class="buscarPagina">Home</a></li>
				<li><a onclick="return false;" href="conteudo2.php" class="buscarPagina">Jogar</a></li>
				<li><a onclick="return false;" href="conteudo3.php" class="buscarPagina">O que é RPG?</a></li>
				<li><a onclick="return false;" href="conteudo4.php" class="buscarPagina"">Raças e Classes</a></li>
				<li><a onclick="return false;" href="conteudo5.php" class="buscarPagina">Equipamentos</a></li>
				<li><a onclick="return false;" href="conteudo6.php" class="buscarPagina">Area de Criação</a></li>
			</ul>

			</header>
			
			<div id="content">

				<div id="sobreProjeto">
					<h1>Sobre o Projeto</h1>
					<img id="video" src="img/logo.jpg" />
					<p>Lorem ipsum dolor sit amet, conse<br>ctetur adipiscing elit. Donec et ipsum ultrices, suscipit purus id, mollis lacus. Donec semper diam quis nisl fermentum tristique. Aenean luctus ac urna gravida blandit. Curabitur tempor nisi non ultrices malesuada. Nunc euismod viverra lacus. Nam leo tellus, finibus non imperdiet eu, aliquet quis nulla. Curabitur scelerisque venenatis elit. Donec porttitor tortor quam, vel suscipit tortor semper nec. Pellentesque at semper elit. Proin viverra, odio quis placerat placerat, metus nibh v<br>arius lacus, id fermentum eros ligula pulvinar orci. Cras sapien nisi, vestibulum eu nibh sit amet, ultrices aliquam e
						<br>nim. Etiam varius placerat mi id fringilla. Duis fermentum sagittis mattis. Proin a nisl iaculis, dictum neque a, lobortis purus.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur nec ipsum ac ligula <br>vestibulum ornare. Ut faucibus et velit sed fermentum. Sed feugiat velit a eros commodo imperdiet. Nulla sodales sodales dignissim. Sed molestie tempus diam, a congue augue tristique bibendum. Phasellus eget magna at ligula laoreet dapibus.Aenean rhoncus o<br>rci et eleifend ullamcorper. Fusce porta mollis sem, id tempor ligula. Praesent in efficitur sapien. Vestibulum consequat id augue in faucibus. Quisque efficitur mattis feugiat. Nulla et lacinia libero. Aenean vel urna et neque accumsan malesuada in nec odio. Sed mattis augue a egestas sollicitudin.	</p>
				</div>

				<hr/>
			

				<div id="ideiaChar">
					<h1>Precisando de ideias para seu personagem? </h1>

					<div class="box">
						<center><img class="imgChar" src="img/logo.jpg"/></center>
						<h2>Nome:</h2>
						<h3>Raça:</h3>
						<h3>Classe:</h3>
						<p><h3>Descrição:</h3> Nulla et lacinia libero. Aenean vel urna et neque accumsan malesuada in nec odio.</p>
					</div>
					
					<div class="box">
						<center><img class="imgChar" src="img/logo.jpg"/></center>
						<h2>Nome:</h2>
						<h3>Raça:</h3>
						<h3>Classe:</h3>
						<p><h3>Descrição:</h3> Nulla et lacinia libero. Aenean vel urna et neque accumsan malesuada in nec odio.</p>
					</div>
					
					<div class="box">
						<center><img class="imgChar" src="img/logo.jpg"/></center>
						<h2>Nome:</h2>
						<h3>Raça:</h3>
						<h3>Classe:</h3>
						<p><h3>Descrição:</h3> Nulla et lacinia libero. Aenean vel urna et neque accumsan malesuada in nec odio.</p>
					</div>

				</div>

				<hr/>

				<div id="ideiaHist">
					<h1>Ideias para Historia?</h1>

					<div class="box">
						<h2>Nome:</h2>
						<p><h3>Resumo:</h3> Nulla et lacinia libero. Aenean vel urna et neque accumsan malesuada in nec odio.</p>
					</div>

					<div class="box">
						<h2>Nome:</h2>
						<p><h3>Resumo:</h3> Nulla et lacinia libero. Aenean vel urna et neque accumsan malesuada in nec odio.</p>
					</div>

					<div class="box">
						<h2>Nome:</h2>
						<p><h3>Resumo:</h3> Nulla et lacinia libero. Aenean vel urna et neque accumsan malesuada in nec odio.</p>
					</div>

				

				</div>





			</div>

			<footer>
				
				<h1>s</h1>
				<h1>s</h1>
				<h1>s</h1>

			</footer>
			
	</body>
	</html>