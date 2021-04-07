<?php


namespace AmoCRM\AmoCRM\Models\CustomFieldsValues;


use AmoCRM\Models\CustomFields\CustomFieldModel;
use AmoCRM\Models\CustomFieldsValues\BaseCustomFieldValuesModel;

/**
 * Class LinkedEntityCustomFieldValuesModel
 *
 * @package AmoCRM\Models\CustomFieldsValues
 */
class LinkedEntityCustomFieldValuesModel extends BaseCustomFieldValuesModel
{
    /**
     * @return string
     */
    public function getFieldType(): string
    {
        return CustomFieldModel::TYPE_LINKED_ENTITY;
    }
}
