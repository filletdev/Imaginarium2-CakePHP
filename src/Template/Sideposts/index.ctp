<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Sidepost'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="sideposts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('permalink') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('live') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($sideposts as $sidepost): ?>
        <tr>
            <td><?= $this->Number->format($sidepost->id) ?></td>
            <td><?= h($sidepost->title) ?></td>
            <td><?= h($sidepost->permalink) ?></td>
            <td>
                <?= $sidepost->has('user') ? $this->Html->link($sidepost->user->title, ['controller' => 'Users', 'action' => 'view', $sidepost->user->id]) : '' ?>
            </td>
            <td><?= h($sidepost->live) ?></td>
            <td><?= h($sidepost->created) ?></td>
            <td><?= h($sidepost->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $sidepost->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sidepost->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sidepost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sidepost->id)]) ?>
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
