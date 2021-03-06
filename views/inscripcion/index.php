

<?php 
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;
use yii\bootstrap\Modal;
/*if($responsable['cuit']==''){
    $responsable['cuit']=$responsable['numeroDocumento'];
}*/

?>
<div class="row">
<div class="col-md-offset-9 col-md-3">
<?= Html::label('Legajo','responsable[legajo]'); ?>
<?= Html::input('text','responsable[Legajo]','',['readonly'=>'readonly','class'=>'form-control']); ?>
</div>
</div>
<?php $form=ActiveForm::begin();?>
<?= Html::tag('h2','Responsable');?>
<?= Html::label('Cuit/cuil','responsable[cuit]'); ?>
<?= Html::input('text','responsable[cuit]','',['class'=>'form-control']); ?>


<?= Html::label('Apellido y nombre','responsable[apellidoYNombre]'); ?>
<?= Html::input('text','responsable[apellidoYNombre]','',['class'=>'form-control']); ?>
<div class="row">
<div class="col-md-2">

<?=  $form->field($provinciaModel,'provincia_nombre')->dropDownList(ArrayHelper::map($provinciaModel->find()->asArray()->all(),'provincia_id','provincia_nombre'),['options'=>['prompt'=>'Selecciona una Provincia...','name'=>'responsable[provincia]','label'=>'Provincia']])
->label('Provincia');
?>
</div>
<div class="col-md-2">

<?=  $form->field($localidadModel,'ciudad_nombre')->dropDownList(ArrayHelper::map($localidadModel->find()->asArray()->all(),'LocalidadKey','Nombre'),['options'=>['selected'=>true],'name'=>'responsable[localidad]','label'=>'Localidad']);?>
<?php //Html::label('Localidad','responsable[localidad]'); 
?>
<?php /* Html::dropDownList('responsable[localidad]',$responsable['localidadkey'],[''],['prompt'=>'Seleccione una localidad','class'=>'form-control','onchange'=>"$.ajax({

type :'POST',
dataType:'JSON',
url  :'index.php?r=inscripcion%2Ftraerlocalidad',
data:{'idLocalidad':+$(\"select[name='responsable[localidad]']\").val()},
success  : function(response) {
    var array,elem;
    for(elem in response){
        $(\"input[name='responsable[codigo_postal]']\").val(response[elem].CodigoPostal);
    }
}
})"]); */?>
</div>
<div class="col-md-2">
<?= Html::label('Codigo postal','responsable[codigo_postal]'); ?>
<?= Html::input('number','responsable[codigo_postal]','',['readonly'=>'readonly','class'=>'form-control']); ?>
</div>
</div>
<?= Html::label('Domicilio','responsable[domicilio]'); ?>
<?= Html::input('text','responsable[domicilio]','',['class'=>'form-control']); ?>

<div class="row">
    <div class="col-md-4">
    <?= Html::label('Fijo','responsable[telefonoFijo]'); ?>
    <?= Html::input('text','responsable[telefonoFijo]','',['class'=>'form-control']); ?>
    </div>
    <div class="col-md-4">
    <?= Html::label('Movil','responsable[telefonoMovil]'); ?>
    <?= Html::input('text','responsable[telefonoMovil]','',['class'=>'form-control']); ?>
    </div>
    <div class="col-md-4">
    <?= Html::label('Email','responsable[email]'); ?>
    <?= Html::input('email','responsable[email]','',['class'=>'form-control']); ?>
    </div>
</div>


<!------------------------Fin Responsable------------------------------------------>
<?= Html::tag('hr');?>
<!--------------------------Inicio Padre---------------------------------------------->

