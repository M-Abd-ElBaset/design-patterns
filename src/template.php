<?php

namespace DesignPatterns;

use Template\TurkeySub;
use Template\VeggieSub;

require '../vendor/autoload.php';

(new TurkeySub)->make();

echo "<br/><br/>";

(new VeggieSub)->make();
