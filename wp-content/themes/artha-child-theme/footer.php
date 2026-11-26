
    <!-- NEW PREMIUM FOOTER -->
    <footer id="footer" class="anim-base anim-fade-up">
      <div class="footer-bg-circle"></div>
      <div class="footer-bg-circle-2"></div>

      <div class="wrap">
        <div class="footer-grid">
          <!-- Brand Column -->
          <div class="footer-brand">
            <a
              href="index.html"
              class="footer-logo"
              aria-label="Artha Hospitality Management"
            >
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-management-footer-logo.png"
                  alt="Artha Hospitality Management Logo"
                />
                <figcaption class="cr-only">
                  Artha Hospitality Management Logo
                </figcaption>
              </figure>
            </a>

            <div class="footer-tagline">
              <span class="white">Strategic Hospitality.</span>
              <span class="gold">Exceptional Operations.</span>
            </div>

            <p class="footer-desc">
              Helping hospitality businesses build stronger foundations, improve
              operations and create better guest experiences.
            </p>

            <div class="footer-socials">
              <a href="#" class="social-btn" aria-label="LinkedIn"
                ><i class="fab fa-linkedin-in"></i
              ></a>
              <a
                href="https://www.instagram.com/arthahospitalitymanagement?rpxt=MTg1bDd3eG9tMmhlMw=="
                class="social-btn"
                aria-label="Instagram"
                target="_blank"
                rel="noopener noreferrer"
                ><i class="fab fa-instagram"></i
              ></a>
              <a
                href="https://www.facebook.com/profile.php?id=61596645240447"
                class="social-btn"
                aria-label="Facebook"
                target="_blank"
                rel="noopener noreferrer"
                ><i class="fab fa-facebook-f"></i
              ></a>
            </div>
          </div>

          <!-- Links Column -->
          <div class="footer-links-section">
            <div class="footer-header">
              <span class="title">Explore</span>
            </div>

            <div class="links-list">
              <a href="index.html" class="link-item"
                >Home <i class="fas fa-arrow-right"></i
              ></a>
              <a href="artha-hospitality-about-us.html" class="link-item"
                >About us <i class="fas fa-arrow-right"></i
              ></a>
              <a
                href="artha-hospitality-management-capital-investment-plan.html"
                class="link-item"
                >Services <i class="fas fa-arrow-right"></i
              ></a>
              <a href="artha-hospitality-management-industries.html" class="link-item">Industries<i class="fas fa-arrow-right"></i></a>
              <a href="artha-hospitality-clients.html" class="link-item"
                >Clients <i class="fas fa-arrow-right"></i
              ></a>
              <a href="artha-hospitality-contact-us.html" class="link-item"
                >Contact <i class="fas fa-arrow-right"></i
              ></a>
            </div>
          </div>

          <!-- Quick Links Column -->
          <div class="footer-quick-links-section">
            <div class="footer-header">
              <span class="title">Quick Links</span>
            </div>

            <div class="links-list">
              <a
                href="artha-hospitality-openings.html#job-opportunities"
                class="ql-career-item"
              >
                <span class="ql-career-top"
                  >Careers <i class="fas fa-arrow-right" aria-hidden="true"></i
                ></span>
                <span class="ql-career-desc">We Are Hiring — Apply Now</span>
              </a>
            </div>
          </div>

          <!-- Contact Column -->
          <div class="footer-contact-section">
            <div class="footer-header">
              <span class="title">Contact</span>
            </div>

            <div class="contact-list">
              <!-- Address -->
              <div class="contact-card">
                <div class="contact-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-details">
                  <span class="contact-label">Visit Us</span>
                  <span class="contact-value"
                    ><strong>Artha Hospitality</strong>T-14, 3rd Floor<br />Meridian Guru Plaza<br />Bijai,
                    Mangalore – 575004</span
                  >
                </div>
              </div>

              <!-- Phone -->
              <div class="contact-card">
                <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                <div class="contact-details">
                  <span class="contact-label">Call Us</span>
                  <span class="contact-value">
                    <a href="tel:+918951511234">+91 89515 11234</a><br />
                    <a href="tel:+919980447824">+91 99804 47824</a><br />
                    <a href="tel:+9108242148889">+91 0824-214-8889</a>
                  </span>
                </div>
              </div>

              <!-- Email -->
              <div class="contact-card">
                <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                <div class="contact-details">
                  <span class="contact-label">Email Us</span>
                  <span class="contact-value">Artha.hm26@gmail.com</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
          <div class="fb-left">
            <span
              >© 2026 Artha Hospitality Management. All Rights Reserved.</span
            >
          </div>
          <div class="fb-right">
            <span
              >Powered by
              <a
                href="https://bluelinecomputers.com/"
                target="_blank"
                rel="noopener noreferrer"
                >Blueline Computers</a
              ></span
            >
          </div>
        </div>
      </div>
    </footer>

    <script>
      /* ============ STICKY HEADER ============ */
      const header = document.getElementById("site-header");
      const onScroll = () =>
        header.classList.toggle("scrolled", window.scrollY > 40);
      window.addEventListener("scroll", onScroll, { passive: true });
      onScroll();

      /* ============ MOBILE MENU ============ */
      const toggle = document.getElementById("menuToggle");
      const mobileMenu = document.getElementById("mobileMenu");
      const setMenu = (open) => {
        toggle.classList.toggle("open", open);
        mobileMenu.classList.toggle("open", open);
        header.classList.toggle(
          "menu-open",
          open,
        ); /* ADDED: Toggle class on header */
        toggle.setAttribute("aria-expanded", open);
        document.body.style.overflow = open ? "hidden" : "";
      };
      toggle.addEventListener("click", () =>
        setMenu(!mobileMenu.classList.contains("open")),
      );

      mobileMenu.querySelectorAll("a").forEach((a) => {
        a.addEventListener("click", () => setMenu(false));
      });

      /* ============ ROBUST SCROLL REVEAL ============ */
      const animElements = document.querySelectorAll(".anim-base");
      if ("IntersectionObserver" in window) {
        const io = new IntersectionObserver(
          (entries) => {
            entries.forEach((e) => {
              if (e.isIntersecting) {
                e.target.classList.add("anim-is-visible");
                io.unobserve(e.target);
              }
            });
          },
          {
            threshold: 0.15,
            rootMargin: "0px 0px -50px 0px",
          },
        );
        animElements.forEach((el) => io.observe(el));
      } else {
        animElements.forEach((el) => el.classList.add("anim-is-visible"));
      }

      /* ============ HERO CAROUSEL ENGINE ============ */
      const heroSlides = [
        {
          title:
            "Building Better Hospitality Businesses, <span>From the Ground Up.</span>",
          desc: "Now Hiring for Hotels, Restaurants & Resorts in Mangalore & Across Karnataka. Freshers & Experienced Candidates Can Apply.",
          imgMain: "<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-1-lgr.jpg",
          altMain: "Premium restaurant interior with warm lighting",
          imgMini: "<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-1-sml.jpg",
          altMini: "Professional chef working in a commercial kitchen",
        },
        {
          title:
            "Elevating Everyday Operations Into <span>Exceptional Experiences.</span>",
          desc: "Now Hiring for Hotels, Restaurants & Resorts in Mangalore & Across Karnataka. Freshers & Experienced Candidates Can Apply.",
          imgMain: "<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-2-lgr.jpg",
          altMain: "Elegant hotel reception area",
          imgMini: "<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-2-sml.jpg",
          altMini: "Premium restaurant dining environment",
        },
        {
          title:
            "Strategic Planning and Design for <span>Modern Hospitality Spaces.</span>",
          desc: "Now Hiring for Hotels, Restaurants & Resorts in Mangalore & Across Karnataka. Freshers & Experienced Candidates Can Apply.",
          imgMain: "<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-3-lgr.jpg",
          altMain: "Sophisticated bar and resto bar interior",
          imgMini: "<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-3-sml.jpg",
          altMini: "Hospitality team working",
        },
      ];

      let currentSlide = 0;
      let slideTimer;
      let isAnimating = false;
      const slideDuration = 6000;

      const heroTitle = document.getElementById("hero-title");
      const heroDesc = document.getElementById("hero-desc");
      const heroImgMain = document.getElementById("hero-img-main");
      const heroCapMain = document.getElementById("hero-cap-main");
      const heroImgMini = document.getElementById("hero-img-mini");
      const heroCapMini = document.getElementById("hero-cap-mini");
      const heroTextWrap = document.getElementById("hero-text-wrap");
      const heroVisual = document.getElementById("hero-visual");
      const dotsContainer = document.getElementById("hero-dots");
      const prevBtn = document.getElementById("prev-btn");
      const nextBtn = document.getElementById("next-btn");

      heroSlides.forEach((slide) => {
        const img1 = new Image();
        img1.src = slide.imgMain;
        const img2 = new Image();
        img2.src = slide.imgMini;
      });

      function initDots() {
        dotsContainer.innerHTML = "";
        heroSlides.forEach((_, i) => {
          const dot = document.createElement("div");
          dot.className = `nav-dot ${i === 0 ? "active" : ""}`;
          dot.addEventListener("click", () => {
            if (isAnimating || currentSlide === i) return;
            changeSlide(i);
          });
          dotsContainer.appendChild(dot);
        });
      }

      function updateDots(index) {
        const dots = dotsContainer.querySelectorAll(".nav-dot");
        dots.forEach((dot, i) => {
          dot.classList.remove("active");
          if (i === index) dot.classList.add("active");
        });
      }

      function changeSlide(newIndex) {
        if (isAnimating) return;
        isAnimating = true;
        clearTimeout(slideTimer);

        heroTextWrap.classList.add("fade-out");
        heroVisual.classList.add("fade-out");

        slideTimer = setTimeout(() => {
          currentSlide = newIndex;
          const slide = heroSlides[currentSlide];

          heroTitle.innerHTML = slide.title;
          heroDesc.textContent = slide.desc;

          heroImgMain.src = slide.imgMain;
          heroImgMain.alt = slide.altMain;
          heroCapMain.textContent = slide.altMain;

          heroImgMini.src = slide.imgMini;
          heroImgMini.alt = slide.altMini;
          heroCapMini.textContent = slide.altMini;

          updateDots(currentSlide);

          heroTextWrap.classList.remove("fade-out");
          heroVisual.classList.remove("fade-out");

          isAnimating = false;

          slideTimer = setTimeout(
            () => changeSlide((currentSlide + 1) % heroSlides.length),
            slideDuration,
          );
        }, 400);
      }

      nextBtn.addEventListener("click", () => {
        if (isAnimating) return;
        changeSlide((currentSlide + 1) % heroSlides.length);
      });

      prevBtn.addEventListener("click", () => {
        if (isAnimating) return;
        changeSlide((currentSlide - 1 + heroSlides.length) % heroSlides.length);
      });

      initDots();
      slideTimer = setTimeout(
        () => changeSlide((currentSlide + 1) % heroSlides.length),
        slideDuration,
      );

      /* ============ NUMBER COUNT-UP ============ */
      const counters = document.querySelectorAll("[data-count]");
      const animateCount = (el) => {
        const target = +el.dataset.count;
        const dur = 1200,
          start = performance.now();
        const step = (now) => {
          const p = Math.min((now - start) / dur, 1);
          let suffix = "";
          if (target >= 15 && target !== 100) suffix = "+";
          if (target === 100) suffix = "%";

          el.textContent = Math.floor(p * target) + suffix;
          if (p < 1) requestAnimationFrame(step);
          else el.textContent = target + suffix;
        };
        requestAnimationFrame(step);
      };
      if ("IntersectionObserver" in window) {
        const cio = new IntersectionObserver(
          (entries) => {
            entries.forEach((e) => {
              if (e.isIntersecting) {
                animateCount(e.target);
                cio.unobserve(e.target);
              }
            });
          },
          { threshold: 0.6 },
        );
        counters.forEach((c) => cio.observe(c));
      } else {
        counters.forEach((c) => {
          let suffix = "";
          if (+c.dataset.count >= 15 && +c.dataset.count !== 100) suffix = "+";
          if (+c.dataset.count === 100) suffix = "%";
          c.textContent = c.dataset.count + suffix;
        });
      }

      /* ============ HOTEL JOB APPLICATION FORM ============ */
      (function () {
        const form = document.getElementById("hotelJobApplicationForm");
        const cvInput = document.getElementById("app-cv");
        const cvFilename = document.getElementById("app-cv-filename");
        const roleSelect = document.getElementById("app-role");
        const statusEl = document.getElementById("app-form-status");
        const allowedExt = /\.(pdf|doc|docx)$/i;

        const roleMap = {
          "Chef / Cook": "Chef",
          "Front Office Executive": "Front Office",
          "Housekeeping Staff": "Housekeeping",
          "F&B Service — Steward / Waiter": "F&B Service",
          "Barista / Bartender": "Barista / Bartender",
          "Hotel Management Trainee": "Management Trainee",
        };

        document
          .querySelectorAll(".job-apply-btn[data-job-role]")
          .forEach((btn) => {
            btn.addEventListener("click", () => {
              const mapped =
                roleMap[btn.dataset.jobRole] || btn.dataset.jobRole;
              if (roleSelect && mapped) roleSelect.value = mapped;
            });
          });

        if (cvInput && cvFilename) {
          cvInput.addEventListener("change", () => {
            const file = cvInput.files && cvInput.files[0];
            if (!file) {
              cvFilename.textContent = "Choose a file to upload";
              return;
            }
            if (!allowedExt.test(file.name)) {
              cvInput.value = "";
              cvFilename.textContent = "Choose a file to upload";
              statusEl.className = "app-form-status error";
              statusEl.textContent =
                "Please upload a valid CV/Resume file (.pdf, .doc, or .docx).";
              return;
            }
            statusEl.className = "app-form-status";
            statusEl.textContent = "";
            cvFilename.textContent = file.name;
          });
        }

        if (form && statusEl) {
          form.addEventListener("submit", (e) => {
            e.preventDefault();
            const name = document.getElementById("app-name").value.trim();
            const phone = document.getElementById("app-phone").value.trim();
            const city = document.getElementById("app-city").value;
            const role = roleSelect ? roleSelect.value : "";
            const exp = document.getElementById("app-exp").value;
            const file = cvInput && cvInput.files && cvInput.files[0];

            if (!name || !phone || !city || !role || !exp) {
              statusEl.className = "app-form-status error";
              statusEl.textContent =
                "Please fill in all required fields (Full Name, Phone / WhatsApp Number, City, Job Role, and Experience).";
              return;
            }
            if (!/^[0-9+\-\s()]{7,20}$/.test(phone)) {
              statusEl.className = "app-form-status error";
              statusEl.textContent =
                "Please enter a valid Phone / WhatsApp Number.";
              return;
            }
            if (file && !allowedExt.test(file.name)) {
              statusEl.className = "app-form-status error";
              statusEl.textContent =
                "Please upload a valid CV/Resume file (.pdf, .doc, or .docx).";
              return;
            }

            statusEl.className = "app-form-status info";
            statusEl.textContent =
              'Details validated and ready. Connect a backend form endpoint to receive submissions, or click "Apply via WhatsApp" below to send your details directly.';
          });
        }
      })();
    </script>
    <a
      href="https://wa.me/918951511234?text=Hello%20Artha%20Hospitality%2C%20I%20would%20like%20to%20enquire%20about%20your%20hospitality%20services%20or%20job%20openings."
      class="wa-float"
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Chat with Artha Hospitality on WhatsApp"
    >
      <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </a>
    <?php wp_footer(); ?>
  </body>
</html>
