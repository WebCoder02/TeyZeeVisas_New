
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singapore Visa Checklist</title>
    <link rel="stylesheet" href="document.css">
    <link rel="stylesheet" href="Country_page.css">
    <link rel="stylesheet" href="styles.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">-->
</head>

<body>
    <?php include 'header.php'; ?>
    <!--Completed Revision 18th June 2025-->
    <!--<header>
        <div class="container header-container">
            <div class="logo">
                <a href="https://www.teyzeevisas.com/">
                    <img src="../VisaImages/destinations/Teyzee_logo_240w_500h.jpeg" alt="TeyZee Visas Logo">
                </a>

            </div>
            <div class="header-actions">
                <a href="https://wa.me/919029027420" class="contact"><i class="fab fa-whatsapp"></i> Chat with us</a>
                <a href="tel:+919029027420" class="contact"><i class="fas fa-phone"></i> Call Us</a>
                <a href="#" class="login-btn">Login</a>
            </div>
        </div>
    </header>-->
    <h1>Singapore Schengen Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'student')">Student Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>Singapore Tourist Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
            <td>1</td>
            <td>Duly completed Form, signed by the applicant.<br>
            Optional Form V39A (Letter of Introduction) from a Singapore SC/PR if available.
            <br>
            <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://www.ica.gov.sg/docs/default-source/ica/forms/form14a.pdf"class="doc-link-special">Download Application Form</a>
                        <a href="https://www.mfa.gov.sg/Overseas-Mission/New-Delhi/Consular-Services/Visa-Information#:~:text=India"class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br><!-- Eligibility Check -->
                                
                                <a href="https://www.teyzeevisas.com/php/check_now.php"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=Singapore_Customer" class="doc-link">Login</a>
                            </p>
                        <?php endif; ?>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Valid passport with ≥6 months validity from entry date, and at least 2 blank visa pages.</td>
          </tr>
          <tr>
            <td>3</td>
            <td>2 recent colour passport photos (35 × 45 mm), plain white background, taken within 3 months.</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Photocopy of passport bio-data page.</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Proof of travel: confirmed flight booking (round-trip or onward).</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Proof of accommodation: hotel booking or local contact address.</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Proof of funds: last 6 months’ bank statements, salary slips or sponsor letter.</td>
          </tr>
          <tr>
            <td>8</td>
            <td>SG Arrival Card submitted 3 days before arrival.</td>
          </tr>
          <tr>
            <td>9</td>
            <td><strong>Note:</strong> e‑Visa decisions typically take 3–5 working days; visa-on-arrival is not available to Indian nationals.</td>
          </tr>
          <tr>
            <td>10</td>
            <td>
                <strong>Important Notes:</strong>
                 <ul>
                    <li>Only authorised visa agents or Singaporean contacts (SC/PR with SingPass) can submit your application.</li>
                    <li>Possession of a visa doesn't guarantee entry—Immigration & Checkpoint Authority (ICA) grants final entry and Visit Pass.</li>
                    <li>Ensure documents in English; translations may be required.</li>
                    <li>All visa and service charges are non-refundable.</li>
                </ul>
            </td>
          </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>Singapore Business Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Document</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>Official Document Links </td>
                    <td><span class="special-doc">Login to see the Business Visa Application form and the Document Checklist.</span>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://www.ica.gov.sg/docs/default-source/ica/forms/form14a.pdf"class="doc-link-special">Download Application Form</a>
                        <a href="https://www.mfa.gov.sg/Overseas-Mission/New-Delhi/Consular-Services/Visa-Information#:~:text=India"class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br><!-- Eligibility Check -->
                                
                                <a href="https://www.teyzeevisas.com/php/check_now.php"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=Singapore_Customer" class="doc-link">Login</a>
                            </p>
                        <?php endif; ?></td>
                </tr>
                <tr><td>Visa Application Form</td><td>Duly completed and signed Form 14A.</td></tr>
                <tr><td>Passport</td><td>Valid for at least 6 months from date of entry, with at least two blank pages.</td></tr>
                <tr><td>Photograph</td><td>Two recent passport-size photos (35 × 45 mm), white background.</td></tr>
                <tr><td>Letter of Introduction (LOI)</td><td>Form V39A from local sponsor representing Singapore business entity.</td></tr>
                <tr><td>Host Invitation</td><td>Letter from Singapore-registered company confirming purpose and schedule of visit.</td></tr>
                <tr><td>Proof of Employment or Business</td><td>Employment letter or company documents from India-side.</td></tr>
                <tr><td>Travel Itinerary</td><td>Return or onward flight bookings.</td></tr>
                <tr><td>SG Arrival Card</td><td>Submit electronically within 72 hours before entry.</td></tr>
                
            </table>
        </div>
        <div id="student" class="tabcontent">
            <h2>Singapore Student Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Document</th>
                    <th width="70%">Description</th>
                </tr>
                <tr><td>Offer Letter & SOLAR Reference</td><td>Letter of acceptance and school‑provided SOLAR application number.</td></tr>
                <tr><td>Completed e‑Form 16</td><td>Filled via SOLAR, printed, signed and submitted within 7 days of receiving reference number.</td></tr>
                <tr><td>Form V36 (if required)</td><td>Provided if additional information is requested (e.g. financial/family details).</td></tr>
                <tr><td>Passport Copy</td><td>Scanned biodata page showing ≥6 months validity from entry date.</td></tr>
                <tr><td>Photographs</td><td>Two recent passport-size colour photos (35×45 mm) on a plain white background.</td></tr>
                <tr><td>Proof of Financial Support</td><td>Bank statement, fixed deposit, student loan sanction or sponsor letter as required.</td></tr>
                <tr><td>Educational Documents</td><td>Transcripts, certificates and proof of prior academic qualifications.</td></tr>
                <tr><td>Passport‑sized Photograph</td><td>Pasted on application forms and/or uploaded as per SOLAR requirements.</td></tr>
                <tr><td>SG Arrival Card</td><td>To be completed online within 72 hours before departure to Singapore.</td></tr>
                <tr><td>Processing Fee</td><td>SGD 30 paid during application submission.</td></tr>
                <tr><td>IPA Letter</td><td>Issued upon approval; serves as entry approval and visa equivalent.</td></tr>
                <tr><td>Issuance Fee</td><td>SGD 60 paid in-person upon collection of Student Pass in Singapore.</td></tr>
                <tr><td>Medical Exam (if required)</td><td>Undergo health screening in Singapore if requested by ICA.</td></tr>
                <tr><td>Confirmation Appointment</td><td>Book COF appointment after receiving IPA and pay issuance fee.</td></tr>
                <tr><td>Biometric Enrollment</td><td>Fingerprint scan and photo taken at ICA Visitor Services Centre.</td></tr>
                
            </table>
        </div>

        <div id="additional" class="tabcontent"><h2>This Information is available only to users who have logged in.</h2>             <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
            <h2>Additional Information Required</h2>
            <table>
                <tr>
                    <th width="40%">How to fill the Visa form</th>
                    <th width="60%">Details</th>
                </tr>
                <tr>
                    <td>Are you visiting any other Schengen countries during your stay?</td>
                    <td>Check list of Schengen countries: Austria, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, Singapore, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Sweden, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Austria, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, Singapore, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Sweden, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>Have you been issued Schengen visa in the past 5 years?</td>
                    <td>If yes, mention last visa start date and end date</td>
                </tr>
                <tr>
                    <td>Have your digital fingerprints previously been taken in connection with a previous application
                        for a Schengen visa?</td>
                    <td>If yes, mentioned Date of taking fingerprints and Visa number of last visa</td>
                </tr>
                <tr>
                    <td>What is your marital status?</td>
                    <td>Pick one: Single, Married, Divorced, Widowed, Unmarried Partner, Separated</td>
                </tr>
                <tr>
                    <td>How long are you planning to stay in Schengen area?</td>
                    <td>No. of days</td>
                </tr>
                <tr>
                    <td>What is your employment status?</td>
                    <td>
                        <ul>
                            <li>If Student, mention: name of the Institution, Institute address, Institute address and
                                Institute email</li>
                            <li>If Employed, mention: Name of the employer/Organization, Job title,
                                Employer/Organization address, Employer/Organization email</li>
                            <li>If Unemployed, mention last job role and last date of working</li>
                            <li>If Self Employed, mention: Job Title</li>
                            <li>If Retired, mention: Date of retirement</li>
                            <li>If Other, mention details on the other employment status</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Will someone else will be paying towards the cost of your trip?</td>
                    <td>
                        If yes, mention if it will be paid by
                        <ol>
                            <li>Friend/family</li>
                            <li>Employer</li>
                            <li>Any other company</li>
                        </ol>
                        Also mention: Name of the person/org who will fund, relationship of the person/org who will
                        fund, how much money they will be paying
                    </td>
                </tr>
            </table>
            <?php endif; ?>
        </div>
    </div>

    <div class="note">
        <strong>Note:</strong> This checklist is provided for informational purposes only. Requirements may change, so
        it's recommended to verify the current requirements with the  embassy or consulate in your country before
        applying.
    </div>
    <?php include 'footer.php'; ?>

    <!-- <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>Address</h3>
                    <div class="address">
                        <p><i class="fas fa-map-marker-alt"></i>
                            </i> A-302, RG City Centre, DB Gupta Road, Delhi 110011</p>
                    </div>
                    <div class="address">
                        <p><i class="fas fa-map-marker-alt"></i>
                            </i> Mumbai - WeWSork Platinum, Marol, Mumbai, Maharashtra, 400059
                        </p>
                    </div>
                    <a href="https://wa.me/919029027420" class="whatsapp-button"><i class="fab fa-whatsapp"></i> Chat
                        with us</a>
                </div>

                <div class="footer-col">
                    <h3>About us</h3>
                    <ul>
                        <li><a href="mailto:business.tours@kalltrip.com">Email us</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="/html/privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- <div class="footer-col">
                    <h3>Refund policy</h3>
                    <ul>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Terms & conditions</a></li>
                    </ul>
                </div> -->
                <!-- <div class="footer-links"> -->
                <!-- <div class="footer-col">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div> --
                <div class="footer-col">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Refund Policy</a></li>
                        <li><a href="/html/privacy.html">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Social</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=61575094024472"><i
                                    class="fab fa-facebook"></i> Facebook</a></li>
                        <li>
                            <a href="https://x.com/TeyzeeVisas" target="_blank"
                                style="text-decoration: none; display: inline-flex; align-items: center;">
                                <span
                                    style="font-weight: bold; font-size: 10px; background-color: rgb(255, 255, 255); color: rgb(160, 151, 151); padding: 0px 4px; border-radius: 8px;">
                                    𝕏
                                </span>
                                <span style="margin-left: 6px; color: rgb(255, 255, 255);">X</span>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/teyzee_visas/"><i class="fab fa-instagram"></i>
                                Instagram</a></li>
                    </ul>
                </div>

            </div>

            <div class="footer-countries">
                <h3>Read more about visas</h3>
                <div class="country-links">
                    <a href="/html/france_customer.html">France</a> •
                    <a href="/html/italy_customer.html">Italy</a> •
                    <a href="/html/germany_customer.html">Germany</a> •
                    <a href="/html/switzerland.html">Switzerland</a> •
                    <a href="/html/greece_customer.html">Greece</a> •
                    <a href="/html/singapore_customer.html">Singapore</a> •
                    <a href="/html/turkey_customer.html">Turkey</a> •
                    <a href="/html/Singapore_customer.html">Singapore</a> •
                    <a href="#">Russia</a> •
                    <a href="#">United Arab Emirates</a> •
                    <a href="#">Indonesia</a> •
                    <a href="#">Vietnam</a> •
                    <a href="#">Azerbaijan</a> •
                    <a href="#">United Kingdom</a> •
                    <a href="#">Spain</a> •
                    <a href="#">South Korea</a> •
                    <a href="#">Georgia</a> •
                    <a href="#">Hungary</a> •
                    <a href="#">Finland</a> •
                    <a href="#">Norway</a> •
                    <a href="#">Egypt</a> •
                    <a href="#">Oman</a> •
                    <a href="#">Sweden</a> •
                    <a href="#">Austria</a> •
                    <a href="#">Denmark</a> •
                    <a href="#">Uzbekistan</a> •
                    <a href="#">Cambodia</a> •
                    <a href="#">Morocco</a> •
                    <a href="#">Netherlands</a> •
                    <a href="#">Philippines</a> •
                    <a href="#">Brazil</a> •
                    <a href="#">Saudi Arabia</a> •
                    <a href="#">Kenya</a> •
                    <a href="#">Portugal</a> •
                    <a href="#">Belgium</a> •
                    <a href="#">Croatia</a> •
                    <a href="#">Lithuania</a> •
                    <a href="#">Ireland</a> •
                    <a href="#">Luxembourg</a> •
                    <a href="#">Hong Kong</a> •
                    <a href="#">Malaysia</a> •
                    <a href="#">Japan</a> •
                    <a href="#">Bahrain</a> •
                    <a href="#">Czech Republic</a> •
                    <a href="#">Romania</a> •
                    <a href="#">Bulgaria</a> •
                    <a href="#">Slovakia</a> •
                    <a href="#">Latvia</a> •
                    <a href="#">Estonia</a>
                </div>
            </div>
            <div class="copyright">
                <p>© 2025 TeyZee Visas. All Rights Reserved.</p>
            </div>
        </div>
    </footer> -->
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].className = tabcontent[i].className.replace(" active", "");
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).className += " active";
            evt.currentTarget.className += " active";
        }

        // JavaScript to redirect users to WhatsApp with template request message
        document.addEventListener('DOMContentLoaded', function () {
            // Select all download links with the class "doc-link"
            const downloadLinks = document.querySelectorAll('.doc-link');

            // WhatsApp number - Replace with your actual number
            const whatsappNumber = "919892527420"; // Format: country code without + followed by number

            // Loop through each download link and modify its behavior
            downloadLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault(); // Prevent the default download behavior

                    // Get the template type from the link
                    const templatePath = link.getAttribute('href').split('/').pop();
                    const templateName = templatePath.replace('.doc', '').replace(/_/g, ' ');


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for Singapore - https://teyzee.com/Singapore-visa-fees; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
