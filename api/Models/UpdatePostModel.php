<?php

include_once('Arrayable.php');

class UpdatePostModel extends Arrayable {
	public string $Text;

	public function __construct($array) {
		parent::__construct($array);
	}
}

?>
