<?php

declare(strict_types=1);

namespace Potter\Collection;

use Potter\ArrayAccess\ArrayAccessInterface,
    PHPAbles\EnumerableInterface;

interface CollectionInterface extends ArrayAccessInterface, EnumerableInterface
{ }
