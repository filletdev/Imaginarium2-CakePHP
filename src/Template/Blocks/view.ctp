<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Block'), ['action' => 'edit', $block->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Block'), ['action' => 'delete', $block->id], ['confirm' => __('Are you sure you want to delete # {0}?', $block->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="blocks view large-10 medium-9 columns">
    <h2><?= h($block->title) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Title') ?></h6>
            <p><?= h($block->title) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($block->email) ?></p>
            <h6 class="subheader"><?= __('Metaone') ?></h6>
            <p><?= h($block->metaone) ?></p>
            <h6 class="subheader"><?= __('Metatwo') ?></h6>
            <p><?= h($block->metatwo) ?></p>
            <h6 class="subheader"><?= __('Link') ?></h6>
            <p><?= h($block->link) ?></p>
            <h6 class="subheader"><?= __('Alt1') ?></h6>
            <p><?= h($block->alt1) ?></p>
            <h6 class="subheader"><?= __('Alt2') ?></h6>
            <p><?= h($block->alt2) ?></p>
            <h6 class="subheader"><?= __('Alt3') ?></h6>
            <p><?= h($block->alt3) ?></p>
            <h6 class="subheader"><?= __('Alt4') ?></h6>
            <p><?= h($block->alt4) ?></p>
            <h6 class="subheader"><?= __('Alt5') ?></h6>
            <p><?= h($block->alt5) ?></p>
            <h6 class="subheader"><?= __('Alt6') ?></h6>
            <p><?= h($block->alt6) ?></p>
            <h6 class="subheader"><?= __('Alt7') ?></h6>
            <p><?= h($block->alt7) ?></p>
            <h6 class="subheader"><?= __('Pathone') ?></h6>
            <p><?= h($block->pathone) ?></p>
            <h6 class="subheader"><?= __('Pathtwo') ?></h6>
            <p><?= h($block->pathtwo) ?></p>
            <h6 class="subheader"><?= __('Paththree') ?></h6>
            <p><?= h($block->paththree) ?></p>
            <h6 class="subheader"><?= __('Pathfour') ?></h6>
            <p><?= h($block->pathfour) ?></p>
            <h6 class="subheader"><?= __('Link1') ?></h6>
            <p><?= h($block->link1) ?></p>
            <h6 class="subheader"><?= __('Link2') ?></h6>
            <p><?= h($block->link2) ?></p>
            <h6 class="subheader"><?= __('Link3') ?></h6>
            <p><?= h($block->link3) ?></p>
            <h6 class="subheader"><?= __('Link4') ?></h6>
            <p><?= h($block->link4) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($block->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content') ?></h6>
            <?= $this->Text->autoParagraph(h($block->content)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content Two') ?></h6>
            <?= $this->Text->autoParagraph(h($block->content_two)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content Three') ?></h6>
            <?= $this->Text->autoParagraph(h($block->content_three)); ?>

        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Content Four') ?></h6>
            <?= $this->Text->autoParagraph(h($block->content_four)); ?>

        </div>
    </div>
</div>
