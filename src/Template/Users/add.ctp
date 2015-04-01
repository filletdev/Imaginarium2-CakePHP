<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user); ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('firstname');
            echo $this->Form->input('middlename');
            echo $this->Form->input('lastname');
            echo $this->Form->input('email');
            echo $this->Form->input('title');
            echo $this->Form->input('website');
            echo $this->Form->input('reputation');
            echo $this->Form->input('password');
            echo $this->Form->input('background');
            echo $this->Form->input('siteuse');
            echo $this->Form->input('content');
            echo $this->Form->input('shortdesc');
            echo $this->Form->input('path');
            echo $this->Form->input('role');
            echo $this->Form->input('approved');
            echo $this->Form->input('legacy');
            echo $this->Form->input('key');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
