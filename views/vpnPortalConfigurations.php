<?php $this->layout('base', ['activeItem' => 'configurations', 'pageTitle' => $this->t('Configurations')]); ?>
<?php $this->start('content'); ?>
    <h2><?=$this->t('Create'); ?></h2>
    <?php if (0 === count($profileList)): ?>
        <p class="warning">
            <?=$this->t('No VPN profiles are available for your account.'); ?>
        </p>
    <?php else: ?>
		<p>
        <?=$this->t('Manually create and download an OpenVPN configuration file for use in your OpenVPN client.'); ?>
		</p>
		<details>
			<summary><?=$this->t('Continue...'); ?></summary>
			<p>
			<?=$this->t('Select a profile and choose a name, e.g. "Phone".'); ?>
			</p>

	        <p class="warning small">
			<?=$this->t('Your new configuration will expire on %expiryDate%. Come back here to obtain a new configuration after expiry!'); ?>
			</p>

	        <form method="post" class="frm">
	            <fieldset>
	                <label for="profileId"><?=$this->t('Profile'); ?></label>
	                <select name="profileId" id="profileId" size="<?=count($profileList); ?>" required>
	<?php foreach ($profileList as $profileId => $profileData): ?>
	                    <option value="<?=$this->e($profileId); ?>"><?=$this->e($profileData['displayName']); ?></option>
	<?php endforeach; ?>
	                </select>
	                <label for="displayName"><?=$this->t('Name'); ?></label>
	                <input type="text" name="displayName" id="displayName" size="32" maxlength="64" placeholder="<?=$this->t('Name'); ?>" autofocus required>
	            </fieldset>
	            <fieldset>
	                <button type="submit"><?=$this->t('Create and Download'); ?></button>
	            </fieldset>
	        </form>
		</details>
    <?php endif; ?>

    <?php if (0 !== count($userCertificateList)): ?>
        <h2><?=$this->t('Existing'); ?></h2>
        <table class="tbl">
            <thead>
                <tr><th><?=$this->t('Name'); ?></th><th><?=$this->t('Expires'); ?> (<?=$this->e(date('T')); ?>)</th><th></th></tr>
            </thead>
            <tbody>
            <?php foreach ($userCertificateList as $userCertificate): ?>
                <tr>
                    <td><span title="<?=$this->e($userCertificate['display_name']); ?>"><?=$this->etr($userCertificate['display_name'], 25); ?></span></td>
                    <td><?=$this->d($userCertificate['valid_to']); ?></td>
                    <td class="text-right">
                        <form class="frm" method="post" action="deleteCertificate">
                            <input type="hidden" name="commonName" value="<?=$this->e($userCertificate['common_name']); ?>">
                            <button class="warning" type="submit"><?=$this->t('Delete'); ?></button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php $this->stop('content'); ?>
