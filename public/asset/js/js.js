document.addEventListener("DOMContentLoaded", function() {
    const progressBars = document.querySelectorAll('.progressBar');
    progressBars.forEach(function(bar) {
        const progress = bar.getAttribute('data-progress');
        bar.style.setProperty('--progress', progress + '%');
    });
});
