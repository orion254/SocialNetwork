<?php
namespace transformer\string\html;
use transformer\string\IStringTransformer;


/**
 *
 * @author j
 * Date: 10/7/15
 * Time: 8:35 PM
 *
 * File: LinkTransformer.php
 */
class HashTransformer implements IStringTransformer
{
    /**
     * DRY
     */
    use NoOptionsTransformerTrait;

    /**
     * pattern for search and replace
     */
    const PATTERN = '/(^|\s)#(\w*[a-zA-Z0-9öäü_-]+\w*)/';
    const REPLACE_PATTEN = '\1<a href="http://www.dasmerkendienie.com/hash/\2">#\2</a>';
}