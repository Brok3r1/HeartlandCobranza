<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CrossAccountRelations Model
 *
 * @property \App\Model\Table\InvoicesTable&\Cake\ORM\Association\BelongsTo $Invoices
 * @property \App\Model\Table\CrossAccountsTable&\Cake\ORM\Association\BelongsTo $CrossAccounts
 *
 * @method \App\Model\Entity\CrossAccountRelation newEmptyEntity()
 * @method \App\Model\Entity\CrossAccountRelation newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\CrossAccountRelation> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CrossAccountRelation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\CrossAccountRelation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\CrossAccountRelation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\CrossAccountRelation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CrossAccountRelation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\CrossAccountRelation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\CrossAccountRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CrossAccountRelation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CrossAccountRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CrossAccountRelation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CrossAccountRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CrossAccountRelation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CrossAccountRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CrossAccountRelation> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CrossAccountRelationsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('cross_account_relations');
        $this->setDisplayField('id_cross_account_relation');
        $this->setPrimaryKey('id_cross_account_relation');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id',
        ]);
        $this->belongsTo('CrossAccounts', [
            'foreignKey' => 'cross_account_id',
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
            ->integer('invoice_id')
            ->allowEmptyString('invoice_id');

        $validator
            ->integer('cross_account_id')
            ->allowEmptyString('cross_account_id');

        $validator
            ->scalar('serie')
            ->maxLength('serie', 100)
            ->allowEmptyString('serie');

        $validator
            ->scalar('folio')
            ->maxLength('folio', 100)
            ->allowEmptyString('folio');

        $validator
            ->scalar('uuid')
            ->maxLength('uuid', 100)
            ->allowEmptyString('uuid');

        $validator
            ->scalar('moneda')
            ->maxLength('moneda', 100)
            ->allowEmptyString('moneda');

        $validator
            ->scalar('equivalencia')
            ->maxLength('equivalencia', 100)
            ->allowEmptyString('equivalencia');

        $validator
            ->integer('num_parcialidad')
            ->allowEmptyString('num_parcialidad');

        $validator
            ->decimal('imp_pagado')
            ->allowEmptyString('imp_pagado');

        $validator
            ->decimal('imp_saldo_ant')
            ->allowEmptyString('imp_saldo_ant');

        $validator
            ->decimal('imp_saldo_insoluto')
            ->allowEmptyString('imp_saldo_insoluto');

        $validator
            ->scalar('objeto_imp')
            ->maxLength('objeto_imp', 100)
            ->allowEmptyString('objeto_imp');

        $validator
            ->scalar('impuesto_traslado0')
            ->maxLength('impuesto_traslado0', 45)
            ->allowEmptyString('impuesto_traslado0');

        $validator
            ->decimal('impuesto_traslado_base0')
            ->allowEmptyString('impuesto_traslado_base0');

        $validator
            ->decimal('impuesto_traslado_importe0')
            ->allowEmptyString('impuesto_traslado_importe0');

        $validator
            ->decimal('impuesto_traslado_tasa_cuota0')
            ->allowEmptyString('impuesto_traslado_tasa_cuota0');

        $validator
            ->scalar('impuesto_traslado_tipo_factor0')
            ->maxLength('impuesto_traslado_tipo_factor0', 45)
            ->allowEmptyString('impuesto_traslado_tipo_factor0');

        $validator
            ->scalar('impuesto_traslado1')
            ->maxLength('impuesto_traslado1', 45)
            ->allowEmptyString('impuesto_traslado1');

        $validator
            ->decimal('impuesto_traslado_base1')
            ->allowEmptyString('impuesto_traslado_base1');

        $validator
            ->decimal('impuesto_traslado_importe1')
            ->allowEmptyString('impuesto_traslado_importe1');

        $validator
            ->decimal('impuesto_traslado_tasa_cuota1')
            ->allowEmptyString('impuesto_traslado_tasa_cuota1');

        $validator
            ->scalar('impuesto_traslado_tipo_factor1')
            ->maxLength('impuesto_traslado_tipo_factor1', 45)
            ->allowEmptyString('impuesto_traslado_tipo_factor1');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

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
        $rules->add($rules->isUnique(['id_cross_account_relation']), ['errorField' => 'id_cross_account_relation']);
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'), ['errorField' => 'invoice_id']);
        $rules->add($rules->existsIn(['cross_account_id'], 'CrossAccounts'), ['errorField' => 'cross_account_id']);

        return $rules;
    }
}
