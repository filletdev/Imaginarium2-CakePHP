<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sidepost Entity.
 */
class Sidepost extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'title' => true,
        'permalink' => true,
        'user_id' => true,
        'content' => true,
        'live' => true,
        'user' => true,
    ];
}
