<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Item'), ['action' => 'edit', $item->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Item'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="items view large-10 medium-9 columns">
    <h2><?= h($item->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($item->title) ?></p>
            <h6 class="subheader"><?= __('Metadescription') ?></h6>
            <p><?= h($item->metadescription) ?></p>
            <h6 class="subheader"><?= __('Permalink') ?></h6>
            <p><?= h($item->permalink) ?></p>
            <h6 class="subheader"><?= __('Layout') ?></h6>
            <p><?= h($item->layout) ?></p>
            <h6 class="subheader"><?= __('Link') ?></h6>
            <p><?= h($item->link) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($item->id) ?></p>
            <h6 class="subheader"><?= __('Section') ?></h6>
            <p><?= $this->Number->format($item->section) ?></p>
            <h6 class="subheader"><?= __('Parent') ?></h6>
            <p><?= $this->Number->format($item->parent) ?></p>
            <h6 class="subheader"><?= __('Depth') ?></h6>
            <p><?= $this->Number->format($item->depth) ?></p>
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $this->Number->format($item->order) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($item->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($item->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Live') ?></h6>
            <p><?= $item->live ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($item->content)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Block1') ?></h6>
            <?= $this->Text->autoParagraph(h($item->block1)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Block2') ?></h6>
            <?= $this->Text->autoParagraph(h($item->block2)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Block3') ?></h6>
            <?= $this->Text->autoParagraph(h($item->block3)); ?>

        </div>
    </div>
</div>
