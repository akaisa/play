<?php

class Model_frontend extends CI_Model
{
	public function __construct()
	{
		parent:__construct();
	}

	// get order data
	public function getOrdersData($id = null)
	{
		if($id)
		{
			$sql = "SELECT * FROM orders WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM orders ORDER BY id DESC";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	// get the orders items data
	public function getOrdersItemData($order_id = null)
	{
		if(!$order_id)
		{
			return false;
		}

		$sql = "SELECT * FROM orders_item WHERE order_id ?";
		$query - $this->db->query($sql, array($order_id));
		return $query->result_array();
	}
}