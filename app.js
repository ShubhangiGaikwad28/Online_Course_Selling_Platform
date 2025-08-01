$("#btnss").click(function (e) {
    {
        e.preventDefault();

        var product = $("#productid").val();
        var params = {
            productid: product,
        };

        $.ajax({
            type: "POST",
            url: "index.php",
            data: params,
            error: function (e) {
                console.log(e);
            },
            success: function (data) {
                console.log(data);
                window.location.href = "/p.php";
                // window.location.href = "pay/buy.php";
            },
        });
    }
});
var boxs = document.querySelectorAll(".boxs");
var output = document.getElementById("dd");
var block = document.getElementById("block");
// the variable for box
let curimg = document.getElementsByClassName("curimg");
let titel = document.getElementsByClassName("titel");
let requ = document.getElementsByClassName("requ");
let desc = document.getElementsByClassName("desc");
let topic = document.getElementsByClassName("topic");
let price = document.getElementsByClassName("price");
let pp = document.getElementsByClassName("productidi");
// the variable for block
let Bimg = document.getElementById("Bimg");
let Btitle = document.getElementById("Btitle");
let Breq = document.getElementById("Breq");
let Bdesc = document.getElementById("Bdesc");
let Btopic = document.getElementById("Btopic");
let Bprice = document.getElementById("Bprice");

const search = () => {
    for (let i = 0; i < boxs.length; i++) {
        var text = boxs[i].outerText;
        var textupper = text.toUpperCase();
        var valofOutput = output.value;
        var outputupper = valofOutput.toUpperCase();
        
        var match = textupper.search(outputupper);
        if (match != -1) {
            boxs[i].style.display = "flex";
        } else {
            boxs[i].style.display = "none";
        }
    }
};

function flilt() {
    var x = document.getElementById("select").selectedIndex;
    const catOffilt = document.getElementsByTagName("option")[x].value;

    for (var q = 0; q < boxs.length; q++) {
        boxs[q].style.display = "none";

        if (catOffilt == boxs[q].dataset.cat || catOffilt == "all") {
            boxs[q].style.display = "flex";
        } else {
            boxs[q].style.display = "none";
        }
    }
}

for (let o = 0; o < boxs.length; o++) {
    const element = boxs[o];
    element.addEventListener("click", () => {
        console.log(titel[o].innerHTML);

        Bimg.src = curimg[o].src;
        Btitle.innerText = titel[o].innerText;
        Breq.innerHTML = requ[o].innerHTML;
        Bdesc.innerText = desc[o].innerText;
        Btopic.innerHTML = topic[o].innerHTML;
        Bprice.innerHTML = price[o].innerHTML;
        $("#productid").val(pp[o].innerHTML);
        document.querySelector(".upperblock").style.display = "flex";
    });
}

document.addEventListener("mousemove", parallax);

function parallax(e) {
    document.querySelectorAll(".frame-obj").forEach(function (move) {
        var m_v = move.getAttribute("data-v");
        var x = (e.clientX * m_v) / 50;
        var y = (e.clientY * m_v) / 50;
        move.style.transform = "translateX(" + x + "px) translateY(" + y + "px)";
    });
}
const blockclose = () => {
    document.querySelector(".upperblock").style.display = "none";
};
class RingDot {
    constructor() {
        this.root = document.body;
        this.cursor = document.querySelector(".curzr");
        this.dot = document.querySelector(".curzr-dot");

        this.pointerX = 0;
        this.pointerY = 0;
        this.cursorSize = 20;

        this.cursorStyle = {
            boxSizing: "border-box",
            position: "fixed",
            display: "flex",
            top: `${this.cursorSize / -2}px`,
            left: `${this.cursorSize / -2}px`,
            zIndex: "2147483647",
            justifyContent: "center",
            alignItems: "center",
            width: `${this.cursorSize}px`,
            height: `${this.cursorSize}px`,
            backgroundColor: "#fff0",
            boxShadow: "0 0 0 1.25px #111920, 0 0 0 2.25px #F2F5F8",
            borderRadius: "50%",
            transition: "200ms, transform 100ms",
            userSelect: "none",
            pointerEvents: "none",
        };

        this.dotStyle = {
            boxSizing: "border-box",
            position: "fixed",
            zIndex: "2147483647",
            width: "4px",
            height: "4px",
            backgroundColor: "#111920",
            boxShadow: "0 0 0 1px #F2F5F8",
            borderRadius: "50%",
            userSelect: "none",
            pointerEvents: "none",
        };

        this.init(this.cursor, this.cursorStyle);
        this.init(this.dot, this.dotStyle);
    }

