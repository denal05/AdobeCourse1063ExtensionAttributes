<?php declare(strict_types=1);

namespace Denal05\AdobeCourse1063ExtensionAttributes\Api\Data;

interface MaterialInterface
{
     /**
      * @return string|null
      */
     public function getCustomAttribute();

 
     /**
      * @param string $value
      * @return void
      */
     public function setCustomAttribute($value);
}

