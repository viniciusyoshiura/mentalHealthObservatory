<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pessoas Model
 *
 * @method \App\Model\Entity\Pessoa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pessoa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pessoa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pessoa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pessoa findOrCreate($search, callable $callback = null)
 */
class PessoasTable extends Table
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

        $this->table('pessoas');
        $this->displayField('cod_pessoa');
        $this->primaryKey('cod_pessoa');
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
            ->integer('cod_pessoa')
            ->allowEmpty('cod_pessoa', 'create');

        $validator
            ->requirePresence('tipo_pessoa', 'create')
            ->notEmpty('tipo_pessoa');

        $validator
            ->dateTime('data_cadastro')
            ->requirePresence('data_cadastro', 'create')
            ->notEmpty('data_cadastro');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->allowEmpty('sexo');

        $validator
            ->allowEmpty('cpf');

        $validator
            ->allowEmpty('nro_rg');

        $validator
            ->allowEmpty('uf_rg');

        $validator
            ->date('data_nascimento')
            ->allowEmpty('data_nascimento');

        $validator
            ->allowEmpty('profissao_ocupacao');

        $validator
            ->allowEmpty('logradouro');

        $validator
            ->allowEmpty('numero');

        $validator
            ->allowEmpty('complemento');

        $validator
            ->allowEmpty('bairro');

        $validator
            ->allowEmpty('uf');

        $validator
            ->allowEmpty('municipio');

        $validator
            ->allowEmpty('cep');

        $validator
            ->allowEmpty('telefone');

        $validator
            ->allowEmpty('tipo_telefone');

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
