<?php

namespace APIHub\Client\Model;
use \APIHub\Client\ObjectSerializer;

class CatalogoTipoResponsabilidad
{
    
    const I = 'I';
    const M = 'M';
    const O = 'O';
    const A = 'A';
    const T = 'T';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::I,
            self::M,
            self::O,
            self::A,
            self::T,
        ];
    }
}
