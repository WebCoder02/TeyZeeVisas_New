<?php include 'header.php'; ?>  
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeyZee Visas -  Visa Services</title>
    <link rel= "stylesheet" href="https://teyzeevisas.com/document.css">
    <link rel="stylesheet" href="https://teyzeevisas.com/Country_page.css">
        <link rel="stylesheet" href="https://teyzeevisas.com/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style> 
        .visa-eligibility{
            background-color: #bab6ff;
        }
    </style>
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->

    
    <!-- End Google Tag Manager (noscript) -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="action-banner">
                    <p>Avoid Visa Rejections - Check Visa Eligibility</p>
                </div>
                <div class="hero-text">
                    <h1>Will I Get My Visa???</h1>
                    <div class="recent-applications">
                        <span class="recent-text">16+ applied recently</span>
                    </div>
                </div>
                <!-- ✅ LOGIN REFERENCE 1: Hero Section Quick Login -->
                <div class="quick-access">
                    <p>Already have an account? <a href="/php/login.php?redirect_to=/php/check_now.php" class="quick-login">Login to continue</a></p>
                </div>
                <div class="stats">
                    <div class="stat">
                        <span class="percentage">99.99%</span>
                        <span class="stat-text">Visa Approval Rate</span>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="../VisaImages/destinations/france.jpg" alt="Paris cityscape">
                <div class="testimonial">
                    <img src="../VisaImages/destinations/singapore.jpg" alt="Eiffel Tower">
                    <p>"Teyzee Visas has been doing our coporate visas since decades, so naturally we asked them to do
                        our personal visas as well. Flawless service.👍"</p>
                </div>
            </div>
        </div>
    </section>
    <div class="tab-container">

        <div id="tourist" class="tabcontent active">
            <h2>Why Check Visa Eligibility?
            </h2>
            <table>
                <tr>
                    <th width="30%">Questions</th>
                    <th width="70%">Answer</th>
                </tr>
                <tr>
                    <td>Why check visa eligibility?</td>
                    <td>
                        <ul>
                            <li>Don't lose money on Visa rejection</li>
                            <li>Cheaper tickets hotels and cheap hotels are nonrefundable</li>
                        </ul>
                        

                    </td>
                </tr>
                <tr>
                    <td>Why <strong>TVRating</strong> Matters?</td>
                    <td>
                        <ul>
                            <li><strong>TVRating</strong> = Teyzee Visa Rating </li>
                            <li>We use AI/ML to check your dummy visa application against our previous application data for likely rejection cases</li>
                            <li><strong>TVRating</strong> is scored like a credit score - out of 900 - 750 is visa for sure. </li>
                        </ul>
                       
                    </td>
                </tr>
                <tr>
                    <td>Why we have 99.9% success</td>
                    <td>
                        <ul>
                            <li>We have more than 30 man-years of experience in visa applications </li>
                            <li>We use a very systematic approach to evaluate documents provided by customer</li>
                        </ul>
                       
                    </td>
                </tr>
                <tr>
                    <td>We provide a TVRating = Teyzee Visa Rating based on:- </td>
                    <td> <ul>
                            <li>Your previous visas received on your passport</li>
                            <li>Financial documents</li>
                            <li>Asset documents</li>
                            <li>Personal documents </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>In case we feel that your visa is likely to be rejected</td>
                    <td>
                       We will provide you with exact instructions for those areas where you need to improve your score
                       <ul>
                            <li>Eg Income in IT Return should exceed 50000 per month</li>
                            <li>Proof of domicile is rented - if so send rental agreement copy in your name </li>
                            
                        </ul>

                    </td>
                </tr>
                
            </table>
        </div>

        
        
    </div>
    <section class="visa-eligibility" id="document-checklist">
        <div class="container eligibility-container">
            <div class="eligibility-content">
                <h2>Check your Visa Eligibility for Rs 499 only</h2>
                <p>Upload your basic documents for Visa Eligibility Check.</p>
                <!-- Eligibility Check -->
                <!-- ✅ FIXED: Eligibility Check Payment Link -->
                <?php if (isset($_SESSION['user_id'])): ?>
    <a href="/payments/payment.php?country=checknow&visa_type=eligibility_check"><button id="check-now" class="check-btn">Check Eligibility - Pay ₹499</button></a>
