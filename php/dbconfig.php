<?php

class DBConnection {

    private $_driver = 'mysql';
    private $_host = 'localhost';
    private $_port = '3306';
    private $_user = 'root';
    private $_password = 'mysql';
    private $_dbname = 'jacobo_turnosweb';

    function getConnection() {
        $objPDO = NULL;

        try {
            $objPDO = new PDO("{$this->_driver}:host={$this->_host};port={$this->_port};dbname={$this->_dbname}", $this->_user, $this->_password);
            $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $ex) {
            die('Error SQL: ' . $ex->getMessage());
        }

        return $objPDO;
    }

}
