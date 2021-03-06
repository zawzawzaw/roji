goog.provide('manic.ui.HoverItem');

goog.require('goog.events.Event');
goog.require('goog.events.EventTarget');

/**
 * The HoverItem constructor
 * @param {object} options The object extendable like jquery plugins
 * @param {element} element The jQuery element connected to class
 * @constructor
 * @extends {goog.events.EventTarget}
 */
manic.ui.HoverItem = function(options, element) {

  goog.events.EventTarget.call(this);
  this.options = $j.extend({}, manic.ui.HoverItem.DEFAULT, options);
  this.element = element;


  // A VERY ROUNDABOUT MANNER OF ENSURING A SMOOTH HOVER ANIMATION

  this.is_inside = false;
  this.is_animating = false;

  // the functions needed to be a 'non-prototype' function because 
  // killDelayedCallsTo was also killing functions from a different scope / instance

  this.on_element_mouseenter = function(event) {
    this.is_inside = true;

    if (manic.IS_MOBILE == false) {
      if (this.is_animating == false) {
        this.is_animating = true;
        this.element.addClass('hover-version');

        TweenMax.killDelayedCallsTo(this.on_element_mouseenter_delayed);
        TweenMax.delayedCall(0.55, this.on_element_mouseenter_delayed, [], this);
      }
    }

  }.bind(this);

  this.on_element_mouseenter_delayed = function(event){
    
    if (manic.IS_MOBILE == false) {
      this.is_animating = false;

      if (this.is_inside == false){
        this.is_animating = true;
        this.element.removeClass('hover-version');

        TweenMax.killDelayedCallsTo(this.on_element_mouseleave_delayed);
        TweenMax.delayedCall(0.55, this.on_element_mouseleave_delayed, [], this);
      }
    }
  }.bind(this);

  this.on_element_mouseleave = function(event) {
    this.is_inside = false;
    
    if (manic.IS_MOBILE == false) {
      if (this.is_animating == false) {
        this.is_animating = true;
        this.element.removeClass('hover-version');

        TweenMax.killDelayedCallsTo(this.on_element_mouseleave_delayed);
        TweenMax.delayedCall(0.55, this.on_element_mouseleave_delayed, [], this);
      }
    }
  }.bind(this);

  this.on_element_mouseleave_delayed = function(){
    
    if (manic.IS_MOBILE == false) {
      this.is_animating = false;
      
      if (this.is_inside == true){
        this.is_animating = true;
        this.element.addClass('hover-version');

        TweenMax.killDelayedCallsTo(this.on_element_mouseenter_delayed);
        TweenMax.delayedCall(0.55, this.on_element_mouseenter_delayed, [], this);
      }
    }
  }.bind(this);


  this.element.mouseenter(this.on_element_mouseenter);
  this.element.mouseleave(this.on_element_mouseleave);

  console.log('manic.ui.HoverItem: init');
};
goog.inherits(manic.ui.HoverItem, goog.events.EventTarget);

