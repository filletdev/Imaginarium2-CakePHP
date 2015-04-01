<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $item->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Items'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="items form large-10 medium-9 columns">
    <?= $this->Form->create($item); ?>
    <fieldset>
        <legend><?= __('Edit Item') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('metadescription');
            echo $this->Form->input('permalink');
            echo $this->Form->input('layout');
            echo $this->Form->input('section');
            echo $this->Form->input('parent');
            echo $this->Form->input('depth');
            echo $this->Form->input('content');
            echo $this->Form->input('block1');
            echo $this->Form->input('block2');
            echo $this->Form->input('block3');
            echo $this->Form->input('link');
            echo $this->Form->input('live');
            echo $this->Form->input('order');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
