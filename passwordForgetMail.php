<?php

session_start();

$mail = $_SESSION['myemail'];
$key = $_SESSION['key'];

if (isset($_SESSION['myemail'],$_SESSION['key'])){
     // Plusieurs destinataires

     $to  = $mail; // avec une virgule pour plusieurs personnes

     // Sujet
     $subject = 'Bienvenue au club de Bridge de Mont de Marsan !';

     // message
     $message = ' 
     <!doctype html>
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    <head>
        <!-- NAME: 1 COLUMN -->
        <!--[if gte mso 15]>
        <xml>
            <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>*|MC:SUBJECT|*</title>
        
    <style type="text/css">
    p{
      margin:10px 0;
      padding:0;
    }
    table{
      border-collapse:collapse;
    }
    h1,h2,h3,h4,h5,h6{
      display:block;
      margin:0;
      padding:0;
    }
    img,a img{
      border:0;
      height:auto;
      outline:none;
      text-decoration:none;
    }
    body,#bodyTable,#bodyCell{
      height:100%;
      margin:0;
      padding:0;
      width:100%;
    }
    .mcnPreviewText{
      display:none !important;
    }
    #outlook a{
      padding:0;
    }
    img{
      -ms-interpolation-mode:bicubic;
    }
    table{
      mso-table-lspace:0pt;
      mso-table-rspace:0pt;
    }
    .ReadMsgBody{
      width:100%;
    }
    .ExternalClass{
      width:100%;
    }
    p,a,li,td,blockquote{
      mso-line-height-rule:exactly;
    }
    a[href^=tel],a[href^=sms]{
      color:inherit;
      cursor:default;
      text-decoration:none;
    }
    p,a,li,td,body,table,blockquote{
      -ms-text-size-adjust:100%;
      -webkit-text-size-adjust:100%;
    }
    .ExternalClass,.ExternalClass p,.ExternalClass td,.ExternalClass div,.ExternalClass span,.ExternalClass font{
      line-height:100%;
    }
    a[x-apple-data-detectors]{
      color:inherit !important;
      text-decoration:none !important;
      font-size:inherit !important;
      font-family:inherit !important;
      font-weight:inherit !important;
      line-height:inherit !important;
    }
    #bodyCell{
      padding:10px;
    }
    .templateContainer{
      max-width:600px !important;
    }
    a.mcnButton{
      display:block;
    }
    .mcnImage,.mcnRetinaImage{
      vertical-align:bottom;
    }
    .mcnTextContent{
      word-break:break-word;
    }
    .mcnTextContent img{
      height:auto !important;
    }
    .mcnDividerBlock{
      table-layout:fixed !important;
    }
  /*
  @tab Page
  @section Background Style
  @tip Set the background color and top border for your email. You may want to choose colors that match your company\'s branding.
  */
    body,#bodyTable{
      /*@editable*/background-color:#305781;
    }
  /*
  @tab Page
  @section Background Style
  @tip Set the background color and top border for your email. You may want to choose colors that match your company\'s branding.
  */
    #bodyCell{
      /*@editable*/border-top:0;
    }
  /*
  @tab Page
  @section Email Border
  @tip Set the border for your email.
  */
    .templateContainer{
      /*@editable*/border:0;
    }
  /*
  @tab Page
  @section Heading 1
  @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
  @style heading 1
  */
    h1{
      /*@editable*/color:#202020;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:26px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:125%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 2
  @tip Set the styling for all second-level headings in your emails.
  @style heading 2
  */
    h2{
      /*@editable*/color:#202020;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:22px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:125%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 3
  @tip Set the styling for all third-level headings in your emails.
  @style heading 3
  */
    h3{
      /*@editable*/color:#202020;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:20px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:125%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Page
  @section Heading 4
  @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
  @style heading 4
  */
    h4{
      /*@editable*/color:#202020;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:18px;
      /*@editable*/font-style:normal;
      /*@editable*/font-weight:bold;
      /*@editable*/line-height:125%;
      /*@editable*/letter-spacing:normal;
      /*@editable*/text-align:left;
    }
  /*
  @tab Preheader
  @section Preheader Style
  @tip Set the background color and borders for your email\'s preheader area.
  */
    #templatePreheader{
      /*@editable*/background-color:#FAFAFA;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:9px;
      /*@editable*/padding-bottom:9px;
    }
  /*
  @tab Preheader
  @section Preheader Text
  @tip Set the styling for your email\'s preheader text. Choose a size and color that is easy to read.
  */
    #templatePreheader .mcnTextContent,#templatePreheader .mcnTextContent p{
      /*@editable*/color:#656565;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:12px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Preheader
  @section Preheader Link
  @tip Set the styling for your email\'s preheader links. Choose a color that helps them stand out from your text.
  */
    #templatePreheader .mcnTextContent a,#templatePreheader .mcnTextContent p a{
      /*@editable*/color:#656565;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Header
  @section Header Style
  @tip Set the background color and borders for your email\'s header area.
  */
    #templateHeader{
      /*@editable*/background-color:#FFFFFF;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:9px;
      /*@editable*/padding-bottom:0;
    }
  /*
  @tab Header
  @section Header Text
  @tip Set the styling for your email\'s header text. Choose a size and color that is easy to read.
  */
    #templateHeader .mcnTextContent,#templateHeader .mcnTextContent p{
      /*@editable*/color:#202020;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Header
  @section Header Link
  @tip Set the styling for your email\'s header links. Choose a color that helps them stand out from your text.
  */
    #templateHeader .mcnTextContent a,#templateHeader .mcnTextContent p a{
      /*@editable*/color:#007C89;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Body
  @section Body Style
  @tip Set the background color and borders for your email\'s body area.
  */
    #templateBody{
      /*@editable*/background-color:#FFFFFF;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:2px solid #EAEAEA;
      /*@editable*/padding-top:0;
      /*@editable*/padding-bottom:9px;
    }
  /*
  @tab Body
  @section Body Text
  @tip Set the styling for your email\'s body text. Choose a size and color that is easy to read.
  */
    #templateBody .mcnTextContent,#templateBody .mcnTextContent p{
      /*@editable*/color:#202020;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:16px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:left;
    }
  /*
  @tab Body
  @section Body Link
  @tip Set the styling for your email\'s body links. Choose a color that helps them stand out from your text.
  */
    #templateBody .mcnTextContent a,#templateBody .mcnTextContent p a{
      /*@editable*/color:#007C89;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  /*
  @tab Footer
  @section Footer Style
  @tip Set the background color and borders for your email\'s footer area.
  */
    #templateFooter{
      /*@editable*/background-color:#FAFAFA;
      /*@editable*/background-image:none;
      /*@editable*/background-repeat:no-repeat;
      /*@editable*/background-position:center;
      /*@editable*/background-size:cover;
      /*@editable*/border-top:0;
      /*@editable*/border-bottom:0;
      /*@editable*/padding-top:9px;
      /*@editable*/padding-bottom:9px;
    }
  /*
  @tab Footer
  @section Footer Text
  @tip Set the styling for your email\'s footer text. Choose a size and color that is easy to read.
  */
    #templateFooter .mcnTextContent,#templateFooter .mcnTextContent p{
      /*@editable*/color:#656565;
      /*@editable*/font-family:Helvetica;
      /*@editable*/font-size:12px;
      /*@editable*/line-height:150%;
      /*@editable*/text-align:center;
    }
  /*
  @tab Footer
  @section Footer Link
  @tip Set the styling for your email\'s footer links. Choose a color that helps them stand out from your text.
  */
    #templateFooter .mcnTextContent a,#templateFooter .mcnTextContent p a{
      /*@editable*/color:#656565;
      /*@editable*/font-weight:normal;
      /*@editable*/text-decoration:underline;
    }
  @media only screen and (min-width:768px){
    .templateContainer{
      width:600px !important;
    }

} @media only screen and (max-width: 480px){
    body,table,td,p,a,li,blockquote{
      -webkit-text-size-adjust:none !important;
    }

} @media only screen and (max-width: 480px){
    body{
      width:100% !important;
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    #bodyCell{
      padding-top:10px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnRetinaImage{
      max-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImage{
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCartContainer,.mcnCaptionTopContent,.mcnRecContentContainer,.mcnCaptionBottomContent,.mcnTextContentContainer,.mcnBoxedTextContentContainer,.mcnImageGroupContentContainer,.mcnCaptionLeftTextContentContainer,.mcnCaptionRightTextContentContainer,.mcnCaptionLeftImageContentContainer,.mcnCaptionRightImageContentContainer,.mcnImageCardLeftTextContentContainer,.mcnImageCardRightTextContentContainer,.mcnImageCardLeftImageContentContainer,.mcnImageCardRightImageContentContainer{
      max-width:100% !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnBoxedTextContentContainer{
      min-width:100% !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupContent{
      padding:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnCaptionLeftContentOuter .mcnTextContent,.mcnCaptionRightContentOuter .mcnTextContent{
      padding-top:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardTopImageContent,.mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent,.mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent{
      padding-top:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardBottomImageContent{
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockInner{
      padding-top:0 !important;
      padding-bottom:0 !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageGroupBlockOuter{
      padding-top:9px !important;
      padding-bottom:9px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnTextContent,.mcnBoxedTextContentColumn{
      padding-right:18px !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcnImageCardLeftImageContent,.mcnImageCardRightImageContent{
      padding-right:18px !important;
      padding-bottom:0 !important;
      padding-left:18px !important;
    }

} @media only screen and (max-width: 480px){
    .mcpreview-image-uploader{
      display:none !important;
      width:100% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 1
  @tip Make the first-level headings larger in size for better readability on small screens.
  */
    h1{
      /*@editable*/font-size:22px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 2
  @tip Make the second-level headings larger in size for better readability on small screens.
  */
    h2{
      /*@editable*/font-size:20px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 3
  @tip Make the third-level headings larger in size for better readability on small screens.
  */
    h3{
      /*@editable*/font-size:18px !important;
      /*@editable*/line-height:125% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Heading 4
  @tip Make the fourth-level headings larger in size for better readability on small screens.
  */
    h4{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Boxed Text
  @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    .mcnBoxedTextContentContainer .mcnTextContent,.mcnBoxedTextContentContainer .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Preheader Visibility
  @tip Set the visibility of the email\'s preheader on small screens. You can hide it to save space.
  */
    #templatePreheader{
      /*@editable*/display:block !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Preheader Text
  @tip Make the preheader text larger in size for better readability on small screens.
  */
    #templatePreheader .mcnTextContent,#templatePreheader .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Header Text
  @tip Make the header text larger in size for better readability on small screens.
  */
    #templateHeader .mcnTextContent,#templateHeader .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Body Text
  @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
  */
    #templateBody .mcnTextContent,#templateBody .mcnTextContent p{
      /*@editable*/font-size:16px !important;
      /*@editable*/line-height:150% !important;
    }

} @media only screen and (max-width: 480px){
  /*
  @tab Mobile Styles
  @section Footer Text
  @tip Make the footer content text larger in size for better readability on small screens.
  */
    #templateFooter .mcnTextContent,#templateFooter .mcnTextContent p{
      /*@editable*/font-size:14px !important;
      /*@editable*/line-height:150% !important;
    }

}</style></head>
    <body>
        <!--*|IF:MC_PREVIEW_TEXT|*-->
        <!--[if !gte mso 9]><!----><span class="mcnPreviewText" style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">Bienvenue au club de bridge de Mont de Marsan</span><!--<![endif]-->
        <!--*|END:IF|*-->
        <center>
            <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                <tr>
                    <td align="center" valign="top" id="bodyCell">
                        <!-- BEGIN TEMPLATE // -->
                        <!--[if (gte mso 9)|(IE)]>
                        <table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;">
                        <tr>
                        <td align="center" valign="top" width="600" style="width:600px;">
                        <![endif]-->
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer">
                            <tr>
                                <td valign="top" id="templatePreheader"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnImageBlock" style="min-width:100%;">
    <tbody class="mcnImageBlockOuter">
            <tr>
                <td valign="top" style="padding:9px" class="mcnImageBlockInner">
                    <table align="left" width="100%" border="0" cellpadding="0" cellspacing="0" class="mcnImageContentContainer" style="min-width:100%;">
                        <tbody><tr>
                            <td class="mcnImageContent" valign="top" style="padding-right: 9px; padding-left: 9px; padding-top: 0; padding-bottom: 0; text-align:center;">
                                
                                    
                                        <img align="center" alt="" src="https://mcusercontent.com/60f2a2016fa7528a0d69e3d5f/images/481eb60d-b598-4438-94ed-7941ca987c91.png" width="62.04" style="max-width:920px; padding-bottom: 0; display: inline !important; vertical-align: bottom;" class="mcnImage">
                                    
                                
                            </td>
                        </tr>
                    </tbody></table>
                </td>
            </tr>
    </tbody>
</table></td>
                            </tr>
                            <tr>
                                <td valign="top" id="templateHeader"><table class="mcnTextBlock" style="min-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td class="mcnTextBlockInner" style="padding-top:9px;" valign="top">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table style="max-width:100%; min-width:100%;" class="mcnTextContentContainer" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
                    <tbody><tr>
                        
                        <td class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;" valign="top">
                        
                            <div style="text-align: center;"><strong>Bonjour.</strong><br>
&nbsp;</div>

<div style="text-align: center;">Bienvenue sur le site du club de bridge de Mont de Marsan !<br>
<br>
Vous recevez ce mail car vous avez oublié votre mot de passe.<br>
Si ce n\'est pas le cas, veuillez ignorez ce mail.<br>
<br>
Sinon, veuillez cliquer sur le lien suivant pour réinitialiser votre mot de passe :</div>

                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnButtonBlock" style="min-width:100%;">
    <tbody class="mcnButtonBlockOuter">
        <tr>
            <td style="padding-top:0; padding-right:18px; padding-bottom:18px; padding-left:18px;" valign="top" align="center" class="mcnButtonBlockInner">
                <table border="0" cellpadding="0" cellspacing="0" class="mcnButtonContentContainer" style="border-collapse: separate !important;border-top-left-radius: 4px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;background-color: #2BAADF;">
                    <tbody>
                        <tr>
                            <td align="center" valign="middle" class="mcnButtonContent" style="font-family: Arial; font-size: 16px; padding: 18px;">
                                <a class="mcnButton " title="Réinitialiser votre compte" href="https://www.bridgeclubmontois.fr/resetPassword?email='.$mail.'&key='.$key.'" target="_blank" style="font-weight: bold;letter-spacing: normal;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">Réinitialiser votre compte</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table></td>
                            </tr>
                            <tr>
                                <td valign="top" id="templateBody"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <div style="text-align: center;">Excellente journée à vous !</div>

                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <div style="text-align: center;"><span style="font-size:11px">Si le bouton ci dessus ne fonctionne pas, collez ceci dans votre navigateur internet :<br>
<a href="https://bridgeclubmontois.fr" target="_blank">https://bridgeclubmontois.fr/resetPassword.php?email='.$mail.'&key='.$key.'</a></span><br>
<span style="font-size:11px">Cette email a été généré automatiquement, merci de ne pas y répondre.</span></div>

                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table></td>
                            </tr>
                            <tr>
                                <td valign="top" id="templateFooter"><table border="0" cellpadding="0" cellspacing="0" width="100%" class="mcnTextBlock" style="min-width:100%;">
    <tbody class="mcnTextBlockOuter">
        <tr>
            <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                <!--[if mso]>
        <table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;">
        <tr>
        <![endif]-->
          
        <!--[if mso]>
        <td valign="top" width="600" style="width:600px;">
        <![endif]-->
                <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="mcnTextContentContainer">
                    <tbody><tr>
                        
                        <td valign="top" class="mcnTextContent" style="padding-top:0; padding-right:18px; padding-bottom:9px; padding-left:18px;">
                        
                            <em>Copyright © Bridgeclubmontois.fr, All rights reserved.</em><br>
<br>
<strong>Notre adresse email est la suivante:</strong><br>
support@<em>Bridgeclubmontois.fr</em><br>
<br>
Vous souhaitez vous désinscrire de notre site ?<br>
Vous pouvez le faire en <a href="https://bridgeclubmontois.fr/deleteAccount.php?email='.$mail.'&key='.$key.'">cliquant ici !</a>
                        </td>
                    </tr>
                </tbody></table>
        <!--[if mso]>
        </td>
        <![endif]-->
                
        <!--[if mso]>
        </tr>
        </table>
        <![endif]-->
            </td>
        </tr>
    </tbody>
</table></td>
                            </tr>
                        </table>
                        <!--[if (gte mso 9)|(IE)]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                        <!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
     ';

     // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers[] = 'MIME-Version: 1.0';
     //$headers[] = 'Content-type: text/html; charset=iso-8859-1';
     $headers[] = 'Content-Type: text/html; charset=UTF-8';

     $headers[] = 'Reply-To: BridgeClubMontois <support@bridgeclubmontois.fr>'; 
     $headers[] = 'Return-Path: BridgeClubMontois <support@bridgeclubmontois.fr>'; 
     $headers[] = 'From: BridgeClubMontois <support@bridgeclubmontois.fr>';

     $headers[] = 'Organization: BridgeClubMontois';
     $headers[] = 'X-Priority: 3';
     $headers[] = 'X-Mailer: PHP'. phpversion(); 

     // En-têtes additionnels
     $headers[] = 'To: '.$user.' <'.$mail.'>';

     // Envoi
     mail($to, $subject, $message, implode("\r\n", $headers));

    $_SESSION['mail_send'] = 1;
     header("location: resetPasswordMailSend.php");

}
else {
  header("location: 404.html");  
}
// Variable de session utilisé dans resetPasswordMailSend.php et détruit
//unset($_SESSION['key']);
//unset($_SESSION['myemail']);


?>