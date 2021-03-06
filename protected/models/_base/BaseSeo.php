<?php

/**
* This is the model base class for the table "seo".
* DO NOT MODIFY THIS FILE! It is automatically generated by giix.
* If any changes are necessary, you must set or override the required
* property or method in class "Seo".
*
* Columns in table "seo" available as properties of the model,
* and there are no model relations.
*
* @property string $id
* @property string $title
* @property string $description
* @property string $keywords
* @property string $seoble_id
* @property string $seoble_type
* @property string $created_at
* @property string $updated_at
*
*/
abstract class BaseSeo extends YsActiveRecord {

public static function model($className=__CLASS__) {
return parent::model($className);
}

public function tableName() {
return 'seo';
}

public static function representingColumn() {
return 'title';
}

public function rules() {
return array(
array('title, description, keywords, seoble_id, seoble_type, created_at, updated_at', 'required'),
array('title, description, keywords, seoble_type', 'length', 'max'=>255),
array('seoble_id', 'length', 'max'=>11),
array('id, title, description, keywords, seoble_id, seoble_type, created_at, updated_at', 'safe', 'on'=>'search'),
);
}

public function relations() {
return array(
);
}

public function pivotModels() {
return array(
);
}



public function search() {
$criteria = new CDbCriteria;

$criteria->compare('id', $this->id, true);
$criteria->compare('title', $this->title, true);
$criteria->compare('description', $this->description, true);
$criteria->compare('keywords', $this->keywords, true);
$criteria->compare('seoble_id', $this->seoble_id, true);
$criteria->compare('seoble_type', $this->seoble_type, true);
$criteria->compare('created_at', $this->created_at, true);
$criteria->compare('updated_at', $this->updated_at, true);

return new CActiveDataProvider($this, array(
'criteria' => $criteria,
));
}
}