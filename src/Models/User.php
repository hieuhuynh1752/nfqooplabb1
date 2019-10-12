<?php
namespace NFQ\Models;

use NFQ\Models\Interfaces\UserInterface;

class User extends BaseModel implements UserInterface
{
    /*Variables*/
    private $_username;
    private $_email;
    private $_gender;

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 0;
    const MALE_TXT ='Male';
    const  FEMALE_TXT='Female';

    public function __construct(string $name, string $email, int $gender)
    {
        $this->_username = $name;
        $this->_email = $email;
        if($gender==self::GENDER_FEMALE){
            $this->_gender = self::FEMALE_TXT;
        }
        elseif ($gender==self::GENDER_MALE){
            $this->_gender = self::MALE_TXT;
        }
    }

    public function getUserInfo()
    {
        return $this->_username.', '.$this->_gender.', email address: '.$this->_email;
    }

    public function GetUserEmail()
    {
        return $this->_email;
    }

    public function GetUserName()
    {
        return $this->_username;
    }

    public static function Create($name,$email,$gender)
    {
        $user = new User($name,$email,$gender);
        return $user;
    }
}
