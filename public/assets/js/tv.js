var currentStep = 1;

function nextStep() {
    currentStep++;
    showStep(currentStep);
}

function prevStep() {
    currentStep--;
    showStep(currentStep);
}

function showStep(step) {
    var steps = document.querySelectorAll('[id^="step"]');
    for (var i = 0; i < steps.length; i++) {
        steps[i].style.display = "none";
    }
    document.querySelector("#step" + step).style.display = "block";

    if (currentStep == 1) {
        document.querySelector(".prev-btn").style.display = "none";
    } else {
        document.querySelector(".prev-btn").style.display = "inline-block";
    }

    if (currentStep == steps.length) {
        document.querySelector(".next-btn").style.display = "none";
    } else {
        document.querySelector(".next-btn").style.display = "inline-block";
    }
}
