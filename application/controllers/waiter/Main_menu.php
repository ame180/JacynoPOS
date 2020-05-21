<?php

class Main_menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function load_main_menu()
	{
		if (!$this->user_model->can_access('waiter')) {
			redirect('index');
		}
		$data['orders'] = $this->order_model->get_orders();
		$this->load->view('waiter/main_menu/top_menu');
		$this->load->view('waiter/main_menu/order_list_header');
		$this->load->view('waiter/main_menu/order_list', $data);
		$this->load->view('waiter/main_menu/bottom_menu');
	}

	public function load_order_list_row($row_id) {
		if (!$this->user_model->can_access('waiter')) {
			redirect('index');
		}
		$data['order'] = $this->order_model->get_order($row_id);
		$this->load->view('waiter/main_menu/order_list_row', $data);
	}

	public function add_order()
	{
		if (!$this->user_model->can_access('waiter')) {
			redirect('index');
		}
		$this->order_model->add_order();
	}
}