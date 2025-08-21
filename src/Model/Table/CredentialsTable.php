<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Credentials Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Credential newEmptyEntity()
 * @method \App\Model\Entity\Credential newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Credential> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Credential get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Credential findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Credential patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Credential> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Credential|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Credential saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Credential>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Credential>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Credential>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Credential> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Credential>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Credential>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Credential>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Credential> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CredentialsTable extends Table
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

        $this->setTable('credentials');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_credential');

        $this->addBehavior('Timestamp');

        $this->hasMany('Users', [
            'foreignKey' => 'credential_id',
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->allowEmptyString('name');

        $validator
            ->scalar('home')
            ->maxLength('home', 100)
            ->allowEmptyString('home');

        $validator
            ->scalar('menu')
            ->maxLength('menu', 100)
            ->allowEmptyString('menu');

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
        $rules->add($rules->isUnique(['id_credential']), ['errorField' => 'id_credential']);

        return $rules;
    }
}
