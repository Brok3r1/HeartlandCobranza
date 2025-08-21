<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ComplementXmls Model
 *
 * @property \App\Model\Table\ComplementsTable&\Cake\ORM\Association\HasMany $Complements
 *
 * @method \App\Model\Entity\ComplementXml newEmptyEntity()
 * @method \App\Model\Entity\ComplementXml newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\ComplementXml> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ComplementXml get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\ComplementXml findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\ComplementXml patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\ComplementXml> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ComplementXml|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\ComplementXml saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\ComplementXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ComplementXml>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ComplementXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ComplementXml> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ComplementXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ComplementXml>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\ComplementXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\ComplementXml> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComplementXmlsTable extends Table
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

        $this->setTable('complement_xmls');
        $this->setDisplayField('id_complement_xml');
        $this->setPrimaryKey('id_complement_xml');

        $this->addBehavior('Timestamp');

        $this->hasMany('Complements', [
            'foreignKey' => 'complement_xml_id',
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
        $rules->add($rules->isUnique(['id_complement_xml']), ['errorField' => 'id_complement_xml']);

        return $rules;
    }
}