<?= Html::tag('h2','Padre');?>
<?= Html::label('Apellido y nombre','padre[apellidoYNombre]'); ?>
<?= Html::input('text','padre[apellidoYNombre]','',['class'=>'form-control']); ?>
<div class="row">
    <div class="col-md-6">
    <?= Html::label('Ocupación','padre[ocupacion]'); ?>
    <?= Html::input('text','padre[ocupacion]','',['class'=>'form-control']); ?>
    </div>
    <div class="col-md-6">
    <?= Html::label('Cuit/Cuil','padre[cuil]'); ?>
    <?= Html::input('text','padre[cuil]','',['class'=>'form-control']); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
    <?= Html::label('Telefono fijo','padre[telefonoFijo]'); ?>  
     <?= Html::input('number','padre[telefonoFijo]','',['class'=>'form-control']); ?>
    </div>
    <div class="col-md-6">
    <?= Html::label('Telefono Movil','padre[telefonoMovil]'); ?>
    <?= Html::input('number','padre[telefonoMovil]','',['class'=>'form-control']); ?>
    </div>
   
</div>
<div class="row">
    <div class="col-md-6">
    <?= Html::label('Lugar de trabajo','padre[lugarTrabajo]'); ?>
    <?= Html::input('text','padre[lugarTrabajo]','',['class'=>'form-control']); ?>
    </div>
    <div class="col-md-6">
    <?= Html::label('Telefono Laboral','padre[telefonoLaboral]'); ?>
    <?= Html::input('number','padre[telefonoLaboral]','',['class'=>'form-control']); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <?= Html::label('Fecha de nacimiento','padre[fechaNacimiento]'); ?>
    <span class="glyphicon glyphicon-calendar"></span> 
    <?= DatePicker::widget(['value'=>'',
       'name'=>'padre[fechaNacimiento]','language' => 'es','dateFormat' => 'dd/MM/yyyy',
       'clientOptions'=>[
       'changeMonth' => true, 
       'changeYear' => true, 
       'showButtonPanel' => true, 
       'yearRange' => '1929:2019'],
       'options'=>['placeholder'=>'Elija la fecha de nacimiento','readonly'=>'readonly', 'showButtonPanel' => true,'class'=>'form-control']]);
       ?>
    </div>
    <div class="col-md-6">
    <?= Html::label('Nacionalidad','padre[nacionalidad]'); ?>
    <?= Html::dropDownList('padre[nacionalidad]','',['Argentina'],['prompt'=>'Seleccione una nacionalidad','class'=>['form-control']]); ?>
    </div>
</div>
<div class="row">
<div class="col-md-6">
<?= Html::label('Escuela de egreso primaria','padre[escuelaPrimaria]'); ?>
<?= Html::dropDownList('padre[escuelaPrimaria]','',['INSF'=>'INSF (Ins.Nuestra Señora de Fatima)','ISC'=>'ISC(Ins.Santa Catalina)','ISFJ'=>'ISFJ(Ins.San Francisco Javier)'],['prompt'=>'Seleccione Escuela','class'=>'form-control']); ?>
</div>
<div class="col-md-6">
<?= Html::label('Escuela de egreso secundaria','padre[escuelaSecundaria]'); ?>
<?= Html::dropDownList('padre[escuelaSecundaria]','',['INSF'=>'INSF (Ins.Nuestra Señora de Fatima)','ISC'=>'ISC(Ins.Santa Catalina)'],['prompt'=>'Seleccione Escuela','class'=>'form-control']); ?>
</div>
</div>
<div class="row">
<div class="col-md-4">
<?= Html::label('Bautismo','padre[bautismo]'); ?>
<?php

?>
<?=Html::dropDownList('padre[bautismo]','',['NO'=>'No','SI'=>'Si'],['class'=>'form-control']); ?>
</div>
<div class="col-md-4">
<?= Html::label('Comunion','padre[comunion]'); ?>
<?php


?>
<?=Html::dropDownList('padre[comunion]','',['NO'=>'No','SI'=>'Si'],['class'=>'form-control']); ?>
</div>
<div class="col-md-4">
<?= Html::label('Confirmacion','padre[confirmacion]'); ?>

<?=Html::dropDownList('padre[confirmacion]','',['NO'=>'No','SI'=>'Si'],['class'=>'form-control']);  ?>
</div>
</div>
<!-------------------------------- Fin Padre------------------------------------------------------->
<?=Html::tag('hr');?>
<!----------------------------------Inicio Madre-------------------------------------------->

