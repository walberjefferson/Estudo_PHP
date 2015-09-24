<?php

require_once 'PDO/Conexao.php';

class Posts
{

    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function listar()
    {
        $query = "SELECT * FROM videos";
        $stmt = $this->db->query($query);
        $stmt->execute();

        $data = $stmt->fetchAll();

        $array = array();
        foreach ($data as $d) {
            $array[] = $d['titulo'];
        }

        return $array;
    }


}

$con = new Conexao();
$db = $con->connect();

$post = new Posts($db);
$res = $post->listar();

print_r($res);