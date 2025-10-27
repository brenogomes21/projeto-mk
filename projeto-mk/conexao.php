<?php

class Conexao {

    private static $instance = null;
    private static $dbType = "mysql";
    private static $host = "localhost";
    private static $user = "root";
    private static $senha = "";
    protected static $banco = "formulario";
    protected static $persistent = FALSE;

    public static function getInstance() {

        if (self::$persistent != FALSE) {
            self::$persistent = TRUE;
        }

        if (!isset(self::$instance)) {
            try {

                self::$instance = new \PDO(self::$dbType . ':host=' . self::$host . ';dbname=' . self::$banco . ';charset=utf8'
                        , self::$user
                        , self::$senha
                        , array(\PDO::ATTR_PERSISTENT => self::$persistent, \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
            } catch (\PDOException $ex) {
                exit("Erro ao conectar com o banco de dados: " . $ex->getMessage());
            }
        }

        return self::$instance;
    }

    /**
     * Fecha a instancia de conexao ao banco de dados
     */
    public static function close() {
        if (self::$instance != null) {
            self::$instance = null;
        }
    }

}
