<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	
	/*									WITHOUT AJAX							*/
	/* 
		DOCU: This function is the index page of a website.
			  It displays all exitsting orders.
		OWNER: Ron Garcia Santos
	*/
	// public function index()
	// {
	// 	$result['orders'] = $this->order->fetch_all();

	// 	$this->load->view('orders_without_ajax', $result);
	// }

	// /*
	// 	DOCU: This funciton is to collect data from users input to add a new order.
	// 	OWNER: Ron Garcia Santos
	// */
	// public function create()
	// {
	// 	$new_order = $this->input->post();
	// 	$this->order->create($new_order);

	// 	redirect('/');
	// }

	// /*
	// 	DOCU: This function is to collect data from users input to update an existing order.
	// 	OWNER: Ron Garcia Santos
	// */
	// public function update($id)
	// {
	// 	$update_order = $this->input->post();
	// 	$this->order->update($update_order, $id);

	// 	redirect('/');
	// }

	// /*
	// 	DOCU: This function is to specify specific order to delete.
	// 	OWNER: Ron Garcia Santos
	// */
	// public function destroy($id){
	// 	$this->order->destroy($id);
	// 	redirect('/')
	// }
	
	/*									WITH AJAX							*/
	public function index()
	{
		$result['orders'] = $this->order->fetch_all();

		$this->load->view('orders_without_ajax', $result);
	}

	/*
		DOCU: This funciton is to collect data from users input to add a new order.
		OWNER: Ron Garcia Santos
	*/
	public function create()
	{
		$new_order = $this->input->post();
		$this->order->create($new_order);

		redirect('/');
	}

	/*
		DOCU: This function is to collect data from users input to update an existing order.
		OWNER: Ron Garcia Santos
	*/
	public function update($id)
	{
		$update_order = $this->input->post();
		$this->order->update($update_order, $id);

		redirect('/');
	}

	/*
		DOCU: This function is to specify specific order to delete.
		OWNER: Ron Garcia Santos
	*/
	public function destroy($id){
		$this->order->destroy($id);
		redirect('/')
	}
}
