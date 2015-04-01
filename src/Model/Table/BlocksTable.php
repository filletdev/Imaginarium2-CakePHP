<?php
namespace App\Model\Table;

use App\Model\Entity\Block;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Blocks Model
 */
class BlocksTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('blocks');
        $this->displayField('title');
        $this->primaryKey('id');
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
            ->allowEmpty('content')
            ->allowEmpty('content_two')
            ->allowEmpty('content_three')
            ->allowEmpty('content_four')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email')
            ->allowEmpty('metaone')
            ->allowEmpty('metatwo')
            ->allowEmpty('link')
            ->allowEmpty('alt1')
            ->allowEmpty('alt2')
            ->allowEmpty('alt3')
            ->allowEmpty('alt4')
            ->allowEmpty('alt5')
            ->allowEmpty('alt6')
            ->allowEmpty('alt7')
            ->allowEmpty('pathone')
            ->allowEmpty('pathtwo')
            ->allowEmpty('paththree')
            ->allowEmpty('pathfour')
            ->allowEmpty('link1')
            ->allowEmpty('link2')
            ->allowEmpty('link3')
            ->allowEmpty('link4');

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
