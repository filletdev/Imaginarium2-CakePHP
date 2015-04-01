<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Firstname') ?></h6>
            <p><?= h($user->firstname) ?></p>
            <h6 class="subheader"><?= __('Middlename') ?></h6>
            <p><?= h($user->middlename) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($user->lastname) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($user->title) ?></p>
            <h6 class="subheader"><?= __('Website') ?></h6>
            <p><?= h($user->website) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Path') ?></h6>
            <p><?= h($user->path) ?></p>
            <h6 class="subheader"><?= __('Key') ?></h6>
            <p><?= h($user->key) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Reputation') ?></h6>
            <p><?= $this->Number->format($user->reputation) ?></p>
            <h6 class="subheader"><?= __('Approved') ?></h6>
            <p><?= $this->Number->format($user->approved) ?></p>
            <h6 class="subheader"><?= __('Legacy') ?></h6>
            <p><?= $this->Number->format($user->legacy) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Background') ?></h6>
            <?= $this->Text->autoParagraph(h($user->background)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Siteuse') ?></h6>
            <?= $this->Text->autoParagraph(h($user->siteuse)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($user->content)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Shortdesc') ?></h6>
            <?= $this->Text->autoParagraph(h($user->shortdesc)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Role') ?></h6>
            <?= $this->Text->autoParagraph(h($user->role)); ?>

        </div>
    </div>
</div>
