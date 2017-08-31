<?php
/**
 * @var $this yii\web\View
 * @var $dataProvider yii\data\ActiveDataProvider
 */

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

$this->title = 'Activity log';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCss(<<<CSS
.logger-index .details {
    color: #7e7e7e;
    margin-bottom: 1.5em;
}
.list-view {
    margin-top: 20px;
}
CSS
);

?>
<div class="logger-index">

    <h2><?= Html::encode($this->title) ?></h2>

    <?php Pjax::begin(); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_item',
        'layout' => "{items}\n{pager}",
    ]) ?>

    <?php Pjax::end(); ?>

</div>
