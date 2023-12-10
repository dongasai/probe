<?php

namespace ProbeTests\Constraint;

use PHPUnit\Framework\Constraint\Constraint;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsBool extends Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
        return 'is bool';
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other): bool
    {
        return is_bool($other);
    }
}
