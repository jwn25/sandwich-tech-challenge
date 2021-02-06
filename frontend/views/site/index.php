<?php

/* @var $this yii\web\View */

use common\models\MealOpeningDays;

$this->title = 'Subway Sandwich';
?>
<div class="site-index">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="https://rde-stanford-edu.s3.amazonaws.com/Hospitality/Images/subway-header.jpg" alt="...">
            </div>
            <div class="item">
                <img src="https://www.mazyadmall.com/media/50974/banner-min.jpg?anchor=center&mode=crop&width=1300&height=450&rnd=131329297810000000" alt="...">
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <hr>
    <div class="body-content" style="margin-top: 30px;">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Our Meals</h1>
            </div>
            <?php
            foreach ($meals as $key => $meal) {
                $isMealOpen = (new MealOpeningDays())->checkOpenStatus($meal->id);
            ?>
                <div class="col-lg-4" style="padding:20px">
                    <div style="border: 1px solid gray; padding: 10px; border-radius: 15px">
                        <h2><?= $meal->name ?></h2>
                        <p><?= $meal->description ?></p>
                        <p><strong>Status : </strong>
                            <?php if (!$isMealOpen) { ?>
                                <span class="badge badge-danger">Closed</span>
                            <?php } else { ?>
                                <span class="badge badge-success">Open</span>
                            <?php } ?>
                        </p>
                        <p><button class="btn btn-primary" data-meal-id="<?= $meal->id ?>" data-toggle="modal" data-target="#authModal" <?= (!$isMealOpen) ? 'disabled' : '' ?>>Order Now</button></p>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>



    <div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">User Token</h4>
                </div>
                <input type="hidden" name="" class="meal--id">
                <form class="form-user--auth">
                    <div class="modal-body">
                        <div class="alert--area">

                        </div>
                        <div class="form-group">
                            <label for="">Enter Token</label>
                            <input type="text" required class="form-control user-token--input" placeholder="Enter Your Token">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn--order-proceed">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>