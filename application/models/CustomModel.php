<?php

class CustomModel extends ci_model
{
    public function selectAll($tableName = null, $order_col = null)
	{
		$this->db->order_by($order_col, "asc");
		$result = $this->db->get($tableName)->result_array();

		return $this->db->affected_rows() ? $result : FALSE;
    }
    
    public function selectAllFromWhere($tableName = null, $condition = null, $order_col = null)
	{

		$query = $this->db->get_where($tableName, $condition)->result_array();
		$this->db->order_by($order_col, "asc");
		if ($query != null) {
			return $this->db->affected_rows() ? $query : FALSE;
		} else {
			return FALSE; //$this->db->affected_rows()?$query[0][$query]:FALSE;
		}
	}
}?>