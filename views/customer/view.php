<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Customer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?= Html::a('<i class="fa fa-pencil-alt"></i>&nbsp; Update', ['update', 'ID' => $model->ID], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('<i class="fa fa-trash"></i>&nbsp; Delete', ['delete', 'ID' => $model->ID], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </p>
                    
                </div>
                <!--.col-md-12-->
            </div>
			<hr>
			<div class="row">
				<div class="col-md-12">
				<?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'ID',
                            'name',
                            'gender',
                            'services',
                        ],
                    ]) ?>
				</div>
			</div>
            <!--.row-->
        </div>
        <!--.card-body-->
    </div>
    <!--.card-->
</div>