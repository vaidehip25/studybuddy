<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Year */

$this->title = 'Create Year';
$this->params['breadcrumbs'][] = ['label' => 'Years', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$model->status=1;
$session= Yii::$app->session;
//echo '<pre>';
//print_r (Yii::$app->user->identity);
$model->created_by= Yii::$app->user->identity->username;
$model->updated_by= Yii::$app->user->identity->username;
$model->updated_at=date('Y-m-d H:i:s');
$model->created_at=date('Y-m-d H:i:s');
?>
<div class="year-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
