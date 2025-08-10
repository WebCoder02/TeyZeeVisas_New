<?php include './php/header.php'; ?>

<?php
// Start the session

// Check if user is already logged in and has a valid session
if (isset($_SESSION['user']) && isset($_SESSION['session_token'])) {
    $email = $_SESSION['user'];
    $sessionToken = $_SESSION['session_token'];
    
    // If using database-based authentication, verify the session
    try {
       require_once __DIR__ . '/payments/database.php';
        // require_once __DIR__ . '/../config/database.php';
       require_once __DIR__ . '/payments/User.php';

        
        $database = new Database();
        $db = $database->getConnection();
        $user = new User($db);
        
        // Verify session is still valid
        $sessionData = $user->validateSession($sessionToken);
        if ($sessionData && isset($sessionData['email']) && $sessionData['email'] === $email) {
        //if ($sessionData && $sessionData['email'] === $email) {
            // User is logged in with valid session, redirect to payment
            header('Location: payments/payment.php');

            exit;
        } else {
            // Invalid session, clear it
            session_destroy();
            session_start();
        }
    } catch (Exception $e) {
        // Error checking session, clear it to be safe
        session_destroy();
        session_start();
    }
}

// Handle success messages from login redirects
$loginSuccess = isset($_GET['login']) && $_GET['login'] === 'success';
$registrationSuccess = isset($_GET['registration']) && $_GET['registration'] === 'success';
?>

<main>
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="left">
                    <h3>TeyZee Visas, The Fast visa platform ❤️</h3>
                    <h2>From application to approval,<br><span class="highlight">TeyZee Visas</span> makes visa applications simple and successful.</h2>
                    <h3>Free Registration❤️ on Check Visa Eligibility @499 only <br> Choose from any of the visa countries below & click <b>Get Visa </b> (More Countries in footer)</h3>

                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h2>Best Visa Assistance in India</h2>

            <div class="testimonial-grid">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="user-info">
                            <h4>Rahul Shetty</h4>
                        </div>
                    </div>
                    <p>I was recommended to them by their long time corporate client after my Schengen visa was rejected twice. They took their time, requested additional items, and then I GOT MY VISA.</p>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="user-info">
                            <h4>Manish Kapoor</h4>
                        </div>
                    </div>
                    <p>They are well known in corporate circles and I got to them through a reference. Quick, efficient and they suggested an alternate country for Schengen application as I had to travel quickly.</p>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="user-info">
                            <h4>Kshitij Parikh</h4>
                        </div>
                    </div>
                    <p>Didn't want the hassle of visa issues so went with them on a personal recommendation. They are well known for almost 100% visa success.</p>
                </div>
            </div>
        </div>
    </section>
