<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (preg_match('#^/(?P<_locale>en|fr)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'homepage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::indexAction',));
        }

        // connectionpage
        if (preg_match('#^/(?P<_locale>en|fr)/connexion$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'connectionpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::connexionAction',));
        }

        // login
        if (preg_match('#^/(?P<_locale>en|fr)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'login')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::loginAction',));
        }

        // forgetpage
        if (preg_match('#^/(?P<_locale>en|fr)/forget$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'forgetpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::forgetAction',));
        }

        // inscriptionpage
        if (preg_match('#^/(?P<_locale>en|fr)/inscription$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'inscriptionpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\RegistrationController::registerAction',));
        }

        // tagspage
        if (preg_match('#^/(?P<_locale>en|fr)/tags$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tagspage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::tagsAction',));
        }

        // questionpage
        if (preg_match('#^/(?P<_locale>en|fr)/questions/(?P<tag>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'questionpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::questionsAction',));
        }

        // ajoutpage
        if (preg_match('#^/(?P<_locale>en|fr)/ajout/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::ajoutAction',));
        }

        // deletepage
        if (preg_match('#^/(?P<_locale>en|fr)/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletepage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::deleteAction',));
        }

        // editpage
        if (preg_match('#^/(?P<_locale>en|fr)/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::editAction',));
        }

        // editstatuspage
        if (preg_match('#^/(?P<_locale>en|fr)/editstatus/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editstatuspage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::editstatusAction',));
        }

        // solutionpage
        if (preg_match('#^/(?P<_locale>en|fr)/solution/(?P<questionid>[^/]++)/(?P<reponseid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'solutionpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::SetSolutionAction',));
        }

        // votepage
        if (preg_match('#^/(?P<_locale>en|fr)/vote$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'votepage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::VoteAction',));
        }

        // recherchepage
        if (preg_match('#^/(?P<_locale>en|fr)/recherche/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'recherchepage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\QuestionController::rechercheAction',));
        }

        // reponsepage
        if (preg_match('#^/(?P<_locale>en|fr)/reponses/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'reponsepage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\ReponseController::reponsesAction',));
        }

        // profilpage
        if (preg_match('#^/(?P<_locale>en|fr)/profil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\UserController::profilAction',));
        }

        // dashboardformpage
        if (preg_match('#^/(?P<_locale>en|fr)/dashboardform$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dashboardformpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\UserController::editprofilAction',));
        }

        // dashboardpage
        if (preg_match('#^/(?P<_locale>en|fr)/dashboard$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dashboardpage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\UserController::dashboardAction',));
        }

        // deletereppage
        if (preg_match('#^/(?P<_locale>en|fr)/deletereponse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletereppage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\ReponseController::DeleteAction',));
        }

        // editreppage
        if (preg_match('#^/(?P<_locale>en|fr)/editrep/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editreppage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\ReponseController::EditAction',));
        }

        // docspage
        if (preg_match('#^/(?P<_locale>en|fr)/docs/(?P<tag>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'docspage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'docspage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DocsController::docsAction',));
        }

        // ajoutdocspage
        if (preg_match('#^/(?P<_locale>en|fr)/ajoutdocs/(?P<tag>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajoutdocspage')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DocsController::ajoutdocsAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_homepage');
                }

                return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::indexAction',  '_route' => 'admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/delete')) {
                // deleteuser
                if (rtrim($pathinfo, '/') === '/admin/delete/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'deleteuser');
                    }

                    return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::deleteuserAction',  '_route' => 'deleteuser',);
                }

                // deletequestion
                if (rtrim($pathinfo, '/') === '/admin/delete/question') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'deletequestion');
                    }

                    return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::deletequestionAction',  '_route' => 'deletequestion',);
                }

                // deletereponse
                if (rtrim($pathinfo, '/') === '/admin/delete/reponse') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'deletereponse');
                    }

                    return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::deletereponseAction',  '_route' => 'deletereponse',);
                }

                // deletecomment
                if (rtrim($pathinfo, '/') === '/admin/delete/comment') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'deletecomment');
                    }

                    return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::deletecommentAction',  '_route' => 'deletecomment',);
                }

                // deletedoc
                if (rtrim($pathinfo, '/') === '/admin/delete/doc') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'deletedoc');
                    }

                    return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::deletedocAction',  '_route' => 'deletedoc',);
                }

                // deletevote
                if (rtrim($pathinfo, '/') === '/admin/delete/vote') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'deletevote');
                    }

                    return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::deletevoteAction',  '_route' => 'deletevote',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/edit')) {
                // edituser
                if (0 === strpos($pathinfo, '/admin/edit/user') && preg_match('#^/admin/edit/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edituser')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::edituserAction',));
                }

                // editquestion
                if (0 === strpos($pathinfo, '/admin/edit/question') && preg_match('#^/admin/edit/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editquestion')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::editquestionAction',));
                }

                // editreponse
                if (0 === strpos($pathinfo, '/admin/edit/reponse') && preg_match('#^/admin/edit/reponse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editreponse')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::editreponseAction',));
                }

                // editcomment
                if (0 === strpos($pathinfo, '/admin/edit/comment') && preg_match('#^/admin/edit/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editcomment')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::editcommentAction',));
                }

                // editdoc
                if (0 === strpos($pathinfo, '/admin/edit/doc') && preg_match('#^/admin/edit/doc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'editdoc')), array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\StaffController::editdocAction',));
                }

            }

        }

        // IndexRedirection
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'IndexRedirection');
            }

            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\DefaultController::RedirectAction',  '_route' => 'IndexRedirection',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'WCS\\WildExchangeBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
