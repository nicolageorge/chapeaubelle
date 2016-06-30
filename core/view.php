<?php

class Core_View{
	public function render( $templateFile, array $data = array() ){
		ob_start();
		extract( $data );
		require( __ROOT__ . '/app/' . $templateFile );

		echo ob_get_clean();
	}
}
