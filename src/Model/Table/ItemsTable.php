<?php
namespace App\Model\Table;

use App\Model\Entity\Item;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 */
class ItemsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('items');
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
            ->requirePresence('title', 'create')
            ->notEmpty('title')
            ->requirePresence('metadescription', 'create')
            ->notEmpty('metadescription')
            ->requirePresence('permalink', 'create')
            ->notEmpty('permalink')
            ->allowEmpty('layout')
            ->add('section', 'valid', ['rule' => 'numeric'])
            ->requirePresence('section', 'create')
            ->notEmpty('section')
            ->add('parent', 'valid', ['rule' => 'numeric'])
            ->requirePresence('parent', 'create')
            ->notEmpty('parent')
            ->add('depth', 'valid', ['rule' => 'numeric'])
            ->requirePresence('depth', 'create')
            ->notEmpty('depth')
            ->allowEmpty('content')
            ->allowEmpty('block1')
            ->allowEmpty('block2')
            ->allowEmpty('block3')
            ->allowEmpty('link')
            ->add('live', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('live')
            ->add('order', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('order');

        return $validator;
    }
}
