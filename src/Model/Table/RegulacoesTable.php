<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Regulacoes Model
 *
 * @method \App\Model\Entity\Regulaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Regulaco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Regulaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Regulaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Regulaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Regulaco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Regulaco findOrCreate($search, callable $callback = null)
 */
class RegulacoesTable extends Table
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

        $this->table('regulacoes');
        $this->displayField('cod_regulacao');
        $this->primaryKey('cod_regulacao');
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
            ->integer('cod_regulacao')
            ->allowEmpty('cod_regulacao', 'create');

        $validator
            ->integer('cod_paciente')
            ->allowEmpty('cod_paciente');

        $validator
            ->integer('cod_solicitador')
            ->allowEmpty('cod_solicitador');

        $validator
            ->allowEmpty('nome_solicitador');

        $validator
            ->allowEmpty('crm_solicitador');

        $validator
            ->integer('cod_avaliador')
            ->allowEmpty('cod_avaliador');

        $validator
            ->integer('cod_prestador')
            ->allowEmpty('cod_prestador');

        $validator
            ->integer('cod_usuario_alteracao')
            ->allowEmpty('cod_usuario_alteracao');

        $validator
            ->integer('cod_usuario_cancelamento')
            ->allowEmpty('cod_usuario_cancelamento');

        $validator
            ->integer('cod_unidade_origem')
            ->allowEmpty('cod_unidade_origem');

        $validator
            ->integer('cod_unidade_regulacao')
            ->allowEmpty('cod_unidade_regulacao');

        $validator
            ->integer('cod_unidade_destino')
            ->allowEmpty('cod_unidade_destino');

        $validator
            ->allowEmpty('tipo_regulacao');

        $validator
            ->integer('status_reg')
            ->requirePresence('status_reg', 'create')
            ->notEmpty('status_reg');

        $validator
            ->integer('status_reg_compl')
            ->allowEmpty('status_reg_compl');

        $validator
            ->boolean('via_direta')
            ->requirePresence('via_direta', 'create')
            ->notEmpty('via_direta');

        $validator
            ->boolean('tipo_transferencia')
            ->requirePresence('tipo_transferencia', 'create')
            ->notEmpty('tipo_transferencia');

        $validator
            ->allowEmpty('motivo_solicitacao');

        $validator
            ->allowEmpty('motivo_cancelamento');

        $validator
            ->allowEmpty('motivo_cronologico');

        $validator
            ->allowEmpty('motivo_prorrogacao');

        $validator
            ->allowEmpty('medicacoes_utilizadas');

        $validator
            ->allowEmpty('exames_complementares');

        $validator
            ->allowEmpty('cid10_diagnostico');

        $validator
            ->allowEmpty('cid10_seg_diagnostico');

        $validator
            ->dateTime('data_solicitacao')
            ->allowEmpty('data_solicitacao');

        $validator
            ->dateTime('data_lista_reg')
            ->allowEmpty('data_lista_reg');

        $validator
            ->dateTime('data_vaga_reg')
            ->allowEmpty('data_vaga_reg');

        $validator
            ->dateTime('data_admissao_reg')
            ->allowEmpty('data_admissao_reg');

        $validator
            ->dateTime('data_lista_hospital')
            ->allowEmpty('data_lista_hospital');

        $validator
            ->dateTime('data_vaga_hospital')
            ->allowEmpty('data_vaga_hospital');

        $validator
            ->dateTime('data_internacao')
            ->allowEmpty('data_internacao');

        $validator
            ->dateTime('data_cancel_solicitacao')
            ->allowEmpty('data_cancel_solicitacao');

        $validator
            ->dateTime('data_transferencia')
            ->allowEmpty('data_transferencia');

        $validator
            ->allowEmpty('observacoes');

        $validator
            ->allowEmpty('traumatismo');

        $validator
            ->allowEmpty('prob_respiratorios');

        $validator
            ->allowEmpty('avc');

        $validator
            ->allowEmpty('convulsao');

        $validator
            ->allowEmpty('has');

        $validator
            ->allowEmpty('gravidez');

        $validator
            ->allowEmpty('diabetes');

        $validator
            ->allowEmpty('doenca_infecto');

        $validator
            ->allowEmpty('outras_comorbidades');

        $validator
            ->allowEmpty('contato_local');

        $validator
            ->integer('msg_solicitador')
            ->allowEmpty('msg_solicitador');

        $validator
            ->integer('msg_avaliador')
            ->allowEmpty('msg_avaliador');

        $validator
            ->integer('msg_prestador')
            ->allowEmpty('msg_prestador');

        $validator
            ->allowEmpty('tipo_destinatario');

        $validator
            ->boolean('em_permuta')
            ->allowEmpty('em_permuta');

        $validator
            ->allowEmpty('clinica_origem');

        $validator
            ->allowEmpty('especialidade_medica');

        $validator
            ->allowEmpty('tipo_internacao_de');

        $validator
            ->dateTime('data_expiracao')
            ->allowEmpty('data_expiracao');

        $validator
            ->boolean('liberacao_extendida')
            ->allowEmpty('liberacao_extendida');

        $validator
            ->allowEmpty('motivo_expiracao');

        $validator
            ->integer('cod_cidade_residencia')
            ->allowEmpty('cod_cidade_residencia');

        $validator
            ->integer('cod_estado_residencia')
            ->allowEmpty('cod_estado_residencia');

        $validator
            ->dateTime('data_troca_posicao')
            ->allowEmpty('data_troca_posicao');

        $validator
            ->allowEmpty('motivo_troca_posicao');

        return $validator;
    }
}
