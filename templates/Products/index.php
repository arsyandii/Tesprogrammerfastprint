<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Product> $products
 */
?>
<div class="products index content">
    <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_produk') ?></th>
                    <th><?= $this->Paginator->sort('nama_produk') ?></th>
                    <th><?= $this->Paginator->sort('harga') ?></th>
                    <th><?= $this->Paginator->sort('kategori') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->id_produk) ?></td>
                    <td><?= h($product->nama_produk) ?></td>
                    <td><?= $product->harga === null ? '' : $this->Number->format($product->harga) ?></td>
                    <td><?= h($product->kategori) ?></td>
                    <td><?= h($product->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->id_produk]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id_produk]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id_produk], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id_produk)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
