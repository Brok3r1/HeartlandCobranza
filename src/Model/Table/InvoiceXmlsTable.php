<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InvoiceXmls Model
 *
 * @property \App\Model\Table\InvoicesTable&\Cake\ORM\Association\HasMany $Invoices
 *
 * @method \App\Model\Entity\InvoiceXml newEmptyEntity()
 * @method \App\Model\Entity\InvoiceXml newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\InvoiceXml> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InvoiceXml get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\InvoiceXml findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\InvoiceXml patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\InvoiceXml> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\InvoiceXml|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\InvoiceXml saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\InvoiceXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\InvoiceXml>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\InvoiceXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\InvoiceXml> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\InvoiceXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\InvoiceXml>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\InvoiceXml>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\InvoiceXml> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InvoiceXmlsTable extends Table
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

        $this->setTable('invoice_xmls');
        $this->setDisplayField('id_invoice_xml');
        $this->setPrimaryKey('id_invoice_xml');

        $this->addBehavior('Timestamp');

        $this->hasMany('Invoices', [
            'foreignKey' => 'invoice_xml_id',
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
        $rules->add($rules->isUnique(['id_invoice_xml']), ['errorField' => 'id_invoice_xml']);

        return $rules;
    }
}
