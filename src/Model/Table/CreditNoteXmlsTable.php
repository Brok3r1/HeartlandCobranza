<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CreditNoteXmls Model
 *
 * @property \App\Model\Table\CreditNotesTable&\Cake\ORM\Association\HasMany $CreditNotes
 *
 * @method \App\Model\Entity\CreditNoteXml newEmptyEntity()
 * @method \App\Model\Entity\CreditNoteXml newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\CreditNoteXml> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CreditNoteXml get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\CreditNoteXml findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\CreditNoteXml patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\CreditNoteXml> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CreditNoteXml|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\CreditNoteXml saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\CreditNoteXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CreditNoteXml>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CreditNoteXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CreditNoteXml> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CreditNoteXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CreditNoteXml>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CreditNoteXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CreditNoteXml> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CreditNoteXmlsTable extends Table
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

        $this->setTable('credit_note_xmls');
        $this->setDisplayField('id_credit_note_xml');
        $this->setPrimaryKey('id_credit_note_xml');

        $this->addBehavior('Timestamp');

        $this->hasMany('CreditNotes', [
            'foreignKey' => 'credit_note_xml_id',
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
        $rules->add($rules->isUnique(['id_credit_note_xml']), ['errorField' => 'id_credit_note_xml']);

        return $rules;
    }
}
