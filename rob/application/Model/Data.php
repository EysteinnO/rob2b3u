<?php

namespace Mini\Model;

use Mini\Core\Model;

class Data extends Model
{

    public function getAllData()
    {
        $sql = "SELECT * FROM arduino order by dataID desc";
        $query = $this->db->prepare($sql);
        $query->execute();
    }

}