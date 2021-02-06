<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <!-- <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Sandwich Application</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/images/default-avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->identity['username'] ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <?php
            echo \hail812\adminlte3\widgets\Menu::widget([
                'items' => [
                    ['label' => 'Customers', 'icon' => 'users', 'url' => ['/customers']],
                    ['label' => 'Meals', 'icon' => 'th', 'url' => ['/meals']],
                    ['label' => 'Orders', 'icon' => 'shopping-cart', 'url' => ['/orders']],
                    ['label' => 'Opening Days', 'icon' => 'clock', 'url' => ['/meal-opening-days']],
                    [
                        'label' => 'Meal Settings',
                        'items' => [
                            ['label' => 'Breads', 'url' => ['/breads'], 'iconStyle' => 'far'],

                            ['label' => 'Sauces', 'url' => ['/sauces'], 'iconStyle' => 'far'],
                            [
                                'label' => 'Tastes',
                                'iconStyle' => 'far',
                                'url' => ['/tastes']
                                
                            ],
                            ['label' => 'Vegetables', 'url' => ['/vegetables'], 'iconStyle' => 'far']
                        ]
                    ],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>