<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id_produk], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id_produk], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id_produk), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->id_produk) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nama Produk') ?></th>
                    <td><?= h($product->nama_produk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kategori') ?></th>
                    <td><?= h($product->kategori) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($product->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Produk') ?></th>
                    <td><?= $this->Number->format($product->id_produk) ?></td>
                </tr>
                <tr>
                    <th><?= __('Harga') ?></th>
                    <td><?= $product->harga === null ? '' : $this->Number->format($product->harga) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
