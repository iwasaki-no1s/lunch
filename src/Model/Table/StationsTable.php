<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class StationsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->table('stations');
        $this->displayField('name');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        
        $this->hasMany('Users',[
            'foreignkey' => 'station_id'
        ]);
        
        $this->hasMany('Stores',[
            'foreignkey' => 'station_id'
        ]);
    }
    
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id','create');
        
        return $validator;
    }
}