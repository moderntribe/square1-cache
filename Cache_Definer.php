<?php
declare( strict_types=1 );

namespace Tribe\Libs\Cache;

use Tribe\Libs\CLI\CLI_Definer;
use Tribe\Libs\Container\Definer_Interface;

class Cache_Definer implements Definer_Interface {
	public function define(): array {
		return [
			// add the command to the CLI definer list for registration
			CLI_Definer::COMMANDS => \DI\add( [
				\DI\get( Cache_Prime_Command::class ),
			] ),
		];
	}

}
