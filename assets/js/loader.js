if(document.readyState === 'ready' || document.readyState === 'complete') {
    document.getElementById("preloader").style.display="none";
} else {
    document.onreadystatechange = function () {
        if (document.readyState == "complete") {
            document.getElementById("preloader").style.display="none";
        }
    }
}