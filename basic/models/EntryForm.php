<?php
/**
 * Created by PhpStorm.
 * User: zhuchen
 * Date: 16/7/20
 * Time: 下午4:13
 */

namespace app\models;
use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;
    //name 和 email 值都是必须的
    //email 的值必须满足email规则验证
    public function rules()
    {
        return [[['name','email'],'required'],['email','email']];
    }
}