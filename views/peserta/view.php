<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use hscstudio\mimin\components\Mimin;

/* @var $this yii\web\View */
/* @var $model app\models\Peserta */

$this->title = $model->mahasiswa->nim;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Peserta Baru'), 'url' => ['create']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peserta-view">

    <h1><?= Html::encode($this->title) ?></h1>

 
       

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'mahasiswa.nim',
            'mahasiswa.nama',
            'mahasiswa.prodi',
            'jadwal.kelas',
            'jadwal.tanggal:date',
            'jadwal.waktu',
            
            
            
        ],
    ]) ?>

</div>
