<?php

/*
 * Di Java, interface boleh punya "default method".
 * PHP tidak punya fitur itu di interface, jadi padanannya memakai TRAIT:
 * class yang butuh implementasi bawaan cukup "use FuelableDefault;"
 */
trait FuelableDefault
{
    public function refuel(): void
    {
        echo "Mengisi bahan bakar umum." . PHP_EOL;
    }
}
