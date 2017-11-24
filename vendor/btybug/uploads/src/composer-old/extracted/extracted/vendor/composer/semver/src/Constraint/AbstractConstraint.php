<?php


namespace Composer\Semver\Constraint;

trigger_error('The ' . __CLASS__ . ' abstract class is deprecated, there is no replacement for it, it will be removed in the next major version.', E_USER_DEPRECATED);


abstract class AbstractConstraint implements ConstraintInterface
{

    protected $prettyString;


    public function matches(ConstraintInterface $provider)
    {
        if ($provider instanceof $this) {

            return $this->matchSpecific($provider);
        }


        return $provider->matches($this);
    }

    public function getPrettyString()
    {
        if ($this->prettyString) {
            return $this->prettyString;
        }

        return $this->__toString();
    }

    public function setPrettyString($prettyString)
    {
        $this->prettyString = $prettyString;
    }


}
