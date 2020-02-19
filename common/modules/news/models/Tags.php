<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property int $id
 * @property string $title
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'uniqValidation'],
            [['title'], 'trim'],
            [['title'], 'required'],
            [['title'], 'string', 'max' => 100],
        ];
    }


    public function uniqValidation($attribute,$message)
    {
        $model = self::find()->where(['title'=>$this->title])->count();
        if($model > 0) {
            $this->addError($attribute, 'Тег уже есть');
        }
    }


    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