    init(el, style) {
        Object.assign(el.style, style);
        this.cursor.removeAttribute("hidden");
    }

    move(event) {
        if (
            event.target.localName === "button" ||
            event.target.localName === "a" ||
            event.target.onclick !== null ||
            event.target.className.includes("curzr-hover")
        ) {
            this.hover(40);
        } else {
            this.hoverout();
        }

        this.pointerX = event.pageX + this.root.getBoundingClientRect().x;
        this.pointerY = event.pageY + this.root.getBoundingClientRect().y;

        this.cursor.style.transform = `translate3d(${this.pointerX}px, ${this.pointerY}px, 0)`;
    }

    hover(radius) {
        this.cursor.style.width = this.cursor.style.height = `${radius}px`;
        this.cursor.style.top = this.cursor.style.left = `${radius / -2}px`;
    }

    hoverout() {
        this.cursor.style.width = this.cursor.style.height = `${this.cursorSize}px`;
        this.cursor.style.top = this.cursor.style.left = `${this.cursorSize / -2
            }px`;
    }

    click() {
        this.cursor.style.transform += ` scale(0.75)`;
        setTimeout(() => {
            this.cursor.style.transform = this.cursor.style.transform.replace(
                ` scale(0.75)`,
                ""
            );
        }, 35);
    }

    remove() {
        this.cursor.remove();
        this.dot.remove();
    }
}

(() => {
    const cursor = new RingDot();
    if (
        !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
            navigator.userAgent
        )
    ) {
        document.onmousemove = function (event) {
            cursor.move(event);
        };
        document.onclick = function () {
            cursor.click();
        };
    } else {
        cursor.remove();
    }
})();

particlesJS("particles-js", {
    particles: {
        number: {
            value: 5,
            density: {
                enable: true,
                value_area: 631.3480069132609,
            },
        },
        color: {
            value: "#02f74c",
        },
        shape: {
            type: "circle",
            stroke: {
                width: 0,
                color: "#00000000",
            },
            polygon: {
                nb_sides: 5,
            },
            image: {
                src: "img/github.svg",
                width: 100,
                height: 100,
            },
        },
        opacity: {
            value: 1,
            random: true,
            anim: {
                enable: true,
                speed: 1,
                opacity_min: 0,
                sync: false,
            },
        },
        size: {
            value: 2.8,
            random: true,
            anim: {
                enable: false,
                speed: 4,
                size_min: 0.3,
                sync: false,
            },
        },
        line_linked: {
            enable: false,
            distance: 150,
            color: "#00000000",
            opacity: 0.4,
            width: 1,
        },
        move: {
            enable: true,
            speed: 1.6024100246771158,
            direction: "none",
            random: true,
            straight: false,
            out_mode: "out",
            bounce: false,
            attract: {
                enable: false,
                rotateX: 600,
                rotateY: 600,
            },
        },
    },
    interactivity: {
        detect_on: "canvas",
        events: {
            onhover: {
                enable: false,
                mode: "bubble",
            },
            onclick: {
                enable: false,
                mode: "repulse",
            },
            resize: true,
        },
        modes: {
            grab: {
                distance: 400,
                line_linked: {
                    opacity: 1,
                },
            },
            bubble: {
                distance: 250,
                size: 0,
                duration: 2,
                opacity: 0,
                speed: 3,
            },
            repulse: {
                distance: 400,
                duration: 0.4,
            },
            push: {
                particles_nb: 4,
            },
            remove: {
                particles_nb: 2,
            },
        },
    },
    retina_detect: false,
});
var count_particles, stats, update;
stats = new Stats();
stats.setMode(0);
stats.domElement.style.position = "absolute";
stats.domElement.style.left = "0px";
stats.domElement.style.top = "0px";
document.body.appendChild(stats.domElement);
count_particles = document.querySelector(".js-count-particles");
update = function () {
    stats.begin();
    stats.end();

    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }

    requestAnimationFrame(update);
};
requestAnimationFrame(update);

function ham () {
    $(".listItems").toggleClass("re");
}
// const ham = () => {
    
// };
