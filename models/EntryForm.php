<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $penname;
    public $email;
    

    public function rules()
    {
        return [
            [['name','penname', 'email'], 'required'],
            ['email', 'email'],
        ];
    

    $model = new EntryForm();
    $model->name = 'Qiang';
    $model->penname='lee';
    $model->email = 'bad';
    if ($model->validate()) {
        // Good!
    } else {
        // Failure!
        // Use $model->getErrors()
    }   

}}