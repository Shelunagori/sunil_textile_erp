<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \App\Model\Table\UnitsTable|\Cake\ORM\Association\BelongsTo $Units
 * @property \App\Model\Table\StockGroupsTable|\Cake\ORM\Association\BelongsTo $StockGroups
 *
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, callable $callback = null, $options = [])
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
        parent::initialize($config);

        $this->setTable('items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Units', [
            'foreignKey' => 'unit_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('StockGroups', [
            'foreignKey' => 'stock_group_id',
            'joinType' => 'LEFT'
        ]);
		$this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
        ]);
		$this->hasMany('ItemLedgers', [
            'foreignKey' => 'item_id',
            'joinType' => 'INNER'
        ]);
		$this->belongsTo('Sizes', [
            'foreignKey' => 'size_id',
            'joinType' => 'LEFT'
        ]);
		$this->belongsTo('Shades', [
            'foreignKey' => 'shade_id',
            'joinType' => 'LEFT'
        ]);
		$this->belongsTo('GstFigures', [
            'foreignKey' => 'gst_figure_id',
            'joinType' => 'LEFT'
		]);
		$this->belongsTo('FirstGstFigures', [
			'className' => 'GstFigures',
			'foreignKey' => 'first_gst_figure_id',
			'propertyName' => 'FirstGstFigures',
		]);
		$this->belongsTo('SecondGstFigures', [
			'className' => 'GstFigures',
			'foreignKey' => 'second_gst_figure_id',
			'propertyName' => 'SecondGstFigures',
		]);
		
<<<<<<< HEAD
=======
		$this->belongsTo('input_cgst_ledger', [
			'className' => 'Ledgers',
			'foreignKey' => 'input_cgst_ledger_id',
			'propertyName' => 'input_cgst_ledger',
		]);
		
		$this->belongsTo('input_sgst_ledger', [
			'className' => 'Ledgers',
			'foreignKey' => 'input_sgst_ledger_id',
			'propertyName' => 'input_sgst_ledger',
		]);
		$this->belongsTo('input_igst_ledger', [
			'className' => 'Ledgers',
			'foreignKey' => 'input_igst_ledger_id',
			'propertyName' => 'input_igst_ledger',
		]);
		
		$this->belongsTo('output_cgst_ledger', [
			'className' => 'Ledgers',
			'foreignKey' => 'output_cgst_ledger_id',
			'propertyName' => 'output_cgst_ledger',
		]);
		
		$this->belongsTo('output_sgst_ledger', [
			'className' => 'Ledgers',
			'foreignKey' => 'output_sgst_ledger_id',
			'propertyName' => 'output_sgst_ledger',
		]);
		$this->belongsTo('output_igst_ledger', [
			'className' => 'Ledgers',
			'foreignKey' => 'output_igst_ledger_id',
			'propertyName' => 'output_igst_ledger',
		]);
		
		$this->belongsTo('Companies', [
            'foreignKey' => 'company_id',
            'joinType' => 'INNER'
		]);
>>>>>>> b6cdfcf8a0a777d15713ef6995860661d01adddd
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('hsn_code', 'create')
            ->notEmpty('hsn_code');

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
        $rules->add($rules->existsIn(['unit_id'], 'Units'));
        //$rules->add($rules->existsIn(['stock_group_id'], 'StockGroups'));
		$rules->add($rules->existsIn(['gst_figure_id'], 'GstFigures'));
        $rules->add($rules->existsIn(['output_cgst_ledger_id'], 'output_cgst_ledger'));
        $rules->add($rules->existsIn(['output_sgst_ledger_id'], 'output_sgst_ledger'));
        $rules->add($rules->existsIn(['output_igst_ledger_id'], 'output_igst_ledger'));
		$rules->add($rules->existsIn(['Input_cgst_ledger_id'], 'Input_cgst_ledger'));
        $rules->add($rules->existsIn(['Input_sgst_ledger_id'], 'Input_sgst_ledger'));
        $rules->add($rules->existsIn(['Input_igst_ledger_id'], 'input_igst_ledger'));
        return $rules;
    }
}
