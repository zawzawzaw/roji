goog.provide('roji.page.Account');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');


goog.require('roji.page.Default')


/**
 * The Others constructor
 * @inheritDoc
 * @constructor
 * @extends {roji.page.Default}
 */
roji.page.Account = function(options, element) {

  roji.page.Default.call(this, options, element);
  this.options = $j.extend(this.options, roji.page.Account.DEFAULT, options);


  // variables for update_account_bg_width
  this.sidebar_bg = $j('#page-account-content-section-bg .sidebar-bg');
  this.content_bg = $j('#page-account-content-section-bg .content-bg');
  this.sidebar_width = $j('#page-account-sidebar-width');
  this.content_width = $j('#page-account-content-width');
  
  
  // variables for update_account_bg_height
  this.desktop_title_section = $j('#page-account-title-section');
  this.section_bg = $j('#page-account-content-section-bg');
  
  this.has_sidebar = false;
  if (this.sidebar_bg.length != 0 &&
      this.content_bg.length != 0 &&
      this.sidebar_width.length != 0 &&
      this.content_width.length != 0 &&
      this.desktop_title_section.length != 0 &&
      this.section_bg.length != 0) {

    this.has_sidebar = true;
  }
  


  console.log('roji.page.Account: init');
};
goog.inherits(roji.page.Account, roji.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.Account.DEFAULT = {
};

/**
 * Others Event Constant
 * @const
 * @type {string}
 */
roji.page.Account.EVENT_01 = '';


//    ___ _   _ ___ _____
//   |_ _| \ | |_ _|_   _|
//    | ||  \| || |  | |
//    | || |\  || |  | |
//   |___|_| \_|___| |_|
//


/**
 * @override
 * @inheritDoc
 */
roji.page.Account.prototype.init = function() {
  roji.page.Account.superClass_.init.call(this);

  

};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.page.Account.prototype.private_method_03 = function() {};
roji.page.Account.prototype.private_method_04 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.page.Account.prototype.update_account_bg_width = function() {

  // only for desktop
  if (manic.IS_MOBILE == false) {

    var container_width = this.window_width >= 1380 ? 1380 : this.window_width;
    var container_margin = (this.window_width - container_width) / 2;
    var midpoint = Math.round(container_margin + this.sidebar_width.width() + 10 + 60);                      // 20/2 = gutter space, 60 = padding left
    var midpoint_percent = Math.round( midpoint / this.window_width * 10000 ) / 100;

    console.log('this.window_width: ' + this.window_width);
    console.log('midpoint: ' + midpoint);
    this.sidebar_bg.css({
      'width': midpoint_percent + '%'
    });

    this.content_bg.css({
      'left': midpoint_percent + '%',
      'width': (100 - midpoint_percent) + '%'
    });




  }


};

roji.page.Account.prototype.update_account_bg_height = function(){

  // only for desktop
  if (manic.IS_MOBILE == false) {
    
    


    var target_height = this.window_height - this.desktop_header_element.outerHeight() - this.desktop_footer_element.outerHeight() - this.desktop_title_section.outerHeight();
    this.section_bg.css({
      'min-height': target_height + 'px'
    });
    
  }
};






//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
roji.page.Account.prototype.on_event_handler_01 = function(event) {
};


roji.page.Account.prototype.sample_method_calls = function() {

  // sample override
  roji.page.Account.superClass_.method_02.call(this);

  // sample event
  this.dispatchEvent(new goog.events.Event(roji.page.Account.EVENT_01));
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
roji.page.Account.prototype.update_page_layout = function() {
  roji.page.Account.superClass_.update_page_layout.call(this);

  if (this.has_sidebar == true) {
    this.update_account_bg_width();
    this.update_account_bg_height();
  }

}




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
roji.page.Account.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.Account.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
}

/**
 * @override
 * @inheritDoc
 */
roji.page.Account.prototype.on_scroll_to_no_target = function() {
  roji.page.Account.superClass_.on_scroll_to_no_target.call(this);
}

