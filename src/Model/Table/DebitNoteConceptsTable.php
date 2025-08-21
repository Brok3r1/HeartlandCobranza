<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DebitNoteConcepts Model
 *
 * @property \App\Model\Table\DebitNotesTable&\Cake\ORM\Association\BelongsTo $DebitNotes
 *
 * @method \App\Model\Entity\DebitNoteConcept newEmptyEntity()
 * @method \App\Model\Entity\DebitNoteConcept newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DebitNoteConcept> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DebitNoteConcept get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DebitNoteConcept findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DebitNoteConcept patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DebitNoteConcept> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DebitNoteConcept|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DebitNoteConcept saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteConcept>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteConcept>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteConcept>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteConcept> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteConcept>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteConcept>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteConcept>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteConcept> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DebitNoteConceptsTable extends Table
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

        $this->setTable('debit_note_concepts');
        $this->setDisplayField('id_debit_note_concept');
        $this->setPrimaryKey('id_debit_note_concept');

        $this->addBehavior('Timestamp');

        $this->belongsTo('DebitNotes', [
            'foreignKey' => 'debit_note_id',
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
            ->integer('debit_note_id')
            ->allowEmptyString('debit_note_id');

        $validator
            ->scalar('clave_prod_serv')
            ->maxLength('clave_prod_serv', 100)
            ->allowEmptyString('clave_prod_serv');

        $validator
            ->scalar('clave_unidad')
            ->maxLength('clave_unidad', 100)
            ->allowEmptyString('clave_unidad');

        $validator
            ->scalar('no_identificacion')
            ->maxLength('no_identificacion', 100)
            ->allowEmptyString('no_identificacion');

        $validator
            ->scalar('unidad')
            ->maxLength('unidad', 100)
            ->allowEmptyString('unidad');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 255)
            ->allowEmptyString('descripcion');

        $validator
            ->decimal('valor_unitario')
            ->allowEmptyString('valor_unitario');

        $validator
            ->decimal('cantidad')
            ->allowEmptyString('cantidad');

        $validator
            ->decimal('importe')
            ->allowEmptyString('importe');

        $validator
            ->scalar('objeto_imp')
            ->maxLength('objeto_imp', 100)
            ->allowEmptyString('objeto_imp');

        $validator
            ->scalar('impuesto_traslado')
            ->maxLength('impuesto_traslado', 100)
            ->allowEmptyString('impuesto_traslado');

        $validator
            ->decimal('impuesto_traslado_base')
            ->allowEmptyString('impuesto_traslado_base');

        $validator
            ->decimal('impuesto_traslado_importe')
            ->allowEmptyString('impuesto_traslado_importe');

        $validator
            ->decimal('impuesto_traslado_tasa_cuota')
            ->allowEmptyString('impuesto_traslado_tasa_cuota');

        $validator
            ->scalar('impuesto_traslado_tipo_factor')
            ->maxLength('impuesto_traslado_tipo_factor', 100)
            ->allowEmptyString('impuesto_traslado_tipo_factor');

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
        $rules->add($rules->isUnique(['id_debit_note_concept']), ['errorField' => 'id_debit_note_concept']);
        $rules->add($rules->existsIn(['debit_note_id'], 'DebitNotes'), ['errorField' => 'debit_note_id']);

        return $rules;
    }
}
