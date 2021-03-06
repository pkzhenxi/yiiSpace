<?php

/**
* This is the model base class for the table "sys_photo".
* DO NOT MODIFY THIS FILE! It is automatically generated by giix.
* If any changes are necessary, you must set or override the required
* property or method in class "SysPhoto".
*
* Columns in table "sys_photo" available as properties of the model,
* and there are no model relations.
*
* @property string $id
* @property string $categories
* @property string $uid
* @property string $ext
* @property string $mime_type
* @property string $size
* @property string $title
* @property string $uri
* @property string $desc
* @property string $tags
* @property integer $create_time
* @property integer $views
* @property double $rate
* @property integer $rate_count
* @property integer $cmt_count
* @property integer $featured
* @property string $status
* @property string $hash
*
*/
abstract class BaseSysPhoto extends YsActiveRecord {

public static function model($className=__CLASS__) {
return parent::model($className);
}

public function tableName() {
return 'sys_photo';
}

public static function representingColumn() {
return 'desc';
}

public function rules() {
return array(
array('desc', 'required'),
array('create_time, views, rate_count, cmt_count, featured', 'numerical', 'integerOnly'=>true),
array('rate', 'numerical'),
array('uid, size', 'length', 'max'=>10),
array('ext', 'length', 'max'=>4),
array('title, uri, tags', 'length', 'max'=>255),
array('status', 'length', 'max'=>11),
array('hash', 'length', 'max'=>32),
array('categories', 'safe'),
array('categories, uid, ext, size, title, uri, tags, create_time, views, rate, rate_count, cmt_count, featured, status, hash', 'default', 'setOnEmpty' => true, 'value' => null),
array('id, categories, uid, ext, size, title, uri, desc, tags, create_time, views, rate, rate_count, cmt_count, featured, status, hash', 'safe', 'on'=>'search'),
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

public function attributeLabels() {
return array(
'id' => Yii::t('sys_photo', 'id'),
'categories' => Yii::t('sys_photo', 'categories'),
'uid' => Yii::t('sys_photo', 'uid'),
'ext' => Yii::t('sys_photo', 'ext'),
'size' => Yii::t('sys_photo', 'size'),
'title' => Yii::t('sys_photo', 'title'),
'uri' => Yii::t('sys_photo', 'uri'),
'desc' => Yii::t('sys_photo', 'desc'),
'tags' => Yii::t('sys_photo', 'tags'),
'create_time' => Yii::t('sys_photo', 'create_time'),
'views' => Yii::t('sys_photo', 'views'),
'rate' => Yii::t('sys_photo', 'rate'),
'rate_count' => Yii::t('sys_photo', 'rate_count'),
'cmt_count' => Yii::t('sys_photo', 'cmt_count'),
'featured' => Yii::t('sys_photo', 'featured'),
'status' => Yii::t('sys_photo', 'status'),
'hash' => Yii::t('sys_photo', 'hash'),
);
}

public function search() {
$criteria = new CDbCriteria;

$criteria->compare('id', $this->id, true);
$criteria->compare('categories', $this->categories, true);
$criteria->compare('uid', $this->uid, true);
$criteria->compare('ext', $this->ext, true);
$criteria->compare('size', $this->size, true);
$criteria->compare('title', $this->title, true);
$criteria->compare('uri', $this->uri, true);
$criteria->compare('desc', $this->desc, true);
$criteria->compare('tags', $this->tags, true);
$criteria->compare('create_time', $this->create_time);
$criteria->compare('views', $this->views);
$criteria->compare('rate', $this->rate);
$criteria->compare('rate_count', $this->rate_count);
$criteria->compare('cmt_count', $this->cmt_count);
$criteria->compare('featured', $this->featured);
$criteria->compare('status', $this->status, true);
$criteria->compare('hash', $this->hash, true);

return new CActiveDataProvider($this, array(
'criteria' => $criteria,
));
}
}