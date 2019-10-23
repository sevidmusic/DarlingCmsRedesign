<?php
/** Require Composer's auto-loader. **/
require(__DIR__ . '/vendor/autoload.php');
?>
<!doctype html>
<html>
<head>
    <title>Darling Cms Redesign Welcome Page</title>
    <style>
        body {
            background: #000000;
            font-family: monospace;
            font-size: 1.3em;
        }

        .welcome {
            color: #1cff39;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #17795a;
            text-align: center;
        }

        .phpInfo {
            border: 3px solid white;
            border-radius: 12px;
            width: 94%;
            height: 420px;
            margin: 0 auto;
            overflow: auto;
        }

        /*
         * Php Info Styles
         */
        pre {
            margin: 0;
            font-family: monospace;
        }

        a:link {
            color: #009;
            text-decoration: none;
            background-color: #fff;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            border-collapse: collapse;
            border: 0;
            width: 98%;
            box-shadow: 1px 2px 3px #1cff39;
            margin: 1em auto;
        }

        .center {
            text-align: center;
        }

        .center table {
            text-align: left;
        }

        .center th {
            text-align: center !important;
        }

        td, th {
            border: 3px solid #000000;
            border-radius: 20px;
            font-size: 75%;
            vertical-align: baseline;
            padding: 12px;
        }

        h1 {
            font-size: 150%;
        }

        h2 {
            font-size: 125%;
        }

        .p {
            text-align: left;
        }

        .e {
            background-color: #ccf;
            width: 300px;
            font-weight: bold;
            font-size: 1.3em;
        }

        .h {
            background-color: #000000;
            color: #2391eb;
            font-weight: bold;
        }

        .v {
            background-color: #051522;
            max-width: 300px;
            overflow-x: auto;
            word-wrap: break-word;
            color: #2391eb;
            font-size: 1.3em;
        }

        .v i {
            color: #ffffff; /*#1cff39;*/
        }

        img {
            float: right;
            border: 0;
        }

        hr {
            width: 934px;
            background-color: #ccc;
            border: 0;
            height: 1px;
        }
    </style>
    <?php
    /**
     * Functions
     */
    function getPhpInfoHtmlString(): string
    {
        /* php info */
        $html = '<div class="phpInfo">';
        ob_start();
        phpinfo();
        $phpInfoOutput = ob_get_clean();
        $html .= str_replace([getPhpInfoHtmlToReplace()], [''], $phpInfoOutput);
        $html .= '</div><!-- Close .phpInfo -->';
        return $html;
    }

    function getPhpInfoHtmlToReplace(): string
    {
        return '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<style type="text/css">
body {background-color: #fff; color: #222; font-family: sans-serif;}
pre {margin: 0; font-family: monospace;}
a:link {color: #009; text-decoration: none; background-color: #fff;}
a:hover {text-decoration: underline;}
table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
.center {text-align: center;}
.center table {margin: 1em auto; text-align: left;}
.center th {text-align: center !important;}
td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
h1 {font-size: 150%;}
h2 {font-size: 125%;}
.p {text-align: left;}
.e {background-color: #ccf; width: 300px; font-weight: bold;}
.h {background-color: #99c; font-weight: bold;}
.v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
.v i {color: #999;}
img {float: right; border: 0;}
hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
</style>
<title>PHP 7.3.10 - phpinfo()</title><meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE" /></head>
<body><div class="center">';
    }

    ?>
</head>
<body>
<div class="welcome">
    <h1>Darling Cms Redesign Welcome Page</h1>
    <p>This is the welcome page for the Darling Cms redesign. This page is
        will only exist in it's current form until development of the
        underlying architecture is finished.</p>
</div>
<h2>Local Php Installation Info:</h2>
<?php
/* initialize string to hold dynamic html */
$html = '';
/* get php info html string */
$html .= getPhpInfoHtmlString();
/* output dynamically generated html */
echo $html;
?>
?>
</body>
</html>