</main>
<body>
    <div class="gcse-search"></div>
    <section class="featured-destinations">
            <div class="container">
                <div class="destinations-grid">
                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="./VisaImages/destinations/france.jpg" alt="France">
                            <div class="stats-badge">
                                <i class="fas fa-bolt"></i> Get Visa in 30 days
                            </div>
                        </div>
                        <div class="destination-info">
                            <div class="order">
                                <h3>France</h3>
                                <button type="button" class="link-btn"
                                    onclick="window.location.href='./php/france.php';">Get
                                    Visa</button>
                            </div>
                            <div class="visa-type">Sticker</div>
                            <div class="price-info">
                                <div class="price">₹8500</div>
                                <div class="tax">+₹499 (Fees+Tax 18%)</div>
                                <div class="details">
                                    <div class="visa-time">
                                        <span>52 issued in past few weeks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="./VisaImages/destinations/italy.jpg" alt="Italy">
                            <div class="stats-badge">
                                <i class="fas fa-bolt"></i> Get Visa in 30 days
                            </div>
                        </div>
                        <div class="destination-info">
                            <div class="order">
                                <h3>Italy</h3>
                                <button type="button" class="link-btn"
                                    onclick="window.location.href='./php/italy.php';">Get
                                    Visa</button>
                            </div>
                            <div class="visa-type">Sticker</div>
                            <div class="price-info">
                                <div class="price">₹8500</div>
                                <div class="tax">+₹499 (Fees+Tax 18%)</div>
                                <div class="details">
                                    <div class="visa-time">
                                        <span>97 issued in past few weeks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="./VisaImages/destinations/germany.jpg" alt="Germany">
                            <div class="stats-badge">
                                Get Visa in 30 days
                            </div>
                        </div>
                        <div class="destination-info">
                            <div class="order">
                                <h3>Germany</h3>
                                <button type="button" class="link-btn"
                                    onclick="window.location.href='./php/germany.php';">Get
                                    Visa</button>
                            </div>
                            <div class="visa-type">Sticker</div>
                            <div class="price-info">
                                <div class="price">₹8500</div>
                                <div class="tax">+₹499 (Fees+Tax 18%)</div>
                                <div class="details">
                                    <div class="visa-time">
                                        <span>16 issued in past few weeks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="./VisaImages/destinations/greece.jpg" alt="Greece">
                            <div class="stats-badge">
                                <i class="fas fa-bolt"></i> Get Visa in 30 days
                            </div>
                        </div>
                        <div class="destination-info">
                            <div class="order">
                                <h3>Greece</h3>
                                <button type="button" class="link-btn"
                                    onclick="window.location.href='./php/greece.php';">Get
                                    Visa</button>
                            </div>

                            <div class="visa-type">Sticker</div>
                            <div class="price-info">
                                <div class="price">₹8500</div>
                                <div class="tax">+₹499 (Fees+Tax 18%)</div>
                                <div class="details">
                                    <div class="visa-time">
                                        <span>22 issued in past few weeks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="./VisaImages/destinations/switzerland.jpg" alt="Switzerland">

                            <div class="stats-badge">
                                Get Visa in 30 days
                            </div>
                        </div>
                        <div class="destination-info">
                            <div class="order">
                                <h3>Switzerland</h3>
                                <button type="button" class="link-btn"
                                    onclick="window.location.href='./php/switzerland.php';">Get Visa</button>
                            </div>
                            <div class="visa-type">Sticker</div>
                            <div class="price-info">
                                <div class="price">₹8500</div>
                                <div class="tax">+₹499 (Fees+Tax 18%)</div>
                                <div class="details">
                                    <div class="visa-time">
                                        <span>22 issued in past few weeks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="./VisaImages/destinations/turkey.jpg" alt="Turkey">

                            <div class="stats-badge">
                                Get Visa in 30 days
                            </div>
                        </div>
                        <div class="destination-info">
                            <div class="order">
                                <h3>Turkey</h3>
                                <button type="button" class="link-btn"
                                    onclick="window.location.href='./php/turkey.php';">Get
                                    Visa</button>
                            </div>
                            <div class="visa-type">eVisa/ Sticker</div>
                            <div class="price-info">
                                <div class="price">₹17800</div>
                                <div class="tax">+₹499 (Fees+Tax 18%)</div>
                                <div class="details">
                                    <div class="visa-time">
                                        <span>Last issued 3 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="./VisaImages/destinations/singapore.jpg" alt="Singapore">
                            <div class="stats-badge">
                                <i class="fas fa-bolt"></i> Get Visa in 15 days
                            </div>
                        </div>
                        <div class="destination-info">
                            <div class="order">
                                <h3>Singapore</h3>
                                <button type="button" class="link-btn"
                                    onclick="window.location.href='./php/singapore.php';">Get
                                    Visa</button>
                            </div>
                            <div class="visa-type">Sticker</div>
                            <div class="price-info">
                                <div class="price">₹1900-6400</div>
                                <div class="tax">+₹2499 (Fees+Tax)</div>
                                <div class="details">
                                    <div class="visa-time">
                                        <span>338 issued recently</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="destination-card">
                        <div class="destination-image">
                            <img src="./VisaImages/destinations/china.jpg" alt="China">
                            <div class="stats-badge">
                                Get Visa in 15 days
                            </div>
                        </div>

                        <div class="destination-info">
                            <div class="order">
                                <h3>China</h3>
                                <button type="button" class="link-btn"
                                    onclick="window.location.href='./php/china.php';">Get
                                    Visa</button>
                            </div>
                            <div class="visa-type">Sticker</div>
                            <div class="price-info">
                                <div class="price">₹4500-10500</div>
                                <div class="tax">+₹2499 (Fees+Tax)</div>
                                <div class="details">
                                    <div class="visa-time">
                                        <span>338 issued recently</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="load-more">
                    <button class="btn btn-secondary" id="loadMoreBtn">Load more <i
                            class="fas fa-chevron-down"></i></button>
                </div>

            </div>
        </section>

    <section class="visa-process">
        <div class="container">
            <h2>Expert Application With TeyZee Visas</h2>
            <h3>4 Simple Steps to Apply for Your Visa</h3>

            <div class="process-container">
                <div class="process-image">
                    <img src="https://www.teyzeevisas.com/VisaImages/destinations/visa4stepprocess.jpg" alt="Application Form">
                </div>
                <div class="process-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Upload Passport, Front & Back</h4>
                            <p>Clear Colour Scan of Passport first page and last page</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Upload Bank Statement (Min 1 lac closing balance)</h4>
                            <p>Last 3 months bank statement on pdf or excel format (bank original)</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Pay Rs 499 ON UPI for evaluation. <br>On Go ahead, upload all documents to Dropbox</h4>
                            <p>Documentation check in 12 hours</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>Expert Double Check for a Perfect Application</h4>
                            <p>Sit Back as We Deliver Your Visa on Time. Your Worry-Free Journey Begins!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visa-eligibility">
        <div class="container eligibility-container">
            <div class="eligibility-content">
                <h2>Check your Visa Eligibility for Rs 499 only</h2>
                <p>Upload your basic documents now.</p>
             <a href="https://www.teyzeevisas.com/php/check_now.php"><button class="check-btn">Check Now</button></a>
               <!-- <button id="check-btn2" class="check-btn">CHECK NOW</button> -->
                <!-- <button class="check-btn">CHECK NOW</button> -->
            </div>
        </div>
    </section>
    <script async src="https://cse.google.com/cse.js?cx=b469c5514db4d4585">
    </script>
     <script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script><script id="zsiqscript" src="https://salesiq.zohopublic.in/widget?wc=siq4e31759c72faf117d54e41692276fce110fbe6e6e6d715a6aaac7a0c47204f0c" defer></script> 
