<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HbBanned */

$this->title = $model->banid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Banneds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hb-banned-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->banid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->banid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'banid',
            'ip',
            'admin',
            'dateline',
            'expiration',
        ],
    ]) ?>

</div>
