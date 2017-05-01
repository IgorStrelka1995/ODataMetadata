<?php
/**
 * Created by PhpStorm.
 * User: Doc
 * Date: 5/1/2017
 * Time: 9:25 PM
 */

namespace AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits;


class TPropertyTypeTrait
{
    use TQualifiedNameTrait;
    public function isTUndottedIdentifierValid($string)
    {
        if(!$this->isTQualifiedNameValid($string)){
            return false;
        }
//          <!-- The below pattern represents the allowed identifiers in ECMA specification plus the '.' for namespace qualification -->
        $regex = '[\p{L}\p{Nl}][\p{L}\p{Nl}\p{Nd}\p{Mn}\p{Mc}\p{Pc}\p{Cf}]{0,}(\.[\p{L}\p{Nl}][\p{L}\p{Nl}\p{Nd}\p{Mn}\p{Mc}\p{Pc}\p{Cf}]{0,}){0,}';
        return $this->matchesRegexPattern($regex, $string);
    }
}