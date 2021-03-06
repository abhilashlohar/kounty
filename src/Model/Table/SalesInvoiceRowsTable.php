<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SalesInvoiceRows Model
 *
 * @property \App\Model\Table\SalesInvoicesTable|\Cake\ORM\Association\BelongsTo $SalesInvoices
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\SalesInvoiceRow get($primaryKey, $options = [])
 * @method \App\Model\Entity\SalesInvoiceRow newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SalesInvoiceRow[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SalesInvoiceRow|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SalesInvoiceRow patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SalesInvoiceRow[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SalesInvoiceRow findOrCreate($search, callable $callback = null, $options = [])
 */
class SalesInvoiceRowsTable extends Table
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

        $this->setTable('sales_invoice_rows');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('SalesInvoices', [
            'foreignKey' => 'sales_invoice_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
            'joinType' => 'INNER'
        ]);
		$this->belongsTo('CgstLedgers', [
			'className' => 'Ledgers',
			'foreignKey' => 'cgst_ledger_id',
			'propertyName' => 'CgstLedgers',
		]);
		$this->belongsTo('SgstLedgers', [
			'className' => 'Ledgers',
			'foreignKey' => 'sgst_ledger_id',
			'propertyName' => 'SgstLedgers',
		]);
		$this->belongsTo('IgstLedgers', [
			'className' => 'Ledgers',
			'foreignKey' => 'igst_ledger_id',
			'propertyName' => 'IgstLedgers',
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
            ->decimal('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->decimal('rate')
            ->requirePresence('rate', 'create')
            ->notEmpty('rate');

        $validator
            ->decimal('amount')
            ->requirePresence('amount', 'create')
            ->notEmpty('amount');

        

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
        $rules->add($rules->existsIn(['sales_invoice_id'], 'SalesInvoices'));
        $rules->add($rules->existsIn(['item_id'], 'Items'));

        return $rules;
    }
}
