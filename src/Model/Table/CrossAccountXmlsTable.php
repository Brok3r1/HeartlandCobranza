<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CrossAccountXmls Model
 *
 * @property \App\Model\Table\CrossAccountsTable&\Cake\ORM\Association\HasMany $CrossAccounts
 *
 * @method \App\Model\Entity\CrossAccountXml newEmptyEntity()
 * @method \App\Model\Entity\CrossAccountXml newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\CrossAccountXml> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CrossAccountXml get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\CrossAccountXml findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\CrossAccountXml patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\CrossAccountXml> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CrossAccountXml|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\CrossAccountXml saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\CrossAccountXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CrossAccountXml>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CrossAccountXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CrossAccountXml> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CrossAccountXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CrossAccountXml>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\CrossAccountXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\CrossAccountXml> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CrossAccountXmlsTable extends Table
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

        $this->setTable('cross_account_xmls');
        $this->setDisplayField('id_cross_account_xml');
        $this->setPrimaryKey('id_cross_account_xml');

        $this->addBehavior('Timestamp');

        $this->hasMany('CrossAccounts', [
            'foreignKey' => 'cross_account_xml_id',
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
        $rules->add($rules->isUnique(['id_cross_account_xml']), ['errorField' => 'id_cross_account_xml']);

        return $rules;
    }
}