<?= Html::tag('h2','Madre');?>
<?= Html::label('Apellido y nombre','madre[apellidoYNombre]'); ?>
<?= Html::input('text','madre[apellidoYNombre]','',['class'=>'form-control']); ?>
<div class="row">
    <div class="col-md-6">
    <?= Html::label('Ocupación','madre[ocupacion]'); ?>
    <?= Html::input('text','madre[ocupacion]','',['class'=>'form-control']); ?>
    </div>
    <div class="col-md-6">
    <?= Html::label('Cuit/Cuil','madre[cuil]'); ?>
    <?= Html::input('text','madre[cuil]','',['class'=>'form-control']); ?>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
    <?= Html::label('Telefono fijo','madre[telefonoFijo]'); ?>  
     <?= Html::input('number','madre[telefonoFijo]','',['class'=>'form-control']); ?>
    </div>
    <div class="col-md-6">
    <?= Html::label('Telefono Movil','madre[telefonoMovil]'); ?>
    <?= Html::input('number','madre[telefonoMovil]','',['class'=>'form-control']); ?>
    </div>
   
</div>
<div class="row">
    <div class="col-md-6">
    <?= Html::label('Lugar de trabajo','madre[lugarTrabajo]'); ?>
    <?= Html::input('text','madre[lugarTrabajo]','',['class'=>'form-control']); ?>
    </div>
    <div class="col-md-6">
    <?= Html::label('Telefono Laboral','madre[telefonoLaboral]'); ?>
    <?= Html::input('number','madre[telefonoLaboral]','',['class'=>'form-control']); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
    <?= Html::label('Fecha de nacimiento',''); ?>
    <span class="glyphicon glyphicon-calendar"></span> 
    <?= DatePicker::widget(['value'=>'05/07/1975',
       'name'=>'madre[fechaNacimiento]','language' => 'es','dateFormat' => 'dd/MM/yyyy',
       'clientOptions'=>[
       'changeMonth' => true, 
       'changeYear' => true, 
       'showButtonPanel' => true, 
       'yearRange' => '1929:2019'],
       'options'=>['placeholder'=>'Elija la fecha de nacimiento','readonly'=>'readonly', 'showButtonPanel' => true,'class'=>'form-control']]);
       ?>
    </div>
    <div class="col-md-6">
    <?= Html::label('Nacionalidad','madre[nacionalidad]'); ?>
    <?= Html::dropDownList('madre[nacionalidad]',['Argentina'],['prompt'=>'Seleccione una nacionalidad','class'=>['form-control']]); ?>
    </div>
</div>
<div class="row">
<div class="col-md-6">
<?= Html::label('Escuela de egreso primaria','madre[escuelaPrimaria]'); ?>
<?= Html::dropDownList('madre[escuelaPrimaria]','',['INSF'=>'INSF (Ins.Nuestra Señora de Fatima)','ISC'=>'ISC(Ins.Santa Catalina)','ISFJ'=>'ISFJ(Ins.San Francisco Javier)'],['prompt'=>'Seleccione un colegio','class'=>'form-control']); ?>
</div>
<div class="col-md-6">
<?= Html::label('Escuela de egreso secundaria','madre[escuelaSecundaria]');?>
<?= Html::dropDownList('madre[escuelaSecundaria]','',['INSF'=>'INSF (Ins.Nuestra Señora de Fatima)','ISC'=>'ISC(Ins.Santa Catalina)'],['prompt'=>'Seleccione un colegio','class'=>'form-control']); ?>
</div>
</div>
<div class="row">
<div class="col-md-4">
<?= Html::label('Bautismo','madre[bautismo]'); ?>
<?=Html::dropDownList('madre[bautismo]','',['SI'=>'Si','NO'=>'No'],['class'=>'form-control']); ?>
</div>
<div class="col-md-4">
<?= Html::label('Comunion','madre[comunion]'); ?>
<?=Html::dropDownList('madre[comunion]','',['SI'=>'Si','NO'=>'No'],['class'=>'form-control']); ?>
</div>
<div class="col-md-4">
<?= Html::label('Confirmacion','madre[confirmacion]'); ?>
<?=Html::dropDownList('madre[confirmacion]','',['SI'=>'Si','NO'=>'No'],['class'=>'form-control']); ?>
</div>
</div>
<!--------------------Fin madre----------------------------------------------------->
<?= Html::tag('hr');?>
<!--------------------Inicio Alumno----------------------------------------------------->
<?=Html::tag('h2','Alumnos');?>
<?=Html::dropDownList('alumnos','',['Hernesto'],['class'=>'form-control','prompt'=>'Selecciona un alumno...','label'=>'Lista de alumnos']); ?>



