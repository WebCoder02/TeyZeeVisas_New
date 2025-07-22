
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Kingdom Visa Checklist</title>
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
    <h1>United Kingdom Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'student')">Student Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>United Kingdom Tourist Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
            </td>
          </tr>
          <tr>
            <td>Application Form</td>
            <td>
                <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://www.mofa.gov.ae/en/Missions/Mumbai/Services/Visas">Download Application Form</a>
                        <a href="https://www.gov.uk/government/publications/visitor-visa-guide-to-supporting-documents/guide-to-supporting-documents-visiting-the-uk">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                <a href="/php/payment.php?country=uk&amount=499" class="doc-link">Check Eligibility</a><br>
                                Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=uk" class="doc-link">Login</a>
                            </p>
                        <?php endif; ?>

            </td>
          </tr>
          <tr>
            <td>Passport and Travel Information</td>
            <td>a. Valid passport: Your current passport should be valid for the entirety of your stay, with at least one blank page for the visa. Include colour photocopies of the photo page and any previous visas.<br/>
                b. Any previous passports: Submit all old passports you possess to provide evidence of your travel history.<br/>
                c. Travel itinerary (if applicable): If applicable, include a detailed plan of your stay in the UK, including dates, locations, and purposes of travel. This is particularly relevant for tourist visas.
            </td>
        </tr>
        <tr>
            <td>Financial Documents</td>
            <td>a. Bank statements: Provide recent statements (typically the last 3-6 months) to prove you have sufficient funds for your visit. These should clearly show your name and the account balance.<br/>
                b. Salary slips: Recent payslips (usually for the last 3-6 months) to demonstrate steady employment and income.<br/>
                c. Proof of financial means to support stay in the UK: This could include additional documents like a letter from your employer stating your salary, financial dependency documents if someone is supporting you financially, or proof of pension if applicable.</td>
        </tr>
        <tr>
            <td>Employment and Academic Documents</td>
            <td>a. Employment letters: An employment letter from your current employer that outlines your role, salary, length of employment, and the purpose of your visit to the UK (if related to your job).<br/>
                b. Academic Records (for student visas): Admission letters, Confirmation of Acceptance for Studies (CAS) form, and transcripts or certificates from your current or previous educational institutions.</td>
        </tr>
        <tr>
            <td>Accommodation Details</td>
            <td>a. Address in the UK: Details of where you will stay throughout your visit. This could be a residential address, a hotel, or other temporary accommodation.<br/>
                b. Booking Confirmations: If applicable, include reservations for hotels or rentals, which confirm your planned accommodations.</td>
        </tr>
        <tr>
            <td>Additional Documents</td>
            <td>a. Birth certificates: Needed primarily if you are applying for visas that involve family members, such as dependents or spouses.<br/>
                b. Marriage certificates (if applicable): Required for those applying for visas based on their partnership or marriage to a UK citizen or resident.<br/>
                c. Previous UK visas (if applicable): If you have previously been to the UK, include copies of your old visa stickers or stamps as proof of prior compliance with UK immigration laws.
            </td>
        </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>United Kingdom Business Visa Checklist</h2>
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
                            <a href="https://www.mofa.gov.ae/en/Missions/Mumbai/Services/Visas">Download Application Form</a>
                            <a href="https://www.gov.uk/government/publications/visitor-visa-guide-to-supporting-documents/guide-to-supporting-documents-visiting-the-uk">Download Document Checklist</a>
                            <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                <a href="/php/payment.php?country=uk&amount=499" class="doc-link">Check Eligibility</a><br>
                                Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=uk" class="doc-link">Login</a>
                            </p>
                            <?php endif; ?></td>
                </tr>
                <tr><td>Passport & Travel History</td><td>Valid passport with at least one blank page; include previous passports if available.</td></tr>
                <tr><td>Visa Application Form</td><td>Completed online form signed and dated by applicant.</td></tr>
                <tr><td>Photographs</td><td>Two recent passport-size colour photos meeting UK biometric standards.</td></tr>
                <tr><td>Invitation Letter</td><td>From UK company detailing business purpose, duration, host contact and scheduled activities.</td></tr>
                <tr><td>Employer Letter</td><td>Letter from Indian employer confirming role, salary, leave approval and business reason.</td></tr>
                <tr><td>Proof of Business Activities</td><td>Correspondence, contracts, registration documents showing business relations.</td></tr>
                <tr><td>Proof of Funds</td><td>Bank statements (last 3–6 months), payslips or financial documents proving affordability.</td></tr>
                <tr><td>Accommodation & Travel Itinerary</td><td>Details of where you will stay and flight bookings or planned itinerary.</td></tr>
                <tr><td>Cover Letter</td><td>Personal letter explaining purpose of visit, itinerary, financial plans and intent to return.</td></tr>
                <tr><td>Ties to Home Country</td><td>Evidence such as employment letter, family, property, or business to show return intent.</td></tr>
                <tr><td>Translation</td><td>Certified English/Welsh translations with translator's statement for any non-English documents.</td></tr>
                <tr><td>Biometric Appointment</td><td>Attend local Visa Application Centre for fingerprint and photo submission.</td></tr>
                <tr><td>Visa Fee</td><td>Pay application fee ; healthcare surcharge if staying longer.</td></tr>
            </table>
        </div>
        <div id="student" class="tabcontent">
            <h2>United Kingdom Student Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Document</th>
                    <th width="70%">Description</th>
                </tr>
                <tr><td>Passport / Travel Document</td><td>Current valid passport or travel document; must have at least one blank page.</td></tr>
                <tr><td>Confirmation of Acceptance for Studies (CAS)</td><td>Unique CAS reference from your UK course provider.</td></tr>
                <tr><td>Proof of Funds</td><td>Evidence to cover course fees and living costs (bank statements, sponsor letters, etc.).</td></tr>
                <tr><td>ATAS Certificate (if required)</td><td>Valid Academic Technology Approval Scheme certificate for relevant courses.</td></tr>
                <tr><td>Parental Consent (if under 18)</td><td>Consent letters and proof of relationship if you are under 18.</td></tr>
                <tr><td>Tuberculosis Test Certificate</td><td>TB test result from approved clinic, if applicable.</td></tr>
                <tr><td>Proof of English Proficiency</td><td>IELTS/TOEFL or equivalent, if not stated on CAS.</td></tr>
                <tr><td>Visa Application Form</td><td>Completed online application form and payment receipt.</td></tr>
                <tr><td>Photographs</td><td>Two recent passport-size photos meeting UKVI specifications.</td></tr>
                <tr><td>Healthcare Surcharge (IHS)</td><td>Receipt showing payment for Immigration Health Surcharge.</td></tr>
                <tr><td>Biometric Information</td><td>Fingerprint and photo submission at a UK Visa Application Centre.</td></tr>
                <tr><td>Additional Supporting Documents</td><td>Evidence such as employment letters, educational transcripts, SOP, etc., if requested.</td></tr>
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
        <p style="text-align:justify; text-indent: 5%">This checklist is provided for informational purposes only. Requirements may change, so it's recommended to verify the current requirements with the Embassy of United Kingdom or consulate in your country before
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


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for United Kingdom- https://teyzee.com/France-visa-fees; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
