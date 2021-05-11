$(document).ready(function() {
    let fadeToggleElements = function(elements, inOut = false) {
        elements.forEach(element => {
            if (inOut === true) {
                $(element).fadeIn()
            } else {
                $(element).fadeOut()
            }
        })
    }
    let makeAminations = function(e) {
        var options = e.options;
        e.elementsAndProperties.forEach(el => {
            $(el[0]).animate(el[1], options)
        })
    }
    let welcome = function(btn = false) {
        let fadeOut = $("div.big-nav").find("div.sub-title, div.slogan, div.aliados, p.ttl-before, p.ttl-middle, p.ttl-after").get()
        let animationOptions = {
            duration: 500,
            queue: false,
            complete: () => {},
        }
        let animationElements = {
            elementsAndProperties: [
                ["div.big-nav", { height: 83 }],
                ["div.big-nav div.info-nav img", { width: 150, height: 80 }],
                ["div.big-nav div.info-nav ", { width: '100%', borderBottomWidth: 3 }],
                ["div.big-nav div.info-nav div.title", { borderBottomWidth: 0 }]
            ],
            options: animationOptions
        }
        if ($(document).scrollTop() > 0 || btn === true && !$("body").hasClass("showing")) {
            fadeToggleElements(fadeOut)
            makeAminations(animationElements)
            $("body").addClass("showing")
            $("button#btn-menu").addClass("active")
            return
        }

        if ($(document).scrollTop() == 0) {
            $("body").removeClass("showing")
            $("button#btn-menu").removeClass("acticve")
            fadeToggleElements(fadeOut, true)
            animationElements.elementsAndProperties[0][1] = { height: "100vh" }
            animationElements.elementsAndProperties[1][1] = { width: 245, height: 175 }
            animationElements.elementsAndProperties[2][1] = { width: "auto" }
            animationElements.elementsAndProperties[3][1] = { borderBottomWidth: 3 }
            makeAminations(animationElements)
            return

        }
    }
    $("button#btn-menu").click(function() {
        if (!$("button#btn-menu").hasClass("active")) {
            welcome(true)
        }
        $("div#nav-list").collapse("toggle")
    })
    $(document).on("scroll", function() {
        welcome()
    })
})