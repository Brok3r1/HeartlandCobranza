<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Complements Model
 *
 * @property \App\Model\Table\ComplementXmlsTable&\Cake\ORM\Association\BelongsTo $ComplementXmls
 * @property \App\Model\Table\ComplementRelationsTable&\Cake\ORM\Association\HasMany $ComplementRelations
 *
 * @method \App\Model\Entity\Complement newEmptyEntity()
 * @method \App\Model\Entity\Complement newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Complement> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Complement get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Complement findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Complement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Complement> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Complement|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Complement saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Complement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Complement>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Complement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Complement> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Complement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Complement>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Complement>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Complement> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComplementsTable extends Table
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

        $this->setTable('complements');
        $this->setDisplayField('id_complement');
        $this->setPrimaryKey('id_complement');

        $this->addBehavior('Timestamp');

        $this->belongsTo('ComplementXmls', [
            'foreignKey' => 'complement_xml_id',
        ]);
        $this->hasMany('ComplementRelations', [
            'foreignKey' => 'complement_id',
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
            ->integer('complement_xml_id')
            ->allowEmptyString('complement_xml_id');

        $validator
            ->scalar('serie')
            ->maxLength('serie', 100)
            ->allowEmptyString('serie');

        $validator
            ->scalar('folio')
            ->maxLength('folio', 100)
            ->allowEmptyString('folio');

        $validator
            ->scalar('tipo_comprobante')
            ->maxLength('tipo_comprobante', 100)
            ->allowEmptyString('tipo_comprobante');

        $validator
            ->scalar('fecha')
            ->maxLength('fecha', 100)
            ->allowEmptyString('fecha');

        $validator
            ->scalar('exportacion')
            ->maxLength('exportacion', 100)
            ->allowEmptyString('exportacion');

        $validator
            ->scalar('lugar_expedicion')
            ->maxLength('lugar_expedicion', 100)
            ->allowEmptyString('lugar_expedicion');

        $validator
            ->scalar('moneda')
            ->maxLength('moneda', 100)
            ->allowEmptyString('moneda');

        $validator
            ->decimal('subtotal')
            ->allowEmptyString('subtotal');

        $validator
            ->decimal('total')
            ->allowEmptyString('total');

        $validator
            ->scalar('emisor_nombre')
            ->maxLength('emisor_nombre', 255)
            ->allowEmptyString('emisor_nombre');

        $validator
            ->scalar('emisor_rfc')
            ->maxLength('emisor_rfc', 100)
            ->allowEmptyString('emisor_rfc');

        $validator
            ->scalar('emisor_regimen_fiscal')
            ->maxLength('emisor_regimen_fiscal', 100)
            ->allowEmptyString('emisor_regimen_fiscal');

        $validator
            ->scalar('receptor_nombre')
            ->maxLength('receptor_nombre', 255)
            ->allowEmptyString('receptor_nombre');

        $validator
            ->scalar('receptor_rfc')
            ->maxLength('receptor_rfc', 100)
            ->allowEmptyString('receptor_rfc');

        $validator
            ->scalar('receptor_domicilio_fiscal')
            ->maxLength('receptor_domicilio_fiscal', 100)
            ->allowEmptyString('receptor_domicilio_fiscal');

        $validator
            ->scalar('receptor_regimen_fiscal')
            ->maxLength('receptor_regimen_fiscal', 100)
            ->allowEmptyString('receptor_regimen_fiscal');

        $validator
            ->scalar('receptor_uso_cfdi')
            ->maxLength('receptor_uso_cfdi', 100)
            ->allowEmptyString('receptor_uso_cfdi');

        $validator
            ->scalar('cta_beneficiario')
            ->maxLength('cta_beneficiario', 100)
            ->allowEmptyString('cta_beneficiario');

        $validator
            ->scalar('cta_ordenante')
            ->maxLength('cta_ordenante', 100)
            ->allowEmptyString('cta_ordenante');

        $validator
            ->scalar('rfc_emisor_cta_Ben')
            ->maxLength('rfc_emisor_cta_Ben', 100)
            ->allowEmptyString('rfc_emisor_cta_Ben');

        $validator
            ->scalar('fecha_pago')
            ->maxLength('fecha_pago', 100)
            ->allowEmptyString('fecha_pago');

        $validator
            ->scalar('num_operacion')
            ->maxLength('num_operacion', 100)
            ->allowEmptyString('num_operacion');

        $validator
            ->scalar('forma_pago')
            ->maxLength('forma_pago', 100)
            ->allowEmptyString('forma_pago');

        $validator
            ->scalar('moneda_p')
            ->maxLength('moneda_p', 100)
            ->allowEmptyString('moneda_p');

        $validator
            ->decimal('tipo_cambio')
            ->allowEmptyString('tipo_cambio');

        $validator
            ->decimal('monto')
            ->allowEmptyString('monto');

        $validator
            ->scalar('impuesto_traslado0')
            ->maxLength('impuesto_traslado0', 100)
            ->allowEmptyString('impuesto_traslado0');

        $validator
            ->decimal('impuesto_traslado_base0')
            ->allowEmptyString('impuesto_traslado_base0');

        $validator
            ->decimal('impuesto_traslado_importe0')
            ->allowEmptyString('impuesto_traslado_importe0');

        $validator
            ->decimal('impuesto_traslado_tasa_cuota0')
            ->allowEmptyString('impuesto_traslado_tasa_cuota0');

        $validator
            ->scalar('impuesto_traslado_tipo_factor0')
            ->maxLength('impuesto_traslado_tipo_factor0', 100)
            ->allowEmptyString('impuesto_traslado_tipo_factor0');

        $validator
            ->scalar('impuesto_traslado1')
            ->maxLength('impuesto_traslado1', 100)
            ->allowEmptyString('impuesto_traslado1');

        $validator
            ->decimal('impuesto_traslado_base1')
            ->allowEmptyString('impuesto_traslado_base1');

        $validator
            ->decimal('impuesto_traslado_importe1')
            ->allowEmptyString('impuesto_traslado_importe1');

        $validator
            ->decimal('impuesto_traslado_tasa_cuota1')
            ->allowEmptyString('impuesto_traslado_tasa_cuota1');

        $validator
            ->scalar('impuesto_traslado_tipo_factor1')
            ->maxLength('impuesto_traslado_tipo_factor1', 100)
            ->allowEmptyString('impuesto_traslado_tipo_factor1');

        $validator
            ->scalar('fecha_timbrado')
            ->maxLength('fecha_timbrado', 100)
            ->allowEmptyString('fecha_timbrado');

        $validator
            ->scalar('uuid')
            ->maxLength('uuid', 100)
            ->allowEmptyString('uuid');

        $validator
            ->integer('status')
            ->allowEmptyString('status');

        $validator
            ->integer('status_alien')
            ->allowEmptyString('status_alien');

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
        $rules->add($rules->isUnique(['id_complement']), ['errorField' => 'id_complement']);
        $rules->add($rules->existsIn(['complement_xml_id'], 'ComplementXmls'), ['errorField' => 'complement_xml_id']);

        return $rules;
    }
}
