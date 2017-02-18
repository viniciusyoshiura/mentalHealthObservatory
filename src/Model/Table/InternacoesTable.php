<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Internacoes Model
 *
 * @method \App\Model\Entity\Internaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Internaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Internaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Internaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Internaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Internaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Internaco findOrCreate($search, callable $callback = null)
 */
class InternacoesTable extends Table
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

        $this->table('internacoes');
        $this->displayField('cod_internacao');
        $this->primaryKey('cod_internacao');
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
            ->integer('cod_internacao')
            ->allowEmpty('cod_internacao', 'create');

        $validator
            ->integer('cod_regulacao')
            ->allowEmpty('cod_regulacao');

        $validator
            ->integer('cod_transf_1')
            ->allowEmpty('cod_transf_1');

        $validator
            ->integer('cod_transf_2')
            ->allowEmpty('cod_transf_2');

        $validator
            ->integer('cod_transf_alta')
            ->allowEmpty('cod_transf_alta');

        $validator
            ->integer('cod_profissional')
            ->allowEmpty('cod_profissional');

        $validator
            ->allowEmpty('nome_unid_transf');

        $validator
            ->integer('cod_profissional_alta')
            ->allowEmpty('cod_profissional_alta');

        $validator
            ->allowEmpty('nome_prof_alta');

        $validator
            ->allowEmpty('crm_prof_alta');

        $validator
            ->boolean('status_internacao')
            ->allowEmpty('status_internacao');

        $validator
            ->dateTime('data_internacao')
            ->allowEmpty('data_internacao');

        $validator
            ->allowEmpty('motivo_internacao');

        $validator
            ->dateTime('data_alta')
            ->allowEmpty('data_alta');

        $validator
            ->allowEmpty('cid10_diagnostico');

        $validator
            ->allowEmpty('cid10_seg_diagnostico');

        $validator
            ->allowEmpty('comorbidade');

        $validator
            ->allowEmpty('tipo_alta');

        $validator
            ->allowEmpty('tipo_internacao');

        $validator
            ->allowEmpty('motivo_transferencia');

        $validator
            ->allowEmpty('medicacao_inicial');

        $validator
            ->allowEmpty('observacoes');

        $validator
            ->allowEmpty('tratamento_internacao');

        $validator
            ->allowEmpty('exames_internacao');

        $validator
            ->allowEmpty('historia_clinica_internacao');

        $validator
            ->allowEmpty('medicacao_alta');

        $validator
            ->allowEmpty('cid10_diagnostico_alta');

        $validator
            ->allowEmpty('cid10_seg_diagnostico_alta');

        $validator
            ->allowEmpty('nro_prontuario_alta');

        $validator
            ->allowEmpty('nro_leito_alta');

        $validator
            ->allowEmpty('acompanhamento_alta');

        $validator
            ->allowEmpty('nome_resp');

        $validator
            ->allowEmpty('vinculo_resp');

        $validator
            ->allowEmpty('endereco_resp');

        $validator
            ->allowEmpty('telefone_resp');

        return $validator;
    }
}
