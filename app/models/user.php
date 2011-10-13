<?php

class User extends AppModel {

    var $name = 'User';
    var $displayField = 'email';
    var $validate = array(
//        'name' => array(
//            'notempty' => array(
//                'rule' => array('notempty'),
//            //'message' => 'Your custom message here',
//            //'allowEmpty' => false,
//            //'required' => false,
//            //'last' => false, // Stop validation after this rule
//            //'on' => 'create', // Limit validation to 'create' or 'update' operations
//            ),
//        ),
//        'password' => array(
//            'notempty' => array(
//                'rule' => array('notempty'),
//            //'message' => 'Your custom message here',
//            //'allowEmpty' => false,
//            //'required' => false,
//            //'last' => false, // Stop validation after this rule
//            //'on' => 'create', // Limit validation to 'create' or 'update' operations
//            ),
//        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Needs to be a valid email',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'ituemail' => array(
                'rule' => array('isStudent'),
                'message' => 'You have to be a student at ITU'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'This email is already used'
            )


        )
    );
    var $hasMany = array(
        'UserWidget' => array(
            'className' => 'UserWidget',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'order' => '',
            'limit' => '',
            'dependent' => ''
        )
    );

    function isStudent($check) {
        if (strpos($check['email'], '@itu.dk') === false) {
            return false;
        } else {
            return true;
        }
    }

}
?>
