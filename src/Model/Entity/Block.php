<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Block Entity.
 */
class Block extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'content' => true,
        'content_two' => true,
        'content_three' => true,
        'content_four' => true,
        'email' => true,
        'metaone' => true,
        'metatwo' => true,
        'link' => true,
        'alt1' => true,
        'alt2' => true,
        'alt3' => true,
        'alt4' => true,
        'alt5' => true,
        'alt6' => true,
        'alt7' => true,
        'pathone' => true,
        'pathtwo' => true,
        'paththree' => true,
        'pathfour' => true,
        'link1' => true,
        'link2' => true,
        'link3' => true,
        'link4' => true,
    ];
}
