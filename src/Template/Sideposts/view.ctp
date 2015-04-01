<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Sidepost'), ['action' => 'edit', $sidepost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sidepost'), ['action' => 'delete', $sidepost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sidepost->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sideposts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sidepost'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="sideposts view large-10 medium-9 columns">
    <h2><?= h($sidepost->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($sidepost->title) ?></p>
            <h6 class="subheader"><?= __('Permalink') ?></h6>
            <p><?= h($sidepost->permalink) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $sidepost->has('user') ? $this->Html->link($sidepost->user->title, ['controller' => 'Users', 'action' => 'view', $sidepost->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($sidepost->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($sidepost->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($sidepost->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Live') ?></h6>
            <p><?= $sidepost->live ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($sidepost->content)); ?>

        </div>
    </div>
</div>
