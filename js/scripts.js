(function ($, document, window, cutme) {
  "use strict";

  //  sticky Header
  $(document).ready(function () {
    $(window).scroll(function () {
      var headerHeight = $("header").outerHeight();
      $("body").css("padding-top", headerHeight);

      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("header nav").addClass("fixedHeader backdrop-blur");
      } else {
        $("header nav").removeClass("fixedHeader backdrop-blur");
      }
    });
    $(window).trigger("scroll");
  });

  // CTA Form validation
  $(document).on("submit", "#phn-submit-form", function (e) {
    let thisForm = $(this),
      elExpensesAlert = thisForm.find(".expenses-alert"),
      mobileNumber = $("#mobile_number").val(),
      bdMobileRegex = /^(?:\+?88)?01[3-9]\d{8}$/;

    if (!bdMobileRegex.test(mobileNumber)) {
      // Show an error message or perform necessary actions if validation fails
      alert("Please enter a valid Email.");
      return false;
    }

    // AJAX call
    $.ajax({
      type: "POST",
      url: cutme.ajaxURL,
      data: {
        action: "store_mobile_number",
        mobile_number: mobileNumber,
        form_data: thisForm.serialize(),
      },
      success: function (response) {
        if (response.success) {
          elExpensesAlert
            .html(response.data.message)
            .removeClass("hidden text-red-800 rounded-lg bg-red-50")
            .addClass("text-green-800 rounded-lg bg-green-50 ");
        } else {
          elExpensesAlert
            .html(response.data.message)
            .removeClass("hidden text-green-800 rounded-lg bg-green-50")
            .addClass("text-red-800 rounded-lg bg-red-50");
        }
      },
    });

    e.preventDefault();
    return false;
  });

  // Popup Video
  jQuery(".popup-video").magnificPopup({
    type: "iframe",
    iframe: {
      patterns: {
        youtube: {
          index: "youtube.com/",
          id: "v=",
          src: "https://www.youtube.com/embed/%id%?autoplay=1",
        },
      },
    },
  });

  // Testimonial Slider
  var mySwiper = new Swiper(".mySwiper", {
    slidesPerView: 5,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 3,
      },
      991: {
        slidesPerView: 5,
      }
    }
  });

  // Accordian/FAQ js
  jQuery(".at-title").click(function () {
    // Toggle the active class and slide toggle for the clicked item
    $(this).toggleClass("active").next(".at-tab").slideToggle();

    // Close other tabs
    $(this)
      .parent()
      .siblings()
      .find(".at-tab")
      .slideUp()
      .prev()
      .removeClass("active");
  });
})(jQuery, document, window, cutme);

// Get modal and buttons
const modal = document.getElementById("modal");
const modalOpenBtn = document.getElementById("modal-open");
const modalCloseBtn = document.getElementById("modal-close");

// Function to open modal
function openModal() {
  modal.classList.remove("hidden");
}

// Function to close modal
function closeModal() {
  modal.classList.add("hidden");
}

// Event listeners for open and close buttons
modalOpenBtn &&
  modalOpenBtn.addEventListener("click", function () {
    modal.classList.remove("hidden");
  });
modalCloseBtn &&
  modalCloseBtn.addEventListener("click", function () {
    modal.classList.add("hidden");
  });

// Close modal if user clicks outside the modal content
window.addEventListener("click", function (event) {
  if (event.target === modal) {
    closeModal();
  }
});

let em = !1;
const l = document.querySelector("#navlinks"),
  t = document.querySelector("#hamburger"),
  s = document.querySelector("#navLayer"),
  i = [...l.querySelector("ul").children];

function menu_fire() {
  em
    ? (l.classList.add(
        "!visible",
        "!scale-100",
        "!opacity-100",
        "!lg:translate-y-0"
      ),
      t.classList.add("toggled"),
      s.classList.remove("origin-bottom", "scale-y-0"),
      s.classList.add("origin-top", "scale-y-100"))
    : (l.classList.remove(
        "!visible",
        "!scale-100",
        "!opacity-100",
        "!lg:translate-y-0"
      ),
      t.classList.remove("toggled"),
      s.classList.remove("origin-top", "scale-y-100"),
      s.classList.add("origin-bottom", "scale-y-0"));
}

t.addEventListener("click", () => {
  (em = !em), menu_fire();
});
i.forEach((c) => {
  c.addEventListener("click", () => {
    (em = !em), menu_fire();
  });
});
