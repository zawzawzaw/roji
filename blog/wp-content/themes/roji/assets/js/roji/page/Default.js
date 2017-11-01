goog.provide('roji.page.Default');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

goog.require('manic.page.Page');

goog.require('roji.component.DesktopHeader');
goog.require('roji.component.MobileHeader');
goog.require('roji.component.MailingList');

/**
 * The Default Page constructor
 * @inheritDoc
 * @constructor
 * @extends {manic.page.Page}
 */
roji.page.Default = function(options, element) {

  manic.page.Page.call(this, options);
  this.options = $.extend(this.options, roji.page.Default.DEFAULT, options);


  /*
  if ($('body').hasClass('chinese-version')) {
    manic.SITE_LANGUAGE = 'cn';
  }
  if ($('body').hasClass('bahasa-version')) {
    manic.SITE_LANGUAGE = 'in';
  }
  */
  

 
  //   __     ___    ____
  //   \ \   / / \  |  _ \
  //    \ \ / / _ \ | |_) |
  //     \ V / ___ \|  _ <
  //      \_/_/   \_\_| \_\
  //

  /**
   * @type {roji.component.DesktopHeader}
   */
  this.desktop_header = null;

  /**
   * @type {roji.component.MobileHeader}
   */
  this.mobile_header = null;

  /**
   * @type {roji.component.MailingList}
   */
  this.mailing_list = null;




  this.page_wrapper = $('#page-wrapper');
  this.page_wrapper_content = $('#page-wrapper-content');

  


  // min height variables
  this.is_page_min_height = false;
  if( this.body.hasClass('min-height-version') == true ){
    this.is_page_min_height = true;
  }

  this.is_page_min_height_mobile = false;
  if( this.body.hasClass('min-height-mobile-version') == true ){
    this.is_page_min_height_mobile = true;
  }

  this.desktop_header_element = $('#desktop-header');
  this.mobile_header_element = $('#mobile-header');
  this.desktop_footer_element = $('#desktop-footer');
  this.mobile_footer_element = $('#mobile-footer');
  
  this.mobile_header_expanded_element = $('#mobile-header-expanded');
  



  console.log('roji.page.Default: init');
};
goog.inherits(roji.page.Default, manic.page.Page);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.Default.DEFAULT = {
};

/**
 * CLASSNAME Event Constant
 * @const
 * @type {string}
 */
roji.page.Default.EVENT_01 = '';

//    ___ _   _ ___ _____
//   |_ _| \ | |_ _|_   _|
//    | ||  \| || |  | |
//    | || |\  || |  | |
//   |___|_| \_|___| |_|
//


roji.page.Default.prototype.init = function() {
  roji.page.Default.superClass_.init.call(this);



  if ($('#desktop-header').length != 0) {
    this.desktop_header = new roji.component.DesktopHeader({}, $('#desktop-header'));
  }

  if ($('#mobile-header').length != 0 && $('#mobile-header-expanded').length != 0){
    this.mobile_header = new roji.component.MobileHeader({}, $('#mobile-header'));
  }
  
  if ($('#mailing-list-popup-container').length != 0) {
    this.mailing_list = new roji.component.MailingList({}, $('#mailing-list-popup-container'));
  }

  this.blog_init();

  this.blog_sticky_sidebar();

  this.blog_social_share();

  console.log('roji.page.Default: init');

};




//    _        _ __   _____  _   _ _____
//   | |      / \\ \ / / _ \| | | |_   _|
//   | |     / _ \\ V / | | | | | | | |
//   | |___ / ___ \| || |_| | |_| | | |
//   |_____/_/   \_\_| \___/ \___/  |_|
//


/**
 * @override
 * @inheritDoc
 */
roji.page.Default.prototype.update_page_layout = function(){
  roji.page.Default.superClass_.update_page_layout.call(this);


  if (this.is_page_min_height == true && manic.IS_MOBILE == false) {
    var target_height = this.window_height - this.desktop_header_element.outerHeight() - this.desktop_footer_element.outerHeight();

    this.page_wrapper_content.css({
      'min-height': target_height + 'px'
    });
  }


  if (this.is_page_min_height_mobile == true && manic.IS_MOBILE == true) {
    var target_height = this.window_height - this.mobile_footer_element.outerHeight();

    this.page_wrapper_content.css({
      'min-height': target_height + 'px'
    });
  }



  // update mobile header menu height
  if (manic.IS_MOBILE == true) {
    var target_height = this.window_height - this.mobile_footer_element.outerHeight();

    this.mobile_header_expanded_element.css({
      'min-height': target_height + 'px'
    });
  }

  

  



};




