<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class CommentsTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->table('comments');
        $this->displayField('comment');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        
        $this->belongsTo('Users',[
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        
        $this->belongsTo('Stores',[
            'foreignKey' => 'store_id',
            'joinType' => 'INNER'
        ]);
        
        $this->hasMany('Images',[
            'foreignkey' => 'comment_id'
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