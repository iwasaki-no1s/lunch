<?php
    namespace App\Model\Table;
    
    use Cake\ORM\Query;
    use Cake\ORM\RulesChecker;
    use Cake\ORM\Table;
    use Cake\Validation\Validator;
    
    class StationsUsersTable extends Table
    {
        public function initialize(array $config)
        {
            parent::initialize($config);
            $this->table('stations_users');
            $this->primaryKey('id');
            
            $this->belongsTo('Stations', [
                    bindingKey('station_id'),
                    foreignKey('id'),
                ]);
            $this->belongsTo('Users', [
                    bindingKey('user_id'),
                    foreignKey('id'),
                ]);
        }
        
        public function validationDefault(Validator $validator)
        {
            $validator
                    ->integer('id')
                    ->allowEmpty('id', 'create');
            $validator
                    ->integer('station_id')
                    ->requirePresence('station_id', 'create');
            $validator
                    ->integer('user_id')
                    ->requirePresence('user_id', 'create');
            $validator
                    ->integer('flg');
            return $validator;
        }
    }