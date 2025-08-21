<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CreditNoteRelations Model
 *
 * @property \App\Model\Table\InvoicesTable&\Cake\ORM\Association\BelongsTo $Invoices
 * @property \App\Model\Table\CreditNotesTable&\Cake\ORM\Association\BelongsTo $CreditNotes
 *
 * @method \App\Model\Entity\CreditNoteRelation newEmptyEntity()
 * @method \App\Model\Entity\CreditNoteRelation newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\CreditNoteRelation> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CreditNoteRelation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\CreditNoteRelation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\CreditNoteRelation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\CreditNoteRelation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CreditNoteRelation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\CreditNoteRelation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\CreditNoteRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CreditNoteRelation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CreditNoteRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CreditNoteRelation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CreditNoteRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CreditNoteRelation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CreditNoteRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CreditNoteRelation> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CreditNoteRelationsTable extends Table
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

        $this->setTable('credit_note_relations');
        $this->setDisplayField('id_credit_note_relation');
        $this->setPrimaryKey('id_credit_note_relation');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id',
        ]);
        $this->belongsTo('CreditNotes', [
            'foreignKey' => 'credit_note_id',
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
            ->integer('credit_note_id')
            ->allowEmptyString('credit_note_id');

        $validator
            ->scalar('tipo_relacion')
            ->maxLength('tipo_relacion', 255)
            ->allowEmptyString('tipo_relacion');

        $validator
            ->scalar('uuid')
            ->maxLength('uuid', 255)
            ->allowEmptyString('uuid');

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
        $rules->add($rules->isUnique(['id_credit_note_relation']), ['errorField' => 'id_credit_note_relation']);
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'), ['errorField' => 'invoice_id']);
        $rules->add($rules->existsIn(['credit_note_id'], 'CreditNotes'), ['errorField' => 'credit_note_id']);

        return $rules;
    }
}