</body>


<?php include './php/footer.php'; ?>

<!-- <footer>
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <h3>Address</h3>
                <div class="address">
                    <p><i class="fas fa-map-marker-alt"></i> A-302, RG City Centre, DB Gupta Road, Delhi 110011</p>
                </div>
                <div class="address">
                    <p><i class="fas fa-map-marker-alt"></i> Mumbai - WeWSork Platinum, Marol, Mumbai, Maharashtra, 400059</p>
                </div>
                <a href="https://wa.me/919029027420" class="whatsapp-button"><i class="fab fa-whatsapp"></i> Chat with us</a>
            </div>

            <div class="footer-col">
                <h3>About us</h3>
                <ul>
                    <li><a href="mailto:business.tours@kalltrip.com">Email us</a></li>
                    <li><a href="#">Blogs</a></li>
                    <li><a href="/php/privacy.php">Privacy Policy</a></li>
                </ul>
            </div>html

            <div class="footer-col">
                <h3>Support</h3>
                <ul>
                    <li><a href="/php/help">Help Center</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="/php/privacy.php">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Social</h3>
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=61575094024472"><i class="fab fa-facebook"></i> Facebook</a></li>
                    <li>
                        <a href="https://x.com/TeyzeeVisas" target="_blank" style="text-decoration: none; display: inline-flex; align-items: center;">
                            <span style="font-weight: bold; font-size: 10px; background-color: rgb(255, 255, 255); color: rgb(160, 151, 151); padding: 0px 4px; border-radius: 8px;">𝕏</span>
                            <span style="margin-left: 6px; color: rgb(255, 255, 255);">X</span>
                        </a>
                    </li>
                    <li><a href="https://www.instagram.com/teyzee_visas/"><i class="fab fa-instagram"></i> Instagram</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-countries">
            <h3>Read more about visas</h3>
            <div class="country-links">
                <a href="https://www.teyzeevisas.com/php/france.php">France</a> •
                <a href="/php/italy_customer.php">Italy</a> •
                <a href="/php/germany_customer.php">Germany</a> •
                <a href="/php/switzerland.php">Switzerland</a> •
                <a href="/php/greece_customer.php">Greece</a> •
                <a href="/php/singapore_customer.php">Singapore</a> •
                <a href="/php/turkey_customer.php">Turkey</a> •
                <a href="/php/china_customer.php">China</a> •
                <a href="/php/russia_customer.php">Russia</a> •
                <a href="/php/united_arab_emirates.php">United Arab Emirates</a> •
                <a href="/php/indonesia_customer.php">Indonesia</a> •
                <a href="/php/vietnam_customer.php">Vietnam</a> •
                <a href="/php/azerbaijan_customer.php">Azerbaijan</a> •
                <a href="/php/united_kingdom.php">United Kingdom</a> •
                <a href="/php/spain_customer.php">Spain</a> •
                <a href="/php/south_korea_customer.php">South Korea</a> •
                <a href="/php/georgia_customer.php">Georgia</a> •
                <a href="/php/hungary_customer.php">Hungary</a> •
                <a href="/php/finland_customer.php">Finland</a> •
                <a href="/php/norway_customer.php">Norway</a> •
                <a href="/php/egypt_customer.php">Egypt</a> •
                <a href="/php/oman_customer.php">Oman</a> •
                <a href="/php/sweden_customer.php">Sweden</a> •
                <a href="/php/austria_customer.php">Austria</a> •
                <a href="/php/denmark_customer.php">Denmark</a> •
                <a href="/php/uzbekistan_customer.php">Uzbekistan</a> •
                <a href="/php/cambodia_customer.php">Cambodia</a> •
                <a href="/php/morocco_customer.php">Morocco</a> •
                <a href="/php/netherlands_customer.php">Netherlands</a> •
                <a href="/php/philippines_customer.php">Philippines</a> •
                <a href="/php/brazil_customer.php">Brazil</a> •
                <a href="/php/saudi_arabia_customer.php">Saudi Arabia</a> •
                <a href="/php/kenya_customer.php">Kenya</a> •
                <a href="/php/portugal_customer.php">Portugal</a> •
                <a href="/php/belgium_customer.php">Belgium</a> •
                <a href="/php/croatia_customer.php">Croatia</a> •
                <a href="/php/lithuania_customer.php">Lithuania</a> •
                <a href="/php/ireland_customer.php">Ireland</a> •
                <a href="/php/luxembourg_customer.php">Luxembourg</a> •
                <a href="/php/Hong Kong_customer.php">Hong Kong</a> •
                <a href="/php/malaysia_customer.php">Malaysia</a> •
                <a href="/php/japan_customer.php">Japan</a> •
                <a href="/php/bahrain_customer.php">Bahrain</a> •
                <a href="/php/czech_republic_customer.php">Czech Republic</a> •
                <a href="/php/romania_customer.php">Romania</a> •
                <a href="/php/bulgaria_customer.php">Bulgaria</a> •
                <a href="/php/slovakia_customer.php">Slovakia</a> •
                <a href="/php/latvia_customer.php">Latvia</a> •
                <a href="/php/estonia_customer.php">Estonia</a>
            </div>
        </div>
        <div class="copyright">
            <p>© 2025 TeyZee Visas. All Rights Reserved.</p>
        </div>
    </div>
</footer> -->

<script src="/link.js"></script>
<script src="/scripts.js"></script>
</body>
</php>
