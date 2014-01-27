<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/styles')) {
            // _assetic_7e14af2
            if ($pathinfo === '/styles.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e14af2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7e14af2',);
            }

            // _assetic_7e14af2_0
            if ($pathinfo === '/styles_bootstrap_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7e14af2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7e14af2_0',);
            }

        }

        if (0 === strpos($pathinfo, '/jquery')) {
            // _assetic_032ebcc
            if ($pathinfo === '/jquery.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '032ebcc',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_032ebcc',);
            }

            // _assetic_032ebcc_0
            if ($pathinfo === '/jquery_jquery-1.11.0.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '032ebcc',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_032ebcc_0',);
            }

        }

        if (0 === strpos($pathinfo, '/bootstrap')) {
            // _assetic_417108e
            if ($pathinfo === '/bootstrap.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '417108e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_417108e',);
            }

            // _assetic_417108e_0
            if ($pathinfo === '/bootstrap_bootstrap.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '417108e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_417108e_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/back')) {
            if (0 === strpos($pathinfo, '/back/usuario')) {
                // usuario
                if (rtrim($pathinfo, '/') === '/back/usuario') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'usuario');
                    }

                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\UserController::indexAction',  '_route' => 'usuario',);
                }

                // usuario_show
                if (preg_match('#^/back/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\UserController::showAction',));
                }

                // usuario_new
                if ($pathinfo === '/back/usuario/new') {
                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\UserController::newAction',  '_route' => 'usuario_new',);
                }

                // usuario_create
                if ($pathinfo === '/back/usuario/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_usuario_create;
                    }

                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\UserController::createAction',  '_route' => 'usuario_create',);
                }
                not_usuario_create:

                // usuario_edit
                if (preg_match('#^/back/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\UserController::editAction',));
                }

                // usuario_update
                if (preg_match('#^/back/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_usuario_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\UserController::updateAction',));
                }
                not_usuario_update:

                // usuario_delete
                if (preg_match('#^/back/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_usuario_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\UserController::deleteAction',));
                }
                not_usuario_delete:

            }

            if (0 === strpos($pathinfo, '/back/persona')) {
                // persona
                if (rtrim($pathinfo, '/') === '/back/persona') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'persona');
                    }

                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\PersonController::indexAction',  '_route' => 'persona',);
                }

                // persona_show
                if (preg_match('#^/back/persona/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_show')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\PersonController::showAction',));
                }

                // persona_new
                if ($pathinfo === '/back/persona/new') {
                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\PersonController::newAction',  '_route' => 'persona_new',);
                }

                // persona_create
                if ($pathinfo === '/back/persona/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_persona_create;
                    }

                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\PersonController::createAction',  '_route' => 'persona_create',);
                }
                not_persona_create:

                // persona_edit
                if (preg_match('#^/back/persona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_edit')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\PersonController::editAction',));
                }

                // persona_update
                if (preg_match('#^/back/persona/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_persona_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_update')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\PersonController::updateAction',));
                }
                not_persona_update:

                // persona_delete
                if (preg_match('#^/back/persona/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_persona_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'persona_delete')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\PersonController::deleteAction',));
                }
                not_persona_delete:

            }

            if (0 === strpos($pathinfo, '/back/raza')) {
                // raza
                if (rtrim($pathinfo, '/') === '/back/raza') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'raza');
                    }

                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\RaceController::indexAction',  '_route' => 'raza',);
                }

                // raza_show
                if (preg_match('#^/back/raza/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'raza_show')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\RaceController::showAction',));
                }

                // raza_new
                if ($pathinfo === '/back/raza/new') {
                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\RaceController::newAction',  '_route' => 'raza_new',);
                }

                // raza_create
                if ($pathinfo === '/back/raza/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_raza_create;
                    }

                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\RaceController::createAction',  '_route' => 'raza_create',);
                }
                not_raza_create:

                // raza_edit
                if (preg_match('#^/back/raza/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'raza_edit')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\RaceController::editAction',));
                }

                // raza_update
                if (preg_match('#^/back/raza/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_raza_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'raza_update')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\RaceController::updateAction',));
                }
                not_raza_update:

                // raza_delete
                if (preg_match('#^/back/raza/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_raza_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'raza_delete')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\RaceController::deleteAction',));
                }
                not_raza_delete:

            }

            if (0 === strpos($pathinfo, '/back/mascota')) {
                // mascota
                if (rtrim($pathinfo, '/') === '/back/mascota') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'mascota');
                    }

                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\PetController::indexAction',  '_route' => 'mascota',);
                }

                // mascota_show
                if (preg_match('#^/back/mascota/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mascota_show')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\PetController::showAction',));
                }

                // mascota_new
                if ($pathinfo === '/back/mascota/new') {
                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\PetController::newAction',  '_route' => 'mascota_new',);
                }

                // mascota_create
                if ($pathinfo === '/back/mascota/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mascota_create;
                    }

                    return array (  '_controller' => 'Petit\\BackBundle\\Controller\\PetController::createAction',  '_route' => 'mascota_create',);
                }
                not_mascota_create:

                // mascota_edit
                if (preg_match('#^/back/mascota/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mascota_edit')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\PetController::editAction',));
                }

                // mascota_update
                if (preg_match('#^/back/mascota/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_mascota_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mascota_update')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\PetController::updateAction',));
                }
                not_mascota_update:

                // mascota_delete
                if (preg_match('#^/back/mascota/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_mascota_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mascota_delete')), array (  '_controller' => 'Petit\\BackBundle\\Controller\\PetController::deleteAction',));
                }
                not_mascota_delete:

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
