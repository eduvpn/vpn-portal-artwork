<?php $this->layout('base', ['activeItem' => 'documentation']); ?>
<?php $this->start('content'); ?>
    <h1><?=$this->t('Documentation'); ?></h1>
    <h2><?=$this->t('Getting Started'); ?></h2>
    <p>
<?=$this->t('In order to start using eduVPN, follow the steps below.'); ?>
    </p>
    <ol>
        <li>
<?=$this->t('Download and/or install the eduVPN application for your device as found on the "Home" page;'); ?> 
        </li>
        <li>
<?=$this->t('Launch the eduVPN application and follow the instructions.'); ?>
        </li>
    </ol>
    <p>
<?=$this->t('If you have any problems or questions, please contact your institute.'); ?>
    </p>
<?php $this->stop('content'); ?>
