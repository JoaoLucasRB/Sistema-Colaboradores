<?php

class ColaboradoresModel extends CI_Model
{
    private $primary_key = "colaborador_id";

    public function getColaboradores($filters)
    {
        if (!empty($filters))
            $this->buildWhere($filters);
        return $this->db->get('colaboradores')->result();
    }

    public function remove($id)
    {
        $this->db->where('colaborador_id', $id);
        return $this->db->delete('colaboradores');
    }

    public function save($data)
    {
        if (isset($data[$this->primary_key])) {
            $id = $data[$this->primary_key];
            unset($data[$this->primary_key]);
            $this->db->where('colaborador_id', $id);
            return $this->db->update('colaboradores', $data);
        } else
            return $this->db->insert('colaboradores', $data);
    }

    private function buildWhere(&$filters)
    {
        $fields = $filters['fields'];
        $values = $filters['values'];
        $operators = $filters['operators'];
        for ($n = 0; $n < count($fields); $n++) {
            $this->db->where("$fields[$n] $operators[$n]", $values[$n]);
        }
    }
}
