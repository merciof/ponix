<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DeliveryPage Model
 *
 * @method \App\Model\Entity\DeliveryPage get($primaryKey, $options = [])
 * @method \App\Model\Entity\DeliveryPage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DeliveryPage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryPage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DeliveryPage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DeliveryPage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryPage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DeliveryPage findOrCreate($search, callable $callback = null, $options = [])
 */
class DeliveryPageTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('delivery_page');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('title_page')
            ->requirePresence('title_page', 'create')
            ->allowEmptyString('title_page', false);

        $validator
            ->scalar('keywords')
            ->requirePresence('keywords', 'create')
            ->allowEmptyString('keywords', false);

        $validator
            ->scalar('description_page')
            ->requirePresence('description_page', 'create')
            ->allowEmptyString('description_page', false);

        $validator
            ->scalar('title')
            ->requirePresence('title', 'create')
            ->allowEmptyString('title', false);

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->allowEmptyString('description', false);

        return $validator;
    }
}
