window.onload = function () {

    // Get a reference to the <path>
    var path = document.querySelector('#mypath');

    // Get length of path...
    var pathLength = path.getTotalLength();

    // Make very long dashes (the length of the path itself)
    path.style.strokeDasharray = pathLength + ' ' + pathLength;

    // Offset the dashes so the it appears hidden entirely
    path.style.strokeDashoffset = pathLength;
    // When the page scrolls...
    window.addEventListener("scroll", function (e) {

        // What % down is it? 
        var scrollPercentage = (document.documentElement.scrollTop + document.querySelector(".line-container-main").scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);

        // Length to offset the dashes
        var drawLength = pathLength * scrollPercentage;

        // Draw in reverse
        path.style.strokeDashoffset = pathLength - drawLength;

    });
}

