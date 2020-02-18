<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peserta".
 *
 * @property int $id
 * @property string $nim
 * @property int $id_jadwal
 */
class Peserta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $captcha;
    public static function tableName()
    {
        return 'peserta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim'], 'required'],
            [['nim'],'checkValid'],
            [['id_jadwal'], 'integer'],
            [['nim'], 'string', 'max' => 100],
            [['nim'], 'unique'],
            ['captcha', 'captcha'],            

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function checkValid($attribute, $params)
    {
        $model = Mahasiswa::findOne($this->nim);
        if(is_null($model)) {
            $this->addError($attribute, "NIM $this->nim tidak Berhak Mengikuti Tes Ulang ");

            return false;
        }
        $kelas = Jadwal::find()->select('jadwal.id')->leftJoin('peserta','peserta.id_jadwal=jadwal.id')
         ->groupBy('jadwal.id')
         ->having(new \yii\db\Expression('COUNT(peserta.id) <= 20')) 
         ->one();

         if (is_null($kelas)) {
            $this->addError($attribute, "Maaf Jadwal Penuh ");

            return false;
             
         }

         $this->id_jadwal = $kelas->id;


    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'id_jadwal' => 'Id Jadwal',
        ];
    }

    public function getMahasiswa() {
        return $this->hasOne(Mahasiswa::className(),['nim'=>'nim']);
    }
    public function getJadwal() {
        return $this->hasOne(Jadwal::className(),['id'=>'id_jadwal']);
    }
}
