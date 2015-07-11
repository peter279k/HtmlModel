<?php

namespace Crell\HtmlModel\Link;

interface Linkable
{
    /**
     * Returns a collection of LinkInterface objects.
     *
     * The collection may be an array or any PHP \Traversable object.
     *
     * @return array|\Traversable
     */
    public function getLinks();
}
