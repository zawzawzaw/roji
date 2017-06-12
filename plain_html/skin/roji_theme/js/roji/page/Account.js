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
  this.options = $.extend(this.options, roji.page.Account.DEFAULT, options);


  this.is_account_rebate_history_page = false;

  if (this.body.hasClass('account-rebate-history-page')) {
    this.is_account_rebate_history_page = true;
  }


  // variables for update_account_bg_width
  this.sidebar_bg = $('#page-account-content-section-bg .sidebar-bg');
  this.content_bg = $('#page-account-content-section-bg .content-bg');
  this.sidebar_width = $('#page-account-sidebar-width');
  this.content_width = $('#page-account-content-width');
  
  
  // variables for update_account_bg_height
  this.desktop_title_section = $('#page-account-title-section');
  this.section_bg = $('#page-account-content-section-bg');
  
  this.has_sidebar = false;
  if (this.sidebar_bg.length != 0 &&
      this.content_bg.length != 0 &&
      this.sidebar_width.length != 0 &&
      this.content_width.length != 0 &&
      this.desktop_title_section.length != 0 &&
      this.section_bg.length != 0) {

    this.has_sidebar = true;
  }
  




  this.account_rebate_history_nav = null;
  this.account_rebate_history_earned_table = null;
  this.account_rebate_history_redeemed_table = null;
  this.account_rebate_history_expired_table = null;

  this.account_rebate_history_table_dictionary = {};

  // this needs to be before init, cause it's looking for it
  if (this.is_account_rebate_history_page == true){
    this.create_account_rebate_history_nav();
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

  this.create_edit_info_password();
  this.create_intl_tel_input();
  

};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//


roji.page.Account.prototype.create_edit_info_password = function() {

  

  $('#page-edit-info-password-checkbox').change(function(event){

    var target = $(event.currentTarget);
    var is_checked = target.is(':checked');

    if (is_checked) {
      $('#page-edit-info-password-expand-container').slideDown(500);
    } else {
      $('#page-edit-info-password-expand-container').slideUp(500);
    }

    

    

    

  }.bind(this));
  

};
roji.page.Account.prototype.create_intl_tel_input = function() {

  var arr = $('.roji-intltelinput');
  var item = null;

  for (var i = 0, l=arr.length; i < l; i++) {
    item = $(arr[i]);
    item.intlTelInput({
      defaultCountry: 'sg',
      nationalMode: false,
      autoHideDialCode: false,
      autoPlaceholder: false
    });
  }

  

};


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


//    ____  _____ ____    _  _____ _____   _   _ ___ ____ _____ ___  ______   __
//   |  _ \| ____| __ )  / \|_   _| ____| | | | |_ _/ ___|_   _/ _ \|  _ \ \ / /
//   | |_) |  _| |  _ \ / _ \ | | |  _|   | |_| || |\___ \ | || | | | |_) \ V /
//   |  _ <| |___| |_) / ___ \| | | |___  |  _  || | ___) || || |_| |  _ < | |
//   |_| \_\_____|____/_/   \_\_| |_____| |_| |_|___|____/ |_| \___/|_| \_\|_|
//


roji.page.Account.prototype.create_account_rebate_history_nav = function(){

  this.account_rebate_history_nav = $('#page-account-rebate-history-header .history-header-nav');

  this.account_rebate_history_earned_table = $('#page-account-rebate-history-earned-table');
  this.account_rebate_history_redeemed_table = $('#page-account-rebate-history-redeemed-table');
  this.account_rebate_history_expired_table = $('#page-account-rebate-history-expired-table');

  this.account_rebate_history_table_dictionary = {
    'earned': this.account_rebate_history_earned_table,
    'redeemed': this.account_rebate_history_redeemed_table,
    'expired': this.account_rebate_history_expired_table
  };
  
};



/**
 * @param  {[type]} str_param
 */
roji.page.Account.prototype.select_account_rebate_history_table = function(str_param){

  var target_table = str_param;
  
  if (goog.isDefAndNotNull(str_param) == false || str_param == '') {
    target_table = 'earned';
  }

  this.account_rebate_history_nav.find('ul li').removeClass('selected');
  this.account_rebate_history_nav.find('ul li[data-value="' + target_table + '"]').addClass('selected');

  var item = null;

  for (var i in this.account_rebate_history_table_dictionary) {

    item = this.account_rebate_history_table_dictionary[i];

    if (i == target_table) {
      item.css({
        'display': 'block'
      });
    } else {
      item.css({
        'display': 'none'
      });
    }
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

  if (this.is_account_rebate_history_page == true) {
    this.select_account_rebate_history_table(str_param);
  }
}

/**
 * @override
 * @inheritDoc
 */
roji.page.Account.prototype.on_scroll_to_no_target = function() {
  roji.page.Account.superClass_.on_scroll_to_no_target.call(this);

  if (this.is_account_rebate_history_page == true) {
    this.select_account_rebate_history_table('');
  }
}

