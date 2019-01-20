<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends  ActiveRecord  implements \yii\web\IdentityInterface
{
  

    /**
    * @return string 返回该AR类关联的数据表名
    */
    public static function tableName() {
      return 't_user';
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
      $user = self::findById($id);
      if ($user) {
          return new static($user);
      }
      return null;
    }

    /**
     *
     * 获取accessToken
     * 
     * @param $token
     * @param $type | null
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
      $user = self::find()->where(array('accessToken' => $token))->one();
      if ($user) {
          return new static($user);
      }
      return null;
    }

    /**
     * 查询数据库获取用户名
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
      $user = self::find()->where(array('username' => $username))->one();
   
      if ($user) {
          return new static($user);
      }

      return null;
    }

    public static function findById($id) {
      $user = self::find()->where(array('id' => $id))->asArray()->one();
      if ($user) {
          return new static($user);
      }

      return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * 验证密码
     *
     * @param string 
     * @return bool 
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}