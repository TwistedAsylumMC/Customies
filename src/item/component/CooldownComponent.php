<?php
declare(strict_types=1);

namespace customiesdevs\customies\item\component;

final class CooldownComponent extends BasicComponent {

	public function __construct(string $category, float $duration) {
		parent::__construct("minecraft:cooldown", [
			"category" => $category,
			"duration" => $duration
		], false);
	}
}