<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Block'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="blocks index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('metaone') ?></th>
            <th><?= $this->Paginator->sort('metatwo') ?></th>
            <th><?= $this->Paginator->sort('link') ?></th>
            <th><?= $this->Paginator->sort('alt1') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($blocks as $block): ?>
        <tr>
            <td><?= $this->Number->format($block->id) ?></td>
            <td><?= h($block->title) ?></td>
            <td><?= h($block->email) ?></td>
            <td><?= h($block->metaone) ?></td>
            <td><?= h($block->metatwo) ?></td>
            <td><?= h($block->link) ?></td>
            <td><?= h($block->alt1) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $block->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $block->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $block->id], ['confirm' => __('Are you sure you want to delete # {0}?', $block->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
