/**
 * Created by Amin Keshavarz on 7/31/2017.
 */

/**
 * Scroll page down to content
 */
function scrollToContent() {
    let timerID = setInterval(function () {
        window.scrollBy(0, 15);

        let sliderHeight = document.getElementById('container').clientHeight;
        if (window.pageYOffset >= sliderHeight || (sliderHeight + window.scrollY) >= document.body.offsetHeight)
            clearInterval(timerID);
    }, 13);
}

/**
 * Slider
 */
function slider() {
    let slider = document.querySelector("#bingo-intro-slider");
    if (!slider)
        return;
    let delayTime = slider.dataset.delay;
    if (!delayTime)
        delayTime = 3000;
    let items = document.querySelectorAll("#bingo-intro-slider .slider");
    let itemsSelector = document.querySelector(".slider-selector");
    let ul = document.createElement('ul');
    itemsSelector.appendChild(ul);
    let activeIndex = 0;
    for (let i = 0; i < items.length; i++) {
        items[i].setAttribute("style", "background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('" + items[i].dataset.img + "')");
        let li = document.createElement('li');
        ul.appendChild(li);
    }
    itemsSelector = document.querySelectorAll(".slider-selector ul li");
    items[0].className += ' active';
    itemsSelector[0].className += ' active';
    let timerID = setInterval(function () {
        items[activeIndex].classList.remove('active');
        itemsSelector[activeIndex].classList.remove('active');
        if (++activeIndex == items.length)
            activeIndex = 0;
        items[activeIndex].className += ' active';
        itemsSelector[activeIndex].className += ' active';
    }, delayTime);
}

let sliderScrollBtn = document.getElementById("scroll-to-content");
if (sliderScrollBtn) {
    sliderScrollBtn.addEventListener("click", function () {
        scrollToContent();
    });
}

let relatedContents = document.querySelector(".related-contents .content");
if (relatedContents) {
    let imgContainer = document.querySelectorAll(".related-contents .content .img, .related-contents .content .img img");
    let height = document.querySelector(".related-contents .col").offsetHeight + 'px';
    for (let i = 0; i < imgContainer.length; i++) {
        imgContainer[i].setAttribute("style", "height: " + height);
        console.log(imgContainer[i]);
    }
}
slider();