<?php 
namespace app\models;

use yii\db\ActiveRecord;


class Country extends ActiveRecord
{

public function saveCountry(){

// get the row whose primary key is "US"
$country = Country::findOne('US');


// modifies the country name to be "U.S.A." and save it to database
$country->name = 'U.S.A.';
$country->save();  

}
}