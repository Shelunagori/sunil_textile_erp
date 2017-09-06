<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SecondTampGrnRecords Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\SecondTampGrnRecord get($primaryKey, $options = [])
 * @method \App\Model\Entity\SecondTampGrnRecord newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SecondTampGrnRecord[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SecondTampGrnRecord|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SecondTampGrnRecord patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SecondTampGrnRecord[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SecondTampGrnRecord findOrCreate($search, callable $callback = null, $options = [])
 */
class SecondTampGrnRecordsTable extends Table
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

        $this->setTable('second_tamp_grn_records');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
		$this->belongsTo('Units');
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
		
		$this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('item_code', 'create')
            ->notEmpty('item_code');

        $validator
            ->decimal('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->decimal('purchase_rate')
            ->requirePresence('purchase_rate', 'create')
            ->notEmpty('purchase_rate');

        $validator
            ->decimal('sales_rate')
            ->requirePresence('sales_rate', 'create')
            ->notEmpty('sales_rate');

        $validator
            ->requirePresence('processed', 'create')
            ->notEmpty('processed');

        $validator
            ->integer('is_addition_item_data_required')
            ->requirePresence('is_addition_item_data_required', 'create')
            ->notEmpty('is_addition_item_data_required');

        $validator
            ->requirePresence('item_name', 'create')
            ->notEmpty('item_name');

        $validator
            ->requirePresence('hsn_code', 'create')
            ->notEmpty('hsn_code');

        $validator
            ->requirePresence('unit', 'create')
            ->notEmpty('unit');

        $validator
            ->integer('gst_rate_fixed_or_fluid')
            ->requirePresence('gst_rate_fixed_or_fluid', 'create')
            ->notEmpty('gst_rate_fixed_or_fluid');

        $validator
            ->decimal('first_gst_rate')
            ->requirePresence('first_gst_rate', 'create')
            ->notEmpty('first_gst_rate');

        $validator
            ->decimal('amount_in_ref_of_gst_rate')
            ->requirePresence('amount_in_ref_of_gst_rate', 'create')
            ->notEmpty('amount_in_ref_of_gst_rate');

        $validator
            ->decimal('second_gst_rate')
            ->requirePresence('second_gst_rate', 'create')
            ->notEmpty('second_gst_rate');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
