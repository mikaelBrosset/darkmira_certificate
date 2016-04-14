<?php

$insideBody = <<<'INSIDEBODY'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Darkmira Tour PHP 2016</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto%%20Condensed" rel="stylesheet" type="text/css" />
		<style type="text/css">
			body {margin:0px; padding:0px; background-color:#262626; color:#b5b5b5; font-family:"Roboto Condensed"; font-size:16px; -webkit-text-size-adjust:100%%; -ms-text-size-adjust:100%; width:100% !important;}
			a, a:link, a:visited {color:#1c9547; text-decoration:underline;}
			a:hover, a:active {text-decoration:none; color:#777777 !important;}
			h1, h2, h3, h1 a, h2 a, h3 a {color:#1c9547 !important; font-size:18px;}
			h2 {margin:0px 0px 10px 0px;}
			h2.name {padding:0px 0px 7px 0px; margin:0px 0px 7px 0px;}
			h3 {padding:0px 0px 5px 0px; margin:0px 0px 5px 0px;}
			p {margin:0 0 14px 0; padding:0;}
			img {border:0; -ms-interpolation-mode: bicubic; max-width:100%%;}
			a img {border:none;}
			table td {border-collapse:collapse;}
			td.quote {font-family:Georgia, 'Times New Roman', Times, serif; font-size:18px; line-height:20pt; color:#81a61b;}
			span.phone a, span.noLink a{color:#1c9547; text-decoration:none;}

			/* Hotmail */
			.ReadMsgBody {width: 100%%;}
			.ExternalClass {width: 100%%;}
			/* / Hotmail */

			/* Media queries */
			@media (max-width: 767px) {
				td[class=shareContainer], td[class=topContainer], td[class=container] {padding-left:20px !important; padding-right:20px !important;}
				table[class=row] {width:100%% !important; max-width:600px !important;}
				img[class=wideImage], img[class=banner] {width:100%% !important; height:auto !important; max-width:100%%;}
			}
			@media (max-width: 560px) {
				td[class=twoFromThree] {display:block; width:100%% !important;}
				td[class=inner2], td[class=authorInfo] {padding-right:30px !important;}
				td[class=socialIconsContainer] {display:block; width:100%% !important; border-top:0px !important;}
				td[class=socialIcons], td[class=socialIcons2] {padding-top:0px !important; text-align:left !important; padding-left:30px !important; padding-bottom:20px !important;}
			}
			@media (max-width: 480px) {
				html, body {margin-right:auto; margin-left:auto;}
				td[class=oneFromTwo] {display:block; width:100%% !important;}
				td[class=inner] {padding-left:30px !important; padding-right:30px !important;}
				td[class=inner_image] {padding-left:30px !important; padding-right:30px !important; padding-bottom:25px !important;}
				img[class=wideImage] {width:auto !important; margin:0 auto;}
				td[class=viewOnline] {display:none !important;}
				td[class=date] {font-size:14px !important; padding:10px 30px !important; background-color:#f4f4f4; text-align:left !important;}
				td[class=title] {font-size:24px !important; line-height:32px !important;}
				table[class=quoteContainer] {width:100%% !important; float:none;}
				td[class=quote] {padding-right:0px !important;}
				td[class=spacer] {padding-top:18px !important;}
			}
			@media (max-width: 380px) {
				td[class=shareContainer] {padding:0px 10px !important;}
				td[class=topContainer] {padding:10px 10px 0px 10px !important; background-color:#e9e9e9 !important;}
				td[class=container] {padding:0px 10px 10px 10px!important;}
				table[class=row] {min-width:240px !important;}
				img[class=wideImage] {width:100%% !important; max-width:255px;}
				td[class=authorInfo], td[class=socialIcons2] {text-align:center !important;}
				td[class=spacer2] {display:none !important;}
				td[class=spacer3] {padding-top:23px !important;}
				table[class=iconContainer], table[class=iconContainer_right] {width:100%% !important; float:none !important;}
				table[class=authorPicture] {float:none !important; margin:0px auto !important; width:80px !important;}
				td[class=icon] {padding:5px 0px 25px 0px !important; text-align:center !important;}
				td[class=icon] img {display:inline !important;}
				img[class=buttonRight] {float:none !important;}
				img[class=bigButton] {width:100%% !important; max-width:224px; height:auto !important;}
				h2[class=website] {font-size:22px !important;}
			}
			/* / Media queries */

		</style>

	</head>
	<body>
		<table width="100%%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;">

			<!-- Start of logo and slogan -->
			<tr>
				<td class="topContainer" style="padding-left:5px; padding-right:5px; background-color:#262626;">

					<table class="row" width="600" bgcolor="#262626" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; text-align:left; border-spacing:0; max-width:100%%;">
						<tr>
							<td class="oneFromTwo" width="100%%" valign="middle" style="border-bottom:1px dotted #dddddd">
								<table width="100%%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; border-spacing:0;">
									<tr>
										<td class="inner" style="padding-top:15px; padding-right:15px; padding-bottom:15px; padding-left:30px; font-family:'Roboto Condensed'; font-size:24px; line-height:100%%; color:#e94e1b; font-weight:normal;">
											<img alt="Logo" src="%3$s/media/logo.png" border="0" align="left" vspace="0" hspace="0" style="display:block;" />
										</td>
										<td class="socialIcons" style="padding-top:25px; padding-left:15px; padding-right:30px; padding-bottom:25px; font-family:'Roboto Condensed'; font-size:12px; line-height:15pt; color:#777777; text-align:right;">
											<a href="https://twitter.com/DMTourPHPBrasil" target="blank"><img alt="Twitter" src="%3$s/media/twitter.png" border="0" vspace="0" hspace="0" /></a>&nbsp;&nbsp;
											<a href="https://www.facebook.com/dmtourbrasil" target="blank"><img alt="Facebook" src="%3$s/media/facebook.png" border="0" vspace="0" hspace="0" /></a>&nbsp;&nbsp;
										</td>
									</tr>
								</table>
							</td>
							<td class="oneFromTwo" width="50%%" valign="middle" style="border-bottom:1px dotted #dddddd">
								<table width="100%%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; border-spacing:0;">
									<tr>
										<td class="date" style="padding-top:20px; padding-right:30px; padding-bottom:20px; padding-left:15px; font-family:'Roboto Condensed'; font-size:16px; line-height:100%%; color:#5f0c06; text-align:right;">
											<span class="noLink"></span>
										</td>
									</tr>
								</table>

							</td>
						</tr>
					</table>

				</td>
			</tr>
			<!-- End of logo and date -->

			<!-- Start of main container -->
			<tr>
				<td class="container" style="padding-left:5px; padding-right:5px; padding-bottom:20px; background-color:#262626;">


					<!-- Start of text with icon on the left -->
					<table class="row" width="600" bgcolor="#262626" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; text-align:left; border-spacing:0; max-width:100%%;">
						<tr>
							<td style="padding:30px; font-family:'Roboto Condensed'; font-size:14px; line-height:15pt; color:#CCCCCC;">

<h1 style="color:#ffcd05 !important; font-size:18px; font-weight: 300; text-align: center; font-family:'Roboto Condensed'; margin-bottom: 30px;";>Certificado de participação ao Darkmira Tour PHP 2016</h1>

<p style="color:#b5b5b5; font-family:'Roboto Condensed'; font-size:16px; font-weight: 300;">Acesse diretamente ao seu certificado digital atestando da sua participação nos 2 dias de palestras do Darkmira Tour PHP 2016 : <br/><br/><a style="color:#1c9547; text-decoration:underline;" href="%1$s">%1$s</a></p>

<p style="color:#b5b5b5; font-family:'Roboto Condensed'; font-size:16px; font-weight: 300;">Além desse link, você também pode compartilhar o seu certificado com seu empregador ou para uma contratação, através do outro link abaixo com o numero do seu certificado %2$s</p>

<p style="color:#b5b5b5; font-family:'Roboto Condensed'; font-size:16px; font-weight: 300;"><a style="color:#1c9547; text-decoration:underline;" href="%4$s">%4$s</a></p>

<p style="color:#b5b5b5; font-family:'Roboto Condensed'; font-size:16px; font-weight: 300;">Lembramos que o Darkmira Tour PHP não se limite aos dias do evento e que continuamos a propor para você hangouts, interviews, informações sobre eventos comunitários, sorteios, etc, no nosso  <a style="color:#1c9547; text-decoration:underline;" href="https://www.facebook.com/dmtourbrasil">Facebook</a>, <a style="color:#1c9547; text-decoration:underline;" href="https://twitter.com/DMTourPHPBrasil">Twitter</a> mas também no nosso canal slack #dmtourphp, <a style="color:#1c9547; text-decoration:underline;" href="https://darkmirabrasil.herokuapp.com/">https://darkmirabrasil.herokuapp.com/</a></p>

<p style="color:#b5b5b5; font-family:'Roboto Condensed'; font-size:16px; font-weight: 300;">Um grande abraço</p>

<p style="color:#b5b5b5; font-family:'Roboto Condensed'; font-size:16px; font-weight: 300;">Cyrille Grandval aka Futé</p>


							</td>
						</tr>
					</table>
					<!-- End of text with icon on the left -->

					<!-- Start of footer -->
					<table class="row" width="600" bgcolor="#3B3B3B" align="center" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; text-align:left; border-spacing:0; max-width:100%%; padding-top: 30px;">
						<tr>
							<td class="twoFromThree" width="50%%" valign="top" style="text-align: center;">
								<table width="100%%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; border-spacing:0;">
									<tr>
										<td>
											<h2 style="padding-top: 20px; color: #ffcd05 !important;">Patrocinadores</h2>
										</td>
									</tr>
									<tr>
										<td class="inner2" style="text-align: center; font-family:'Roboto Condensed'; font-size:12px; line-height:15pt; color:#777777;">
											<img alt="Logo" src="%3$s/media/logo-microsoft.png" border="0" vspace="0" hspace="0" />
											<img alt="Logo" src="%3$s/media/logo-kinghost.png" border="0" vspace="0" hspace="0" />
											<img alt="Logo" src="%3$s/media/logo-continuous.png" border="0"  vspace="0" hspace="0" />
										</td>
									</tr>
								</table>
							</td>
							<td class="socialIconsContainer" width="50%%" valign="top" style="text-align: center;">
								<table width="100%%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; border-spacing:0; min-width:130px;">
									<tr>
										<td>
											<h2 style="padding-top: 20px; color: #ffcd05 !important;">Realização</h2>
										</td>
									</tr>
									<tr>
										<td class="inner2" style="padding-bottom: 20px;">
											<img alt="Logo" src="%3$s/media/logo-dmb.png" border="0" vspace="0" hspace="0" />
										</td>
									</tr>
									<tr>
										<td class="socialIcons">
											<a href="https://twitter.com/DarkmiraBrasil" target="blank"><img alt="Twitter" src="%3$s/media/twitter.png" border="0" vspace="0" hspace="0" /></a>&nbsp;&nbsp;
											<a href="https://www.facebook.com/darkmirabrasil" target="blank"><img alt="Facebook" src="%3$s/media/facebook.png" border="0" vspace="0" hspace="0" /></a>&nbsp;&nbsp;
											<a href="https://www.linkedin.com/company/3340355" target="blank"><img alt="Linkedin" src="%3$s/media/linkedin.png" border="0" vspace="0" hspace="0" /></a>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<!-- End of footer -->
				</td>
			</tr>
			<!-- End of main container -->
		</table>
	</body>
</html>
INSIDEBODY;

$body = sprintf($insideBody, $alumni->getUrl(), $alumni->getRandomNumber(), constant('BASEURL'), constant('CERTIFICATEFORMURL'));
