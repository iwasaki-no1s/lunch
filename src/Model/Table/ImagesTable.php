<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ImagesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        
        $this->table('images');
        $this->displayField('image_url');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        
        $this->belongsTo('Comments',[
            'foreignKey' => 'comment_id',
            'joinType' => 'INNER'
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