<?php

class CustomModel extends ci_model
{
    public function get($table=null, $order_col=null)
	{
        $this->db->order_by($order_col, "asc");
        $result = $this->db->get($table)->result_array();
		return $this->db->affected_rows() ? $result : FALSE;

    }
    public function selecLimit($table=null, $limit=null, $order_col=null )
	{
        $this->db->order_by($order_col, "asc");
        $result = $this->db->get($table,$limit)->result_array();
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
	
	public function insertInto($tableName = null, $data = null)
	{
		$this->db->insert($tableName, $data);
		$insert_id = $this->db->insert_id();
		return $this->db->affected_rows() ? $insert_id : FALSE;
	}
}
?>