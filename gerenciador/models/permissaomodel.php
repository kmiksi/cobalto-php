<?php

class PermissaoModel extends Model {

    function getMetodosGrid($parametros, $link) {
        $this->db->select('id, classe, metodo, case when privado = 0 then \'Não\' else \'Sim\' end as privado', false);
        $this->db->like('classe', $link);
        $this->db->order_by('classe, metodo');
        $result = $this->db->get('sys_metodos');

        $paramsJqGrid = $this->ajax->setStartLimitJqGrid($parametros, $result->num_rows());
        $paramsJqGrid->rows = $result->result();
        return $paramsJqGrid;
    }

    function getMetodos($link) {
        $this->db->like('classe', $link);
        $this->db->order_by('classe, metodo');
        return $this->db->get('sys_metodos')->result();
    }

}
