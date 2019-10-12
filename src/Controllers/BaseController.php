<?php
    namespace NFQ\Controllers;
    abstract class BaseController
    {
        abstract public function CreateUser($name,$email,$gender);
        abstract public function DisplayUser($UserId);
    }