<?php $this->layout('base', ['activeItem' => 'home']); ?>
<?php $this->start('content'); ?>
<h1><?=$this->t('Home'); ?></h1>
<?php if ($motdMessage): ?>
    <p class="plain"><?=$this->batch($motdMessage['message'], 'escape|nl2br'); ?></p>
<?php endif; ?>
<p class="banner"><?=$this->t('Welcome to eduVPN!'); ?></p>
<p>
    <?=$this->t('To use eduVPN, download the app for your device below!'); ?>
</p>

<div class="apps">
	<a target="_blank" href="https://app.eduvpn.org/windows/eduVPNClient_latest.exe">
		<img width="200" height="29" src="img/eduVPN/Windows.png" alt="Windows">
		<span><?=$this->t('Download'); ?></span>
	</a>
	<a target="_blank" href="https://apps.apple.com/app/eduvpn-client/id1317704208">
		<img width="200" height="29" src="img/eduVPN/macOS.png" alt="macOS">
		<span><?=$this->t('Download'); ?></span>
	</a>
	<a target="_blank" href="https://play.google.com/store/apps/details?id=nl.eduvpn.app">
		<img width="200" height="29" src="img/eduVPN/Android.png" alt="Android">
		<span><?=$this->t('Download'); ?></span>
	</a>
	<a target="_blank" href="https://apps.apple.com/app/eduvpn-client/id1292557340">
		<img width="200" height="29" src="img/eduVPN/iOS.png" alt="iOS">
		<span><?=$this->t('Download'); ?></span>
	</a>
</div> <!-- /apps -->

<p class="small">
    <?=$this->t('On your "Account" page you can block access to the VPN in case you lose a device.'); ?>
    <?=$this->t('On the "Configurations" page, advanced users can manually download VPN configurations.'); ?>
</p>
<?php $this->stop('content'); ?>
