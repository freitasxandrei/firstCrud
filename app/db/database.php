<?php 

    namespace app\db;
    use Exception; // TRATAMENTE DE EXCEÇÕES
    use \PDO; // CLASSE DE COMUNICAÇÃO COM O BANCO DE DADOS
    use PDOException; // CLASSE DE TRATAMENTE DE EXCEÇÕES DO BANCO DE DADOS
    USE PDOStatement; // CLASSE DE COMUNICAÇÃO COM MÉTODOS DO BANCO DE DADOS

    class database {
        /**
         * Host de conexão com o banco de dados
         * @var string
        */
        const HOST = 'localhost';

        /**
         * Nome do banco de dados
         * @var string
        */
        const NAME = 'firstcrud';

        /**
         * Usuário do banco de dados
         * @var string
        */
        const USER = 'root';

        /**
         * Senha de acesso ao banco de dados
         * @var string
        */
        const PASS = '';

        /**
         * Nome da tabela a ser manipulada
         * @var string
        */
        private $table;

        /**
         * Nome da tabela a ser manipulada
         * @var string
        */
        private $connection;

        /**
         * Define a tabela e instância a conexão
         * @param string $table
        */
        public function __construct($table = null) {
            $this->table = $table;
            $this->setConnection();
        }
            
        /** 
        * Método responsável por criar uma conexão com o banco de dados
        * @param string $table
        */
        private function setConnection() {
        try {
            //PDO é a classe que recebe os parametros para devolver um objeto de conexão com o banco de dados
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR: ' . $e->getMessage());
        }
    }
}

;?>