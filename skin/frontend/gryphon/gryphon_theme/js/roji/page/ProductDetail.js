goog.provide('roji.page.ProductDetail');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');


goog.require('roji.page.Default')


/**
 * The Home constructor
 * @inheritDoc
 * @constructor
 * @extends {roji.page.Default}
 */
roji.page.ProductDetail = function(options, element) {

  roji.page.Default.call(this, options, element);
  this.options = $j.extend(this.options, roji.page.ProductDetail.DEFAULT, options);
  

  console.log('roji.page.ProductDetail: init');
};
goog.inherits(roji.page.ProductDetail, roji.page.Default);


/**
 * like jQuery options
 * @const {object}
 */
roji.page.ProductDetail.DEFAULT = {
};

/**
 * Home Event Constant
 * @const
 * @type {string}
 */
roji.page.ProductDetail.EVENT_01 = '';


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
roji.page.ProductDetail.prototype.init = function() {
  roji.page.ProductDetail.superClass_.init.call(this);

  this.product_price = $j("#page-product-detail-content").find(".regular-price").html();  
  this.product_price_int = this.product_price.replace( /^\D+/g, '');
  this.currency_symbol = $j("#page-product-detail-form").find('.form-total-value').data('currency');  
  this.total_price = 0;
  
  this.set_default_total_price();

  $j('#page-product-detail-form .form-quantity').find(".form-quantity-plus-btn").click(this.on_quantity_plus_btn_click.bind(this));
  $j('#page-product-detail-form .form-quantity').find(".form-quantity-minus-btn").click(this.on_quantity_minus_btn_click.bind(this));

};


//    ____  ____  _____     ___  _____ _____
//   |  _ \|  _ \|_ _\ \   / / \|_   _| ____|
//   | |_) | |_) || | \ \ / / _ \ | | |  _|
//   |  __/|  _ < | |  \ V / ___ \| | | |___
//   |_|   |_| \_\___|  \_/_/   \_\_| |_____|
//

roji.page.ProductDetail.prototype.set_default_total_price = function() {
  $j("#page-product-detail-form").find('.form-total-value').html(this.product_price);
};
roji.page.ProductDetail.prototype.private_method_05 = function() {};
roji.page.ProductDetail.prototype.private_method_06 = function() {};


//    ____  _   _ ____  _     ___ ____
//   |  _ \| | | | __ )| |   |_ _/ ___|
//   | |_) | | | |  _ \| |    | | |
//   |  __/| |_| | |_) | |___ | | |___
//   |_|    \___/|____/|_____|___\____|
//


roji.page.ProductDetail.prototype.public_method_01 = function() {};
roji.page.ProductDetail.prototype.public_method_02 = function() {};


//    _______     _______ _   _ _____ ____
//   | ____\ \   / / ____| \ | |_   _/ ___|
//   |  _|  \ \ / /|  _| |  \| | | | \___ \
//   | |___  \ V / | |___| |\  | | |  ___) |
//   |_____|  \_/  |_____|_| \_| |_| |____/
//

/**
 * @param {object} event
 */
roji.page.ProductDetail.prototype.on_quantity_plus_btn_click = function(event) {
    event.preventDefault();
    var $qty=$j(event.currentTarget).parent().find('.qty');
    var currentVal = parseInt($qty.val());

    if (!isNaN(currentVal)) {
      currentVal = currentVal + 1;
      $qty.val(currentVal);      
      
      this.total_price = this.product_price_int * currentVal;

      $j("#page-product-detail-form").find('.form-total-value').html(this.currency_symbol + this.total_price.toFixed(2));
    }
};

/**
 * @param {object} event
 */
roji.page.ProductDetail.prototype.on_quantity_minus_btn_click = function(event) {
    event.preventDefault();
    var $qty=$j(event.currentTarget).parent().find('.qty');
    var currentVal = parseInt($qty.val());

    if (!isNaN(currentVal) && currentVal > 1) {
      currentVal = currentVal - 1;
      $qty.val(currentVal);
        
      this.total_price = this.product_price_int * currentVal;

      $j("#page-product-detail-form").find('.form-total-value').html(this.currency_symbol + this.total_price.toFixed(2));
    }
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
roji.page.ProductDetail.prototype.update_page_layout = function() {
  roji.page.ProductDetail.superClass_.update_page_layout.call(this);



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
roji.page.ProductDetail.prototype.scroll_to_target = function(str_param, str_param_2, str_param_3) {
  roji.page.ProductDetail.superClass_.scroll_to_target.call(this, str_param, str_param_2, str_param_3);
  

  
}

/**
 * @override
 * @inheritDoc
 */
roji.page.ProductDetail.prototype.on_scroll_to_no_target = function() {
  roji.page.ProductDetail.superClass_.on_scroll_to_no_target.call(this);

  
}
