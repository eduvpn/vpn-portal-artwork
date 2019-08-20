<?php $this->layout('base', ['activeItem' => 'new']); ?>
<?php $this->start('content'); ?>
    <?php if ($motdMessage): ?>
        <p class="plain"><?=$this->batch($motdMessage['message'], 'escape|nl2br'); ?></p>
    <?php endif; ?>
       
    <?php if (0 === count($profileList)): ?>
        <p class="warning">
            <?=$this->t('Either, no VPN profiles are defined, or this account does not have the required permissions to access any of the available profiles.'); ?>
        </p>
    <?php else: ?>

        <p class="plain">
            <?=$this->t('Use the offical eduVPN applications for connecting to eduVPN. You can download them below!');?>
        </p>

        <ul>
            <li><a href="https://app.eduvpn.org/windows/eduVPNClient_latest.exe">Windows</a></li>
            <li><a href="https://app.eduvpn.org/mac/eduVPN_latest.dmg">macOS</a></li>
            <li><a href="https://play.google.com/store/apps/details?id=nl.eduvpn.app">Android</a></li>
            <li><a href="https://itunes.apple.com/nl/app/eduvpn-client/id1292557340?mt=8">iOS</a></li>
        </ul>

        <details>
            <summary><?=$this->t('Other Devices...');?></summary>
            <p>
                <?=$this->t('Download a new VPN configuration by choosing a profile and a name, e.g. <em>Phone</em>.'); ?>
            </p>

            <form method="post">
                <fieldset>
                    <label for="profileId"><?=$this->t('Profile'); ?></label>
                    <select id="profileId" name="profileId">
                        <?php foreach ($profileList as $k => $v): ?>
                            <?php if (isset($profileId) && $profileId === $k): ?>
                                <option value="<?=$this->e($k); ?>" selected="selected"><?=$this->e($v['displayName']); ?></option>
                            <?php else: ?>
                                <option value="<?=$this->e($k); ?>"><?=$this->e($v['displayName']); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <label for="displayName"><?=$this->t('Name'); ?></label>
                    <input type="text" name="displayName" id="displayName" size="32" maxlength="64" placeholder="<?=$this->t('Name'); ?>" autofocus required>
                </fieldset>
                <fieldset>
                    <button type="submit"><?=$this->t('Download'); ?></button>
                </fieldset>
            </form>
        </details>
    <?php endif; ?>
<?php $this->stop(); ?>
