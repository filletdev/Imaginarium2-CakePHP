<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname')
            ->allowEmpty('middlename')
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email')
            ->allowEmpty('title')
            ->allowEmpty('website')
            ->add('reputation', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('reputation')
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->allowEmpty('background')
            ->allowEmpty('siteuse')
            ->requirePresence('content', 'create')
            ->notEmpty('content')
            ->allowEmpty('shortdesc')
            ->allowEmpty('path')
            ->requirePresence('role', 'create')
            ->notEmpty('role')
            ->add('approved', 'valid', ['rule' => 'numeric'])
            ->requirePresence('approved', 'create')
            ->notEmpty('approved')
            ->add('legacy', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('legacy')
            ->allowEmpty('key');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
