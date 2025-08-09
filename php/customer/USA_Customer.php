
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United States Visa Checklist</title>
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
    <h1>United States Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'student')">Student Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>United States Tourist Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>Application Form</td>
                    <td>
                        <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                                <?php if (isset($_SESSION['user_id'])): ?>
                                <!-- Special links for logged-in users -->
                                <a href="https://www.mofa.gov.ae/en/Missions/Mumbai/Services/Visas"class="doc-link-special">Download Application Form</a>
                                <a href="https://www.gov.uk/government/publications/visitor-visa-guide-to-supporting-documents/guide-to-supporting-documents-visiting-the-uk"class="doc-link-special">Download Document Checklist</a>
                                <?php else: ?>
                                    <p>
                                        If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                        To <strong>Register</strong>, please click the Check Eligibility button:<br><!-- Eligibility Check -->
                                <?php 
                                $token = base64_encode(json_encode([
                                    'country' => 'usa',
                                    'visa_type' => 'eligibility_check', 
                                    'amount' => 499,
                                    'timestamp' => time()
                                ]));
                                ?>
                                <a href="/payments/payment.php?country=usa&visa_type=eligibility_check"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                        <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                        After registration, you will receive your User ID and password on your registered Email ID.<br>
                                        If you have already registered on TeyzeeVisas, please login:<br>
                                        <a href="/php/login.php?country=USA_Customer" class="doc-link">Login</a>
                                    </p>
                                <?php endif; ?>

                    </td>
                </tr>
                <tr><td>Passport</td><td>Valid for at least 6 months beyond intended stay, with at least one blank page.</td></tr>
                <tr><td>Form DS‑160 Confirmation</td><td>Printed DS‑160 barcode page after online submission.</td></tr>
                <tr><td>Visa Fee Payment Receipt</td><td>Receipt for the non‑immigrant visa application fee (usually US$185).</td></tr>
                <tr><td>Photo</td><td>Passport‑style photo meeting official specifications.</td></tr>
                <tr><td>Appointment Letter</td><td>Printed visa interview appointment confirmation.</td></tr>
                <tr><td>Previous Passports</td><td>Any expired passports showing travel history (if applicable).</td></tr>
                <tr><td>Supporting Documents</td><td>Evidence of trip purpose, intent to depart, ability to cover expenses.</td></tr>
                <tr><td>Ties to Home Country</td><td>Proof such as employment, family, property or business establishing intent to return.</td></tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>United States Business Visa Checklist</h2>
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
                            <a href="https://www.mofa.gov.ae/en/Missions/Mumbai/Services/Visas"class="doc-link-special">Download Application Form</a>
                            <a href="https://www.gov.uk/government/publications/visitor-visa-guide-to-supporting-documents/guide-to-supporting-documents-visiting-the-uk"class="doc-link-special">Download Document Checklist</a>
                            <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br><!-- Eligibility Check -->
                                <?php 
                                $token = base64_encode(json_encode([
                                    'country' => 'usa',
                                    'visa_type' => 'eligibility_check', 
                                    'amount' => 499,
                                    'timestamp' => time()
                                ]));
                                ?>
                                <a href="/payments/payment.php?country=usa&visa_type=eligibility_check"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=USA_Customer" class="doc-link">Login</a>
                            </p>
                            <?php endif; ?></td>
                </tr>
                 <tr><td>Passport</td><td>Valid for at least 6 months beyond intended stay, with at least one blank page.</td></tr>
                <tr><td>Form Confirmation</td><td>Printed barcode page after online submission.</td></tr>
                <tr><td>Visa Fee Payment Receipt</td><td>Receipt for the non‑immigrant visa application fee (usually US$185).</td></tr>
                <tr><td>Photo</td><td>Passport‑style photo meeting official specifications.</td></tr>
                <tr><td>Appointment Letter</td><td>Printed visa interview appointment confirmation.</td></tr>
                <tr><td>Previous Passports</td><td>Any expired passports showing travel history (if applicable).</td></tr>
                <tr><td>Supporting Documents</td><td>Evidence of trip purpose, intent to depart, ability to cover expenses.</td></tr>
                <tr><td>Ties to Home Country</td><td>Proof such as employment, family, property or business establishing intent to return.</td></tr>
            </table>
        </div>
        <div id="student" class="tabcontent">
            <h2>United States Student Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Document</th>
                    <th width="70%">Description</th>
                </tr>
                <tr><td>Valid Passport</td><td>Passport valid for at least 6 months beyond intended US stay with blank pages.</td></tr>
                <tr><td>Form I‑20</td><td>Certificate of Eligibility issued by SEVP-approved U.S. institution, signed by student and school.</td></tr>
                <tr><td>DS‑160 Confirmation</td><td>Printed barcode page of online non-immigrant visa application.</td></tr>
                <tr><td>SEVIS Fee Receipt</td><td>Receipt for SEVIS I‑901 fee payment  before visa interview.</td></tr>
                <tr><td>Visa Application Fee Receipt</td><td>Payment proof for the visa (usually US$185/INR equivalent).</td></tr>
                <tr><td>Passport Photographs</td><td>Passport-style photos meeting U.S. consular specifications.</td></tr>
                <tr><td>Academic Documents</td><td>Original transcripts, mark sheets, degrees, test scores (TOEFL/IELTS, GRE, etc.).</td></tr>
                <tr><td>Evidence of Financial Ability</td><td>Bank statements, sponsor affidavit, CA statement showing funds for tuition and living costs.</td></tr>
                <tr><td>Statement of Purpose / Resume</td><td>Purpose of study letter and academic/professional background.</td></tr>
                <tr><td>Appointment Letter(s)</td><td>Printed confirmation of VAC (biometrics) and consular interview appointments.</td></tr>
                <tr><td>Ties to Home Country</td><td>Evidence such as family, property, employment intention to demonstrate return intent.</td></tr>
            </table>
        </div>

        <div id="additional" class="tabcontent"><h2>This Information is available only to users who have logged in.</h2>             
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Special links for logged-in users -->
            <h2>Additional Information Required</h2>
            <table>
                <tr>
                    <th width="40%">How to fill the Visa form</th>
                    <th width="60%">Details</th>
                </tr>
                <tr>
                    <td>Are you visiting any other Schengen countries during your stay?</td>
                    <td>Check list of Schengen countries: United Kingdom, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, United Kingdom, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: United Kingdom, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, United Kingdom, and
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
            <?php endif;?>
        </div>
    </div>

    <div class="note">
        <strong>Note:</strong><p style="text-align:justify; text-indent: 5%">Above information is compiled by TeyZee Visas team on a best effort basis. While every attempt is made for accuracy, we are not responsible for any errors or delayed updates. </p> <br>
        <p style="text-align:justify; text-indent: 5%">This checklist is provided for informational purposes only. Requirements may change, so it's recommended to verify the current requirements with the Embassy of United States or consulate in your country before
        applying.</p>
    </div>
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
                    <a href="/html/switzerland.html">Switzerland</a> •git 
                    <a href="/html/greece_customer.html">Greece</a> •
                    <a href="/html/singapore_customer.html">Singapore</a> •
                    <a href="/html/turkey_customer.html">Turkey</a> •
                    <a href="/html/France_customer.html">France</a> •
                    <a href="#">Russia</a> •
                    <a href="#">United Kingdom</a> •
                    <a href="#">Indonesia</a> •
                    <a href="#">Vietnam</a> •
                    <a href="#">Azerbaijan</a> •
                    <a href="#">United Arab Emirates/a> •
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
                    <a href="#">Malaysia</a> •
                    <a href="#">Netherlands</a> •
                    <a href="#">Philippines</a> •
                    <a href="#">Brazil</a> •
                    <a href="#">Saudi Arabia</a> •
                    <a href="#">Kenya</a> •
                    <a href="#">Portugal</a> •
                    <a href="#">Belgium</a> •
                    <a href="#">Croatia</a> •
                    <a href="#">Lithuania</a> •
                    <a href="#">Morocco</a> •
                    <a href="#">Luxembourg</a> •
                    <a href="#">Hong Kong</a> •
                    <a href="#">Ireland</a> •
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


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for United States- https://teyzee.com/France-visa-fees; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
