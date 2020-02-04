<?php
namespace app\models;
use Yii;
class MYSQLDomicilio extends \yii\db\ActiveRecord{
    public static function getDb() { 
        return Yii::$app->get('dbTwo'); // Base de datos en MYSQL
     }
    public static function tableName(){
        return 'persona_domicilio';
    }

    public function rules()
    {
        return [
            [['domicilio_id'], 'required'],
            [['domicilio_calle','domicilio_dpto','domicilio_nro','domicilio_piso'], 'string'],
            [['domicilio_ciudad'],'integer']
          
           
           
        ];
    }

    public function attributeLabels()
    {
        return [
            'domicilio_id'=>'ID Domicilio',
            'domicilio_calle' => 'Calle',
            'domicilio_dpto' => 'Departamento',
            'domicilio_nro' => 'Numero',
            'domicilio_piso' => 'Piso',
           
            

        ];

    }

}

?>