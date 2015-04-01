<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $block->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $block->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Blocks'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="blocks form large-10 medium-9 columns">
    <?= $this->Form->create($block); ?>
    <fieldset>
        <legend><?= __('Edit Block') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('content');
            echo $this->Form->input('content_two');
            echo $this->Form->input('content_three');
            echo $this->Form->input('content_four');
            echo $this->Form->input('email');
            echo $this->Form->input('metaone');
            echo $this->Form->input('metatwo');
            echo $this->Form->input('link');
            echo $this->Form->input('alt1');
            echo $this->Form->input('alt2');
            echo $this->Form->input('alt3');
            echo $this->Form->input('alt4');
            echo $this->Form->input('alt5');
            echo $this->Form->input('alt6');
            echo $this->Form->input('alt7');
            echo $this->Form->input('pathone');
            echo $this->Form->input('pathtwo');
            echo $this->Form->input('paththree');
            echo $this->Form->input('pathfour');
            echo $this->Form->input('link1');
            echo $this->Form->input('link2');
            echo $this->Form->input('link3');
            echo $this->Form->input('link4');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
