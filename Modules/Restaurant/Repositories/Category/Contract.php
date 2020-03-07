<?php
namespace Modules\Restaurant\Repositories\Category;


interface Contract
{
    const RELATION_VISIBLE = 'visible';
    const RELATION_PRODUCTS = 'products';
    const FIELD_VISIBLE = 'fk_visible';
    const VISIBLE_VALUE_YES = 1;
}
