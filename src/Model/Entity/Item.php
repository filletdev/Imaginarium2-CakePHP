<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity.
 */
class Item extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'metadescription' => true,
        'permalink' => true,
        'layout' => true,
        'section' => true,
        'parent' => true,
        'depth' => true,
        'content' => true,
        'block1' => true,
        'block2' => true,
        'block3' => true,
        'link' => true,
        'live' => true,
        'order' => true,
    ];
}
