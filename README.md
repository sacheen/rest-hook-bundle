SDRestHookBundle
================

This bundle allows you to convert any controller, to become an api endpoint.

The purpose of this bundle is to allow re-use of controllers, and simplify creating API end-points.

Simple Example
--------------

    <?php

    class DefaultController extends Controller
    {
        /**
         * @Route("/hello/{name}")
         * @Route("/api/hello/{name}",name="_hello_api",defaults={"_format"="json"},requirements={"_method"="GET"}))
         * @Template()
         */
        public function indexAction($name)
        {
            return array('name' => $name);
        }
    }


/hello/{name}
--------------

This route will render the template Default::index.html.twig.

/api/hello/{name}
-----------------

This route will output json by default, with no template required.

Installation
------------

    composer require "sacheen/rest-hook-bundle dev-master"

    <?php
    #AppKernel::registerBundles()
    $bundles = array(
        // ...
            new SD\RestHookBundle\SDRestHookBundle(),
            new \JMS\SerializerBundle\JMSSerializerBundle()
        // ...
    );

Config
------

    #app/config.yml
    sd_rest_hook:
        formats: [json,xml]
        route_patterns: [/api/i,/ajax/i]
        json_callback: json_callback
        request_listener_priority: 100

The *route_patterns* allow for an array of regular expression, if a route matches the pattern, the kernel will intercept the response, and render it as the relevant end point format.

The *json_callback* option allows to specify the string, for a json_callback.

The *request_listener_priority* sets the priority for the intercepting the request.

JMSSerializerBundle
-------------------

The Config allows for *formats* allowed by [JMSSerializerBundle](https://github.com/schmittjoh/JMSSerializerBundle)
You can learn more about the bundle in its [documentation](http://jmsyst.com/bundles/JMSSerializerBundle).


Request Interceptor
-------------------

This feature allows the ability to send json data to the server, and it will convert the json to an http query string that your controller can understand.

Exceptions
----------

There is a RestfulException Class, this allows you to set a data [array] variable that will then translate in the content of the response.

Final
-----

All controllers must return an array(), to render correctly.

Examples
--------

        //sample routes for get/put/post/delete
        * @Route("/api/user",name="_user_get_api",defaults={"_format"="json"},requirements={"_method"="GET"}))
        * @Route("/api/user",name="_user_put_api",defaults={"_format"="json"},requirements={"_method"="PUT"}))
        * @Route("/api/user",name="_user_post_api",defaults={"_format"="json"},requirements={"_method"="POST"}))
        * @Route("/api/user",name="_user_delete_api",defaults={"_format"="json"},requirements={"_method"="DELETE"}))
