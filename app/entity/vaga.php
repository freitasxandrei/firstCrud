<?php 

namespace App\entity;

use \App\db\database;
use \PDO;

class vaga {
    /**
     * Identificador único da vaga
     * @var integer
     */
    public $id;

    /**
     * Título da vaga
     * @var string
    */
    public $titulo;


    /**
     * Descrição da vaga (pode conter html)
     * @var string
    */
    public $descricao;

    /**
     * Define se a vaga está ativa ou não
     * @var string
    */
    public $status;

    /**
     * Data de publicação da vaga
     * @var timestamp
    */
    public $data;

    /**
     * Função para cadastrar a vaga no banco
     * @return boolean
     */ 
    public function cadastrar() {
        // Definir a data 
        $this->data = date('Y-m-d H:i:s');
        // echo "<pre>"; print_r($this); echo "</pre>"; exit;

        // Inserir a vaga no bano e retornar o ID
        $objdatabase = new database('vagas');
        
        $this->id = $objdatabase->insert([
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'status' => $this->status,
            'data' => $this->data,
        ]);

        return true;
    }
}

?>