<?php

namespace AmoCRM\Collections;

use AmoCRM\Collections\Interfaces\HasPagesInterface;
use AmoCRM\Collections\Traits\PagesTrait;
use AmoCRM\Models\TagModel;

class TagsCollection extends BaseApiCollection implements HasPagesInterface
{
    use PagesTrait;

    protected $itemClass = TagModel::class;
}
