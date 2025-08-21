<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administrators Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Administrator newEmptyEntity()
 * @method \App\Model\Entity\Administrator newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Administrator> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administrator get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Administrator findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Administrator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Administrator> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administrator|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Administrator saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Administrator>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Administrator>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Administrator>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Administrator> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Administrator>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Administrator>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Administrator>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Administrator> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AdministratorsTable extends Table
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

        $this->setTable('administrators');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id_administrator');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->integer('user_id')
            ->allowEmptyString('user_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 255)
            ->allowEmptyString('lastname');

        $validator
            ->email('email')
            ->allowEmptyString('email');

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
        $rules->add($rules->isUnique(['id_administrator']), ['errorField' => 'id_administrator']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }
}
