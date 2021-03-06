<?php
$page_title = "OAuth 2.0 Device Flow";
$page_section = "";
$page_secondary = "";
$page_meta_description = "OAuth 2.0 for browserless and input-constrained devices";
require('../../includes/_header.php');
?>
<div class="container">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/2/">OAuth 2.0</a></li>
      <li class="breadcrumb-item active">Device Flow</li>
    </ol>
  </nav>

  <div>

    <h2>OAuth 2.0 Device Flow</h2>

    <?php require('../../includes/_carbon.php'); ?>

    <p><a href="https://tools.ietf.org/html/draft-ietf-oauth-device-flow" class="rfc">Device Flow</a></p>

    <p>The Device Flow is an OAuth 2.0 extension that enables devices with no browser or limited input capability to obtain an access token. This is commonly seen on Apple TV apps, or devices like hardware encoders that can stream video to a YouTube channel.</p>

    <p>More resources
      <ul>
        <li><a href="https://www.oauth.com/oauth2-servers/device-flow/">Device Flow</a> (oauth.com)</li>
        <li><a href="https://alexbilbie.com/2016/04/oauth-2-device-flow-grant/">OAuth 2.0 Device Flow Grant</a> (alexbilbie.com)</li>
      </ul>
    </p>

  </div>
</div>

<?php require('../../includes/_footer.php'); ?>
