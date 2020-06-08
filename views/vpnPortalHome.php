<?php $this->layout('base', ['activeItem' => 'home', 'pageTitle' => $this->t('Home')]); ?>
<?php $this->start('content'); ?>
<?php if ($motdMessage): ?>
<blockquote><?=$this->batch($motdMessage['message'], 'escape|nl2br'); ?></blockquote>
<?php endif; ?>
<p class="banner"><?=$this->t('Welcome to eduVPN!'); ?></p>
<p>
    <?=$this->t('To use eduVPN, download the app for your device below!'); ?>
</p>

<div class="apps">
	<a target="_blank" href="https://app.eduvpn.org/windows/eduVPNClient_latest.exe">
		<img width="64" height="64" src="img/eduVPN/app/Windows.png" alt="Windows">
		<span><?=$this->t('Windows'); ?></span>
	</a>
	<a target="_blank" href="https://apps.apple.com/app/eduvpn-client/id1317704208">
		<img width="64" height="64" src="img/eduVPN/app/macOS.png" alt="macOS">
		<span><?=$this->t('macOS'); ?></span>
	</a>
	<a target="_blank" href="https://play.google.com/store/apps/details?id=nl.eduvpn.app">
		<img width="64" height="64" src="img/eduVPN/app/Android.png" alt="Android">
		<span><?=$this->t('Android'); ?></span>
	</a>
	<a target="_blank" href="https://apps.apple.com/app/eduvpn-client/id1292557340">
		<img width="64" height="64" src="img/eduVPN/app/iOS.png" alt="iOS">
		<span><?=$this->t('iOS'); ?></span>
	</a>
</div> <!-- /apps -->

<p class="small">
    <?=$this->t('On your "Account" page you can block access to the VPN in case you lose a device.'); ?>
    <?=$this->t('On the "Configurations" page, advanced users can manually download VPN configurations.'); ?>
</p>
<?php $this->stop('content'); ?>
