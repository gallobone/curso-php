<?php

//VALIDA SESSAO 
session_start();
if(isset($_SESSION['mensagem'])): ?>

	<script type="text/javascript">
		//mensagem
		window.onload = function(){
			M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
		};
	</script>


<?php
endif;
session_unset();


?>