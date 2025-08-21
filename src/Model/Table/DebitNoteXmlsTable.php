<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DebitNoteXmls Model
 *
 * @property \App\Model\Table\DebitNotesTable&\Cake\ORM\Association\HasMany $DebitNotes
 *
 * @method \App\Model\Entity\DebitNoteXml newEmptyEntity()
 * @method \App\Model\Entity\DebitNoteXml newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\DebitNoteXml> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DebitNoteXml get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\DebitNoteXml findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\DebitNoteXml patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\DebitNoteXml> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\DebitNoteXml|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\DebitNoteXml saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteXml>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteXml> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteXml>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\DebitNoteXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\DebitNoteXml> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DebitNoteXmlsTable extends Table
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

        $this->setTable('debit_note_xmls');
        $this->setDisplayField('id_debit_note_xml');
        $this->setPrimaryKey('id_debit_note_xml');

        $this->addBehavior('Timestamp');

        $this->hasMany('DebitNotes', [
            'foreignKey' => 'debit_note_xml_id',
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
            ->scalar('original_data')
            ->maxLength('original_data', 16777215)
            ->allowEmptyString('original_data');

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
        $rules->add($rules->isUnique(['id_debit_note_xml']), ['errorField' => 'id_debit_note_xml']);

        return $rules;
    }
}
