<?php 
    /*Template Name: Contact us Template */
    get_header();
?>
<article>
<!-- 01 · ANIMATED ARCHITECTURAL 75VH CONTACT HERO (LEFT TEXT, RIGHT PURE SHAPES) -->
<section class="contact-hero" id="contact-top">
  <div class="wrap contact-hero-grid">

    <!-- Left Column: Editorial Copy & CTAs -->
    <div class="contact-hero-copy anim-base anim-fade-right">
      <div class="hero-meta-row">
        <nav class="crumb-badge" aria-label="Breadcrumb">
          <a href="index.html">Home</a>
          <span class="sep"><i class="fas fa-chevron-right"></i></span>
          <span class="curr">Contact Us</span>
        </nav>
        <span class="eyebrow">Get in Touch</span>
      </div>

      <h1>Let's Start Your Hospitality <em>Journey Together.</em></h1>
      <p>Whether you are planning a new hospitality venture or looking to improve an existing restaurant, hotel, café, or resto-bar, our team at Artha Hospitality Management is here to help.</p>

      <div class="contact-hero-actions">
        <a href="#contact-form-section" class="btn btn-primary">Send Us a Message <span class="arrow">↓</span></a>
        <a href="#location-map" class="btn btn-ghost">Find Our Office</a>
      </div>
    </div>

    <!-- Right Column: Animated Geometric Contact Constellation (Pure Shapes & Icons, Zero Text) -->
    <div class="contact-shapes-stage anim-base anim-fade-left delay-100" aria-hidden="true">
      <div class="cs-ring-outer"></div>
      <div class="cs-ring-inner"></div>
      <div class="cs-dots"></div>

      <svg class="cs-signal-svg" viewBox="0 0 520 450">
        <path class="cs-signal-path" d="M 90 90 Q 260 150, 420 95" />
        <path class="cs-signal-path" d="M 95 360 Q 260 290, 420 350" />
        <path class="cs-signal-path" d="M 90 90 Q 140 225, 95 360" />
        <path class="cs-signal-path" d="M 420 95 Q 370 225, 420 350" />
      </svg>

      <!-- Centerpiece Navy & Gold Shield-Arch Monolith -->
      <div class="cs-center-monolith">
        <div class="cs-center-emblem">
          <i class="fas fa-handshake"></i>
        </div>
      </div>

      <!-- Orbiting Floating Contact Shapes -->
      <div class="cs-float-chat"><i class="fas fa-comments"></i></div>
      <div class="cs-float-send"><i class="fas fa-paper-plane"></i></div>
      <div class="cs-float-pin"><i class="fas fa-map-marker-alt"></i></div>
      <div class="cs-float-phone"><i class="fas fa-phone-alt"></i></div>
    </div>

  </div>
</section>

<!-- 02 · SIMPLE & CLEAN CONTACT FORM + OFFICE DETAILS SECTION -->
<section class="contact-main-sec" id="contact-form-section">
  <div class="wrap contact-split">

    <!-- Left Column: Direct Details -->
    <div class="contact-info-col anim-base anim-fade-right">
      <span class="eyebrow">Connect With Us</span>
      <h2>We're Ready to Support Your <em>Hospitality Goals.</em></h2>
      <p>Reach out to us for practical guidance across capital planning, location selection, outlet and kitchen design, civil and interior work, staffing, vendor selection, marketing, and service quality.</p>

      <div class="info-cards-stack">
        <div class="info-box">
          <span class="ib-ic" aria-hidden="true"><i class="fas fa-map-marker-alt"></i></span>
          <div class="ib-text">
            <strong>Office Address</strong>
            <p>
              <span>Artha Hospitality</span><br>
              T-14, 3rd Floor <br>
              Meridian Guru Plaza<br>
              Bijai, Mangalore – 575004.
            </p>
          </div>
        </div>

        <div class="info-box">
          <span class="ib-ic" aria-hidden="true"><i class="fas fa-phone-alt"></i></span>
          <div class="ib-text">
            <strong>Phone Numbers</strong>
            <p>
              <a href="tel:+918951511234">+91 89515 11234</a><br>
              <a href="tel:+919980447824">+91 99804 47824</a><br>
              <a href="tel:+9108242148889">+91 0824-214-8889</a>
            </p>
          </div>
        </div>

        <div class="info-box">
          <span class="ib-ic" aria-hidden="true"><i class="fas fa-envelope"></i></span>
          <div class="ib-text">
            <strong>Email Address</strong>
            <p><a href="mailto:Artha.hm26@gmail.com">Artha.hm26@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Column: Simple Inquiry Form -->
    <div class="clean-form-card anim-base anim-fade-left delay-100">
      <h3>Send Us a Message</h3>
      <p>Fill out the form below and our team will get back to you shortly.</p>

      <!-- <form id="arthaContactForm">
        <div class="form-grid">
          <div class="form-group">
            <label for="clientName">Full Name *</label>
            <input type="text" id="clientName" name="clientName" placeholder="Your Name" required>
          </div>

          <div class="form-group">
            <label for="clientPhone">Phone Number *</label>
            <input type="tel" id="clientPhone" name="clientPhone" placeholder="+91 98765 43210" required>
          </div>

          <div class="form-group">
            <label for="clientEmail">Email Address</label>
            <input type="email" id="clientEmail" name="clientEmail" placeholder="your@email.com">
          </div>

          <div class="form-group">
            <label for="serviceInterest">Service of Interest</label>
            <select id="serviceInterest" name="serviceInterest">
              <option value="General Hospitality Inquiry">General Hospitality Inquiry</option>
              <option value="Capital Investment Plan">Capital Investment Plan</option>
              <option value="Location Selection">Location Selection</option>
              <option value="Outlet & Kitchen Design">Outlet &amp; Kitchen Design</option>
              <option value="Staffing Support">Staffing Support</option>
              <option value="Civil Work">Civil Work</option>
              <option value="Interior Work">Interior Work</option>
              <option value="Marketing Service">Marketing Service</option>
              <option value="Food & Running Cost">Food &amp; Running Cost</option>
              <option value="Vendor Selection & Purchase Advice">Vendor Selection &amp; Purchase Advice</option>
              <option value="Food and Service Quality">Food and Service Quality</option>
            </select>
          </div>

          <div class="form-group full">
            <label for="projectMessage">Your Message *</label>
            <textarea id="projectMessage" name="projectMessage" placeholder="Tell us about your hospitality business or project requirements..." required></textarea>
          </div>
        </div>

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Send Message <span class="arrow">↗</span></button>
        </div>

        <div class="form-feedback" id="formFeedback" role="status">
          <i class="fas fa-check-circle"></i>
          <span>Thank you! Opening your email client to send your message to <strong>Artha.hm26@gmail.com</strong>.</span>
        </div>
      </form> -->
      <?php echo do_shortcode('[contact-form-7 id="060f7f3" title="Contact form 1"]')?>
    </div>

  </div>
