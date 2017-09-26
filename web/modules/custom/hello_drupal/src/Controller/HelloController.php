<?php

namespace Drupal\hello_drupal\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloController {
	public function hello() {
		return new Response('Hello Drupal');
	}
}

?>
