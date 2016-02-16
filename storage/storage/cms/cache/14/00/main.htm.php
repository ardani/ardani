<?php 
use Ardani\Stikes\Models\Settings;class Cms56c324f55fed0_1086151175Class extends \Cms\Classes\LayoutCode
{


public function onEnd() {
	$this['no_telp'] = Settings::get('no_telp');
	$this['nama_instansi'] = Settings::get('nama_instansi');
	$this['no_fax'] = Settings::get('no_fax');
	$this['alamat'] = Settings::get('alamat');
	$this['email'] = Settings::get('email');
}

}
