<?php

namespace Laravel5Helpers\Definitions;

class RelationExistSearch
{
    public $relationship;

    public $fieldValue;

    public $fieldName;

    public function __construct($relationship, $fieldName, $fieldValue)
    {
        $this->fieldName = $fieldName;

        $this->relationship = $relationship;

        $this->fieldValue = $fieldValue;
    }
}