<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 6/28/17
 * Time: 12:06 PM
 */

namespace Btybug\FrontSite\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EventsController extends Controller
{
    public function getIndex()
    {
//        $subscripts = \Subscriber::getSubscriptions()->getData();
//        $tabs=[];
//        $f_name='Btybug\FrontSite\Models\EventSubscriber\Independent\CoreIndependents@Notification';
//        $e_name='App\Events\AfterLoginEvent';
//        if (isset($subscripts[$e_name])) {
//            foreach ($subscripts[$e_name] as $key => $value) {
//                if (strpos($key, $f_name) === 0) {
//                    $tabs[] = $value;
//                }
//
//            }
//        }

        $subscriber = \Subscriber::getSubscriptions();
//        dd($subscriber);
        return view('manage::events.index', compact('subscriber'));
    }
    public function getIndexNew()
    {
        $subscriber = \Subscriber::getSubscriptions();
        return view('manage::events.index_new', compact('subscriber'));
    }
    public function postNewConnection(Request $request)
    {
        dd($request->all());

    }
    public function getIndexNewConnection()
    {
        $subscriber = \Subscriber::getSubscriptions();
        return view('manage::events.new_connections', compact('subscriber'));
    }

    public function postGetFunctionData(Request $request)
    {
        $namespace = $request->get('namespace');
        if ($namespace) {
            $data = \Subscriber::getForm($namespace);
            return \Response::json(['data' => $data, 'error' => false]);
        }
        return \Response::json(['error' => true, 'message' => 'namespace is mandatory']);
    }

    public function postSave(Request $request)
    {
        dd($request->all());
    }

    public function postGetEventFunctionRelation(Request $request)
    {
        $f_name = $request->get('function_namespace');
        $e_name = $request->get('event_namespace');
        $form = \Subscriber::getForm($f_name);
        $subscripts = \Subscriber::getSubscriptions()->getData();
        $tabs = [];
        if (isset($subscripts[$e_name])) {
            foreach ($subscripts[$e_name] as $key => $value) {
                if (strpos($key, $f_name) === 0) {
                    $tabs[] = $value;
                }

            }
        }
        return \Response::json(['form' => $form, 'tabs' => $tabs]);
    }

    public function postSaveEventFunctionRelation(Request $request)
    {

        $settings = json_decode($request->get('data'),true);
        foreach ($settings as $e_name=>$subscriptions) {
            foreach($subscriptions as $f_name=>$f_settings){
                 \Subscriber::clean($e_name, $f_name);
                \Subscriber::add($e_name, $f_name, $f_settings);
            };
        }
        \Subscriber::save();
        return \Response::json(['error' => false]);

    }

}