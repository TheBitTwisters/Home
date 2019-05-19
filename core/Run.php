<?php

namespace Home;
/**
 * Class Application
 * The heart of the application
 */
class Run
{
    /** @var mixed Instance of the controller */
    private $app;

    /** @var array URL parameters, will be passed to used controller-method */
    private $parameters = array();

    /** @var string Just the name of the app, useful for checks inside the view ("where am I ?") */
    private $app_name;

    /** @var string Just the name of the controller's method, useful for checks inside the view ("where am I ?") */
    private $action_name;

    /**
     * Start the application, analyze URL elements, call according controller/method or relocate to fallback location
     */
    public function __construct()
    {
        // create array with URL parts in $url
        $this->splitUrl();

        // creates controller and action names (from URL input)
        $this->setNames();

        // // does such a controller exist ?
        // if (file_exists(Config::get('PATH_CONTROLLER') . $this->app_name . '.php')) {
        //
        //     // load this file and create this controller
        //     // example: if controller would be "car", then this line would translate into: $this->car = new car();
        //     require Config::get('PATH_CONTROLLER') . $this->app_name . '.php';
        //     $this->app = new $this->app_name();
        //
        //     $rendered = false;
        //
        //     // check for method: does such a method exist in the controller ?
        //     if (method_exists($this->controller, $this->action_name)) {
        //         if (!empty($this->parameters)) {
        //             // call the method and pass arguments to it
        //             $rendered = call_user_func_array(array($this->controller, $this->action_name), $this->parameters);
        //         } else {
        //             // if no parameters are given, just call the method without parameters, like $this->index->index();
        //             $rendered = $this->controller->{$this->action_name}();
        //         }
        //     } else {
        //         if (empty($this->parameters)) {
        //             // if the method does not exist, try loading the action with index method
        //             $rendered = $this->app->index($this->action_name);
        //         } else {
        //             array_unshift($this->parameters, $this->action_name);
        //             $rendered = call_user_func_array(array($this->controller, 'index'), $this->parameters);
        //         }
        //     }
        //
        //     if ($rendered) return;
        // }

        echo 'hi';
    }

    /**
     * Get and split the URL
     */
    private function splitUrl()
    {
        $route = Request::get('url');
        if ($route) {

            // split URL
            $url = trim($route, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            // put URL parts into according properties
            $this->app_name = isset($url[0]) ? $url[0] : null;
            $this->action_name = isset($url[1]) ? $url[1] : null;

            // remove controller name and action name from the split URL
            unset($url[0], $url[1]);

            // rebase array keys and store the URL parameters
            $this->parameters = array_values($url);
        }
    }

    /**
     * Checks if controller and action names are given. If not, default values are put into the properties.
     * Also renames controller to usable name.
     */
    private function setNames()
    {
        // check for controller: no controller given ? then make controller = default controller (from Config)
        if (!$this->app_name) {
            $this->app_name = Config::get('DEFAULT_APP');
        }

        // check for action: no action given ? then make action = default action (from Config)
        if (!$this->action_name OR (strlen($this->action_name) == 0)) {
            $this->action_name = Config::get('DEFAULT_ACTION');
        }

        // check if the application is on maintenance mode
        if (Config::get('MAINTENANCE')) {
            if ($this->app_name != 'error') {
                Redirect::to('error/maintenance');
                exit();
            }
        }

        // rename controller name to real controller class/file name ("index" to "IndexController")
        $this->app_name = strtolower($this->app_name);
    }
}
