<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity.
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'middlename' => true,
        'lastname' => true,
        'email' => true,
        'title' => true,
        'website' => true,
        'reputation' => true,
        'password' => true,
        'background' => true,
        'siteuse' => true,
        'content' => true,
        'shortdesc' => true,
        'path' => true,
        'role' => true,
        'approved' => true,
        'legacy' => true,
        'key' => true,
    ];

    /**
     * Return plain text password as hashed string.
     *
     * @var string
     * @return string hashed passwaord
     */
    protected function _setPassword($value)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($value);
    }
}
