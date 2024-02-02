<?php namespace Violetshih\LaravelFacebookSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Violetshih\LaravelFacebookSdk\LaravelFacebookSdk
 */
class FacebookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Don't use this. Just... don't.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Violetshih\LaravelFacebookSdk\LaravelFacebookSdk';
    }
}
