/**** 
* AMP Framework Reset
*****/
    body{ font-family: Open Sans, sans-serif; font-size: 16px; line-height:1.4; }
    ol, ul{ list-style-position: inside }
    p, ol, ul, figure{ margin: 0 0 1em; padding: 0; }
    a, a:active, a:visited{ color:#ed1c24; text-decoration: none }
    a:hover, a:active, a:focus{}
    pre{ white-space: pre-wrap;}
    .left{float:left}
    .right{float:right}
    .hidden{ display:none }
    .clearfix{ clear:both }
    blockquote{ background: #f1f1f1; margin: 10px 0 20px 0; padding: 15px;}
    blockquote p:last-child {margin-bottom: 0;}
    .amp-wp-unknown-size img {object-fit: contain;}
    .amp-wp-enforced-sizes{ max-width: 100% }
    /* Image Alignment */
    .alignright {
        float: right;
    }
    .alignleft {
        float: left;
    }
    .aligncenter {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    amp-iframe { max-width: 100%; margin-bottom : 20px; }

    /* Captions */
    .wp-caption {
        padding: 0;
    }
    .wp-caption-text {
        font-size: 12px;
        line-height: 1.5em;
        margin: 0;
        padding: .66em 10px .75em;
        text-align: center;
    }

    /* AMP Media */
    amp-iframe,
    amp-youtube,
    amp-instagram,
    amp-vine {
        margin: 0 -16px 1.5em;
    }
    amp-carousel > amp-img > img {
        object-fit: contain;
    }


/****
* Container
*****/
.container {
    max-width: 600px;
    margin: 0 auto;
}
.col-3{
    width: 33.3%;
    float: left;
}
/****
* AMP Sidebar
*****/
amp-sidebar {
    width: 250px;
}

/* AMP Sidebar Toggle button */
.amp-sidebar-button{
    position:relative;
}
.amp-sidebar-toggle  {
}
.amp-sidebar-toggle span  {
    display: block;
    margin-bottom: 5px;
    width: 28px;
    border: 3px solid #fff;
    border-radius: 8px;
}
.amp-sidebar-toggle span:nth-child(2){
    top: 7px;
}
.amp-sidebar-toggle span:nth-child(3){
    top:14px;
}

/* AMP Sidebar close button */
.amp-sidebar-close{
    background: #333;
    display: inline-block;
    padding: 5px 10px;
    font-size: 12px;
    color: #fff;
}

#slide-in-menu {
  transform: translateX(-100%);
  transition: transform .2s ease-in-out;
}
#slide-in-menu:target {
  transform: translateX(0);
}

/****
* AMP Navigation Menu with Dropdown Support
*****/
    .toggle-navigation ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: inline-block;
        width: 100%
    }
    .toggle-navigation ul li{
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.11);
        padding: 11px 0px;
        width: 25%;
        float: left;
        text-align: center;
        margin-top: 6px
    }
    .toggle-navigation ul ul{
        display: none
    }
    .toggle-navigation ul li a{
        color: #eee;
        padding: 15px;
    }
    .toggle-navigation{
        display: none;
        background: #444;
    }


/**** 
* Header
*****/
.main-menu {
    display: flex;
    padding: 20px 10px;
    align-content: center;
    align-items: center;
    gap: 1em;
    background: #000;
}
.amp-logo {
}
.amp-logo amp-img{
    width: 120px !important;
}
.header h1{
    font-size: 1.5em;
}
.amp-phone, .amp-social, .amp-sidebar-button{
    display:inline-flex
}
.amp-phone{
    top: 4px;
}
.header .amp-social{
    margin: 0px 19px;
}
.amp-sidebar-button{
    top: 6px;
}
.mobile-sub-header{
    text-align: center;
    display: flex;
    background: #292a2e;
    justify-content: space-around;
    padding-top: 20px;
    border-top: 1px solid #d9232f;
}
.mobile-sub-header p, .mobile-sub-header a{
    color: white;
    line-height: 1.2em;
    font-size: 14px;
    padding-top: 5px;
}
.logo {
    width: 30%;
}
.call-us{
    text-align: center;
    width: 36%;
}
.call-us p{
    margin-bottom: 0;
    color: white;
    font-weight: bold;
}
.burger-nav {
    width: 25%;
    text-align: right;
}

/**
Forms
***/
.g_c textarea{
    position: relative;
    display: block;
    width: 100%;
}

/****
* Loop
*****/
    .loop-post{
        display: inline-block;
        width: 100%;
        margin: 6px 0px;
    }
    .loop-post .loop-img{
        float: left;
        margin-right: 15px;
    }
    .loop-post h2{
        font-size: 1.2em;
        margin: 0px 0px 8px 0px;
    }
    .loop-post p{
        font-size: 14px;
        color: #333;
        margin-bottom:6px;
    }
    .loop-post ul{
        list-style-type: none;
        display: inline-flex;
        margin: 0px;
        font-size: 14px;
        color: #666;
    }
    .loop-post ul li{
        margin-right:2px;
    }
    .loop-date{
        font-size:12px;
    }

/**Home Page**/
.amp-carousel-button {
    height: 50px;
    width: 50px;
    border-radius: 50%;
}

.i-amphtml-sidebar-mask {
position:fixed!important;
top:0!important;
left:0!important;
width:100vw!important;
height:100vh!important;
background-image:none!important;
animation-name:i-amphtml-sidebar-mask-fade-out;
z-index:2147483646;
display: none;
}
/****
* Single
*****/
    /** Related Posts **/
    .amp-related-posts ul{
        list-style-type:none;
    }
    .amp-related-posts ul li{
        display: inline-block;
        line-height: 1.3;
        margin-bottom: 5px;
    }
    .amp-related-posts amp-img{
        float: left;
        width: 100px;
        margin: 0px 10px 0px 0px;
    }


/**** 
* Comments
*****/
	.comments_list ul{
	    margin:0;
	    padding:0
	}
	.comments_list ul.children{
	    padding-bottom:10px;
		margin-left: 4%;
		width: 96%;
	}
	.comments_list ul li p{
        margin: 0;
        font-size: 14px;
        clear: both;
        padding-top: 5px;
	}
    .comments_list ul li .says{
        margin-right: 4px;
    }
	.comments_list ul li .comment-body{
	    padding: 10px 0px 15px 0px;
	}
	.comments_list li li{
	    margin: 20px 20px 10px 20px;
	    background: #f7f7f7;
	    box-shadow: none;
	    border: 1px solid #eee;
	}
	.comments_list li li li{
	    margin:20px 20px 10px 20px
	}
	.comment-author{ float:left }


/**** 
* Footer
*****/
.footer.container{
    padding: 30px 0px 20px 0px;
    font-size: 13px;
    text-align: center;
    background: #292a2f;
    color: white;
    width: 100%;
    margin: 0 auto;
    margin-top: -100px;
    z-index: 100;
    position: relative;
}


/****
* RTL Styles
*****/
    <?php  if( is_rtl() ) {?> <?php } ?>
