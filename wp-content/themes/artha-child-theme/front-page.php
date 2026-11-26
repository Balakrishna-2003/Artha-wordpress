<?php 
    get_header();
?>
<article>
      <!-- HERO (ANIMATED CAROUSEL) -->
    <section class="hero" id="home">
      <div class="wrap hero-grid">
        <!-- Hero Arrows -->
        <div class="hero-arrows">
          <button class="nav-btn" id="prev-btn" aria-label="Previous slide">
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M19 12H5M12 19l-7-7 7-7" />
            </svg>
          </button>
          <button class="nav-btn" id="next-btn" aria-label="Next slide">
            <svg
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            >
              <path d="M5 12h14M12 5l7 7-7 7" />
            </svg>
          </button>
        </div>

        <!-- Hero Copy -->
        <div class="hero-copy anim-base anim-fade-right" id="hero-copy">
          <div class="hero-text-wrap" id="hero-text-wrap">
            <span class="eyebrow slide-el"
              >Hospitality Management &amp; Consultancy</span
            >
            <h1 id="hero-title" class="slide-el">
              Building Better Hospitality Businesses,
              <span>From the Ground Up.</span>
            </h1>
            <p class="desc slide-el" id="hero-desc">
              Now Hiring for Hotels, Restaurants &amp; Resorts in Mangalore
              &amp; Across Karnataka. Freshers &amp; Experienced Candidates Can
              Apply.
            </p>
            <div class="hero-ctas slide-el">
              <!-- <button type="button" class="btn btn-primary">Book Free Consultation</button> -->
              <a
                href="<?php echo home_url('/contact-us'); ?> #contact-form-section"
                class="btn btn-primary"
                >Book Free Consultation <span class="arrow">&rarr;</span></a
              >
              <a href="#job-opportunities" class="btn btn-ghost"
                >View Open Jobs <span class="arrow">&rarr;</span></a
              >
            </div>
          </div>
          <div class="hero-dots" id="hero-dots"></div>
        </div>

        <!-- Hero Visuals -->
        <div
          class="hero-visual anim-base anim-fade-left delay-200"
          id="hero-visual"
          aria-hidden="true"
        >
          <svg
            class="hero-contour"
            viewBox="0 0 300 300"
            fill="none"
            stroke="#C4161C"
            stroke-width="1.2"
            opacity=".55"
          >
            <path
              d="M20 150C20 78 78 20 150 20s130 58 130 130-58 130-130 130"
            />
            <path d="M55 150c0-52 43-95 95-95s95 43 95 95-43 95-95 95" />
            <path d="M90 150c0-33 27-60 60-60s60 27 60 60-27 60-60 60" />
          </svg>

          <div class="hero-main">
            <figure class="cr-figure">
              <img
                id="hero-img-main"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-1-lgr.jpg"
                alt="Premium restaurant interior with warm lighting"
                loading="eager"
              />
              <figcaption class="cr-only" id="hero-cap-main">
                Premium restaurant interior with warm lighting
              </figcaption>
            </figure>
          </div>

          <div class="hero-mini">
            <figure class="cr-figure">
              <img
                id="hero-img-mini"
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-1-sml.jpg"
                alt="Professional chef working in a commercial kitchen"
                loading="lazy"
              />
              <figcaption class="cr-only" id="hero-cap-mini">
                Professional chef working in a commercial kitchen
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
      <div class="wrap about-grid">
        <div class="about-copy anim-base anim-fade-right">
          <span class="eyebrow">About Artha</span>
          <h2>Hospitality Begins With Great Service.</h2>
          <p class="lead">
            At Artha, we believe that great hospitality begins with great
            service. Our mission is to help restaurant owners and hospitality
            businesses overcome their toughest service challenges, improve guest
            satisfaction, and grow sustainably.
          </p>
          <p class="lead">
            With a deep understanding of the industry and a commitment to
            excellence, we provide tailor-made solutions that create lasting
            value for our partners.
          </p>

          <div class="values">
            <div class="value">
              <span class="ic" aria-hidden="true">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                >
                  <path d="M3 21h18M6 21V9l6-6 6 6v12M10 21v-6h4v6" />
                </svg>
              </span>
              <div>
                <h4>Industry Understanding</h4>
                <p>
                  Grounded in more than 15 years of hospitality and hotel
                  operations experience.
                </p>
              </div>
            </div>
            <div class="value">
              <span class="ic" aria-hidden="true">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                >
                  <path
                    d="M12 2l2.4 7.4H22l-6.2 4.5 2.4 7.4L12 16.8 5.8 21.3l2.4-7.4L2 9.4h7.6z"
                  />
                </svg>
              </span>
              <div>
                <h4>Tailor-Made Solutions</h4>
                <p>
                  Approaches shaped around your business, your guests and your
                  goals.
                </p>
              </div>
            </div>
            <div class="value">
              <span class="ic" aria-hidden="true">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                >
                  <path d="M20 6L9 17l-5-5" />
                </svg>
              </span>
              <div>
                <h4>Commitment to Excellence</h4>
                <p>
                  A consistent focus on quality, service standards and
                  sustainable growth.
                </p>
              </div>
            </div>
          </div>

          <a href="#services" class="btn btn-primary"
            >Discover What We Do <span class="arrow">↗</span></a
          >
        </div>

        <div
          class="about-visual anim-base anim-fade-left delay-200"
          aria-hidden="true"
        >
          <div class="about-img main">
            <figure class="cr-figure">
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-management-about-us-lgr-img.jpg"
                alt="Hospitality team working in a professional kitchen"
                loading="lazy"
              />
              <figcaption class="cr-only">
                Hospitality team working in a professional kitchen
              </figcaption>
            </figure>
          </div>
          <div class="about-img sub">
            <figure class="cr-figure">
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-management-about-us-sml-img.jpg"
                alt="Premium restaurant dining environment"
                loading="lazy"
              />
              <figcaption class="cr-only">
                Premium restaurant dining environment
              </figcaption>
            </figure>
          </div>
          <div class="about-tag"><strong>15+</strong>Years in Hospitality</div>
        </div>
      </div>
    </section>

    <!-- STATS SECTION -->
    <section class="stats-section">
      <div class="wrap">
        <div class="stats-grid">
          <div class="stat-card anim-base anim-fade-up delay-100">
            <div class="n" data-count="15">0</div>
            <div class="l">Years of Experience</div>
          </div>
          <div class="stat-card anim-base anim-fade-up delay-200">
            <div class="n" data-count="10">0</div>
            <div class="l">Core Services</div>
          </div>
          <div class="stat-card anim-base anim-fade-up delay-300">
            <div class="n" data-count="3">0</div>
            <div class="l">Hospitality Segments</div>
          </div>
          <div class="stat-card anim-base anim-fade-up delay-400">
            <div class="n" data-count="20">0</div>
            <div class="l">Projects Consulted</div>
          </div>
          <div class="stat-card anim-base anim-fade-up delay-500">
            <div class="n" data-count="100">0</div>
            <div class="l">Client Focus</div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHY -->
    <section id="why" class="why">
      <div class="wrap">
        <div class="why-heading anim-base anim-fade-right">
          <span class="eyebrow">Why Choose Artha</span>
          <h2 class="section-title">
            Experience That Turns Ideas Into Successful Operations.
          </h2>
          <p class="section-description">
            Backed by over <em>15 years</em> of experience in hospitality and
            hotel operations, our team combines industry insight with proven
            strategies to deliver solutions that work from day one.
          </p>
        </div>

        <div class="why-grid">
          <article class="why-card anim-base anim-fade-up delay-100">
            <span class="ic" aria-hidden="true">
              <svg
                width="22"
                height="22"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.7"
              >
                <path
                  d="M12 2l3 6 6 .9-4.5 4.3 1.1 6.2L12 16.5 6.4 19.4l1.1-6.2L3 8.9 9 8z"
                />
              </svg>
            </span>
            <h3>Industry Experience</h3>
            <p>
              More than 15 years of experience in hospitality and hotel
              operations.
            </p>
          </article>
          <article class="why-card anim-base anim-fade-up delay-200">
            <span class="ic" aria-hidden="true">
              <svg
                width="22"
                height="22"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.7"
              >
                <path d="M3 3v18h18" />
                <path d="M7 15l4-4 3 3 5-6" />
              </svg>
            </span>
            <h3>Strategic Approach</h3>
            <p>
              Solutions built around business requirements and operational
              objectives.
            </p>
          </article>
          <article class="why-card anim-base anim-fade-up delay-300">
            <span class="ic" aria-hidden="true">
              <svg
                width="22"
                height="22"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.7"
              >
                <circle cx="12" cy="12" r="9" />
                <path d="M12 3v18M3 12h18" />
              </svg>
            </span>
            <h3>End-to-End Support</h3>
            <p>
              Support across planning, development, design and operational
              requirements.
            </p>
          </article>
          <article class="why-card anim-base anim-fade-up delay-400">
            <span class="ic" aria-hidden="true">
              <svg
                width="22"
                height="22"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.7"
              >
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2" />
                <circle cx="12" cy="7" r="4" />
              </svg>
            </span>
            <h3>Guest-Centred Thinking</h3>
            <p>Focus on improving guest satisfaction and service quality.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section id="services">
      <div class="wrap">
        <div class="head-center anim-base anim-fade-right">
          <span class="eyebrow">Our Services</span>
          <h2>Everything Your Hospitality Business Needs, Under One Roof.</h2>
          <p>
            From the first business decision to everyday operations, Artha
            provides comprehensive hospitality management solutions designed to
            help businesses operate efficiently and grow sustainably.
          </p>
        </div>

        <div class="services-list">
          <article
            class="svc-row svc-featured anim-base anim-fade-up delay-100"
          >
            <span class="ic"><i class="fas fa-user-graduate"></i></span>
            <div class="text">
              <h3>Hotel Staff Recruitment &amp; Hiring</h3>
              <p>
                We help hotels &amp; restaurants hire trained, verified staff —
                fast. Chefs, Front Office, Housekeeping, F&amp;B Service,
                Management.
              </p>
              <div class="svc-actions">
                <a
                  href="<?php echo home_url('/contact-us'); ?>"
                  class="svc-btn svc-btn-primary"
                  >Hire Staff</a
                >
                <a
                  href="<?php echo home_url('/careers'); ?>"
                  class="svc-btn svc-btn-outline"
                  >Apply for Job</a
                >
              </div>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-100">
            <span class="ic"><i class="fas fa-chart-pie"></i></span>
            <div class="text">
              <h3>Business Strategy & Feasibility</h3>
              <p>
                Comprehensive market analysis and financial modeling to validate
                your hospitality concept before you invest.
              </p>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-100">
            <span class="ic"><i class="fas fa-map-marked-alt"></i></span>
            <div class="text">
              <h3>Site Selection & Analysis</h3>
              <p>
                Data-driven location scouting to secure high-traffic sites with
                optimal accessibility and demographic alignment.
              </p>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-200">
            <span class="ic"><i class="fas fa-layer-group"></i></span>
            <div class="text">
              <h3>Spatial Design & Flow</h3>
              <p>
                Architectural planning and interior layout optimization to
                maximize seating capacity without compromising comfort.
              </p>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-200">
            <span class="ic"><i class="fas fa-utensils"></i></span>
            <div class="text">
              <h3>Culinary Operations</h3>
              <p>
                Strategic kitchen design and workflow management to ensure
                speed, safety, and culinary excellence.
              </p>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-300">
            <span class="ic"><i class="fas fa-truck"></i></span>
            <div class="text">
              <h3>Supply Chain & Vendors</h3>
              <p>
                Establishing reliable vendor networks and negotiating
                cost-effective procurement strategies for premium quality.
              </p>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-400">
            <span class="ic"><i class="fas fa-bullseye"></i></span>
            <div class="text">
              <h3>Brand Identity & Marketing</h3>
              <p>
                Creating compelling brand narratives and executing targeted
                digital campaigns to build a loyal customer base.
              </p>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-400">
            <span class="ic"><i class="fas fa-file-invoice-dollar"></i></span>
            <div class="text">
              <h3>Financial & Cost Control</h3>
              <p>
                Implementing robust financial tracking and cost-reduction
                protocols to protect profit margins.
              </p>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-500">
            <span class="ic"><i class="fas fa-award"></i></span>
            <div class="text">
              <h3>Quality & Guest Experience</h3>
              <p>
                Developing SOPs and service standards to ensure consistent,
                five-star guest experiences.
              </p>
            </div>
          </article>

          <article class="svc-row anim-base anim-fade-up delay-500">
            <span class="ic"><i class="fas fa-rocket"></i></span>
            <div class="text">
              <h3>Pre-Opening & Launch Support</h3>
              <p>
                Hands-on operational support during the critical launch phase to
                ensure a seamless and successful opening.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- JOB OPPORTUNITIES -->
    <section id="job-opportunities" class="jobs-sec">
      <div class="wrap">
        <div class="head-center anim-base anim-fade-right">
          <span class="eyebrow">Job Opportunities</span>
          <h2>We're Hiring — Build Your Career in Hospitality</h2>
          <p>
            Artha Hospitality is hiring for leading hotels, restaurants, resorts
            and cafes in Mangalore and across Karnataka. Whether you are a
            fresher or experienced, we will help you find the right hotel job.
          </p>
        </div>

        <div class="jobs-grid">
          <article class="job-card anim-base anim-fade-up delay-100">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-utensils"></i
            ></span>
            <h3>Chef / Cook</h3>
            <ul class="job-roles">
              <li>Commis</li>
              <li>CDP</li>
              <li>Sous Chef</li>
              <li>South Indian / North Indian / Continental</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Chef / Cook"
                >Apply Now &rarr;</a
              >
            </div>
          </article>

          <article class="job-card anim-base anim-fade-up delay-200">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-concierge-bell"></i
            ></span>
            <h3>Front Office Executive</h3>
            <ul class="job-roles">
              <li>Reception</li>
              <li>Reservation</li>
              <li>Guest Relations</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Front Office Executive"
                >Apply Now &rarr;</a
              >
            </div>
          </article>

          <article class="job-card anim-base anim-fade-up delay-300">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-bed"></i
            ></span>
            <h3>Housekeeping Staff</h3>
            <ul class="job-roles">
              <li>Room Attendant</li>
              <li>Housekeeping Supervisor</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Housekeeping Staff"
                >Apply Now &rarr;</a
              >
            </div>
          </article>

          <article class="job-card anim-base anim-fade-up delay-100">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-wine-glass"></i
            ></span>
            <h3>F&amp;B Service — Steward / Waiter</h3>
            <ul class="job-roles">
              <li>Restaurant</li>
              <li>Banquet</li>
              <li>Room Service</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="F&amp;B Service — Steward / Waiter"
                >Apply Now &rarr;</a
              >
            </div>
          </article>

          <article class="job-card anim-base anim-fade-up delay-200">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-martini-glass-citrus"></i
            ></span>
            <h3>Barista / Bartender</h3>
            <ul class="job-roles">
              <li>Cafe</li>
              <li>Pub &amp; Resto Bar</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Barista / Bartender"
                >Apply Now &rarr;</a
              >
            </div>
          </article>

          <article class="job-card anim-base anim-fade-up delay-300">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-user-graduate"></i
            ></span>
            <h3>Hotel Management Trainee</h3>
            <ul class="job-roles">
              <li>For Freshers</li>
              <li>Hotel Management Students</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Hotel Management Trainee"
                >Apply Now &rarr;</a
              >
            </div>
          </article>




          <article class="job-card anim-base anim-fade-up delay-300">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-user-graduate"></i
            ></span>
            <h3>Hotel Management Trainee</h3>
            <ul class="job-roles">
              <li>For Freshers</li>
              <li>Hotel Management Students</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Hotel Management Trainee"
                >Apply Now &rarr;</a
              >
            </div>
          </article>


          <article class="job-card anim-base anim-fade-up delay-300">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-user-graduate"></i
            ></span>
            <h3>Hotel Management Trainee</h3>
            <ul class="job-roles">
              <li>For Freshers</li>
              <li>Hotel Management Students</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Hotel Management Trainee"
                >Apply Now &rarr;</a
              >
            </div>
          </article>



          <article class="job-card anim-base anim-fade-up delay-300">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-user-graduate"></i
            ></span>
            <h3>Hotel Management Trainee</h3>
            <ul class="job-roles">
              <li>For Freshers</li>
              <li>Hotel Management Students</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Hotel Management Trainee"
                >Apply Now &rarr;</a
              >
            </div>
          </article>


          <article class="job-card anim-base anim-fade-up delay-300">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-user-graduate"></i
            ></span>
            <h3>Hotel Management Trainee</h3>
            <ul class="job-roles">
              <li>For Freshers</li>
              <li>Hotel Management Students</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Hotel Management Trainee"
                >Apply Now &rarr;</a
              >
            </div>
          </article>

          <article class="job-card anim-base anim-fade-up delay-300">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-user-graduate"></i
            ></span>
            <h3>Hotel Management Trainee</h3>
            <ul class="job-roles">
              <li>For Freshers</li>
              <li>Hotel Management Students</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Hotel Management Trainee"
                >Apply Now &rarr;</a
              >
            </div>
          </article>

          <article class="job-card anim-base anim-fade-up delay-300">
            <span class="job-ic" aria-hidden="true"
              ><i class="fas fa-user-graduate"></i
            ></span>
            <h3>Hotel Management Trainee</h3>
            <ul class="job-roles">
              <li>For Freshers</li>
              <li>Hotel Management Students</li>
            </ul>
            <div class="job-card-footer">
              <span class="job-loc"
                ><i class="fas fa-location-dot" aria-hidden="true"></i>
                Location: Mangalore</span
              >
              <a
                href="#application-form"
                class="job-apply-btn"
                data-job-role="Hotel Management Trainee"
                >Apply Now &rarr;</a
              >
            </div>
          </article>
          
        </div>

        <nav class="jobs-pagination" id="jobsPagination" aria-label="Job opportunities pagination"></nav>
      </div>
    </section>

    <!-- APPLY FOR A HOTEL JOB -->
    <section id="application-form" class="app-form-sec">
      <div class="wrap">
        <div class="head-center anim-base anim-fade-right">
          <span class="eyebrow">Careers Application</span>
          <h2>Apply for a Hotel Job</h2>
          <p>
            Interested in building your career in hospitality? Submit your
            details and our recruitment team will get in touch with you.
          </p>
        </div>

        <div class="app-form-wrap">
          <form
            id="hotelJobApplicationForm"
            class="app-form-card anim-base anim-fade-up"
            novalidate
          >
            <div class="app-form-grid">
              <div class="app-field">
                <label for="app-name">Full Name <span>*</span></label>
                <input
                  type="text"
                  id="app-name"
                  name="fullName"
                  placeholder="Enter your full name"
                  required
                />
              </div>

              <div class="app-field">
                <label for="app-phone"
                  >Phone / WhatsApp Number <span>*</span></label
                >
                <input
                  type="tel"
                  id="app-phone"
                  name="phone"
                  placeholder="Enter your mobile number"
                  required
                />
              </div>

              <div class="app-field">
                <label for="app-city">City <span>*</span></label>
                <select id="app-city" name="city" required>
                  <option value="">Select city</option>
                  <option value="Mangalore">Mangalore</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div class="app-field">
                <label for="app-role-search"
                  >Job Role Interested In <span>*</span></label
                >
                <div class="searchable-select" id="appRoleDropdown">
                  <div class="searchable-select-control">
                    <!-- <i
                      class="fas fa-magnifying-glass searchable-select-search-ic"
                      aria-hidden="true"
                    ></i> -->
                    <input
                      type="text"
                      id="app-role-search"
                      class="searchable-select-input"
                      placeholder="Search or select job role..."
                      autocomplete="off"
                      role="combobox"
                      aria-expanded="false"
                      aria-autocomplete="list"
                      aria-controls="app-role-list"
                    />
                    <button
                      type="button"
                      class="searchable-select-toggle"
                      aria-label="Toggle job role options"
                      tabindex="-1"
                    >
                      <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </button>
                  </div>
                  <ul
                    id="app-role-list"
                    class="searchable-select-list"
                    role="listbox"
                    hidden
                  ></ul>
                  <select
                    id="app-role"
                    name="jobRole"
                    class="searchable-select-native"
                    required
                    tabindex="-1"
                    aria-hidden="true"
                  >
                    <option value="">Select job role</option>
                    <option value="Chef">Chef</option>
                    <option value="Front Office">Front Office</option>
                    <option value="Housekeeping">Housekeeping</option>
                    <option value="F&amp;B Service">F&amp;B Service</option>
                    <option value="Barista / Bartender">
                      Barista / Bartender
                    </option>
                    <option value="Management Trainee">
                      Management Trainee
                    </option>
                  </select>
                </div>
              </div>

              <div class="app-field full">
                <label for="app-exp">Experience <span>*</span></label>
                <select id="app-exp" name="experience" required>
                  <option value="">Select experience</option>
                  <option value="Fresher">Fresher</option>
                  <option value="0–1 Year">0–1 Year</option>
                  <option value="1–3 Years">1–3 Years</option>
                  <option value="3+ Years">3+ Years</option>
                </select>
              </div>

              <div class="app-field full">
                <label for="app-cv"
                  >Upload CV / Resume
                  <small>(Optional)</small></label
                >
                <div class="app-upload-box">
                  <span class="app-upload-ic" aria-hidden="true"
                    ><i class="fas fa-cloud-arrow-up"></i
                  ></span>
                  <div class="app-upload-text">
                    <strong id="app-cv-filename"
                      >Choose a file to upload</strong
                    >
                    <small>Accepted formats: PDF, DOC, DOCX</small>
                  </div>
                  <input
                    type="file"
                    id="app-cv"
                    name="resume"
                    accept=".pdf,.doc,.docx,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                  />
                </div>
              </div>

              <div class="app-submit-row">
                <button type="submit" class="app-submit-btn">
                  Submit Application
                </button>
              </div>

              <div
                id="app-form-status"
                class="app-form-status"
                role="status"
                aria-live="polite"
              ></div>
            </div>
          </form>

          <div class="wa-apply-box anim-base anim-fade-up delay-100">
            <div class="wa-apply-copy">
              <strong>Or Apply Directly on WhatsApp: +91 89515 11234</strong>
              <p>Send: Name, City, Role, Experience</p>
            </div>
            <a
              href="https://wa.me/918951511234?text=Hello%20Artha%20Hospitality%2C%20I%20would%20like%20to%20apply%20for%20a%20hotel%20job.%0AName%3A%20%0ACity%3A%20%0ARole%3A%20%0AExperience%3A%20"
              target="_blank"
              rel="noopener noreferrer"
              class="wa-apply-btn"
            >
              <i class="fab fa-whatsapp" aria-hidden="true"></i> Apply via
              WhatsApp
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- INDUSTRIES -->
    <section id="industries" class="industries">
      <div class="wrap">
        <div class="head-split anim-base anim-fade-right">
          <div class="head-split-title">
            <span class="eyebrow">Industries We Serve</span>
            <h2>Creating Better Experiences Across Hospitality.</h2>
          </div>
          <p>
            Every hospitality business has different operational needs. Artha
            provides solutions that respond to the specific requirements of
            different hospitality environments.
          </p>
        </div>

        <div class="ind-grid">
          <article class="ind anim-base anim-fade-up delay-100">
            <div class="ind-img">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-mangement-restruant-img.jpg"
                  alt="Premium restaurant interior"
                  loading="lazy"
                />
                <figcaption class="cr-only">
                  Premium restaurant interior
                </figcaption>
              </figure>
              <span class="ind-cat">Restaurants</span>
            </div>
            <div class="ind-body">
              <h3>Restaurants</h3>
              <p>
                Helping restaurant businesses plan, design and improve their
                operations while creating memorable guest experiences.
              </p>
              <span class="explore"
                >Explore <span class="arrow" aria-hidden="true">↗</span></span
              >
            </div>
          </article>

          <article class="ind anim-base anim-fade-up delay-200">
            <div class="ind-img">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-mangement-hotels-img.jpg"
                  alt="Elegant hotel interior"
                  loading="lazy"
                />
                <figcaption class="cr-only">Elegant hotel interior</figcaption>
              </figure>
              <span class="ind-cat">Hotels</span>
            </div>
            <div class="ind-body">
              <h3>Hotels</h3>
              <p>
                Supporting hotel businesses with hospitality planning,
                operational development and service quality.
              </p>
              <span class="explore"
                >Explore <span class="arrow" aria-hidden="true">↗</span></span
              >
            </div>
          </article>

          <article class="ind anim-base anim-fade-up delay-300">
            <div class="ind-img">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-mangement-pub-and-resto-img.jpg"
                  alt="Sophisticated bar and resto bar interior"
                  loading="lazy"
                />
                <figcaption class="cr-only">
                  Sophisticated bar and resto bar interior
                </figcaption>
              </figure>
              <span class="ind-cat">Pub &amp; Resto Bar</span>
            </div>
            <div class="ind-body">
              <h3>Pub &amp; Resto Bar</h3>
              <p>
                Supporting pub and resto bar businesses with thoughtful
                planning, design and operational solutions.
              </p>
              <span class="explore"
                >Explore <span class="arrow" aria-hidden="true">↗</span></span
              >
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- APPROACH -->
    <section id="approach" class="approach">
      <div class="wrap">
        <div class="head-center anim-base anim-fade-right">
          <span class="eyebrow">Our Approach</span>
          <h2>From Vision to a Well-Running Hospitality Business.</h2>
          <p>
            A clear way of thinking about hospitality development — from the
            first idea to everyday operations.
          </p>
        </div>

        <div class="approach-grid">
          <div class="approach-card anim-base anim-fade-up delay-100">
            <div class="approach-icon">
              <i class="fas fa-search"></i>
            </div>
            <h3>Understand</h3>
            <p>
              Understand the client's business idea, requirements, goals and
              challenges.
            </p>
          </div>

          <div class="approach-card anim-base anim-fade-up delay-200">
            <div class="approach-icon">
              <i class="fas fa-chess-knight"></i>
            </div>
            <h3>Plan</h3>
            <p>
              Develop an approach around investment, location, design and
              operational needs.
            </p>
          </div>

          <div class="approach-card anim-base anim-fade-up delay-300">
            <div class="approach-icon">
              <i class="fas fa-sitemap"></i>
            </div>
            <h3>Develop</h3>
            <p>
              Coordinate the required development activities, including civil
              work, interiors, staffing and vendor-related support.
            </p>
          </div>

          <div class="approach-card anim-base anim-fade-up delay-400">
            <div class="approach-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h3>Improve</h3>
            <p>
              Focus on operational efficiency, food quality, service standards
              and guest satisfaction.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- WHO THIS IS FOR -->
    <section class="who-for" id="who-this-is-for">
      <div class="wrap">
        <div class="head-center anim-base anim-fade-right">
          <span class="eyebrow">Who This is For</span>
          <h2>
            Built for Hospitality Ventures <em>Ready to Grow Across India.</em>
          </h2>
          <p>
            From intimate neighbourhood cafés and high-output cloud kitchens to
            signature restaurants, hotels, resorts, pubs, resto-bars, and
            more—we partner with hospitality owners at every stage of growth.
          </p>
        </div>

        <div class="who-photo-grid">
          <!-- 01. Restaurants -->
          <article class="who-photo-card anim-base anim-fade-up delay-100">
            <div class="wpc-media">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-mangement-restruant-img.jpg"
                  alt="Restaurants and fine dining hospitality spaces"
                  loading="lazy"
                />
                <figcaption class="cr-only">
                  Restaurants and fine dining hospitality spaces
                </figcaption>
              </figure>
            </div>
            <div class="wpc-overlay"></div>
            <span class="wpc-badge" aria-hidden="true"
              ><i class="fas fa-utensils"></i
            ></span>
            <div class="wpc-body">
              <h3>Restaurants</h3>
              <p>
                Fine dining, casual dining, family restaurants, and specialty
                culinary destinations.
              </p>
            </div>
          </article>

          <!-- 02. Cafés & Bakeries -->
          <article class="who-photo-card anim-base anim-fade-up delay-200">
            <div class="wpc-media">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-location-selection-overview.jpg"
                  alt="Cafés, bakeries, and neighbourhood lounges"
                  loading="lazy"
                />
                <figcaption class="cr-only">
                  Cafés, bakeries, and neighbourhood lounges
                </figcaption>
              </figure>
            </div>
            <div class="wpc-overlay"></div>
            <span class="wpc-badge" aria-hidden="true"
              ><i class="fas fa-coffee"></i
            ></span>
            <div class="wpc-body">
              <h3>Cafés &amp; Bakeries</h3>
              <p>
                Artisanal coffee bars, patisseries, bistros, and welcoming
                neighbourhood lounges.
              </p>
            </div>
          </article>

          <!-- 03. Hotels -->
          <article class="who-photo-card anim-base anim-fade-up delay-300">
            <div class="wpc-media">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-mangement-hotels-img.jpg"
                  alt="Business hotels and boutique stays"
                  loading="lazy"
                />
                <figcaption class="cr-only">
                  Business hotels and boutique stays
                </figcaption>
              </figure>
            </div>
            <div class="wpc-overlay"></div>
            <span class="wpc-badge" aria-hidden="true"
              ><i class="fas fa-hotel"></i
            ></span>
            <div class="wpc-body">
              <h3>Hotels</h3>
              <p>
                Business hotels, boutique properties, and multi-outlet F&amp;B
                hospitality venues.
              </p>
            </div>
          </article>

          <!-- 04. Cloud Kitchens -->
          <article class="who-photo-card anim-base anim-fade-up delay-100">
            <div class="wpc-media">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-kitchen-design-hero.jpg"
                  alt="Cloud kitchens and commercial prep hubs"
                  loading="lazy"
                />
                <figcaption class="cr-only">
                  Cloud kitchens and commercial prep hubs
                </figcaption>
              </figure>
            </div>
            <div class="wpc-overlay"></div>
            <span class="wpc-badge" aria-hidden="true"
              ><i class="fas fa-concierge-bell"></i
            ></span>
            <div class="wpc-body">
              <h3>Cloud Kitchens</h3>
              <p>
                Workflow-driven delivery kitchens, central prep hubs, and
                scalable QSR models.
              </p>
            </div>
          </article>

          <!-- 05. Resorts -->
          <article class="who-photo-card anim-base anim-fade-up delay-200">
            <div class="wpc-media">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/slide-img-2-lgr.jpg"
                  alt="Luxury resorts, retreats, and banquet venues"
                  loading="lazy"
                />
                <figcaption class="cr-only">
                  Luxury resorts, retreats, and banquet venues
                </figcaption>
              </figure>
            </div>
            <div class="wpc-overlay"></div>
            <span class="wpc-badge" aria-hidden="true"
              ><i class="fas fa-umbrella-beach"></i
            ></span>
            <div class="wpc-body">
              <h3>Resorts &amp; Banquets</h3>
              <p>
                Destination retreats, leisure resorts, banquet spaces, and
                experiential dining.
              </p>
            </div>
          </article>

          <!-- 06. Resto-Bars & More -->
          <article class="who-photo-card anim-base anim-fade-up delay-300">
            <div class="wpc-media">
              <figure class="cr-figure">
                <img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-mangement-pub-and-resto-img.jpg"
                  alt="Pubs, resto-bars, lounges, and more hospitality formats"
                  loading="lazy"
                />
                <figcaption class="cr-only">
                  Pubs, resto-bars, lounges, and more hospitality formats
                </figcaption>
              </figure>
            </div>
            <div class="wpc-overlay"></div>
            <span class="wpc-badge" aria-hidden="true"
              ><i class="fas fa-glass-martini-alt"></i
            ></span>
            <div class="wpc-body">
              <h3>Resto-Bars, Pubs &amp; More</h3>
              <p>
                Lounges, pubs, QSR chains, catering units, and emerging
                hospitality concepts.
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="cta">
      <div class="wrap">
        <div class="cta-split-grid">
          <!-- Box 1: For Hotel Owners -->
          <article class="cta-box anim-base anim-fade-up delay-100">
            <span class="cta-box-ic" aria-hidden="true"
              ><i class="fas fa-hotel"></i
            ></span>
            <span class="eyebrow">FOR HOTEL OWNERS</span>
            <h2>Need Staff for Your Hotel?</h2>
            <p>Hire trained, verified staff with Artha.</p>
            <a
              href="<?php echo home_url('/contact-us'); ?>l#contact-form-section"
              class="btn"
              >Hire Staff Now <span class="arrow">&rarr;</span></a
            >
          </article>

          <!-- Box 2: For Job Seekers -->
          <article class="cta-box anim-base anim-fade-up delay-200">
            <span class="cta-box-ic" aria-hidden="true"
              ><i class="fas fa-briefcase"></i
            ></span>
            <span class="eyebrow">FOR JOB SEEKERS</span>
            <h2>Looking for a Hotel Job?</h2>
            <p>
              Apply for Chef, Front Office, Housekeeping &amp; F&amp;B jobs.
            </p>
            <a href="#job-opportunities" class="btn"
              >Apply for Jobs <span class="arrow">&rarr;</span></a
            >
          </article>
        </div>
      </div>
    </section>
