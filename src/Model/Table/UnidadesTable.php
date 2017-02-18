<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Unidades Model
 *
 * @method \App\Model\Entity\Unidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Unidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Unidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Unidade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Unidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Unidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Unidade findOrCreate($search, callable $callback = null)
 */
class UnidadesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('unidades');
        $this->displayField('cod_unidade');
        $this->primaryKey('cod_unidade');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('cod_unidade')
            ->allowEmpty('cod_unidade', 'create');

        $validator
            ->integer('hospital_vinculado')
            ->allowEmpty('hospital_vinculado');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('municipio', 'create')
            ->notEmpty('municipio');

        $validator
            ->requirePresence('uf', 'create')
            ->notEmpty('uf');

        $validator
            ->allowEmpty('regional');

        $validator
            ->allowEmpty('tipo_atencao');

        $validator
            ->integer('total_leitos')
            ->allowEmpty('total_leitos');

        $validator
            ->integer('leitos_disponiveis')
            ->allowEmpty('leitos_disponiveis');

        $validator
            ->allowEmpty('tipo_leito');

        $validator
            ->allowEmpty('logradouro');

        $validator
            ->allowEmpty('numero');

        $validator
            ->allowEmpty('complemento');

        $validator
            ->allowEmpty('bairro');

        $validator
            ->allowEmpty('cep');

        $validator
            ->allowEmpty('telefone_fax');

        $validator
            ->email('email')
            ->allowEmpty('email');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
