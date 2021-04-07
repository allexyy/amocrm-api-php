<?php

namespace AmoCRM\AmoCRM\Models\CustomFields;

use AmoCRM\Models\CustomFields\CustomFieldModel;

class LinkedEntityCustomFieldModel extends CustomFieldModel
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return CustomFieldModel::TYPE_LINKED_ENTITY;
    }
}