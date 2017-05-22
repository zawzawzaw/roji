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
  // 
  this.is_page_min_height = false;
  if( this.body.hasClass('min-height-version') == true ){
    this.is_page_min_height = true;
  }

  this.desktop_header_element = $('#desktop-header');
  this.mobile_header_element = $('#mobile-header');
  this.desktop_footer_element = $('#desktop-footer');
  this.mobile_footer_element = $('#mobile-footer');
  




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


  if (this.is_page_min_height == true) {
    if (manic.IS_MOBILE == false) {

      var target_height = this.window_height - this.desktop_header_element.outerHeight() - this.desktop_footer_element.outerHeight();

      this.page_wrapper_content.css({
        'min-height': target_height + 'px'
      });

    }
  }

  if (manic.IS_MOBILE_HEADER == false) {

  } else {

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




