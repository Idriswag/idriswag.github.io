<?php

$page_name = 'error_404';
require_once 'inc/header.php';

?>
	<title>Mkmowil</title>
</head>
<body>

	<div class="container" style="padding: 20px;height: 100vh">
		<div class="error_message btn" style="margin-top: 50px;width: 100%">
			<p style="font-weight: bold;font-size: 20px;color: var(--main-color)"><?= $errorMsg; ?></p>

			<p style="font-size: 85%;color: var(--text-second)">Le lien que vous avez suivi est peut-être rompu, ou la page a été supprimée de MKmowil.</p>

			<a href="<?= $_SESSION['home_url'] ?>" class="btn btn-outline-secondary" style='font-weight: bold;color: var(--text-second)'>Revenir à l'accueil</a>
		</div>
	</div>
	
	
</body>