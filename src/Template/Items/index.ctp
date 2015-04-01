<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Item'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="items index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('metadescription') ?></th>
            <th><?= $this->Paginator->sort('permalink') ?></th>
            <th><?= $this->Paginator->sort('layout') ?></th>
            <th><?= $this->Paginator->sort('section') ?></th>
            <th><?= $this->Paginator->sort('parent') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $this->Number->format($item->id) ?></td>
            <td><?= h($item->title) ?></td>
            <td><?= h($item->metadescription) ?></td>
            <td><?= h($item->permalink) ?></td>
            <td><?= h($item->layout) ?></td>
            <td><?= $this->Number->format($item->section) ?></td>
            <td><?= $this->Number->format($item->parent) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $item->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $item->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $item->id], ['confirm' => __('Are you sure you want to delete # {0}?', $item->id)]) ?>
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
