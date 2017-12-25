<?php
use yii\widgets\ActiveForm;

?>
<section class="main clearfix">
<div class="container">
    <h1>Загрузка фото</h1>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

<?= $form->field($model, 'imageFiles[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>
</div>
</section>
