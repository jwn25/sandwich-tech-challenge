<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
        $this->title = 'Order History';
        $this->params['breadcrumbs'][] = $this->title;

        // $this->title = 'Update Orders: ' . $model->id;
        // $this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
        // $this->params['breadcrumbs'][] = ['label' => $model->meals->title, 'url' => ['view', 'id' => $model->id]];
        // $this->params['breadcrumbs'][] = 'Update';
?>


<h3>Your Orders</h3>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Meal Name</th>
            <th scope="col">Bread</th>
            <th scope="col">Bread Size</th>
            <th scope="col">Is baked</th>
            <th scope="col">sandwich's Taste</th>
            <th scope="col">Extra</th>
            <th scope="col">Vegetables Size</th>
            <th scope="col">Sauce</th>
            <th scope="col">Location</th>
            <th scope="col">current Status</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>

        <?php if (count($orders) > 0) {
            foreach ($orders as $key => $order) { ?>
                <tr>
                    <th scope="row"><?= $order->created_at ?></th>

                    <td><?= $order->meal->name ?></td>
                    <td><?= $order->bread->name ?></td>
                    <td><?= $order->bread_size ?></td>
                    <td><?= $order->baked ?></td>
                    <td><?= $order->taste->name ?></td>
                    <td><?= $order->extra_item ?></td>
                    <td><?= $order->vegetable->name ?></td>
                    <td><?= $order->sauce->name ?></td>

                    <td><?= $order->address ?></td>
                    <td><?= $order->status ?></td>
                    <td>
                     <a href="<?= '/meals/update-order?order_id='.$order->id.'&token='.$token ?>" class="btn btn-default"
                     <?= ($order->status !=='open') ? 'disabled': '' ?>
                     >Edit</a>
                    </td>
                </tr>
            <?php   }
        } else { ?>

            <tr style="text-align: center;">
                <td colspan="11">No record(s) found</td>
            </tr>
        <?php } ?>


    </tbody>
</table>