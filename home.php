<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=1');
    }

	$id_usuario = $_SESSION['id_usuario'];

	require_once 'pages/db.class.php';
         
      
	$classe = new db();

	
	$qtd_tweets = $classe->atualizar_tweets($id_usuario);
	$qtd_seguidores = $classe->atualizar_seguidores($id_usuario);

	
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<script>

		$(document).ready(function(){
			//ASSOCIAR O EVENTO DE CLICK
			$('#btn_tweet').click(function(){
				
				if($('#texto_tweet').val().length > 0){
					
					$.ajax({
						url: 'pages/inclui_tweet.php',
						method: 'post',
						//data: {texto_tweet: $('#texto_tweet').val()},
						data: $('#form_tweet').serialize(),
						success: function(data){
							//LIMPA A INPUT TWEET DEPOIS DE INSERIR DADOS NO BANCO
							$('#texto_tweet').val('');
							atualizaTweet();
						}
					});
				}

			});

			function atualizaTweet(){

				$.ajax({
					url: 'pages/get_tweet.php',
					success: function(data){
						$('#tweets').html(data);
						

					}

				});

			}

			atualizaTweet();



		});

	</script>
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href='pages/sair.php'>Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    
	    	<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><?= $_SESSION['usuario'] ?></h4>

						<hr>


						<div class="col-md-6">
							TWEETS <br/> <?=  $qtd_tweets ?>
						</div>
						<div class="col-md-6">
							SEGUIDORES <br/> <?php echo $qtd_seguidores ?>
						</div>

					</div>

				</div>

			</div>
	    	<div class="col-md-6">
				<div class="panel panel-default">
						<div class="panel-body">
							<form id="form_tweet" class="input-group">
								<input type="text" id="texto_tweet" name="texto_tweet" class="form-control" placeholder="O que está acontecendo agora?" maxlength="140">
								<span class="input-group-btn">
									<button class="btn btn-default" id="btn_tweet" type="button">Teets</button>
								</span>
							</form>

						</div>

						<div id="tweets" class="list-group">

						</div>

				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><a href="pages/procurar_pessoas.php">Procurar por Pessoas</a></h4>
					</div>
				</div>
			</div>

			

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>