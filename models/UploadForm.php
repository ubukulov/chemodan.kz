<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }
    
    public function upload($arg)
    {
        if (!$this->validate()) return false;
        $this->imageFile->saveAs('img/'.$arg.'.' . $this->imageFile->extension);
        return 'img/'.$arg.'.' . $this->imageFile->extension;
    }
}
?>