<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PrelevementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prelevements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prelevement-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <!--?= Html::a('Create Prelevement', ['create'], ['class' => 'btn btn-success']) ?-->
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            //['class' => 'yii\grid\SerialColumn'],
            'idprelevement',
            [
                'attribute'=>'idpatient0.fullName',
                'format'=>'text',
                'label'=>'Patients',

            ],
            /*[
                'attribute' => 'nom',
                'value' =>  'idpatient0.fullname',

            ],*/

            'preleveur',
            'dateprelev',
            'datereception',
            //'conforme',

            // 'Urgent',
            // 'idnature',
            // 'idaspectprelevement',
            // 'idpatient',
            // 'idanalysemedicale',
            // 'iddemandeanalyse',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>