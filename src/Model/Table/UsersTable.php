<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');

        $this->hasMany('Comments',[
            'foreignKey' => 'user_id'
        ]);

        $this->belongsTo('Station',[
            'foreignKey' => 'station_id',
            'joinType' => 'INNER'
        ]);
    }

    public function validataionDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id','create');
        $validator
            ->requirePresence('name','create')
            ->notEmpty('name')
            ->add('name','unique',[
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'そのユーザー名は、既に使用されています']);
        $validator
            ->requirePresence('password','create')
            ->notEmpty('password');
        //駅機能作ってないのでとりあえずコメントアウト
        /*$validator
            ->requirePresence('station_id','create')
            ->notEmpty('station_id');*/
        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['name'],["message" => "そのユーザー名は、既に使用されています"]));
        return $rules;
    }
}