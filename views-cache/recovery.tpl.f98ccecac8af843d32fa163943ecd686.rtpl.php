<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- HEADER PAGE / RainTpl -->

<div class="panel">

	<h2><?php echo htmlspecialchars( $page, ENT_COMPAT, 'UTF-8', FALSE ); ?> - Hello <?php echo htmlspecialchars( $user, ENT_COMPAT, 'UTF-8', FALSE ); ?> - Status [ <?php echo htmlspecialchars( $status, ENT_COMPAT, 'UTF-8', FALSE ); ?> ]</h2>

</div>
