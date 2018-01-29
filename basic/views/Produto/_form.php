<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'preco')->textInput(['id'=>'money']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery.maskMoney.js" ></script>]
<script type="text/javascript">
        (function( $ ) {
  $(function() {
    //$("#date").mask("99/99/9999");
	//$("#phone").mask("(99) 999-9999");
    //$("#cep").mask("99.999-99");
    //$("#cpf").mask("99.999.999-99");
	$("#money").maskMoney({prefix:"R$", decimal:".", thousands:","});
    //$("#txtCnpjPesquisa").mask("99.999.999/9999-99");
  });
})(jQuery);
</script>
