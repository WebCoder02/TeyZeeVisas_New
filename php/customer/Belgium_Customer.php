
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belgium Visa Checklist</title>
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
                <a href="https:www.teyzeevisas.com/">
                    <img src="https:teyzeevisas.com/VisaImages/destinations/Teyzee_logo_240w_500h.jpeg" alt="TeyZee Visas Logo">
                </a>

            </div>
            <div class="header-actions">
                <a href="https:wa.me/919029027420" class="contact"><i class="fab fa-whatsapp"></i> Chat with us</a>
                <a href="tel:+919029027420" class="contact"><i class="fas fa-phone"></i> Call Us</a>
                <a href="#" class="login-btn">Login</a> 
            </div>
        </div>
    </header>-->
    <h1>Belgium Schengen Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>Belgium Tourist Visa Checklist </h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <strong>Application form & Original Passport with old passport :</strong><br>
                        Note: Passport should be valid minimum 06 months from the date of travel, issued within the last 10 years, validity must not exceed 10 years, no hand-written passports accepted, and at least 2 blank pages.<br>
                        
                            <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://visa.vfsglobal.com/one-pager/Belgium/Saudiarabia/english/pdf/Application-for-Schengen-Visa.pdf"class="doc-link-special">Download Application Form</a>
                        <a href="https://visa.vfsglobal.com/one-pager/india/belgium/english/pdf/tv-checklist-en-v2.pdf"class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                 <!-- Eligibility Check -->
                                <?php 
                                $token = base64_encode(json_encode([
                                    'country' => 'belgium',
                                    'visa_type' => 'eligibility_check', 
                                    'amount' => 499,
                                    'timestamp' => time()
                                ]));
                                ?>
                                <a href="/payments/payment.php?country=belgium&visa_type=eligibility_check"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="https://www.teyzeevisas.com/php/login.php?redirect_to=/php/Belgium_Customer.php" class="doc-link-special">Login</a>
                            </p>
                        <?php endif; ?>

                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <strong>Photograph Specification:</strong><br>
                        2 recent photographs, 50mm x 50mm, white background, must follow Indian Govt. norms, glued to form.
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <strong>Evidence of Sufficient Funds :</strong><br>
                        Original 06 months Personal Bank Statement till date updated with bank sign and stamp on each page (A4 Size only).<br>
                        03 years Personal Income Tax Returns Acknowledgement Page only.
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        <strong>If applicant is Employee :</strong><br>
                        Pay Slip (last 6 months).<br>
                        Leave & NOC letter addressed to the consulate/embassy.
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        <strong>If applicant is Self Employee :</strong><br>
                        Business letterhead with sign & stamp & visiting card.<br>
                        Business Registration Proof or Partnership Deed or Memorandum of Article.<br>
                        03 Years Income Tax Return Acknowledgement Page only.<br>
                        06 months Bank Statement with bank sign and stamp on each page (A4 Size only).
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        <strong>If applicant is Retired :</strong><br>
                        Retirement letter from Employer.<br>
                        Pension Payment Order.<br>
                        Pension passbook.<br>
                        Provident Funds slip.
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>
                        <strong>If applicant is Student :</strong><br>
                        NOC from school / college.<br>
                        College or University Photo ID Card Copy.
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>
                        <strong>If visiting as a Tourist :</strong><br>
                        Confirm Hotel bookings.<br>
                        Ticket Booking.<br>
                        Tour Itinerary with confirmation letter (if you are taking a Schedule Tour).
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>
                         <strong>If applicant is unemployed :</strong></br>
                        Applicants who are un-employed need to attach proof of financial support, no detailed bank/ITR requirements listed.
                    </td>
                   

                </tr>
                <tr>
                    <td>10</td>
                    <td>
                        <strong>Overseas medical Policy :</strong><br>
                        Minimum coverage of 30,000 Euro per person. Insurance must cover entire stay in Schengen territory. Minimum 15 days insurance is mandatory from travel date.
                    </td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>
                        <strong>Note :</strong><br>
                        For Schengen visa, all necessary documents should be in photocopy unless asked in original.<br>
                        All applicants must appear in person at local VFS office for fingerprinting. On submission day, fingers must be free from mehndi, cuts, etc.<br>
                        If biometrics were given after 2nd Nov 2015, applications may be submitted on behalf of applicant. Embassy may still call for biometrics again.<br>
                        Visa approval is at the discretion of the consulate/embassy. Best Voyage is not responsible for rejection or delay.<br>
                        No documents will be returned by the consulate/embassy.<br>
                        Must declare if rejected in any country in the last 10 years with year and visa category.<br>
                        Applicants must pay visa fees, VFS charges & courier fees in cash at VFS center.<br>
                        If passport has data page observation, affidavit and newspaper ad in English are mandatory.
                    </td>
                </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>Belgium Business Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Document</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>Official Document Links </td>
                    <td>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://visa.vfsglobal.com/one-pager/india/belgium/english/pdf/tv-checklist-en-v2.pdf"class="doc-link-special">Download Application Form</a>
                        <a href="https://visa.vfsglobal.com/one-pager/india/belgium/english/pdf/tv-checklist-en-v2.pdf"class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                 <!-- Eligibility Check -->
                                <?php 
                                $token = base64_encode(json_encode([
                                    'country' => 'belgium',
                                    'visa_type' => 'eligibility_check', 
                                    'amount' => 499,
                                    'timestamp' => time()
                                ]));
                                ?>
                                <a href="/payments/payment.php?country=belgium&visa_type=eligibility_check"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="https://www.teyzeevisas.com/php/login.php?redirect_to=/php/Belgium_Customer.php" class="doc-link-special">Login</a>
                            </p>
                        <?php endif; ?></td>
                </tr>
                <tr>
                    <td>Original Passport</td>
                    <td>With at least 2 blank pages valid for at least three months after the trip, issued in last 10
                        years</td>
                </tr>
                <tr>
                    <td>Copy of Passport Pages</td>
                    <td>
                        <ul>
                            <li>Clear photocopy of passport first and last page</li>
                            <li>All pages of your travel document containing visas, entry and exit stamps</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Passport size photo</td>
                    <td>35*45mm, 80% face coverage, white background, taken in the last 6 months, teeth should not be
                        visible, ears should be visible</td>
                </tr>
                <tr>
                    <td>Visa application form</td>
                    <td>Put your signature and carry it on the day of appointment</td>
                </tr>
                <tr>
                    <td>Appointment letter</td>
                    <td>This needs be carried on the day of appointment</td>
                </tr>
                <tr>
                    <td>Flight ticket</td>
                    <td>Confirmed roundtrip ticket. Also includes, Reservations for internal transfer within Schengen
                        states (flight, train itinerary or car rental)</td>
                </tr>
                <tr>
                    <td>Hotel booking</td>
                    <td>Hotel bookings for complete stay in Schengen</td>
                </tr>
                <tr>
                    <td>Proof of occupation (If employed)</td>
                    <td>Last 3 months salary slips, Employment contract, NOC from the employer and form 16 
                        <!-- <a href="/templates/noc_from_employer.doc" class="doc-link" target="_blank">Download NOC
                            Template</a> -->
                        </td>
                </tr>
                <tr>
                    <td>Proof of occupation (If self employed)</td>
                    <td>GST certificate, Company registration proof, Company bank statement and company ITR</td>
                </tr>
                <tr>
                    <td>Bank statement</td>
                    <td>Recommended ~120 Euros per day of the trip. Should not be more than 4 days old on appointment
                        day</td>
                </tr>
                <tr>
                    <td>IT return</td>
                    <td>
                        <ul>
                            <li>Copy of personal income tax return + ITR V acknowledgment of last 02 financial year if
                                available</li>
                            <li>If self employed, income tax return + ITR V acknowledgment of last 02 financial year if
                                available</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Travel insurance</td>
                    <td>Minimum coverage of 30,000 Euros</td>
                </tr>
                <tr>
                    <td>Invitation letter</td>
                    <td>
                        <ul>
                            <li>If applicable. With contact details of the host and address</li>
                            <li>Invitation letter from the company</li>
                        </ul>
                        <!-- <a href="/templates/business_invitation_letter.doc" class="doc-link" target="_blank">Download
                            Template</a> -->
                    </td>
                </tr>
                <tr>
                    <td>Company Cover letter</td>
                    <td>Introduction letter by Indian company on a company letterhead mentioning purpose of visit and
                        relationship between the Indian and Belgian company. 
                        <!-- <a href="/templates/company_cover_letter.doc"
                            class="doc-link" target="_blank">Download Template</a> -->
                        </td>
                </tr>
                <tr>
                    <td>Applicant Cover letter</td>
                    <td>Cover letter by the applicant mentioning purpose of visit and other details of the trip
                         <!-- <a
                            href="/templates/cover_letter_template.doc" class="doc-link" target="_blank">Download
                            Template</a> -->
                        </td>
                </tr>
                <tr>
                    <td>Company Sponsorship Letter (from Indian employer)</td>
                    <td>If the trip is sponsored by the Indian company please mention the details too 
                        <!-- <a
                            href="/templates/company_sponsorship_letter.doc" class="doc-link" target="_blank">Download
                            Template</a> -->
                        </td>
                    
                </tr>
            </table>
        </div>

        <div id="additional" class="tabcontent">
            <h2>This Information is available only to users who have logged in.</h2> 
            <?php if(isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
            <h2>Additional Information Required</h2>
            <table>
                <tr>
                    <th width="40%">How to fill the Visa form</th>
                    <th width="60%">Details</th>
                </tr>
                <tr>
                    <td>Are you visiting any other Schengen countries during your stay?</td>
                    <td>Check list of Schengen countries: Belgium, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Belgium, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Belgium, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Belgium, and
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
        <p style="text-align:justify; text-indent: 5%">This checklist is provided for informational purposes only. Requirements may change, so it's recommended to verify the current requirements with the Embassy of Belgium or consulate in your country before
        applying.</p>
    </div>

      <?php include 'footer.php'; ?>
     <!--<footer>
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
                     <a href="https:wa.me/919029027420" class="whatsapp-button"><i class="fab fa-whatsapp"></i> Chat
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

                <div class="footer-col">
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
                 </div> 
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
                         <li><a href="https:www.facebook.com/profile.php?id=61575094024472"><i
                                     class="fab fa-facebook"></i> Facebook</a></li>
                         <li>
                             <a href="https:x.com/TeyzeeVisas" target="_blank"
                                 style="text-decoration: none; display: inline-flex; align-items: center;">
                                 <span
                                     style="font-weight: bold; font-size: 10px; background-color: rgb(255, 255, 255); color: rgb(160, 151, 151); padding: 0px 4px; border-radius: 8px;">
                                     𝕏
                                 </span>
                                 <span style="margin-left: 6px; color: rgb(255, 255, 255);">X</span>
                             </a>
                         </li>
                         <li><a href="https:www.instagram.com/teyzee_visas/"><i class="fab fa-instagram"></i>
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
                     <a href="/html/France_customer.html">France</a> •
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
     </footer>-->
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

         JavaScript to redirect users to WhatsApp with template request message
        document.addEventListener('DOMContentLoaded', function () {
             Select all download links with the class "doc-link"
            const downloadLinks = document.querySelectorAll('.doc-link');

             WhatsApp number - Replace with your actual number
            const whatsappNumber = "919892527420";  Format: country code without + followed by number

             Loop through each download link and modify its behavior
            downloadLinks.forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();  Prevent the default download behavior

                     Get the template type from the link
                    const templatePath = link.getAttribute('href').split('/').pop();
                    const templateName = templatePath.replace('.doc', '').replace(/_/g, ' ');


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for Belgium- https:teyzee.com/belgium.php; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https:wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>