<?php

/* App schema generated on: 2011-09-29 23:01:31 : 1317330091 */

class AppSchema extends CakeSchema {

    var $name = 'App';

    function before($event = array()) {
        return true;
    }

    function after($event = array()) {
        $db = &ConnectionManager::getDataSource($this->connection);

        if (isset($event["create"]) && $event['create'] == 'users') {
            $db->execute("INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
                        (1, 'admin', 'admin', 'sudo@itu-innovators.dk'),
                        (2, 'tylerdurden', 'admin', 'turd@itu.dk');");
        } elseif (isset($event["create"]) && $event['create'] == 'widgets') {
            $db->execute("INSERT INTO `widgets` (`id`, `name`, `order`) VALUES
                        (1, 'Calendar', 1),
                        (2, 'Blogs', 2);");
        } elseif(isset($event["create"]) && $event['create'] == 'users_widgets'){
            $db->execute("INSERT INTO `users_widgets` (`id`, `user_id`, `widget_id`, `visible`) VALUES
                        (1, 1, 1, 0),
                        (2, 1, 2, 0),
                        (3, 2, 1, 0);");
        }
    }

    var $users = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
    );
    var $users_widgets = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
        'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
        'widget_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
        'visible' => array('type' => 'integer', 'null' => false, 'default' => NULL),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
    );
    var $widgets = array(
        'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
        'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
        'order' => array('type' => 'integer', 'null' => false, 'default' => NULL),
        'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
        'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
    );

}

?>
