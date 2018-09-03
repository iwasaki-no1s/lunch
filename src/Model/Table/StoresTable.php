<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class StoresTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->table('stores');
        $this->displayField('name');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        
        $this->hasMany('Comments',[
            'foreignkey' => 'store_id'
        ]);
        
        $this->hasMany('Stations',[
            'foreignkey' => 'store_id'
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