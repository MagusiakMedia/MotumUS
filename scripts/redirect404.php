<?php
/**
 * Redirect 404
 *
 * This script searches for configured redirects and redirects to those pages. Therefore this file has to be used as a
 * 404 resource. A page which is used as the actual 404 page if no redirect has been found can be configured in the
 * Redirect404 template where also the redirects themselves can be
 *
 * @package TemplateFramework
 * @subpackage Redirect
 * @author BBS WebCM
 * @author last modified by: $Author: EVYJZ $
 * @version $Rev: 24389 $ - $Date: 2017-09-11 10:01:47 +0200 (Mo, 11 Sep 2017) $ - $HeadURL: https://by-stsvn.bayer-ag.com/svn/WP/webkit/TemplateFrameWork/tags/TFW_2.11.00/scripts/redirect404.php $
 */

require_once 'Webkit/init.php';
require_once $docRoot . 'scripts/include/TFW/init/stage1.php';

// load redirect mappings
$redirectsConfig = require $docRoot . 'scripts/include/configuration/redirect404mappings.php';

$redirectExtensions = require $docRoot . 'scripts/include/configuration/redirect404extensions.php';

// if we are not in productive environment, and the redirect page is requested directly, show html head for further output
$showInfo = false;
$debug = !empty($_GET['debug']) && (int)$_GET['debug'] === 1;
if (!Webkit_Environment::isProd() && ltrim($_SERVER['PHP_SELF'], '/') === substr(ltrim($_SERVER['REQUEST_URI'], '/'), 0, strlen(ltrim($_SERVER['PHP_SELF'], '/')))) {
    $showInfo = true;
    print '
    <html>
    <head>
        <title>Redirect404 Configuration</title>
    </head>
    <body>
    <form action="' . $_SERVER['PHP_SELF'] . '" method="GET">
        Test URL: <input type="text" name="url" ' . (!empty($_GET['url']) ? ' value="' . $_GET['url'] . '"' : '') . '/><br />
        Debugging: <input type="checkbox" value="1" name="debug" ' . ($debug ? ' checked="checked"' : '') . '/><br />
        <br />
        <input type="submit" value="search url">
    </form>
    <hr />
';
}

// check current requested uri for redirects and redirect eventually
if ($debug) {
    print '<h2>Debug Info:</h2>' . PHP_EOL;
}
$redirect404 = new TFW_Redirect404($debug);
if ($showInfo && !empty($_GET['url'])) {
    $redirect404->setUri($_GET['url']);
}

$errorPageFile = $redirect404->getErrorPageFilename($redirectsConfig['errorPages']);

// get rid of any leading slash
$errorPageFile = ltrim($errorPageFile, '/');

$redirect404->setRedirects($redirectsConfig['redirects'])
    ->setRedirectScriptsPages($redirectsConfig['redirectScriptsPages'])
    ->setPassThroughs($redirectsConfig['passthroughs']);

// apply redirect only if extension is in extension list
if (in_array(pathinfo(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), PATHINFO_EXTENSION), $redirectExtensions)) {

    $redirect404->apply();

}

// the following code will only be executed if no redirect is defined (handled by the redirect object above)

// if we are not in productive environment, and the redirect page is requested directly, show configuration
if ($showInfo) {
    if ($debug) {
        print '<hr />' . PHP_EOL;
    }
    print<<<EOL
    This page is only displayed in Preview and Test environment!<br />
    <br />
    The following redirects are configured: <br />
    <h2>Redirect mappings:</h2>
EOL;
    $redirect404->printRedirects(true);

    print '<h2>The 404 handler will also search for these alternatives:</h2>' . PHP_EOL;
    $redirect404->printAlternatives(true);

    print '<h2>Error pages:</h2>' . PHP_EOL;
    $redirect404->printErrorPages($redirectsConfig['errorPages'], true);
    print<<<EOL
</body>
</html>
EOL;

    die();
}
// if this script is called by a 404 but no redirects were triggered, show the error page for the active language
else {

    unset($redirect404, $redirectsConfig);

    // re-set the page header status (just to be sure)
    header("Status: 404 Not Found");
    header("HTTP/1.1 404 Not Found");

    // load the error page
    require_once $docRoot . $errorPageFile;

}