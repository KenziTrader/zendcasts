<?php

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property integer $car_id
 * @property Car $Car
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6698 2009-11-10 17:58:02Z jwage $
 */
abstract class BaseUser extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 300, array(
             'type' => 'string',
             'length' => '300',
             ));
        $this->hasColumn('email', 'string', 300, array(
             'type' => 'string',
             'length' => '300',
             ));
        $this->hasColumn('phone', 'string', 9, array(
             'type' => 'string',
             'length' => '9',
             ));
        $this->hasColumn('car_id', 'integer', null, array(
             'type' => 'integer',
             ));

        $this->option('type', 'INNODB');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Car', array(
             'local' => 'car_id',
             'foreign' => 'id'));
    }
}