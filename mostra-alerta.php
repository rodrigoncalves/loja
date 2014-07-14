<?php 
session_start();
function mostraAlerta($tipo) {
	if (isset($_SESSION[$tipo])) { ?>
		<div class="principal">
			<p class="alert-<?=$tipo?>"><?=$_SESSION[$tipo]?></p>
		</div>
		<?php unset($_SESSION[$tipo]);
	}
}
