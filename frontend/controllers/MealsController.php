<?php

namespace frontend\controllers;

use common\models\Orders;
use common\models\Customers;
use common\models\MealOpeningDays;
use common\models\Meals;
use Yii;

class MealsController extends \yii\web\Controller
{
    // public function __construct(Orders $order)
    // {
    //     $this->orders = $order;
    // }
    public function actionMyOrders($token = null)
    {
        if (!$token) {
        return $this->render('order-user-token');
        }

        $order = new Orders();
        $orders =  $order->customerOrderHistory($token);
        return $this->render('order-history', ['orders' => $orders, 'token' => $token]);
    }
    public function actionIndex($id, $token)
    {
        $order = new Orders();

        if ($order->load(Yii::$app->request->post()) && $order->placeOrder($id, $token)) {
            Yii::$app->session->setFlash('success', 'Your order has been successfully received please wait some times.');
            return $this->goHome();
        }

        if (!$id || !$token) {
            throw new \yii\web\NotFoundHttpException(404);
        }

        $isUserValid = (new Customers())->checkToken($token);
        if (!$isUserValid) {
            Yii::$app->session->setFlash('error', 'Invalid user token entered.');
            return $this->goHome();
        }

        $meal = new Meals();
        $meal_days = new MealOpeningDays();

        $is_meal_open = $meal_days->checkOpenStatus($id);
        $meal_detail = $meal->getMealById($id);

        if (!$meal_detail->status === 'Open' || !$is_meal_open) {
            Yii::$app->session->setFlash('error', "{$meal_detail->name} is not available for order now.");
            return $this->goHome();
        }


        $lastOrder = $order->getLastOrder($token);
        if ($lastOrder) {
            if ($lastOrder->status == 'open') {
                Yii::$app->session->setFlash('error', 'You already have an open order.');
                return $this->goHome();
            } else {
            }
        }

        return $this->render('index', [
            'order' => $lastOrder ? $lastOrder : $order,
            'meal' => $meal_detail,
        ]);

        return $this->render('index');
    }


    public function actionUpdateOrder($order_id, $token)
    {
        $order = new Orders();
        $order  = $order->getOrder($order_id, $token);
        if ($order) {
            if ($order->status == 'closed') {
                Yii::$app->session->setFlash('error', 'Order is already closed.');
                return  $this->redirect(['meals/my-orders', 'id' => $order->meal_id, 'token' => $token]);
            } else {
                if ($order->load(Yii::$app->request->post()) && $order->updateOrder($order->id)) {
                    Yii::$app->session->setFlash('success', 'Order Successfully Updated');
                    return  $this->redirect(['meals/my-orders', 'id' => $order->meal_id, 'token' => $token]);
                }
                return $this->render('update-order', [
                    'order' => $order,
                    'token' => $token
                ]);
            }
        } else {
            Yii::$app->session->setFlash('error', 'Invalid Order Detail.');
            return $this->goHome();
        }
    }
}
