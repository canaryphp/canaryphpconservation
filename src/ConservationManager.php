<?php
/**
 * CanaryPHPConservation (tm) Simple Conservation Managing for php (canaryphp@gmail.com)
 * Copyright (c) Canaryphp Software Foundation, Inc. (canaryphp@gmail.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Canaryphp Software Foundation, Inc. (canaryphp@gmail.com)
 * @link      https://github.com/canaryphp/ CanaryPHP(tm) Project
 * @since     1.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace CanaryPHPConservation;
class ConservationManager{
/**
 *
 * Conservation Table name
 *
 * @param (string)
 *
 */
public $_CONSERVATION_TABLENAME;
/**
 *
 * Conservation Messages Table name
 *
 * @param (string)
 *
 */
public $_MESSAGES_TABLENAME;
/**
 *
 * \CanaryPHPTools\Database class object
 *
 * @param (obj)
 *
 */
private $db;
/**
 *
 * Construct
 *
 * @param (string) : $conservation_table Conservation table name , $messages_table Conservation messges table name
 *
 */
public function __construct($conservation_table = '',$messages_table = ''){
//Conservation Table
$this->_CONSERVATION_TABLENAME = (!empty($conservation_table)) ? $conservation_table : 'cp_conservations' ;
//Conservation Message Table
$this->_MESSAGES_TABLENAME = (!empty($messages_table)) ? $messages_table : 'cp_messages' ;
//\CanaryPHPTools\Database object
$this->db = new \CanaryPHPTools\Database();
}
/**
 *
 * Create Conservations Tables in Database
 *
 */
public function createTables(){
    $conservations_sql = str_replace('{TABLE_NAME}',$this->_CONSERVATION_TABLENAME,file_get_contents(__DIR__.DS.'sql'.DS.'conservations.sql'));
    $messages_sql = str_replace('{TABLE_NAME}',$this->_MESSAGES_TABLENAME,file_get_contents(__DIR__.DS.'sql'.DS.'messages.sql'));
    $this->db->query($conservations_sql,[]);
    $this->db->query($messages_sql,[]);
}
}
