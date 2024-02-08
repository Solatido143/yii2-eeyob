<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    #index_table table {
        overflow: auto;
        word-wrap: break-word;
        width: 1500px;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
						<div class="col-md-8">
							                    	<?php echo $this->render('_search', ['model' => $searchModel]); ?>
						</div>
                        <div class="col-md-4">
                            <?= Html::a('<i class="fa fa-plus"></i>&nbsp; Create ' . 'Customer', ['create'], ['class' => 'btn btn-success', 'style' => 'float:right']) ?>
                        </div>
                    </div>


			               <?= ListView::widget([
							'dataProvider' => $dataProvider,
							'summaryOptions' => ['class' => 'summary mb-2'],
							'itemOptions' => ['class' => 'item'],
							'itemView' => function ($model, $key, $index, $widget) {
								return Html::a(Html::encode($model->name), ['view', 'ID' => $model->ID]);
							},
							'pager' => [
								'class' => 'yii\bootstrap4\LinkPager',
								'options' => ['class' => 'pagination mt-3'],
							]
						]) ?>
	

                </div>
                <!--.card-body-->
            </div>
            <!--.card-->
        </div>
        <!--.col-md-12-->
    </div>
    <!--.row-->
</div>
