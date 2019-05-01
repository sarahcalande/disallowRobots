$url = "//{$_SERVER['HTTP_HOST']}{$_SERVER["REQUEST_URI"]}";
if (preg_match("#/onesignal-free-web-push-notifications/#", $url))
{
	header( "X-Robots-Tag: noindex, follow", true );
}
