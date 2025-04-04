<?php

declare(strict_types=1);

namespace Onepix\EAvtovokzalApiClient\Test\Util;

use PHPUnit\Framework\Constraint\Constraint;
use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Util\Exporter;
use SebastianBergmann\Comparator\ArrayComparator as OldArrayComparator;
use SebastianBergmann\Comparator\ComparisonFailure;
use SebastianBergmann\Comparator\Factory as ComparatorFactory;

use function is_string;
use function sprintf;
use function str_contains;
use function trim;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ArraysAreEqualConstraint extends Constraint
{
    private readonly mixed $value;

    public function __construct(mixed $value)
    {
        $this->value = $value;
    }

    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate(mixed $other, string $description = '', bool $returnResult = false): ?bool
    {
        // If $this->value and $other are identical, they are also equal.
        // This is the most common path and will allow us to skip
        // initialization of all the comparators.
        if ($this->value === $other) {
            return true;
        }
        $comparatorFactory = ComparatorFactory::getInstance();
        $comparatorFactory->unregister(new OldArrayComparator());
        $comparatorFactory->register(new ArrayComparator());

        try {
            $comparator = $comparatorFactory->getComparatorFor(
                $this->value,
                $other,
            );

            $comparator->assertEquals(
                $this->value,
                $other,
                0.0,
                true,
            );
        } catch (ComparisonFailure $f) {
            if ($returnResult) {
                return false;
            }

            throw new ExpectationFailedException(
                trim($description . "\n" . $f->getMessage()),
                $f,
            );
        }

        return true;
    }

    /**
     * Returns a string representation of the constraint.
     */
    public function toString(bool $exportObjects = false): string
    {
        if (is_string($this->value)) {
            if (str_contains($this->value, "\n")) {
                return 'is equal to <text>';
            }

            return sprintf(
                "is equal to '%s'",
                $this->value,
            );
        }

        return sprintf(
            'is equal to %s',
            Exporter::export($this->value, $exportObjects),
        );
    }
}
