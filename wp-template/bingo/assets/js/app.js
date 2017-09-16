/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("/**\r\n * Created by Amin Keshavarz on 7/31/2017.\r\n */\r\nwindow.Bingo = {\r\n    /**\r\n     * Scroll page down to content\r\n     */\r\n    scrollToContent: function () {\r\n        var timerID = setInterval(function () {\r\n            window.scrollBy(0, 15);\r\n\r\n            var sliderHeight = document.getElementById('container').clientHeight;\r\n            if (window.pageYOffset >= sliderHeight || (sliderHeight + window.scrollY) >= document.body.offsetHeight)\r\n                clearInterval(timerID);\r\n        }, 13);\r\n    },\r\n    /**\r\n     * Slider function\r\n     * @param  slider  Slider dom element.\r\n     */\r\n    coverSlider: function (slider) {\r\n        slider = document.querySelector(slider);\r\n        if (!slider) {\r\n            console.error(\"Slider selector is not valid.\");\r\n            return;\r\n        }\r\n        if (!slider)\r\n            return;\r\n        var delayTime = slider.dataset.delay;\r\n        if (!delayTime)\r\n            delayTime = 3000;\r\n        var items = slider.querySelectorAll(\".slider.img\");\r\n        var itemsSelector = document.querySelector(\".slider-selector\");\r\n        var ul = document.createElement('ul');\r\n        itemsSelector.appendChild(ul);\r\n        var activeIndex = 0;\r\n        for (var i = 0; i < items.length; i++) {\r\n            items[i].setAttribute(\"style\", \"background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('\" + items[i].dataset.img + \"')\");\r\n            var li = document.createElement('li');\r\n            li.setAttribute('data-num', (i + 1).toString());\r\n            ul.appendChild(li);\r\n            li.addEventListener(\"click\", function (event) {\r\n                var index = parseInt(event.target.dataset.num);\r\n                activeIndex = index - 1;\r\n                slider.querySelector(\".slider.img.active\").classList.remove('active');\r\n                slider.querySelector(\".slider:nth-child(\" + index + \")\").classList.add('active');\r\n                // slider.querySelector(\".slider-selector ul li:nth-child(\"+index+\")\").classList.add('active');\r\n                // event.target.classList.add('active');\r\n                slider.querySelector(\".slider-selector ul li.active\").classList.remove('active');\r\n                event.target.classList.add('active');\r\n            });\r\n        }\r\n        itemsSelector = document.querySelectorAll(\".slider-selector ul li\");\r\n        items[0].className += ' active';\r\n        itemsSelector[0].className += ' active';\r\n        var timerID = setInterval(function () {\r\n            items[activeIndex].classList.remove('active');\r\n            itemsSelector[activeIndex].classList.remove('active');\r\n            if (++activeIndex == items.length)\r\n                activeIndex = 0;\r\n            items[activeIndex].className += ' active';\r\n            itemsSelector[activeIndex].className += ' active';\r\n        }, delayTime);\r\n    }\r\n};\r\n\r\nvar sliderScrollBtn = document.getElementById(\"scroll-to-content\");\r\nif (sliderScrollBtn) {\r\n    sliderScrollBtn.addEventListener(\"click\", function () {\r\n        Bingo.scrollToContent();\r\n    });\r\n}\r\n\r\nvar relatedContents = document.querySelector(\".related-contents .content\");\r\nif (relatedContents) {\r\n    var imgContainer = document.querySelectorAll(\".related-contents .content .img, .related-contents .content .img img\");\r\n    var height = document.querySelector(\".related-contents .col\").offsetHeight + 'px';\r\n    for (var i = 0; i < imgContainer.length; i++) {\r\n        imgContainer[i].setAttribute(\"style\", \"height: \" + height);\r\n        console.log(imgContainer[i]);\r\n    }\r\n}//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9zcmMvanMvYXBwLmpzPzcxNmYiXSwic291cmNlc0NvbnRlbnQiOlsiLyoqXHJcbiAqIENyZWF0ZWQgYnkgQW1pbiBLZXNoYXZhcnogb24gNy8zMS8yMDE3LlxyXG4gKi9cclxud2luZG93LkJpbmdvID0ge1xyXG4gICAgLyoqXHJcbiAgICAgKiBTY3JvbGwgcGFnZSBkb3duIHRvIGNvbnRlbnRcclxuICAgICAqL1xyXG4gICAgc2Nyb2xsVG9Db250ZW50OiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgbGV0IHRpbWVySUQgPSBzZXRJbnRlcnZhbChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIHdpbmRvdy5zY3JvbGxCeSgwLCAxNSk7XHJcblxyXG4gICAgICAgICAgICBsZXQgc2xpZGVySGVpZ2h0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2NvbnRhaW5lcicpLmNsaWVudEhlaWdodDtcclxuICAgICAgICAgICAgaWYgKHdpbmRvdy5wYWdlWU9mZnNldCA+PSBzbGlkZXJIZWlnaHQgfHwgKHNsaWRlckhlaWdodCArIHdpbmRvdy5zY3JvbGxZKSA+PSBkb2N1bWVudC5ib2R5Lm9mZnNldEhlaWdodClcclxuICAgICAgICAgICAgICAgIGNsZWFySW50ZXJ2YWwodGltZXJJRCk7XHJcbiAgICAgICAgfSwgMTMpO1xyXG4gICAgfSxcclxuICAgIC8qKlxyXG4gICAgICogU2xpZGVyIGZ1bmN0aW9uXHJcbiAgICAgKiBAcGFyYW0gIHNsaWRlciAgU2xpZGVyIGRvbSBlbGVtZW50LlxyXG4gICAgICovXHJcbiAgICBjb3ZlclNsaWRlcjogZnVuY3Rpb24gKHNsaWRlcikge1xyXG4gICAgICAgIHNsaWRlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3Ioc2xpZGVyKTtcclxuICAgICAgICBpZiAoIXNsaWRlcikge1xyXG4gICAgICAgICAgICBjb25zb2xlLmVycm9yKFwiU2xpZGVyIHNlbGVjdG9yIGlzIG5vdCB2YWxpZC5cIik7XHJcbiAgICAgICAgICAgIHJldHVybjtcclxuICAgICAgICB9XHJcbiAgICAgICAgaWYgKCFzbGlkZXIpXHJcbiAgICAgICAgICAgIHJldHVybjtcclxuICAgICAgICBsZXQgZGVsYXlUaW1lID0gc2xpZGVyLmRhdGFzZXQuZGVsYXk7XHJcbiAgICAgICAgaWYgKCFkZWxheVRpbWUpXHJcbiAgICAgICAgICAgIGRlbGF5VGltZSA9IDMwMDA7XHJcbiAgICAgICAgbGV0IGl0ZW1zID0gc2xpZGVyLnF1ZXJ5U2VsZWN0b3JBbGwoXCIuc2xpZGVyLmltZ1wiKTtcclxuICAgICAgICBsZXQgaXRlbXNTZWxlY3RvciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuc2xpZGVyLXNlbGVjdG9yXCIpO1xyXG4gICAgICAgIGxldCB1bCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3VsJyk7XHJcbiAgICAgICAgaXRlbXNTZWxlY3Rvci5hcHBlbmRDaGlsZCh1bCk7XHJcbiAgICAgICAgbGV0IGFjdGl2ZUluZGV4ID0gMDtcclxuICAgICAgICBmb3IgKGxldCBpID0gMDsgaSA8IGl0ZW1zLmxlbmd0aDsgaSsrKSB7XHJcbiAgICAgICAgICAgIGl0ZW1zW2ldLnNldEF0dHJpYnV0ZShcInN0eWxlXCIsIFwiYmFja2dyb3VuZC1pbWFnZTogbGluZWFyLWdyYWRpZW50KHJnYmEoMCwgMCwgMCwgMC41KSwgcmdiYSgwLCAwLCAwLCAwLjUpKSwgdXJsKCdcIiArIGl0ZW1zW2ldLmRhdGFzZXQuaW1nICsgXCInKVwiKTtcclxuICAgICAgICAgICAgbGV0IGxpID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnbGknKTtcclxuICAgICAgICAgICAgbGkuc2V0QXR0cmlidXRlKCdkYXRhLW51bScsIChpICsgMSkudG9TdHJpbmcoKSk7XHJcbiAgICAgICAgICAgIHVsLmFwcGVuZENoaWxkKGxpKTtcclxuICAgICAgICAgICAgbGkuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uIChldmVudCkge1xyXG4gICAgICAgICAgICAgICAgbGV0IGluZGV4ID0gcGFyc2VJbnQoZXZlbnQudGFyZ2V0LmRhdGFzZXQubnVtKTtcclxuICAgICAgICAgICAgICAgIGFjdGl2ZUluZGV4ID0gaW5kZXggLSAxO1xyXG4gICAgICAgICAgICAgICAgc2xpZGVyLnF1ZXJ5U2VsZWN0b3IoXCIuc2xpZGVyLmltZy5hY3RpdmVcIikuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XHJcbiAgICAgICAgICAgICAgICBzbGlkZXIucXVlcnlTZWxlY3RvcihcIi5zbGlkZXI6bnRoLWNoaWxkKFwiICsgaW5kZXggKyBcIilcIikuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XHJcbiAgICAgICAgICAgICAgICAvLyBzbGlkZXIucXVlcnlTZWxlY3RvcihcIi5zbGlkZXItc2VsZWN0b3IgdWwgbGk6bnRoLWNoaWxkKFwiK2luZGV4K1wiKVwiKS5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcclxuICAgICAgICAgICAgICAgIC8vIGV2ZW50LnRhcmdldC5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcclxuICAgICAgICAgICAgICAgIHNsaWRlci5xdWVyeVNlbGVjdG9yKFwiLnNsaWRlci1zZWxlY3RvciB1bCBsaS5hY3RpdmVcIikuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XHJcbiAgICAgICAgICAgICAgICBldmVudC50YXJnZXQuY2xhc3NMaXN0LmFkZCgnYWN0aXZlJyk7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH1cclxuICAgICAgICBpdGVtc1NlbGVjdG9yID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5zbGlkZXItc2VsZWN0b3IgdWwgbGlcIik7XHJcbiAgICAgICAgaXRlbXNbMF0uY2xhc3NOYW1lICs9ICcgYWN0aXZlJztcclxuICAgICAgICBpdGVtc1NlbGVjdG9yWzBdLmNsYXNzTmFtZSArPSAnIGFjdGl2ZSc7XHJcbiAgICAgICAgbGV0IHRpbWVySUQgPSBzZXRJbnRlcnZhbChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGl0ZW1zW2FjdGl2ZUluZGV4XS5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUnKTtcclxuICAgICAgICAgICAgaXRlbXNTZWxlY3RvclthY3RpdmVJbmRleF0uY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XHJcbiAgICAgICAgICAgIGlmICgrK2FjdGl2ZUluZGV4ID09IGl0ZW1zLmxlbmd0aClcclxuICAgICAgICAgICAgICAgIGFjdGl2ZUluZGV4ID0gMDtcclxuICAgICAgICAgICAgaXRlbXNbYWN0aXZlSW5kZXhdLmNsYXNzTmFtZSArPSAnIGFjdGl2ZSc7XHJcbiAgICAgICAgICAgIGl0ZW1zU2VsZWN0b3JbYWN0aXZlSW5kZXhdLmNsYXNzTmFtZSArPSAnIGFjdGl2ZSc7XHJcbiAgICAgICAgfSwgZGVsYXlUaW1lKTtcclxuICAgIH1cclxufTtcclxuXHJcbmxldCBzbGlkZXJTY3JvbGxCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNjcm9sbC10by1jb250ZW50XCIpO1xyXG5pZiAoc2xpZGVyU2Nyb2xsQnRuKSB7XHJcbiAgICBzbGlkZXJTY3JvbGxCdG4uYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcclxuICAgICAgICBCaW5nby5zY3JvbGxUb0NvbnRlbnQoKTtcclxuICAgIH0pO1xyXG59XHJcblxyXG5sZXQgcmVsYXRlZENvbnRlbnRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5yZWxhdGVkLWNvbnRlbnRzIC5jb250ZW50XCIpO1xyXG5pZiAocmVsYXRlZENvbnRlbnRzKSB7XHJcbiAgICBsZXQgaW1nQ29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5yZWxhdGVkLWNvbnRlbnRzIC5jb250ZW50IC5pbWcsIC5yZWxhdGVkLWNvbnRlbnRzIC5jb250ZW50IC5pbWcgaW1nXCIpO1xyXG4gICAgbGV0IGhlaWdodCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIucmVsYXRlZC1jb250ZW50cyAuY29sXCIpLm9mZnNldEhlaWdodCArICdweCc7XHJcbiAgICBmb3IgKGxldCBpID0gMDsgaSA8IGltZ0NvbnRhaW5lci5sZW5ndGg7IGkrKykge1xyXG4gICAgICAgIGltZ0NvbnRhaW5lcltpXS5zZXRBdHRyaWJ1dGUoXCJzdHlsZVwiLCBcImhlaWdodDogXCIgKyBoZWlnaHQpO1xyXG4gICAgICAgIGNvbnNvbGUubG9nKGltZ0NvbnRhaW5lcltpXSk7XHJcbiAgICB9XHJcbn1cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gc3JjL2pzL2FwcC5qcyJdLCJtYXBwaW5ncyI6IkFBQUE7OztBQUdBOzs7O0FBSUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOzs7OztBQUtBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7OztBQUdBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTsiLCJzb3VyY2VSb290IjoiIn0=");

/***/ }
/******/ ]);