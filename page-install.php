<div class="page-header">
  <h1>Get Started!</h1>
</div>
<hr class="wide"></hr>
<div class="row">
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">1</div>
    <h3><i class="icon-download"></i> Get ownCloud Server</h3>
    <p>Set up a server yourself, deploy to the cloud or find a provider:</p>
    <div class="btn-group">
      <a class="btn btn-default btn-lg" role="button" href="#instructions-server" rel="tooltip" title="Install instructions" id="server" data-toggle="popover">Download</a>
<!--       <a class="btn btn-default btn-lg" role="button" href="/hardware-TBD">Servers</a> - disabled for now, until we have a page like that... -->
      <a class="btn btn-default btn-lg" role="button" href="/providers" rel="tooltip" title="Third Party ownCloud Providers">Providers</a>
    </div>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">2</div>
    <h3><i class="icon-refresh"></i> Sync your data</h3>
    <p>Connect to your ownCloud with our clients for your devices:</p>
    <div class="btn-group">
      <a class="btn btn-default btn-lg" role="button" href="#install-clients" rel="tooltip" id="desktop" data-toggle="popover" title="Desktop Clients">Desktop Clients</a>
      <a class="btn btn-default btn-lg" role="button" href="#install-clients" rel="tooltip" id="mobile" data-toggle="popover" title="Mobile Clients">Mobile clients</a>
    </div>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">3</div>
    <h3><i class="icon-globe"></i> Extend your cloud</h3>
    <p>Browse hundreds of free apps and connect services you use to ownCloud:</p>
     <div class="btn-group">
        <a class="btn btn-default btn-lg" role="button" href="https://marketplace.owncloud.com" target="_blank" rel="tooltip" title="The ownCloud Appstore">ownCloud Apps</a>
        <a class="btn btn-default btn-lg" role="button" href="https://github.com/owncloud/core/wiki/Apps" target="_blank" rel="tooltip" title="3rd Party App List on the ownCloud Wiki">3rd Party Apps</a>
      </div>
  </div>
</div>
<h1>Get more out of ownCloud!</h1>
<hr class="wide"></hr>
<div class="row">
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">4</div>
    <h3><i class="icon-book"></i> Documentation</h3>
    <p>Manuals are provided in HTML and PDF form:</p>
    <ul>
      <li><a href="<?php echo $DOCUMENTATION_USER; ?>" target="_blank" rel="tooltip" title="End User Documentation">Users</a></li>
      <li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>" target="_blank" rel="tooltip" title="ownCloud administrator Documentation">Admins</a></li>
      <li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="ownCloud Developer Documentation">Developers</a></li>
      <li> <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker/" target="_blank" rel="tooltip" title="Information for Testers">Testers</a></li>
    </ul>
    <p>If you have other questions about ownCloud, read our <a href="/faq" target="_blank" rel="tooltip" title="Most Frequently Asked Questions and Answers">ownCloud FAQ</a>.</p>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">5</div>
    <h3><i class="icon-comment"></i> Support Channels</h3>
    <p>Discuss using, installing or maintaining ownCloud in our community support channels.</p>
    <ul>
      <li><a href="https://central.owncloud.org" target="_blank" rel="tooltip" title="ownCloud Central Forums">Forum</a> (<a href="https://central.owncloud.org/c/faq" target="_blank" rel="tooltip" title="The FAQ maintained by the ownCloud Central Community">Forum FAQ</a>)</li>
      <li><a href="https://mailman.owncloud.org/mailman/listinfo/user" target="_blank" rel="tooltip" title="The ownCloud User Mailing List">User Mailing List</a></li>
      <li><a href="irc://#owncloud@freenode.net" target="_blank" rel="tooltip" title="The ownCloud IRC Channel">IRC Channel</a> (<a href="http://webchat.freenode.net/?channels=owncloud" target="_blank"  rel="tooltip" title="Web interface to the ownCloud IRC Channel">Webchat</a>)</li>
    </ul>
    <p>Note that these consist of users helping each other. Consider helping out others, too!</p>
    <p>Find <a href="/support" target="_blank" rel="tooltip" title="An overview of where to find help">more support resources here</a>.</p>
  </div>
  <div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">6</div>
    <h3><i class="icon-rocket"></i> Get Involved</h3>
    <p><a href="/promote" target="_blank"  rel="tooltip" title="List of our Communication Channels">Join the conversation</a> around ownCloud!</p>
    <p>If you want to help out with <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="Developer Documentation">developing</a> and <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>testing/index.html" target="_blank"  rel="tooltip" title="Testing Documentation">testing</a>, grab a daily build or beta packages.</p>
    <p><a class="btn btn-default btn-lg" role="button" href="#testing-development" rel="tooltip" title="Contribute to testing" id="testing" data-toggle="popover">Testing Packages</a></p>
    <p>See more <a href="/contribute" target="_blank" rel="tooltip" title="The ownCloud Contribute Page">ways to get involved</a>!</p>
  </div>
</div>
<hr></hr>
<script>
    $('#mobile').click(function () {
        $("#tab-desktop").removeClass("active");
        $("#tab-mobile").addClass("active");
        $("#li-tab-desktop").removeClass("active");
        $("#li-tab-mobile").addClass("active");    });
    $('#desktop').click(function () {
        $("#tab-mobile").removeClass("active");
        $("#tab-desktop").addClass("active");
        $("#li-tab-mobile").removeClass("active");
        $("#li-tab-desktop").addClass("active");
    });
</script>
