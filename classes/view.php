<?php

class View{
	public function render( $templateFile, array $data = array() ){

		ob_start();
		extract( $data );
		require( __ROOT__ . $templateFile );

		echo ob_get_clean();
	}
}
