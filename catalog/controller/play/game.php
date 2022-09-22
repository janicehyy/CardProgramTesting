<?php
class ControllerPlayGame extends Controller {
	private $error = array();

	public function index() {
		
		//Preload language file
		$this->load->language('play/game');

		$this->document->setTitle($this->language->get('heading_title'));

		//Preload model file (DB)
		$this->load->model('play/game');
		
		//Define array for final display
		$data['final'] = array();

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			
			$data['no_people'] = $this->request->post['people'];
			
			/*
			echo "<pre>";
			print_r($this->request->post);
			//exit;*/
			
			//Set up an array to save the deck
			 $num = ['A','2','3','4','5','6','7','8','9','X','J','Q','K'];
			 
			 //Setup an array for card types with icon
			// $icons = ['H'=>'&#9829;','D'=>'&#9830;','S'=>'&#9824;','C'=>'&#9827;'];
			
			//Setup an array for card types without icon
			 $icons = ['H', 'D', 'S', 'C'];
			 
			 //Generate deck with icon
			// foreach ($icons as $icon => $symbol) {
				
			//Generate deck without icon
			 foreach ($icons as $icon) {
				 
				 //Defind the color of the card
				 /*
				 if($icon == 'H' || $icon == 'D'){
					 $text_color = 'red';
				 }else{
					 $text_color = 'black';
				 }*/
				 
				 foreach ($num as $vn) {
				  
				  //Display the card with color & icon
				  //$card[] = '<font color="'.$text_color.'">' . $symbol . $icon . '-' . $vn . '</font>';
				  
				  //Display the card without color & icon
				  $card[] = $icon . '-' . $vn;
				 }
			 }
			// shuffle the deck
			 Shuffle ($card); 
			 //print_r($card);
			 
			 $total_card = count($card);
			 
			 $devide_card =  $total_card / $data['no_people'];
			 
			 $each_people_card = 0;
			 
			 if($devide_card > 0){
				 if($devide_card < 1){
					 $each_people_card = 1;
				 }else{
					 $each_people_card = (int)$devide_card;
				 }
			 }
			 
			 
			 
			// echo $total_card . " | " .  $each_people_card . "<br>";
			 
			 $people_count = 0;
			 $info = '';
			 
			 if($data['no_people'] > $total_card){
				 $people_count = $total_card;
			 }else{
				 $people_count = $data['no_people'];
			 }

			 for($a=0; $a < $people_count; $a++){
				 $deck = "";

				  for ($i=0; $i < $each_people_card; $i++) {
					  
					  $deck .= current($card);
					  
					  if($i < ($each_people_card - 1)){
						  $deck .= ",";
					  }
					  
					  next($card);
				  }
				  
				  
				 
				 $info .= $deck . "<br>";
				 
				 array_push($data['final'], $deck);
				 
				 
			 }
			 
			 //Insert Into DB
			 $this->model_play_game->addCard($data['no_people'], $info);
/*
			 echo "<pre>";
			 print_r($info);
			 print_r($data);
			 exit;
			 */
			// echo $data['final'];
			// exit;

			$this->response->setOutput($this->load->view('play/game', $data));
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_game'),
			'href' => $this->url->link('play/game', '', true)
		);

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['action'] = $this->url->link('play/game', '', true);

		if (isset($this->request->post['people'])) {
			$data['people'] = $this->request->post['people'];
		} else {
			$data['people'] = 1;
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('play/game', $data));
	}

	private function validate() {
		
		if ($this->request->post['people'] == "" || $this->request->post['people'] < 1) {
			$this->error['warning'] = $this->language->get('error_invalid');
		}
		
		return !$this->error;
	}
}