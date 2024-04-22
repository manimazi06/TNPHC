<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offices Model
 *
 * @property \App\Model\Table\OpeningBalanceDetailsTable&\Cake\ORM\Association\HasMany $OpeningBalanceDetails
 * @property \App\Model\Table\OpeningBalanceLogsTable&\Cake\ORM\Association\HasMany $OpeningBalanceLogs
 *
 * @method \App\Model\Entity\Office newEmptyEntity()
 * @method \App\Model\Entity\Office newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Office[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Office get($primaryKey, $options = [])
 * @method \App\Model\Entity\Office findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Office patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Office[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Office|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Office saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Office[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Office[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Office[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Office[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OfficesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('offices');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('OpeningBalanceDetails', [
            'foreignKey' => 'office_id',
        ]);
        $this->hasMany('OpeningBalanceLogs', [
            'foreignKey' => 'office_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->integer('created_by')
            ->allowEmptyString('created_by');

        $validator
            ->dateTime('created_date')
            ->allowEmptyDateTime('created_date');

        $validator
            ->integer('modified_by')
            ->allowEmptyString('modified_by');

        $validator
            ->dateTime('modified_date')
            ->allowEmptyDateTime('modified_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['id']), ['errorField' => 'id']);

        return $rules;
    }
}
