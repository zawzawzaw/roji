java -jar "compiler.jar" \
  --js=../../js/manic-polyfill.js \
  --js=../jquery-other/jquery.mousewheel.min.js \
  --js=../misc-js/mobile-detect.js \
  --js=../misc-js/preloadjs-0.4.0.min.js \
  --js=../gsap/src/minified/TweenMax.min.js \
  --js=../gsap/src/minified/jquery.gsap.min.js \
  --js=../gsap/src/minified/easing/EasePack.min.js \
  --js=../gsap/src/minified/plugins/ScrollToPlugin.min.js \
  --js=../slick-carousel/slick/slick.min.js \
  --compilation_level WHITESPACE_ONLY \
  --js_output_file=../../js/minified/page-libraries.min.js