//    _   _    _    ____  _   _ _____  _    ____ ____
//   | | | |  / \  / ___|| | | |_   _|/ \  / ___/ ___|
//   | |_| | / _ \ \___ \| |_| | | | / _ \| |  _\___ \
//   |  _  |/ ___ \ ___) |  _  | | |/ ___ \ |_| |___) |
//   |_| |_/_/   \_\____/|_| |_| |_/_/   \_\____|____/
//


/**
 * @override
 * @inheritDoc
 */
roji.page.Default.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.Default.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
roji.page.Default.prototype.on_scroll_to_no_target = function() {
  roji.page.Default.superClass_.on_scroll_to_no_target.call(this);

  
}


roji.page.Default.prototype.blog_init = function() {
  $(window).scroll(function() {
     if($(window).scrollTop() + $(window).height() == $(document).height()) {
        var link = $('.next-page a').attr('href');

        console.log(link);

        if(link)
          this.sendLoadMoreProductsRequest(link);      
     }
  }.bind(this));

  $('#mobile-blog-sidebar').gryphon_mobile_wp_sidebar({});
}

roji.page.Default.prototype.sendLoadMoreProductsRequest = function(url) {
  $.get(url, function(response) {

      var $result = $(response).find('#page-blog-content');
      var $next = $(response).find('.next-page a');

      var new_link = $next.attr('href');

      if(typeof(new_link)!="undefined") {
          $('.next-page a').attr('href', new_link);
      }else {
          $('.next-page a').attr('href', '');
      }

      var html = $result.html();

      $('#page-blog-content').append(html);

      this.create_image_container();

      // $(html).insertBefore($(".load-more-wrapper"))

      $('.load-more-btn').text('load more');
  }.bind(this));
}

roji.page.Default.prototype.create_image_container = function() {
  

  var arr = $('.manic-image-container').not('.not-default-version');
  var image_container = null;
  var item = null;

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);
    image_container = new manic.ui.ImageContainer({
      'has_window_resize': false                                // updated manually by 'update_page_layout'
    }, item);
    this.manic_image_array[i] = image_container;



    
    // ADD LAZY LOAD
    if (item.hasClass('has-lazy-load') == true) {
      this.add_lazy_load(image_container);
    } // if

  }


}

roji.page.Default.prototype.blog_sticky_sidebar = function(){
  var controller = new ScrollMagic.Controller();
  var about_height = $('.widget_roji_about').height();  


  var multiply_by;
  if(window.innerWidth > 1280) {
    multiply_by = 2.2;
  }else {
    multiply_by = 2.7;
  }

  var intViewportHeight = parseInt((window.innerHeight / 3) * multiply_by);

  var duration = parseInt($("#page-blog-content").height()) - intViewportHeight; // 300 = sidebar about section height

  console.log(duration);
  // $('#trigger1').css({'top' : intViewportHeight + 'px'});

  // if($("#page-blog-content").height() > 1000) {
    var scene = new ScrollMagic.Scene({triggerElement: "#trigger-sticky-sidebar", triggerHook: 'onLeave' })
            // .setPin("#sticky-sidebar")
            .setClassToggle("#mobile-blog-sidebar", "sticky-version") // add class toggle
            // .addIndicators({name: ("" + Math.random()) }) // add indicators (requires plugin)
            .addTo(controller);  
  // }
  
};

roji.page.Default.prototype.blog_social_share = function(){
  $('.fa-facebook').on('click', function(e){
      e.preventDefault();
      var share_url = $(e.currentTarget).attr('href');
      console.log($(e.currentTarget).attr('data-title'))
      FB.ui({
          display: 'popup',
          method: 'share',
          title: $(e.currentTarget).attr('data-title'),
          href: share_url,
          picture: $(e.currentTarget).attr('data-image')
      }, function(response){});
  }.bind(this));
  
  $('.fa-twitter').on('click', function(e){
      e.preventDefault();
      var share_url = $(e.currentTarget).attr('href');
      this.PopupCenter(share_url,'', 500, 500);
  }.bind(this));

  $('.fa-pinterest').on('click', function(e){
      e.preventDefault();
      var share_url = $(e.currentTarget).attr('href');
      this.PopupCenter(share_url,'', 500, 500);
  }.bind(this));
  
}

roji.page.Default.prototype.PopupCenter = function(pageURL, title,w,h) {
    var left = (screen.width/2)-(w/2);
    var top = (screen.height/2)-(h/2);
    var targetWin = window.open (pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
    return targetWin;
} 