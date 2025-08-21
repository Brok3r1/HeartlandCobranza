<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DebitNoteRelations Model
 *
 * @property \App\Model\Table\InvoicesTable&\Cake\ORM\Association\BelongsTo $Invoices
 * @property \App\Model\Table\DebitNotesTable&\Cake\ORM\Association\BelongsTo $DebitNotes
 *
 * @method \App\Model\Entity\DebitNoteRelation newEmptyEntity()
 * @method \App\Model\Entity\DebitNoteRelation newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DebitNoteRelation> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DebitNoteRelation get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DebitNoteRelation findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DebitNoteRelation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DebitNoteRelation> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DebitNoteRelation|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DebitNoteRelation saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteRelation>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteRelation> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteRelation>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteRelation>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteRelation> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DebitNoteRelationsTable extends Table
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

        $this->setTable('debit_note_relations');
        $this->setDisplayField('id_debit_note_relation');
        $this->setPrimaryKey('id_debit_note_relation');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Invoices', [
            'foreignKey' => 'invoice_id',
        ]);
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
            ->integer('invoice_id')
            ->allowEmptyString('invoice_id');

        $validator
            ->integer('debit_note_id')
            ->allowEmptyString('debit_note_id');

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
        $rules->add($rules->isUnique(['id_debit_note_relation']), ['errorField' => 'id_debit_note_relation']);
        $rules->add($rules->existsIn(['invoice_id'], 'Invoices'), ['errorField' => 'invoice_id']);
        $rules->add($rules->existsIn(['debit_note_id'], 'DebitNotes'), ['errorField' => 'debit_note_id']);

        return $rules;
    }
}
