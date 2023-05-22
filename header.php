<?php amp_header_core() ?>
 <header class="header container">
        <div class="main-menu">
            <div class="logo">
                <?php amp_logo(); ?>
            </div>y
            <div class="call-us">
                <p>Call Us Today</p>
                <a class="tel-no" href="tel:1-800-535-3878">1-800-535-3878</a>
            </div>
            <div role="button" tabindex="0" class="burger-nav" on="tap:AMP.setState({navMenuOpen: !navMenuOpen})">
                <div class="amp-sidebar-toggle"> 
                  <span></span> 
                  <span></span> 
                  <span></span> 
                </div> 
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="mobile-sub-header">
            <div>
                <a href="tel:1-800-535-3878">
                <amp-img src="/wp-content/uploads/2021/06/Call-Us-Mobile-Phone-150x150.png.webp" width="72" height="72px" alt="Call Us">
                </amp-img>
                <p>Call Us<br/>Today</p>
                </a>
            </div>
            <div>
                <a href="/store/">
                <amp-img src="/wp-content/uploads/2021/06/Rotobrush-Logo-Mobile-150x150.png.webp" width="72" height="72px" alt="Rotobrush Products">
                </amp-img>
                <p>Our<br/>Products</p>
                </a>
            </div>
            <div>
                <a href="#form">
                <amp-img src="/wp-content/uploads/2021/06/Request-Information-Mobile-150x150.png.webp" width="72" height="72px" alt="Request Information">
                </amp-img>
                <p>Request<br/>Information</p>
                </a>
            </div>
        </div>

</header>

<?php amp_sidebar(['action'=>'start',
    'id'=>'sidebar',
    'layout'=>'nodisplay',
    'side'=>'right'
] ); ?>
<?php amp_sidebar(['action'=>'close-button']); ?>
<?php /*amp_menu();*/ ?>
<?php amp_sidebar(['action'=>'end']); ?>

<div id="menu-container" class="hidden" [class]="navMenuOpen ? '': 'hidden'">
  <div role="button" tabindex="0" on="tap:AMP.setState({navMenuOpen: !navMenuOpen})" class="amp-sidebar-close">X</div>
  <?php amp_menu(); ?>
</div>



<div class="content-wrapper container">

