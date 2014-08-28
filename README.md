SDRestHookBundle
================

This bundle allows you to convert any controller, to become an api endpoint.

The purpose of this bundle is to allow re-use of controllers, and simplify creating API end-points.

Simple Example
--------------


.. code-block :: php

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

This route will render the template Default::index.html.twig

/api/hello/{name}
-----------------

This route will output json by default, with no template required

Installation
------------

.. code-block :: bash

    composer require "sacheen/rest-hook-bundle dev-master"

.. code-block :: php

   <?php

    // in AppKernel::registerBundles()
    $bundles = array(
        // ...
            new SD\RestHookBundle\SDRestHookBundle(),
            new \JMS\SerializerBundle\JMSSerializerBundle()
        // ...
    );

Config
------

.. configuration-block ::

    .. code-block :: yaml
    #app/config.yml
    sd_rest_hook:
        formats: [json,xml]
        route_patterns: [/api/i,/ajax/i]
        json_callback: json_callback

The *route_patterns* allow for an array of regular expression, if a route matches the pattern, the kernel will intercept the response,
and render it as the relevant end point format

The *json_callback* option allows to specify the string, for a json_callback

JMSSerializerBundle
-------------------

The Config allows for *formats* allowed by [JMSSerializerBundle](https://github.com/schmittjoh/JMSSerializerBundle)
You can learn more about the bundle in its [documentation](http://jmsyst.com/bundles/JMSSerializerBundle).



Final
-----

All controllers must return an array(), to render correctly

Examples
--------

        //sample routes for get/put/post/delete
        * @Route("/api/user",name="_user_get_api",defaults={"_format"="json"},requirements={"_method"="GET"}))
        * @Route("/api/user",name="_user_put_api",defaults={"_format"="json"},requirements={"_method"="PUT"}))
        * @Route("/api/user",name="_user_post_api",defaults={"_format"="json"},requirements={"_method"="POST"}))
        * @Route("/api/user",name="_user_delete_api",defaults={"_format"="json"},requirements={"_method"="DELETE"}))