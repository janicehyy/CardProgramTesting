<?php
class ControllerCommonColumnLeft extends Controller {
	public function index() {
		if (isset($this->request->get['user_token']) && isset($this->session->data['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$this->load->language('common/column_left');

			// Menu
			$data['menus'][] = array(
				'id'       => 'menu-card',
				'icon'	   => 'fa-gamepad',
				'name'	   => $this->language->get('text_card'),
				'href'     => $this->url->link('game/card', 'user_token=' . $this->session->data['user_token'], true),
				'children' => array()
			);

			return $this->load->view('common/column_left', $data);
		}
	}
}
