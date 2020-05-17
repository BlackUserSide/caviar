<?php

class View {


	public function render($tpl, $pageData) {
		$tpl = substr($tpl,1);
		include ROOT. $tpl;
	}

}