<?php else: ?>
    <p><small>Please <a href="/php/login.php?redirect_to=/php/check_now.php" class="login-link">pay</a> to proceed with upload</small></p>
    <a href="/payments/payment.php?country=checknow&visa_type=eligibility_check"><button id="check-now" class="check-btn">Check Eligibility - Pay ₹499</button></a>
<?php endif; ?>
            </div>
        </div>
    </section>
    <section class="document-checklist">
        <!-- <div class="container">
            <div class="label-container">
                <h2>Save time and hassle - Check Visa Eligibility @ ₹499</h2>

                 ✅ FIXED: Document Download Link 
              /*  <?php if (isset($_SESSION['user_id'])): ?>
    <a href="../php/_Customer.php" class="check-btn">Download Documents</a>
<?php else: ?>
    <a href="/payments/payment.php?country=checknow&visa_type=eligibility_check" class="check-btn">Download Documents</a>
<?php endif; ?> */
                <h3>Get Access to Original Visa Form and Checklist</h3>
</div> -->

           <!--   Cascading dropdown -
            <div class="dropdown-container">
                <div class="dropdown-group">
                    <label class="dropdown-label" for="primary-category">Select Visa Category:</label>
                    <select id="primary-category">
                        <option value="">-- Select Category --</option>
                        <option value="Business">Business</option>
                        <option value="Tourist">Tourist</option>
                        <option value="Other">Other</option>
                    </select>
                </div>->

                <!-- Sub-category dropdown (initially hidden) 
                <div class="dropdown-group" id="subcategory-container" style="display: none;">
                    <label class="dropdown-label" for="sub-category">Select Service/Business/Others:</label>
                    <select id="sub-category">
                        <option value="">-- Select Sub-Category --</option>
                    </select>
                </div>
            </div>->

            <div class="document-checklist">
                <!-- Tourist Category Selectors 
                <div class="checklist-selector" data-category="Tourist" data-subcategory="Employed">
                    <p>Showing documents for <span>Tourist - Employed <i class="fas fa-chevron-down"></i></span></p>
                </div>
                <div class="checklist-selector" data-category="Tourist" data-subcategory="Self-Employed">
                    <p>Showing documents for <span>Tourist - Self-Employed <i class="fas fa-chevron-down"></i></span>
                    </p>
                </div>
                <div class="checklist-selector" data-category="Tourist" data-subcategory="Sponsored">
                    <p>Showing documents for <span>Tourist - Sponsored <i class="fas fa-chevron-down"></i></span></p>
                </div>

                <!-- Business Category Selectors 
                <div class="checklist-selector" data-category="Business" data-subcategory="Meeting">
                    <p>Showing documents for <span>Business - Meeting <i class="fas fa-chevron-down"></i></span></p>
                </div>
                <div class="checklist-selector" data-category="Business" data-subcategory="Conference">
                    <p>Showing documents for <span>Business - Conference <i class="fas fa-chevron-down"></i></span></p>
                </div>

                <!-- Other Category Selectors 
                <div class="checklist-selector" data-category="Other" data-subcategory="Student">
                    <p>Showing documents for <span>Student <i class="fas fa-chevron-down"></i></span></p>
                </div>
                <div class="checklist-selector" data-category="Other" data-subcategory="Work">
                    <p>Showing documents for <span>Work <i class="fas fa-chevron-down"></i></span></p>
                </div>
                <div class="checklist-selector" data-category="Other" data-subcategory="Seaman">
                    <p>Showing documents for <span>Seaman <i class="fas fa-chevron-down"></i></span></p>
                </div>

                <!-- Document sections -->
                <!-- Tourist - Employed 
                <div id="checklist-section1" class="checklist-section table-layout">
                    <div class="checklist-column">
                        <h4>Tourist - Employed</h4>
                        <div class="checklist-column">
                            <h4>Additional Documents</h4>
                            <div class="checklist-item"><i class="fas fa-file-invoice"></i><span>ITR Acknowledgement - 3
                                    years</span></div>
                            <div class="checklist-item"><i class="fas fa-file-alt"></i><span>Covering Letter</span>
                            </div>
                            <div class="checklist-item"><i class="fas fa-passport"></i><span>Previous Visas Copy</span>
                            </div>
                            <div class="checklist-item"><i class="fas fa-coins"></i><span>Assets & Liabilities
                                    Statement</span></div>
                        </div>
                        <div class="checklist-column">
                            <h4>Refundable Booking Documents</h4>
                            <div class="checklist-item"><i class="fas fa-bed"></i><span>Hotel Voucher (Refundable
                                    booking)</span></div>
                            <div class="checklist-item"><i class="fas fa-plane"></i><span>Flight Tickets (Refundable
                                    booking)</span></div>
                        </div>
                    </div>
                </div>

                <!-- Tourist - Self-Employed 
                <div id="checklist-section2" class="checklist-section table-layout">
                    <div class="checklist-column">
                        <h4>Tourist - Self-Employed</h4>
                        <div class="checklist-column">
                            <h4>Additional Documents</h4>
                            <div class="checklist-item"><i class="fas fa-file-invoice"></i><span>
                                    ITR Acknowledgement ( Personal & Business) </span></div>
                            <div class="checklist-item"><i class="fas fa-file-certificate"></i>
                                <span>
                                    Business Registration & Bank Statement & Other Documents
                                </span>
                            </div>
                            <div class="checklist-item"><i class="fas fa-passport"></i><span>Previous Visas Copy</span>
                            </div>
                        </div>
                        <div class="checklist-column">
                            <h4>Refundable Booking Documents</h4>
                            <div class="checklist-item"><i class="fas fa-bed"></i><span>Hotel Voucher (Refundable
                                    booking)</span></div>
                            <div class="checklist-item"><i class="fas fa-plane"></i><span>Flight Tickets (Refundable
                                    booking)</span></div>
                        </div>
                    </div>
                </div>

                <!-- Tourist - Sponsored 
                <div id="checklist-section3" class="checklist-section table-layout">
                    <div class="checklist-column">
                        <h4>Tourist - Sponsored</h4>
                        <div class="checklist-column">
                            <h4>Additional Documents</h4>
                            <div class="checklist-item">
                                <i class="fas fa-file-invoice"></i>
                                <span>ITR Acknowledgement ( If available)</span>
                            </div>
                            <div class="checklist-item">
                                <i class="fas fa-file-certificate">

                                </i><span>Sponsor Letter & Proof Of Funds of Sponsorn</span>
                            </div>
                            <div class="checklist-item"><i class="fas fa-passport"></i><span>Previous Visas Copy</span>
                            </div>

                        </div>
                        <div class="checklist-column">
                            <h4>Refundable Booking Documents</h4>
                            <div class="checklist-item"><i class="fas fa-bed"></i><span>Hotel Voucher (Refundable
                                    booking)</span></div>
                            <div class="checklist-item"><i class="fas fa-plane"></i><span>Flight Tickets (Refundable
                                    booking)</span></div>
                        </div>
                    </div>
                </div>
                <!-- Add more checklist sections for other categories and subcategories -->
                <!-- Business - Meeting 
                <div id="checklist-section4" class="checklist-section table-layout">
                    <div class="checklist-column">
                        <h4>Business - Meeting</h4>
                        <div class="checklist-column">
                            <h4>Additional Documents</h4>
                            <div class="checklist-item">
                                <i class="fas fa-building"></i>
                                <span>Company Invitation Letter</span>
                            </div>
                            <div class="checklist-item">
                                <i class="fas fa-file-signature"></i>
                                <span>Invitation from Overseas Business Partner ++</span>
                            </div>
                            <div class="checklist-item">
                                <i class="fas fa-calendar-check"></i>
                                <span>Meeting Schedule & Itinerary</span>
                            </div>
                        </div>
                        <div class="checklist-column">
                            <h4>Refundable Booking Documents</h4>
                            <div class="checklist-item"><i class="fas fa-bed"></i><span>Hotel Voucher (Refundable
                                    booking)</span></div>
                            <div class="checklist-item"><i class="fas fa-plane"></i><span>Flight Tickets (Refundable
                                    booking)</span></div>
                        </div>
                    </div>
                </div>

                <div id="checklist-section5" class="checklist-section table-layout">
                    <div class="checklist-column">
                        <h4>Business - Conference</h4>
                        <div class="checklist-column">
                            <h4>Additional Documents</h4>
                            <div class="checklist-item">
                                <i class="fas fa-building"></i>
                                <span>Company Invitation Letter</span>
                            </div>
                            <div class="checklist-item">
                                <i class="fas fa-file-signature"></i>
                                <span>Conference Booking Letter/Ticket</span>
                            </div>
                            <div class="checklist-item">
                                <i class="fas fa-calendar-check"></i>
                                <span>Meeting Schedule</span>
                            </div>
                        </div>
                        <div class="checklist-column">
                            <h4>Refundable Booking Documents</h4>
                            <div class="checklist-item"><i class="fas fa-bed"></i><span>Hotel Voucher (Refundable
                                    booking)</span></div>
                            <div class="checklist-item"><i class="fas fa-plane"></i><span>Flight Tickets (Refundable
                                    booking)</span></div>
                        </div>
                    </div>
                </div>
                <!-- Student 
                <div id="checklist-section6" class="checklist-section table-layout">
                    <div class="checklist-column">
                        <h4>Student</h4>
                        <div class="checklist-column">
                            <h4>Additional Documents</h4>
                            <div class="checklist-item"><i class="fas fa-university"></i><span>Admission Letter</span>
                            </div>
                            <div class="checklist-item"><i class="fas fa-graduation-cap"></i><span>Academic
                                    Transcripts</span></div>
                            <div class="checklist-item"><i class="fas fa-file-invoice"></i><span>Financial Proof</span>
                            </div>
                        </div>

                        <div class="checklist-column">
                            <h4>Refundable Booking Documents</h4>
                            <div class="checklist-item"><i class="fas fa-home"></i><span>Accommodation Proof</span>
                            </div>
                            <div class="checklist-item"><i class="fas fa-plane"></i><span>Flight Tickets (Refundable
                                    booking)</span></div>
                        </div>
                    </div>
                </div>

                <!-- Additional sections would go here for the remaining categories
            </div>
        </div>-->
    </section>

            <div class="contact-expert">
                <p>Talk to a visa expert instantly-Call now!</p>
                <button class="callback-btn"><i class="fas fa-phone"></i> Request callback</button>
            </div>
        </div>
    </section>


   <!-- <section class="process" id="visa-process">
        <div class="container">
            <div class="process-timeline">
                <h3>Expert Visa Assistance in Just a Few Steps</h3>
                <div class="process-selector">
                    <p>Showing steps for <span>Sticker visa</span></p>
                </div>
                <div class="process-steps">
                    <div class="timeline-line"></div>
                    <div class="step">
                        <div class="step-icon date">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="step-content">
                            <span class="step-label">Today</span>
                            <h3 id="current-date">April 8, 2025</h3>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="step-content">
                            <h3>Step 1: Start & submit your application</h3>
                            <p>Complete your application accurately on our user-friendly platform</p>
                            <!-- <span class="step-date">April 8, 2025</span> 
                    </div>

                    <div class="step">
                        <div class="step-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <div class="step-content">
                            <h3>Step 2: Expert review and appointment booking</h3>
                            <p>Your designated visa expert reviews your application and books your appointments at the
                                visa centre.</p>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="step-content">
                            <h3>Step 3: Visit the visa application centre</h3>
                            <p>Visit the visa centre to submit biometrics with our guidance and support.</p>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="step-content">
                            <h3>Step 4: Visa delivered on time</h3>
                            <p>Relax as we ensure your visa is processed promptly and delivered on time.</p>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-icon result">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="step-content result">
                            <h3>Step 5: Visa received</h3>
                            <p>From the appointment date, get your visa in <span class="highlight">4 weeks</span>.</p>
                        </div>
                    </div>
                </div>

                <div class="process-badges">
                    <div class="badge secure">
                        <span>100% Safe & Secure</span>
                    </div>
                    <div class="badge experts">
                        <span>Visa Experts + AI Assisted</span>
                    </div>
                    <div class="badge assistance">
                        <span>Complete assistance</span>
                    </div>
                    <div class="badge updates">
                        <span>Regular status updates</span>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    
    <section class="info-cards" id="info-section">
        <div class="container">
            <h2>Know more about Visa</h2>
            <p class="subtitle">Curated resources for  visa</p>
            <div class="info-grid">
                <div class="info-card">
                    <div class="card-content">
                        <h3> Visa Rejection Rates & Prevention Tips</h3>
                        <p>Around 1% rejection rate with TeyZee Visas, 10-20% with other agents. <span
                                class="hidden-content">Learn how proper documentation, financial stability proof, and
                                clear travel plans can improve your chances.</span></p>
                        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-content">
                        <h3>How do I prevent my visa application from being denied?</h3>
                        <p>Check eligibility with TeyZee Visas before you apply. </p>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-content">
                        <h3>When to Apply for a Visa: Optimal Timing</h3>
                        <p>Apply up to 90 days before your planned travel date. <span class="hidden-content">We highly
                                recommend applying at the earliest opportunity to avoid delays and complications.</span>
                        </p>
                        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-content">
                        <h3> Transit Visa Requirements for Indian Citizens</h3>
                        <p>Indian citizens need a transit visa for all layovers in . <span
                                class="hidden-content">This visa only allows airport stays - for city visits, apply for
                                a regular Schengen visa.</span></p>
                        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-content">
                        <h3>Re-applying After Visa Rejection: Next Steps</h3>
                        <p>Address the specific rejection reasons and reapply with TeyZee Visas' expert guidance. <span
                                class="hidden-content">Most rejections are due to financial documentation or
                                insufficient ties to India.</span></p>
                        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-content">
                        <h3>Eligibility for Multiple entry Schengen Visas</h3>
                        <p>Both single and multiple-entry visas available for  travel. <span
                                class="hidden-content">First-time visitors should apply for single-entry, while
                                multiple-entry allows unlimited visits within the validity period.</span></p>
                        <a href="#" class="read-more">Read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
    
    <div id="custom-tooltip" style="
    position: absolute;
    background: #333;
    color: #fff;
    padding: 5px 8px;
    border-radius: 4px;
    font-size: 12px;
    display: none;
    pointer-events: none;
    z-index: 1000;
"></div>

    <script src="../link.js"></script>
    <script src="../scripts.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const dateElement = document.getElementById("current-date");
            const today = new Date();

            const options = { day: 'numeric', month: 'short', year: 'numeric' };
            const formattedDate = today.toLocaleDateString('en-GB', options).replace(/ /g, ' ');

            dateElement.textContent = formattedDate;
        });

    </script>
    <script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script><script id="zsiqscript" src="https://salesiq.zohopublic.in/widget?wc=siq4e31759c72faf117d54e41692276fce110fbe6e6e6d715a6aaac7a0c47204f0c" defer></script>

</body>

</html>