</article>


<script>
/* ============ HOTEL JOB APPLICATION FORM ============ */
      (function () {
        const form = document.getElementById("hotelJobApplicationForm");
        const cvInput = document.getElementById("app-cv");
        const cvFilename = document.getElementById("app-cv-filename");
        const roleSelect = document.getElementById("app-role");
        const roleDropdown = document.getElementById("appRoleDropdown");
        const roleSearchInput = document.getElementById("app-role-search");
        const roleList = document.getElementById("app-role-list");
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

        function getRoleOptions() {
          if (!roleSelect) return [];
          return Array.from(roleSelect.options)
            .filter((opt) => opt.value.trim() !== "")
            .map((opt) => ({
              value: opt.value,
              label: opt.textContent.trim(),
            }));
        }

        function setRoleValue(val) {
          if (!roleSelect) return;
          roleSelect.value = val || "";
          const matched = getRoleOptions().find((o) => o.value === val);
          if (roleSearchInput) {
            roleSearchInput.value = matched ? matched.label : val || "";
          }
        }

        if (roleDropdown && roleSearchInput && roleList && roleSelect) {
          const toggleBtn = roleDropdown.querySelector(
            ".searchable-select-toggle",
          );
          let activeIndex = -1;
          let currentFiltered = [];

          function renderRoleList(filterText) {
            const query = (filterText || "").trim().toLowerCase();
            const allOptions = getRoleOptions();
            currentFiltered = query
              ? allOptions.filter((opt) =>
                  opt.label.toLowerCase().includes(query),
                )
              : allOptions;

            roleList.innerHTML = "";
            activeIndex = -1;

            if (currentFiltered.length === 0) {
              const emptyLi = document.createElement("li");
              emptyLi.className = "searchable-select-empty";
              emptyLi.textContent = "No matching job roles found";
              roleList.appendChild(emptyLi);
              return;
            }

            currentFiltered.forEach((opt, idx) => {
              const li = document.createElement("li");
              li.className =
                "searchable-select-option" +
                (opt.value === roleSelect.value ? " is-selected" : "");
              li.setAttribute("role", "option");
              li.setAttribute(
                "aria-selected",
                opt.value === roleSelect.value ? "true" : "false",
              );
              li.dataset.value = opt.value;
              li.textContent = opt.label;
              li.addEventListener("mousedown", (e) => {
                e.preventDefault();
                setRoleValue(opt.value);
                closeDropdown();
              });
              li.addEventListener("mouseenter", () => {
                setActiveOption(idx);
              });
              roleList.appendChild(li);
            });
          }

          function setActiveOption(index) {
            const items = roleList.querySelectorAll(
              ".searchable-select-option",
            );
            if (!items.length) return;
            activeIndex = Math.max(0, Math.min(index, items.length - 1));
            items.forEach((el, i) => {
              el.classList.toggle("is-active", i === activeIndex);
              if (i === activeIndex) {
                el.scrollIntoView({ block: "nearest" });
              }
            });
          }

          function openDropdown(filterText) {
            renderRoleList(filterText);
            roleList.hidden = false;
            roleDropdown.classList.add("is-open");
            roleSearchInput.setAttribute("aria-expanded", "true");
          }

          function closeDropdown() {
            roleList.hidden = true;
            roleDropdown.classList.remove("is-open");
            roleSearchInput.setAttribute("aria-expanded", "false");
            activeIndex = -1;
          }

          roleSearchInput.addEventListener("focus", () => {
            openDropdown("");
          });

          roleSearchInput.addEventListener("click", () => {
            if (roleList.hidden) {
              openDropdown("");
            }
          });

          roleSearchInput.addEventListener("input", () => {
            const val = roleSearchInput.value;
            openDropdown(val);
            const exact = getRoleOptions().find(
              (o) => o.label.toLowerCase() === val.trim().toLowerCase(),
            );
            roleSelect.value = exact ? exact.value : "";
          });

          roleSearchInput.addEventListener("keydown", (e) => {
            const items = roleList.querySelectorAll(
              ".searchable-select-option",
            );
            if (e.key === "ArrowDown") {
              e.preventDefault();
              if (roleList.hidden) {
                openDropdown(roleSearchInput.value);
              } else if (items.length) {
                setActiveOption(activeIndex + 1);
              }
            } else if (e.key === "ArrowUp") {
              e.preventDefault();
              if (!roleList.hidden && items.length) {
                setActiveOption(activeIndex > 0 ? activeIndex - 1 : 0);
              }
            } else if (e.key === "Enter") {
              if (!roleList.hidden) {
                e.preventDefault();
                if (activeIndex >= 0 && currentFiltered[activeIndex]) {
                  setRoleValue(currentFiltered[activeIndex].value);
                  closeDropdown();
                } else if (currentFiltered.length === 1) {
                  setRoleValue(currentFiltered[0].value);
                  closeDropdown();
                }
              }
            } else if (e.key === "Escape") {
              closeDropdown();
            }
          });

          roleSearchInput.addEventListener("blur", () => {
            setTimeout(() => {
              closeDropdown();
              const typed = roleSearchInput.value.trim();
              if (!typed) {
                setRoleValue("");
                return;
              }
              const match = getRoleOptions().find(
                (o) => o.label.toLowerCase() === typed.toLowerCase(),
              );
              if (match) {
                setRoleValue(match.value);
              } else if (roleSelect.value) {
                setRoleValue(roleSelect.value);
              } else {
                setRoleValue("");
              }
            }, 150);
          });

          if (toggleBtn) {
            toggleBtn.addEventListener("mousedown", (e) => {
              e.preventDefault();
              if (roleList.hidden) {
                roleSearchInput.focus();
                openDropdown("");
              } else {
                closeDropdown();
              }
            });
          }

          document.addEventListener("click", (e) => {
            if (!roleDropdown.contains(e.target)) {
              closeDropdown();
            }
          });
        }

        document
          .querySelectorAll(".job-apply-btn[data-job-role]")
          .forEach((btn) => {
            btn.addEventListener("click", () => {
              const mapped =
                roleMap[btn.dataset.jobRole] || btn.dataset.jobRole;
              if (mapped) setRoleValue(mapped);
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

      /* ============ JOB OPPORTUNITIES PAGINATION (9 CARDS AT A TIME) ============ */
      (function () {
        const CARDS_PER_PAGE = 9;
        const jobsSection = document.getElementById("job-opportunities");
        if (!jobsSection) return;

        const jobsGrid = jobsSection.querySelector(".jobs-grid");
        const paginationEl =
          jobsSection.querySelector(".jobs-pagination") ||
          document.getElementById("jobsPagination");
        if (!jobsGrid || !paginationEl) return;

        const cards = Array.from(jobsGrid.querySelectorAll(".job-card"));
        if (cards.length <= CARDS_PER_PAGE) {
          paginationEl.hidden = true;
          return;
        }

        const totalPages = Math.ceil(cards.length / CARDS_PER_PAGE);
        let currentPage = 1;

        function renderPage(page, shouldScroll) {
          currentPage = Math.max(1, Math.min(page, totalPages));
          const startIdx = (currentPage - 1) * CARDS_PER_PAGE;
          const endIdx = startIdx + CARDS_PER_PAGE;

          cards.forEach((card, index) => {
            const isVisible = index >= startIdx && index < endIdx;
            card.classList.toggle("is-hidden-page", !isVisible);
            if (isVisible) {
              card.classList.add("anim-is-visible");
            }
          });

          paginationEl.hidden = false;
          paginationEl.innerHTML = "";

          const prevBtn = document.createElement("button");
          prevBtn.type = "button";
          prevBtn.className = "jobs-page-btn prev";
          prevBtn.disabled = currentPage === 1;
          prevBtn.setAttribute("aria-label", "Previous page");
          prevBtn.innerHTML =
            '<i class="fas fa-chevron-left" aria-hidden="true"></i> Prev';
          prevBtn.addEventListener("click", () =>
            renderPage(currentPage - 1, true),
          );
          paginationEl.appendChild(prevBtn);

          for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement("button");
            pageBtn.type = "button";
            pageBtn.className =
              "jobs-page-btn num" + (i === currentPage ? " active" : "");
            pageBtn.textContent = i;
            pageBtn.setAttribute("aria-label", "Page " + i);
            if (i === currentPage) {
              pageBtn.setAttribute("aria-current", "page");
            }
            pageBtn.addEventListener("click", () => {
              if (i !== currentPage) renderPage(i, true);
            });
            paginationEl.appendChild(pageBtn);
          }

          const nextBtn = document.createElement("button");
          nextBtn.type = "button";
          nextBtn.className = "jobs-page-btn next";
          nextBtn.disabled = currentPage === totalPages;
          nextBtn.setAttribute("aria-label", "Next page");
          nextBtn.innerHTML =
            'Next <i class="fas fa-chevron-right" aria-hidden="true"></i>';
          nextBtn.addEventListener("click", () =>
            renderPage(currentPage + 1, true),
          );
          paginationEl.appendChild(nextBtn);

          if (shouldScroll) {
            jobsSection.scrollIntoView({ behavior: "smooth", block: "start" });
          }
        }

        renderPage(1, false);
      })();
</script>
<?php 
    get_footer();
?>