<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Department;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <?= $form->field($user, 'username')->textInput() ?>
    
    <?= $form->field($user, 'password_hash')->textInput() ?>
    
    <?= $form->field($user, 'email')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employee_picture')->fileInput(); ?>

    <?= $form->field($model, 'department_id')->dropDownList(ArrayHelper::map(Department::find()->all(), 'id', 'name')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
