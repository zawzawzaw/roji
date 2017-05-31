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
  this.options = $j.extend(this.options, roji.page.Default.DEFAULT, options);


  /*
  if ($j('body').hasClass('chinese-version')) {
    manic.SITE_LANGUAGE = 'cn';
  }
  if ($j('body').hasClass('bahasa-version')) {
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




  this.page_wrapper = $j('#page-wrapper');
  this.page_wrapper_content = $j('#page-wrapper-content');

  


  // min height variables
  // 
  this.is_page_min_height = false;
  if( this.body.hasClass('min-height-version') == true ){
    this.is_page_min_height = true;
  }

  this.desktop_header_element = $j('#desktop-header');
  this.mobile_header_element = $j('#mobile-header');
  this.desktop_footer_element = $j('#desktop-footer');
  this.mobile_footer_element = $j('#mobile-footer');


  var product_price = $j("#page-product-detail-content").find(".regular-price").html();
  $j("#page-product-detail-form").find('.form-total-value').html(product_price);

  $j('#page-product-detail-form .form-quantity').find(".form-quantity-plus-btn").click(function(e){
    e.preventDefault();
    var $qty=$j(this).parent().find('.qty');
    var currentVal = parseInt($qty.val());

    if (!isNaN(currentVal)) {
      currentVal = currentVal + 1;
      $qty.val(currentVal);
    
      var product_price = $j("#page-product-detail-content").find(".regular-price").html();
      var currency_symbol = $j("#page-product-detail-form").find('.form-total-value').data('currency');
      product_price = product_price.replace( /^\D+/g, '');
      
      var total_price = product_price * currentVal;

      $j("#page-product-detail-form").find('.form-total-value').html(currency_symbol + total_price.toFixed(2));
    }
  });

  $j('#page-product-detail-form .form-quantity').find(".form-quantity-minus-btn").click(function(e){
    e.preventDefault();
    var $qty=$j(this).parent().find('.qty');
    var currentVal = parseInt($qty.val());

    if (!isNaN(currentVal) && currentVal > 1) {
      currentVal = currentVal - 1;
      $qty.val(currentVal);
  
      var product_price = $j("#page-product-detail-content").find(".regular-price").html();
      var currency_symbol = $j("#page-product-detail-form").find('.form-total-value').data('currency');
      product_price = product_price.replace( /^\D+/g, '');
      var total_price = product_price * currentVal;

      $j("#page-product-detail-form").find('.form-total-value').html(currency_symbol + total_price.toFixed(2));
    }

  })


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



  if ($j('#desktop-header').length != 0) {
    this.desktop_header = new roji.component.DesktopHeader({}, $j('#desktop-header'));
  }

  if ($j('#mobile-header').length != 0 && $j('#mobile-header-expanded').length != 0){
    this.mobile_header = new roji.component.MobileHeader({}, $j('#mobile-header'));
  }
  
  if ($j('#mailing-list-popup-container').length != 0) {
    this.mailing_list = new roji.component.MailingList({}, $j('#mailing-list-popup-container'));
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




