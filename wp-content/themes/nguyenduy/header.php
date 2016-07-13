<?php
/**
 * File Name: header.php
 * Date: 10-07-2016
 * Time: 15:06
 * Description:
 */
?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from wp.gawibowo.com/headline-news/home/home-style-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Jul 2016 11:03:55 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="http://wp.gawibowo.com/headline-news/xmlrpc.php">
	<title>
		<?php
		$cat_name = get_the_category();
		if (is_home()) {
			// Title home
			bloginfo('name');
			echo " | ";
			bloginfo('description');
		}
		if (is_single()) {
			// Title single
			wp_title('');
			echo " | ";
			bloginfo('name');
		}
		if (is_category()) {
			// title category
			echo $cat_name[0]->cat_name;
			echo " | ";
			bloginfo('name');
		}
		if (is_404()) {
			// title 404
			echo '404 Nothing Found' . ' | ';
			bloginfo('name');
		}
		if (is_page()) {
			// title page
			bloginfo('name');
			echo "| ";
			bloginfo('description');
		}
		if (is_search()) {
			// title search
			echo 'Search Results' . ' | ';
			bloginfo('name');
		}
		if (is_author()) {
			// title author
			echo 'Author Archives' . ' | ';
			bloginfo('name');
		}

		?>



	</title>
	<link rel="alternate" type="application/rss+xml" title="Headline News &raquo; Feed"
	      href="http://wp.gawibowo.com/headline-news/feed/"/>
	<link rel="alternate" type="application/rss+xml" title="Headline News &raquo; Comments Feed"
	      href="http://wp.gawibowo.com/headline-news/comments/feed/"/>
	<link rel="alternate" type="application/rss+xml" title="Headline News &raquo; Home Style 7 Comments Feed"
	      href="feed/index.html"/>
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/",
			"ext": ".png",
			"source": {"concatemoji": "http:\/\/wp.gawibowo.com\/headline-news\/wp-includes\/js\/wp-emoji-release.min.js?ver=804ab4b68987012327e3393514324f97"}
		};
		!function (a, b, c) {
			function d(a) {
				var c, d, e, f = b.createElement("canvas"), g = f.getContext && f.getContext("2d"), h = String.fromCharCode;
				if (!g || !g.fillText)return !1;
				switch (g.textBaseline = "top", g.font = "600 32px Arial", a) {
					case"flag":
						return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3;
					case"diversity":
						return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e;
					case"simple":
						return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0];
					case"unicode8":
						return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]
				}
				return !1
			}

			function e(a) {
				var c = b.createElement("script");
				c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c)
			}

			var f, g, h, i;
			for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = {
				everything: !0,
				everythingExceptFlag: !0
			}, h = 0; h < i.length; h++)c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]);
			c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () {
				c.DOMReady = !0
			}, c.supports.everything || (g = function () {
				c.readyCallback()
			}, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () {
				"complete" === b.readyState && c.readyCallback()
			})), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='font-open-sans-css'
	      href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%2C300italic%2C400italic%2C600italic%2C700italic&amp;subset=latin%2Ccyrillic&amp;ver=804ab4b68987012327e3393514324f97'
	      type='text/css' media='all'/>
	<link rel='stylesheet' id='font-roboto-condensed-css'
	      href='http://fonts.googleapis.com/css?family=Roboto+Condensed%3A400%2C700&amp;subset=latin%2Ccyrillic&amp;ver=804ab4b68987012327e3393514324f97'
	      type='text/css' media='all'/>
	<link rel="EditURI" type="application/rsd+xml" title="RSD"
	      href="http://wp.gawibowo.com/headline-news/xmlrpc.php?rsd"/>
	<link rel="wlwmanifest" type="application/wlwmanifest+xml"
	      href="http://wp.gawibowo.com/headline-news/wp-includes/wlwmanifest.xml"/>
	<style type="text/css" id="custom-background-css">
		body.custom-background {
			background-image: url('../../wp-content/uploads/sites/2/2014/05/blurred17.png');
			background-repeat: repeat;
			background-position: top left;
			background-attachment: fixed;
		}
	</style>


</head>
<?php wp_head(); ?>

<body
	class="page page-id-258 page-child parent-pageid-44 page-template page-template-page-builder page-template-page-builder-php custom-background stretched">
<div id="wrapper">
	<header class="top">
		<div class="container">

			<?php get_template_part('includes/navigations/breaking-news'); // get template breaking-news ?>
			<?php get_template_part('includes/navigations/top'); // get template top in header ?>
		</div>
	</header>

<?php get_template_part('includes/navigations/main'); // get template main navigation ?>


