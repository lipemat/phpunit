<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Builder;

/**
 * Interface for builders which can register builders with a given identification.
 *
 * This interface relates to Identity.
 */
interface NamespaceMatch
{
    /**
     * Looks up the match builder with identification $id and returns it.
     *
     * @param string $id The identification of the match builder
     *
     * @return ParametersMatch
     */
    public function lookupId($id);

    /**
     * Registers the match builder $builder with the identification $id. The
     * builder can later be looked up using lookupId() to figure out if it
     * has been invoked.
     *
     * @param string $id      The identification of the match builder
     * @param ParametersMatch  $builder The builder which is being registered
     */
    public function registerId($id, ParametersMatch $builder);
}
