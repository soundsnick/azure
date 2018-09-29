<?php
class ControllerExtensionModuleBanner extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');

		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner($setting['banner_id']);



		foreach ($results as $result) {
		 	$endTime = strtotime($result['outDate'].' '.$result['outTime']);
			$leftTime = $endTime - time();
			$outMinutes = floor($leftTime / 60 % 60);
			$outSeconds = floor($leftTime%60);
			if($outMinutes < 10){
				$outMinutes = '0'.$outMinutes;
			}
			if($outSeconds < 10){
				$outSeconds = '0'.$outSeconds;
			}
			if($leftTime < 0){ $leftTime = null;}
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => 'image/'.$result['image'],
					'outDate' => $leftTime,
					'outDays' => floor(($leftTime / 3600) / 24),
					'outHours' => floor(($leftTime / 3600) % 24),
					'outMinutes' => $outMinutes,
					'outSeconds' => $outSeconds
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/banner', $data);
	}
}
