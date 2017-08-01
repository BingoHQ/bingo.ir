/**
 * Created by Amin Keshavarz on 7/31/2017.
 */
function scrollToContent() {
    let timerID = setInterval(function () {
        window.scrollBy(0, 15);

        let sliderHeight = document.getElementById('container').clientHeight;
        if (window.pageYOffset >= sliderHeight || (sliderHeight + window.scrollY) >= document.body.offsetHeight)
            clearInterval(timerID);
    }, 13);
}
document.getElementById("scroll-to-content").addEventListener("click", function () {
    scrollToContent();
});