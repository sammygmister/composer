<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer\DependencyResolver\Operation;

use Composer\Package\PackageInterface;

/**
 * Abstract solver operation class.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
abstract class SolverOperation implements OperationInterface
{
    protected $reason;

    /**
     * Initializes operation.
     *
     * @param string $reason operation reason
     */
    public function __construct($reason = null)
    {
        $this->reason = $reason;
    }

    /**
     * Returns operation reason.
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param $lock bool Whether this is an operation on the lock file
     * @return string
     */
    public function show($lock)
    {
        throw new \RuntimeException('abstract method needs to be implemented in subclass, not marked abstract for compatibility with PHP <= 5.3.8');
    }
}
