<?php

class CustomModel extends ci_model
{
	public function selectAll($tableName = null, $order_col = null)
	{
		$this->db->order_by($order_col, "asc");
		$result = $this->db->get($tableName)->result_array();
		return $this->db->affected_rows() ? $result : FALSE;
	}
	public function get($table = null, $order_col = null)
	{
		$this->db->order_by($order_col, "asc");
		$result = $this->db->get($table)->result_array();
		return $this->db->affected_rows() ? $result : FALSE;
	}
	public function selecLimit($table = null, $limit = null, $order_col = null)
	{
		$this->db->order_by($order_col, "asc");
		$result = $this->db->get($table, $limit)->result_array();
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

	// function to insert records into the database
	public function insertInto($tableName = null, $data = null)
	{
		$this->db->insert($tableName, $data);
		$insert_id = $this->db->insert_id();
		return $this->db->affected_rows() ? $insert_id : FALSE;
	}

	// function to insert records into the database
	public function selectAll_Activity()
	{
		// $this->db->insert($tableName, $data);
		$query =	"SELECT * FROM `tour_activity` LEFT JOIN price on tour_activity.id=price.tpa_id";
		$q = $this->db->query($query)->result_array();
		return $this->db->affected_rows() ? $q : FALSE;
		// $insert_id = $this->db->insert_id();
		// return $this->db->affected_rows() ? $insert_id : FALSE;
	}

	// function to select records from the database
	public function select_tour_Activity($id = null)
	{
		// $this->db->insert($tableName, $data);
		$query =	"select * FROM tour_activity LEFT JOIN tour on tour_activity.tp_id=tour.id LEFT JOIN price on tour_activity.id=price.tpa_id WHERE tour_activity.tp_id=$id";
		$q = $this->db->query($query)->result_array();
		return $this->db->affected_rows() ? $q : FALSE;
		// $insert_id = $this->db->insert_id();
		// return $this->db->affected_rows() ? $insert_id : FALSE;
	}

	// function to insert records into the database
	public function selectActivity($id = null)
	{
		// $this->db->insert($tableName, $data);
		$query =	"select * from tour_activity left join price on price.tpa_id=tour_activity.id where tour_activity.id=$id";
		$q = $this->db->query($query)->result_array();
		return $this->db->affected_rows() ? $q : FALSE;
		// $insert_id = $this->db->insert_id();
		// return $this->db->affected_rows() ? $insert_id : FALSE;
	}

	// function to select activity from tour id into the into the database
	public function selectActivityDetailsbytourId($id = null)
	{
		// $this->db->insert($tableName, $data);
		$query =	"select tour_activity.tp_id, tour_activity.id, tour_activity.activity, price.amt, price.with_transfer FROM tour_activity LEFT JOIN price on tour_activity.id=price.tpa_id WHERE tour_activity.tp_id=$id";
		$q = $this->db->query($query)->result_array();
		return $this->db->affected_rows() ? $q : FALSE;
		// $insert_id = $this->db->insert_id();
		// return $this->db->affected_rows() ? $insert_id : FALSE;
	}

	// function to delete records from database
	public function delete($table = null, $condition = null)
	{
		// $this->db->delete($table, array('id' => $id));
		$this->db->where($condition);
		$result = $this->db->delete($table);
		if (!empty($result)) {
			return false;
		} else {
			return true;
		}
	}

	// function to update records into the database

	public function update_table($table = null, $condition = null, $data = null)
	{
		$this->db->set($data);
		$this->db->where($condition);
		$result = $this->db->update($table);

		if (!empty($result)) {
			return true;
		} else {
			return false;
		}
	}

	public function selectAllFromTableWhere($tableName = null, $condition = null, $getColumn = null)
	{
		$result = $this->db->select($getColumn)->get_where($tableName, $condition)->result_array();
		return $this->db->affected_rows() ? $result : FALSE;
	}
}