</section>

<!-- 03 · CLEAN LOCATION MAP SECTION -->
<section class="map-sec" id="location-map">
  <div class="wrap">
    <div class="head-center anim-base anim-fade-right">
      <span class="eyebrow">Find Us</span>
      <h2>Our Location in Mangalore</h2>
      <p>T-14, 3rd Floor, Meridian Guru Plaza, Bijai, Mangalore – 575004.</p>
    </div>

    <div class="map-frame-box anim-base anim-fade-up delay-100">
      <iframe
        title="Artha Hospitality Management Location at Meridian Guru Plaza, Bijai, Mangalore"
        src="https://maps.google.com/maps?q=Meridian%20Guru%20Plaza%2C%20Bijai%2C%20Mangalore%20575004&t=&z=15&ie=UTF8&iwloc=&output=embed"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>
</article>

<script>
/* ============ SIMPLE CONTACT FORM HANDLER ============ */
const contactForm = document.getElementById('arthaContactForm');
const formFeedback = document.getElementById('formFeedback');

// if (contactForm) {
//   contactForm.addEventListener('submit', (e) => {
//     e.preventDefault();
//     const name = document.getElementById('clientName').value.trim();
//     const phone = document.getElementById('clientPhone').value.trim();
//     const email = document.getElementById('clientEmail').value.trim();
//     const service = document.getElementById('serviceInterest').value;
//     const msg = document.getElementById('projectMessage').value.trim();

//     if (formFeedback) {
//       formFeedback.classList.add('show');
//     }

//     const subject = encodeURIComponent(`Hospitality Inquiry: ${service} - ${name}`);
//     const body = encodeURIComponent(
//       `Name: ${name}\nPhone: ${phone}\nEmail: ${email || 'N/A'}\nService of Interest: ${service}\n\nMessage:\n${msg}`
//     );

//     setTimeout(() => {
//       window.location.href = `mailto:Artha.hm26@gmail.com?subject=${subject}&body=${body}`;
//     }, 500);
//   });
// }

/* ============ ROBUST SCROLL REVEAL (ANIMATIONS) ============ */
// const animElements = document.querySelectorAll('.anim-base');

// if (animElements.length > 0) {
//   if ('IntersectionObserver' in window) {
//     const io = new IntersectionObserver((entries) => {
//       entries.forEach(e => {
//         if (e.isIntersecting) {
//           e.target.classList.add('anim-is-visible');
//           io.unobserve(e.target);
//         }
//       });
//     }, {
//       threshold: 0.15,
//       rootMargin: '0px 0px -50px 0px'
//     });
    
//     animElements.forEach(el => io.observe(el));
//   } else {
//     // Fallback for very old browsers
//     animElements.forEach(el => el.classList.add('anim-is-visible'));
//   }
// }
</script>
<?php 
    get_footer();
?>