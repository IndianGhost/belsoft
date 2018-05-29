<?php

namespace belsoft\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use \belsoft\BlackList as Blist;

class BlackList
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //We will use these methods later to :
        //block user after a number of login attempts
        //OR
        //Delete it from black list
        /*
         * $this->addToBlackList($request);
         * $this->deleteFromBlackList($request);
         */

        //we verify if ip adress exist on black list
        $onBlackList = Blist::where('ip', $request->ip())->first();

        if($onBlackList)
        {
            return response( view('errors.401'), Response::HTTP_UNAUTHORIZED );
        }
        else
        {
            return $next($request);
        }
    }

    /**
     * Add an ip adress to the black list
     *
     * @param  \Illuminate\Http\Request  $request
     * @throws \Exception
     * @return void
     */
    protected function addToBlackList($request)
    {
        try
        {
            Blist::create([
                'ip'    =>  $request->ip()
            ]);
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }

    /**
     * Delete an ip adress from the black list
     *
     * @param  \Illuminate\Http\Request  $request
     * @throws \Exception
     * @return void
     */
    protected function deleteFromBlackList($request)
    {
        try
        {
            Blist::where( 'ip', $request->ip() )
                ->delete();
        }
        catch (Exception $e){
            die($e->getMessage());
        }
    }
}
