const introFunctions = {
    startIntro: function () {
        var intro = introJs();
        intro.setOptions({
            steps: [
                {
                    intro: "Hello, this is your tooltip guide! If you want to get more understanding of our platform click 'Next', otherwise click 'Skip'."
                },
                {
                    element: '#step1',
                    intro: "Here you can see your current earned revenue and redeem it when you meet a desired condition."
                },
                {
                    element: '#step2',
                    intro: "Here you have quick access to your surveys. To preview them all go to the Surveys tab in sidebar menu."
                },
                {
                    element: '#step3',
                    intro: 'This is your statistic for the past 30 days regarding your activities.',
                    position: 'left'
                },
                {
                    intro: "In sidebar menu, you can navigate to all pages in dashboard. That's it, your tour is done!"
                }
            ],
            showStepNumbers: 'false',
            tooltipClass:'tooltip-edited',
            exitOnOverlayClick: 'false',
            hidePrev: 'true',
            scrollTo: 'tooltip',
            overlayOpacity:0.4
        });
        window.setTimeout(function () {
            intro.start();
        }, 2000);
        intro.onexit(function() {
            document.cookie = "intro=true";
        });
    }
};