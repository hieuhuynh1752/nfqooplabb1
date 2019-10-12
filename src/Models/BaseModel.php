<?php
    namespace NFQ\Models;

    abstract class BaseModel{
        abstract public static function create($name,$email,$gender);

    }