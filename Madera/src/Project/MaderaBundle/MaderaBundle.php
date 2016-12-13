<?php

namespace Project\MaderaBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MaderaBundle extends Bundle
{
	public function getParent()
  {
    return 'FOSUserBundle';
  }

}