<div style="display: none" id="alumnos">
           
           <?= Html::label('DNI','alumno[dni]'); ?>
           <?=Html::input('number','alumno[dni]','',['class'=>'form-control']); ?>
           <div class="row">
               <div class="col-md-4">
               <?= Html::label('Nombres','alumno[nombres]'); ?>
               <?=Html::input('text','alumno[nombre]','',['class'=>'form-control']); ?>
               </div>
               <div class="col-md-4">
               <?= Html::label('Apellidos','alumno[apellidos]'); ?>
               <?=Html::input('text','alumno[apellidos]','',['class'=>'form-control']); ?>
               </div>
               <div class="col-md-4">
               <?= Html::label('Sexo','alumno[sexo]'); ?>
               <?=Html::dropDownList('alumno[sexo]','',['M'=>'Masculino','F'=>'Femenino'],['class'=>'form-control']); ?>
               </div>
           </div>
           <div class="row">
           <div class="col-md-4">
               <?php// $form->field($nivelModel,'Nombre')->dropDownList(ArrayHelper::map($nivelModel->find()->asArray()->all(),'ODEO_NivelKey','Nombre'), ['name'=>'alumno[nivel]','prompt' => 'Seleccione Uno' ,'class'=>'form-control'])->label('Nivel'); 
               ?>
           </div>
           <div class="col-md-4">
               <?= Html::label('Sala/Grado/Curso','alumno[grado]'); ?>
               <?=Html::dropDownList('alumno[grado]','',[],['class'=>'form-control']); ?>
           </div>
           <div class="col-md-4">
               <?= Html::label('Seccion','alumno[seccion]'); ?>
               <?=Html::dropDownList('alumno[seccion]','',['A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E'],['class'=>'form-control']); ?>
           </div>
           
           
           </div>
           <div class="row">
               <div class="col-md-6">
               <?= Html::label('Lugar de nacimiento','alumno[lugarNacimiento]'); ?>
               <?=Html::input('text','alumno[lugarNacimiento]','',['class'=>'form-control']); ?>
               </div>
               <div class="col-md-6">
               <?= Html::label('Fecha de nacimiento','alumno[fechaNacimiento]'); ?>
               <span class="glyphicon glyphicon-calendar"></span> 
               <?= DatePicker::widget([
                  'name'=>'alumno[fechaNacimiento]','language' => 'es','dateFormat' => 'dd/MM/yyyy',
                  'clientOptions'=>[
                  'changeMonth' => true, 
                  'changeYear' => true, 
                  'showButtonPanel' => true, 
                  'yearRange' => '1929:2019'],
                  'options'=>['placeholder'=>'Elija la fecha de nacimiento','readonly'=>'readonly', 'showButtonPanel' => true,'class'=>'form-control']]);
                  ?>
               </div>
           </div>
           <div class="row">
           <div class="col-md-6">
               <?= Html::label('Fecha de Ingreso','alumno[fechaIngreso]'); ?>
               <span class="glyphicon glyphicon-calendar"></span> 
               <?= DatePicker::widget([
                  'name'=>'alumno[fechaIngreso]','language' => 'es','dateFormat' => 'dd/MM/yyyy',
                  'clientOptions'=>[
                  'changeMonth' => true, 
                  'changeYear' => true, 
                  'showButtonPanel' => true, 
                  'yearRange' => '1929:2019'],
                  'options'=>['placeholder'=>'Elija la fecha de ingreso','readonly'=>'readonly', 'showButtonPanel' => true,'class'=>'form-control']]);
                  ?>
               </div>
               <div class="col-md-6">
               <?= Html::label('Fecha de egreso','alumno[fechaEgreso]'); ?>
               <span class="glyphicon glyphicon-calendar"></span> 
               <?= DatePicker::widget([
                  'name'=>'alumno[fechaEgreso]','language' => 'es','dateFormat' => 'dd/MM/yyyy',
                  'clientOptions'=>[
                  'changeMonth' => true, 
                  'changeYear' => true, 
                  'showButtonPanel' => true, 
                  'yearRange' => '1929:2019'],
                  'options'=>['placeholder'=>'Elija la fecha de egreso','readonly'=>'readonly', 'showButtonPanel' => true,'class'=>'form-control']]);
                  ?>
               </div>
           </div>
           <div class="row">
           <div class="col-md-3">
           <?= Html::label('Bautismo','alumno[bautismo]'); ?>
           <?=Html::dropDownList('alumno[bautismo]','',['SI'=>'Si','NO'=>'No'],['class'=>'form-control',
           'onchange'=>
           "
           if($(\"select[name='alumno[bautismo]']\").val()=='SI'){
               
            $(\"input[name='alumno[lugarBautismo]']\").removeAttr('disabled')
            $(\"input[name='alumno[fechaBautismo]']\").removeAttr('disabled')
            $(\"input[name='alumno[diosecisBautismo]']\").removeAttr('disabled')
           }else{
            $(\"input[name='alumno[lugarBautismo]']\").attr('disabled','disabled');
            $(\"input[name='alumno[fechaBautismo]']\").attr('disabled','disabled');
            $(\"input[name='alumno[diosecisBautismo]']\").attr('disabled','disabled');
           }"]); ?>
           </div>
           <div class="col-md-3">
           <?= Html::label('Lugar de bautismo','alumno[lugarBautismo]'); ?>
           <?=Html::input('text','alumno[lugarBautismo]','',['class'=>'form-control']); ?>
           </div>
           <div class="col-md-3">
               <?= Html::label('Fecha de Bautismo','alumno[fechaBautismo]'); ?>
               <span class="glyphicon glyphicon-calendar"></span> 
               <?= DatePicker::widget([
                  'name'=>'alumno[fechaBautismo]','language' => 'es','dateFormat' => 'dd/MM/yyyy',
                  'clientOptions'=>[
                  'changeMonth' => true, 
                  'changeYear' => true, 
                  'showButtonPanel' => true, 
                  'yearRange' => '1929:2019'],
                  'options'=>['placeholder'=>'Elija la fecha de bautismo','readonly'=>'readonly', 'showButtonPanel' => true,'class'=>'form-control']]);
                  ?>
               </div>
               <div class="col-md-3">
               <?= Html::label('Diosecis Bautismo','alumno[diosecisBautismo]'); ?>
           <?=Html::input('text','alumno[diosecisBautismo]','',['class'=>'form-control']); ?>
           </div>
        
              
           </div>
           <div class="row">
           <div class="col-md-3">
           <?= Html::label('Comunion','alumno[comunion]'); ?>
           <?=Html::dropDownList('alumno[comunion]','',['SI'=>'Si','NO'=>'No'],['class'=>'form-control',
           'onchange'=>
           "if($(\"select[name='alumno[comunion]']\").val()=='SI'){
            $(\"input[name='alumno[lugarComunion]']\").removeAttr('disabled')
            $(\"input[name='alumno[fechaComunion]']\").removeAttr('disabled')
            $(\"input[name='alumno[diosecisComunion]']\").removeAttr('disabled')
           }else{
            $(\"input[name='alumno[lugarComunion]']\").attr('disabled','disabled');
            $(\"input[name='alumno[fechaComunion]']\").attr('disabled','disabled');
            $(\"input[name='alumno[diosecisComunion]']\").attr('disabled','disabled');
           }"]); ?>
           </div>
           <div class="col-md-3">
           <?= Html::label('Lugar de Comunion','alumno[lugarComunion]'); ?>
           <?=Html::input('text','alumno[lugarComunion]','',['class'=>'form-control']); ?>
           </div>
           <div class="col-md-3">
               <?= Html::label('Fecha de Comunion','alumno[fechaComunion]'); ?>
               <span class="glyphicon glyphicon-calendar"></span> 
               <?= DatePicker::widget([
                  'name'=>'alumno[fechaComunion]','language' => 'es','dateFormat' => 'dd/MM/yyyy',
                  'clientOptions'=>[
                  'changeMonth' => true, 
                  'changeYear' => true, 
                  'showButtonPanel' => true, 
                  'yearRange' => '1929:2019'],
                  'options'=>['placeholder'=>'Elija la fecha de comunión','readonly'=>'readonly', 'showButtonPanel' => true,'class'=>'form-control']]);
                  ?>
               </div>
               <div class="col-md-3">
               <?= Html::label('Diosecis Comunion','alumno[diosecisComunion]'); ?>
           <?=Html::input('text','alumno[diosecisComunion]','',['class'=>'form-control']); ?>
           </div>
           </div>
           <div class="row">
           <div class="col-md-3">
           <?= Html::label('Confirmacion','alumno[confirmacion]'); ?>
           <?=Html::dropDownList('alumno[confirmacion]','',['SI'=>'Si','NO'=>'No'],['class'=>'form-control',
           'onchange'=>
           "if($(\"select[name='alumno[confirmacion]']\").val()=='SI'){
            $(\"input[name='alumno[lugarConfirmacion]']\").removeAttr('disabled')
            $(\"input[name='alumno[fechaConfirmacion]']\").removeAttr('disabled')
            $(\"input[name='alumno[diosecisConfirmacion]']\").removeAttr('disabled')
           }else{
            $(\"input[name='alumno[lugarConfirmacion]']\").attr('disabled','disabled');
            $(\"input[name='alumno[fechaConfirmacion]']\").attr('disabled','disabled');
            $(\"input[name='alumno[diosecisConfirmacion]']\").attr('disabled','disabled');
           }"]); ?>
           </div>
           <div class="col-md-3">
           <?= Html::label('Lugar de Confirmación','alumno[lugarConfirmacion]'); ?>
           <?=Html::input('text','alumno[lugarConfirmacion]','',['class'=>'form-control']); ?>
           </div>
           <div class="col-md-3">
               <?= Html::label('Fecha de Confirmacion','alumno[fechaConfirmacion]'); ?>
               <span class="glyphicon glyphicon-calendar"></span> 
               <?= DatePicker::widget([
                  'name'=>'alumno[fechaConfirmacion]','language' => 'es','dateFormat' => 'dd/MM/yyyy',
                  'clientOptions'=>[
                  'changeMonth' => true, 
                  'changeYear' => true, 
                  'showButtonPanel' => true, 
                  'yearRange' => '1929:2019'],
                  'options'=>['placeholder'=>'Elija la fecha de confirmación','readonly'=>'readonly', 'showButtonPanel' => true,'class'=>'form-control']]);
                  ?>
               </div>
               <div class="col-md-3">
               <?= Html::label('Diosecis Confirmacion','alumno[diosecisConfirmacion]'); ?>
           <?=Html::input('text','alumno[diosecisConfirmacion]','',['class'=>'form-control']); ?>
           </div>
           </div>
           <br/>
           <br/>
           <?php echo Html::button('Guardar',['class'=>'btn btn-success','onclick'=>"alert('Acción en construcción')"]);?>
           </div>
          


<?php 

ActiveForm::end();

?>