$(document).ready(function () {
  // HEADER SCRIPT START
  var lastScrollTop = 0;
  var delta = 5;
  var headerHeight = $("header").outerHeight();

  $(window).scroll(function (event) {
    var st = $(this).scrollTop();

    // Scroll down
    if (st > lastScrollTop && st > headerHeight) {
      $("header").css("top", -headerHeight);
    } else {
      // Scroll up
      if (Math.abs(lastScrollTop - st) > delta) {
        $("header").css("top", 0);
      }
    }

    lastScrollTop = st;
  });
  //-----------------------------------------------------------//

  //   Offcanvas Link button JS
  $(".offcanvasLinkButton").click(function () {
    $("#menuMobileOffCanvas").offcanvas("hide"); // Hide the offcanvas
  });

  //-----------------------------------------------------------//

  // Cal Calender Script
  (function (C, A, L) {
    let p = function (a, ar) {
      a.q.push(ar);
    };
    let d = C.document;
    C.Cal =
      C.Cal ||
      function () {
        let cal = C.Cal;
        let ar = arguments;
        if (!cal.loaded) {
          cal.ns = {};
          cal.q = cal.q || [];
          d.head.appendChild(d.createElement("script")).src = A;
          cal.loaded = true;
        }
        if (ar[0] === L) {
          const api = function () {
            p(api, arguments);
          };
          const namespace = ar[1];
          api.q = api.q || [];
          typeof namespace === "string"
            ? (cal.ns[namespace] = api) && p(api, ar)
            : p(cal, ar);
          return;
        }
        p(cal, ar);
      };
  })(window, "https://app.cal.com/embed/embed.js", "init");
  Cal("init", "free-consulting-meeting", { origin: "https://cal.com" });

  Cal.ns["free-consulting-meeting"]("ui", {
    styles: { branding: { brandColor: "#000000" } },
    hideEventTypeDetails: false,
    layout: "month_view",
  });
  // Cal element-click embed code ends
});

//-----------------------------------------------------------//
const cursor = document.querySelector("#cursor");
const cursorBorder = document.querySelector("#cursor-border");
const cursorPos = { x: 0, y: 0 };
const cursorBorderPos = { x: 0, y: 0 };

document.addEventListener("mousemove", (e) => {
  cursorPos.x = e.clientX;
  cursorPos.y = e.clientY;

  cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;
});

requestAnimationFrame(function loop() {
  const easting = 8;
  cursorBorderPos.x += (cursorPos.x - cursorBorderPos.x) / easting;
  cursorBorderPos.y += (cursorPos.y - cursorBorderPos.y) / easting;

  cursorBorder.style.transform = `translate(${cursorBorderPos.x}px, ${cursorBorderPos.y}px)`;
  requestAnimationFrame(loop);
});

document.querySelectorAll("[data-cursor]").forEach((item) => {
  item.addEventListener("mouseover", (e) => {
    if (item.dataset.cursor === "pointer") {
      cursorBorder.style.backgroundColor = "rgba(255, 255, 255, .6)";
      cursorBorder.style.setProperty("--size", "30px");
    }
    if (item.dataset.cursor === "pointer2") {
      cursorBorder.style.backgroundColor = "white";
      cursorBorder.style.mixBlendMode = "difference";
      cursorBorder.style.setProperty("--size", "80px");
    }
  });
  item.addEventListener("mouseout", (e) => {
    cursorBorder.style.backgroundColor = "unset";
    cursorBorder.style.mixBlendMode = "unset";
    cursorBorder.style.setProperty("--size", "50px");
  });
});


//-----------------------------------------------------------//