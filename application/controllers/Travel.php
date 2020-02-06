<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Travel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('CustomModel');
	}

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['tour'] = $this->CustomModel->get('tour_activity', 'activity');
		$data['place'] = $this->CustomModel->get('place');
		$data['testimonial'] = $this->CustomModel->get('testimonial');
		// $data['activity'] = $this->CustomModel->selecLimit('tour', 8);
		$data['activity'] = $this->CustomModel->selectAll_Activity();

		// print_r($data);die;
		$this->load->view('travels/layout/header');
		$this->load->view('travels/index', $data);
		$this->load->view('travels/layout/footer', $data);
	}
	public function about()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/about');
		$this->load->view('travels/layout/footer');
	}
	public function contact()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/contact');
		$this->load->view('travels/layout/footer');
	}
	public function blog()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/blog');
		$this->load->view('travels/layout/footer');
	}
	public function tours()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/tours');
		$this->load->view('travels/layout/footer');
	}
	public function hotels()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/hotels');
		$this->load->view('travels/layout/footer');
	}
	public function services()
	{
		$this->load->view('travels/layout/header');
		$this->load->view('travels/services');
		$this->load->view('travels/layout/footer');
	}

	public function package()
	{
		$data['tour'] = $this->CustomModel->selectAll('tour', 'id');
		$this->load->view('travels/layout/header');
		$this->load->view('travels/activity/card', $data);
		$this->load->view('travels/layout/footer');
	}

	public function activity()
	{
		$data['activity'] = $this->CustomModel->selectAll_Activity();
		$this->load->view('travels/layout/header');
		$this->load->view('travels/activity/tour_activity', $data);
		$this->load->view('travels/layout/footer');
	}

	public function booking($id)
	{

		$data['tour'] = $this->CustomModel->selectAllFromWhere('tour', array('id' => $id));
		$this->load->view('travels/layout/header');
		$this->load->view('travels/activity/booking', $data);
		$this->load->view('travels/layout/footer');
	}

	// booking by cart
	public function tour_booking($id)
	{

		$data['tour'] = $this->CustomModel->selectAllFromWhere('tour', array('id' => $id));
		$this->load->view('travels/layout/header');
		$this->load->view('travels/activity/tourPackage', $data);
		$this->load->view('travels/layout/footer');
	}
	public function bookactivity($id)
	{
		$id = base64_decode($id);

		$data['activity'] = $this->CustomModel->selectActivity($id);
		$this->load->view('travels/layout/header');
		$this->load->view('travels/activity/activity_booking', $data);
		$this->load->view('travels/layout/footer');
	}



	public function ticket()
	{
		// $data['tour'] = $this->CustomModel->selectAllFromWhere('tour', array('id' => $id));
		$this->load->view('travels/layout/header');
		$this->load->view('travels/activity/ticket1');
		$this->load->view('travels/layout/footer');
	}

	public function Book_ticket()
	{
		if (!empty($_POST)) {
			$adult = [];
			$child = [];
			$infant = [];
			if (isset($_POST['fadult'])) {
				for ($i = 0; $i < count($_POST['fadult']); $i++) {
					$adult[$i]['fname'] = $_POST['fadult'][$i];
					$adult[$i]['lname'] = $_POST['ladult'][$i];
				}
			}
			if (isset($_POST['child_fname'])) {
				for ($i = 0; $i < count($_POST['child_fname']); $i++) {
					$child[$i]['fname'] = $_POST['child_fname'][$i];
					$child[$i]['lname'] = $_POST['child_lname'][$i];
				}
			}
			if (isset($_POST['linfarnt'])) {
				for ($i = 0; $i < count($_POST['linfarnt']); $i++) {
					$infant[$i]['fname'] = $_POST['finfarnt'][$i];
					$infant[$i]['lname'] = $_POST['linfarnt'][$i];
				}
			}

			$contact_details = array(
				'email' => $this->input->post('email'),
				'city' => $this->input->post('City'),
				'phone' => $this->input->post('cnumber')
			);

			$activity_id = json_encode($_POST['activity'], true);

			$booking_details = array(
				'ticket_date' => $this->input->post('bookind_date'),
				'activiti_id' => $activity_id
			);
			$candidate_details = array(
				'adult' => $adult,
				'child' => $child,
				'infant' => $infant
			);

			$c_details = json_encode($contact_details, true);
			$candidate_details = json_encode($candidate_details, true);
			$b_detail = json_encode($booking_details, true);

			$data = array(
				'candidate' => $candidate_details,
				'contact_details' => $c_details,
				'booked_date' => $b_detail,
				'titcket_deatils' => $b_detail
			);
			$result = $this->CustomModel->insertInto('booking', $data);
			if (!empty($result)) {
				$this->session->set_flashdata("success", "Titcket Booked");
				redirect('Travel/thankyou');
			} else {
				$this->session->set_flashdata("error", "Titcket Booking error");
				redirect('Travel/titcket1');
			}
		} else {
			$this->session->set_flashdata("error", "Fill Details First");
		}
	}


	public function thankyou()
	{
		$this->load->view('travels/activity/thankyou');
	}

	function addToCart()
	{
		// echo '<pre>';
		// print_r($_POST);
		// die;
		$result=$this->CustomModel->selectAllFromWhere('tour', array('id' => $this->input->post('tour_id')));
		$transfer_type='';
		if($this->input->post('transfer_type')=='1'){
			$transfer_type=$result[0]['p_with_transfer'];
		}else if($this->input->post('transfer_type')=='2'){
			$transfer_type=$result[0]['p_without_transfer'];
		}

		$this->load->library('cart');
		// $data = array(
		// 	'id' => $this->input->post('tour_id'),
		// 	'name' => $this->input->post('tour_name'),
		// 	'qty' => $this->input->post('total_ticket'),
		// 	'price' => $this->input->post('ticket_booking_amount'),
		// 	'option' => array(
		// 		'booking_date' => $this->input->post('booking_date'),
		// 		'transfer_type' => $this->input->post('transfer_type'),
		// 		'adult' => $this->input->post('total_adult'),
		// 		'child' => $this->input->post('total_child'),
		// 		'selected_activity' => $this->input->post('selectedActivities')
		// 	)
		// );

		$data = array(
			'id' => $this->input->post('tour_id'),
			'name' => $this->input->post('tour_name'),
			'qty' => $this->input->post('total_ticket'),
			'quantity' => $this->input->post('total_ticket'),
			'price' => $this->input->post('ticket_booking_amount'),
			'tour_price' => $this->input->post('ticket_booking_amount'),
			'grand_total' => $this->input->post('ticket_booking_amount'),
			'booking_date' => $this->input->post('booking_date'),
			'transfer_type' => $transfer_type,
			'adult' => $this->input->post('total_adult'),
			'child' => $this->input->post('total_child'),
			'selected_activity' => $this->input->post('selectedActivities')
		);
		$this->cart->insert($data);


		// $_POST
		// $result=$this->CustomModel->selectAllFromWhere('tour',array('id'=>$id));
		// print_r($_POST);die;
	}

	// function view()
	// {
	// 	//  echo "<pre>";
	// 	//  print_r($this->cart->contents());
	// 	//  die;
		
	// 	$output = '';
	// 	$output .= '<div class="conatiner">
	// 	<table class="table table-bordered">
	// 	<tr style="color:black">
	// 	<th></th>
	// 	<th>Date</th>
	// 	<th>Tour Name</th>
	// 	<th>tickets</th>
	// 	<th>Adult</th>
	// 	<th>Child</th>
	// 	<th>Price</th>
	// 	<th>Action</th>
	// 	</tr>
	// 	';
	// 	$count1 = 0;
	// 	$count2 = 0;
	// 	$grandTotal = 0;
		
	// 	foreach ($this->cart->contents() as $items) {
	// 		// // echo "<pre>";
	// 		// print_r($items);
		
	// 		$count1++;
	// 		$output .= '
	// 		<tr style="color:black">
	// 			<td>' . $items["id"] . '</td>
	// 			<td>' . $items["booking_date"] . '</td>
	// 			<td>' . $items["name"] . '</td>
	// 			<td>' . $items["quantity"] . '</td>
	// 			<td>' . $items["adult"]. '</td>
	// 			<td>' . $items["child"]. '</td>
	// 			<td>' . $items["grand_total"] . '</td>
	// 			<td> <button type="button" name="remove" class="btn btn-danger remove_inventory" id="' . $items["rowid"] . '">Remove</button></td>
	// 		';
	// 		foreach( $items["selected_activity"] as $activity){
	// 			$count2++;
	// 			$output .= '
	// 			<table>
	// 		<tr style="margin-left:50px;">
	// 		<td></td>
	// 			<td>' .$activity["activity"]. '</td>
	// 		</tr>
	// 		';
	// 		}
	// 		$output.='</table>';
			
	// 		$grandTotal +=$items["grand_total"];
	// 		return $output;
	// 	}

	// 	$output .= '
	// 	<tr style="color:black">
	// 	 <td colspan="7" align="right">Total</td>
	// 	 <td>' . $grandTotal . '</td>
	// 	</tr>
	//    </table>
	//    </div>
	//    ';

	// 		if ($count1 == 0) {
	// 			$output = '<h3 align="center">Cart is Empty</h3>';
	// 		}

	// 	return $output;
			
	// }

	function remove()
	{
		$this->load->library('cart');
		$row_id = $_POST['row_id'];
		$data = array(
			'rowid'  => $row_id,
			'qty'  => 0
		);
		$this->cart->update($data);
	}

	function clear()
	{
		$this->load->library("cart");
		$this->cart->destroy();
		echo $this->view();
	}

	function billingCart()
	{
		// $this->load->library('cart');
		$data['country'] = $this->CustomModel->selectAll('country', 'name');
		$data['cart'] =  $this->cart->contents();
		$this->load->view('travels/layout/header');
		$this->load->view('travels/activity/billingCart', $data);
		$this->load->view('travels/layout/footer');
	}


	public function getTourNecessaryDetails($tourId)
	{
		$data['where'] = array('id' => $tourId);
		echo "<pre>";
		print_r(json_encode($this->CustomModel->selectAllFromTableWhere('tour', $data['where'], 'p_with_transfer,p_without_transfer')));
	}

	public function getActivityNecessaryDetails()
	{
		$activityId = $_POST['tourid'];
		$result = json_encode($this->CustomModel->selectActivityDetailsbytourId($activityId), true);
		echo $result;
	}
}
