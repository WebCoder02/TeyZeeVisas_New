
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahrain Visa Checklist</title>
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
    <h1>Bahrain Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>Bahrain Tourist Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                        <td>1</td>
                        <td>Completed and signed application form.
                            <br><strong>Note:</strong> For applicants under 18, parents must sign and attach copies of both parents' passports.<br>
                            <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                            <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://www.npra.gov.bh/services/visa-and-residence-permit/visa-services/"class="doc-link-special">Download Application Form</a>
                        <a href="https://visa.vfsglobal.com/one-pager/singapore/bahrain/english/pdf/tourism-checklist-nov-2021.pdf"class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br><!-- Eligibility Check -->
                                
                                <a href="https://www.teyzeevisas.com/php/check_now.php"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=Bahrain_Customer" class="doc-link-special">Login</a>
                            </p>
                        <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Passport Copy</td>
                        <td>Scanned copy of the first and last page of your passport.</td>
                    </tr>
                    <tr>
                        <td>Photograph</td>
                        <td>Scanned recent colour photograph as per photo specification.</td>
                    </tr>
                    <tr>
                        <td>Flight Ticket</td>
                        <td>Confirmed return flight ticket.</td>
                    </tr>
                    <tr>
                        <td>Invitation Documents</td>
                        <td>Invitation letter, Smart Card, and visa copy of the invitee (if visiting relative or friend in Bahrain).</td>
                    </tr>
                    <tr>
                        <td>Employed: Leave Certificate</td>
                        <td>Leave sanctioned certificate with company seal and approval for leave.</td>
                    </tr>
                    <tr>
                        <td>Employed: Salary Slips</td>
                        <td>Salary slips for the last 3 months.</td>
                    </tr>
                    <tr>
                        <td>Self-Employed: Business Proof</td>
                        <td>Business registration license, Memorandum of Association, or partnership deed.</td>
                    </tr>
                    <tr>
                        <td>Self-Employed: Company Bank Statement</td>
                        <td>Stamped and updated bank statement for the last 6 months with bank seal.</td>
                    </tr>
                    <tr>
                        <td>Self-Employed: ITR</td>
                        <td>Company’s income tax returns for the last 3 years.</td>
                    </tr>
                    <tr>
                        <td>Retired: Retirement Proof</td>
                        <td>Pension book or statement showing retirement status.</td>
                    </tr>
                    <tr>
                        <td>Student: ID Card</td>
                        <td>Student ID card issued by school, college, or institute.</td>
                    </tr>
                    <tr>
                        <td>Minor: Birth Certificate</td>
                        <td>Birth certificate showing names of both parents.</td>
                    </tr>
                    <tr>
                        <td>Minor: Letter of Consent (NOC)</td>
                        <td>
                        If traveling with one parent: legalized letter of consent from the other parent.<br>
                        If traveling alone or without either parent: notarized letter of consent from both parents permitting travel.
                        </td>
                    </tr>
                    <tr>
                        <td>Minor: Death Certificate</td>
                        <td>Required if one or both parents are deceased.</td>
                    </tr>
                    <tr>
                        <td>Minor: Parent's ID Proof</td>
                        <td>ID proof of both parents.</td>
                    </tr>
                    <tr>
                        <td>Visiting Friend or Relative: Invitation Letter</td>
                        <td>Letter stating relationship, purpose of visit, and assumption of responsibility for stay.</td>
                    </tr>
                    <tr>
                        <td>Visiting Friend or Relative: ID Proof</td>
                        <td>Copy of inviter’s passport or resident permit.</td>
                    </tr>
                    <tr>
                        <td>Visiting Friend or Relative: Address Proof</td>
                        <td>Utility bill of inviter showing address.</td>
                    </tr>
                    <tr>
                        <td>Sponsored Visit: Sponsorship Letter</td>
                        <td>Letter detailing visitor’s name, purpose of visit, relationship, travel dates, and additional info.</td>
                    </tr>
                    <tr>
                        <td>Sponsored Visit: ID Proof</td>
                        <td>Copy of sponsor’s passport or resident permit.</td>
                    </tr>
                    <tr>
                        <td>Sponsored Visit: Address Proof</td>
                        <td>Utility bill showing sponsor’s address.</td>
                    </tr>
                    <tr>
                        <td>Sponsored Visit: Financial Proof</td>
                        <td>Updated bank statement and pay slips as proof of financial support.</td>
                    </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>Bahrain Business Visa Checklist</h2>
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
                        <a href="https://www.npra.gov.bh/services/visa-and-residence-permit/visa-services/"class="doc-link-special">Download Application Form</a>
                        <a href="https://visa.vfsglobal.com/one-pager/singapore/bahrain/english/pdf/tourism-checklist-nov-2021.pdf"class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br><!-- Eligibility Check -->
                                
                                <a href="https://www.teyzeevisas.com/php/check_now.php"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="/php/login.php?country=Bahrain_Customer" class="doc-link-special">Login</a>
                            </p>
                        <?php endif; ?></td>
                </tr>
               <tr>
                    <td>Passport Copy</td>
                    <td>Scanned copy of the first and last page of your passport.</td>
                </tr>
                <tr>
                    <td>Photograph</td>
                    <td>Scanned recent colour photograph as per photo specification.</td>
                </tr>
                <tr>
                    <td>Flight Ticket</td>
                    <td>Confirmed return flight ticket.</td>
                </tr>
                <tr>
                    <td>Recommendation Letter</td>
                    <td>
                    Introduction/recommendation letter from one of the following:
                    <ul>
                        <li>Chambers of Commerce and Industries, Government of India</li>
                        <li>Ministry of Commerce and Industry of India</li>
                        <li>Export Promotion Council of India</li>
                        <li>Or reference number from Ministry of Foreign Affairs, Bahrain</li>
                    </ul>
                    </td>
                </tr>
                <tr>
                    <td>Company Registration Certificate</td>
                    <td>Issued by the Ministry of Commerce and Industry of India.</td>
                </tr>
                <tr>
                    <td>Income Tax Documents</td>
                    <td>Copies of income tax returns for the last three years.</td>
                </tr>
                <tr>
                    <td>Company Letter</td>
                    <td>Letter from the company addressed to the embassy introducing the businessman for visa issuance.</td>
                </tr>
                <tr>
                    <td>Invitation Letter</td>
                    <td>From the local partner or prospective partner company in Bahrain.</td>
                </tr>
                <tr>
                    <td>Partner License (JAWAZ)</td>
                    <td>Copy of the license (JAWAZ) of the local partner or prospective partner company in Bahrain.</td>
                </tr>
                <tr>
                    <td>Note</td>
                    <td>The Embassy/Consul General reserves the right to request additional documents or conduct a personal interview with the applicant.</td>
                </tr>
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
                    <td>Check list of Schengen countries: Hong Kong, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Hong Kong, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Hong Kong, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Hong Kong, and
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
        <strong>Note:</strong><p style="text-align:justify; text-indent: 5%">Above information is compiled by TeyZee Visas team on a best effort basis. While every attempt is made for accuracy, we are not responsible for any errors or delayed updates.   </p> <br>
        <p style="text-align:justify; text-indent: 5%">This checklist is provided for informational purposes only. Requirements may change, so it's recommended to verify the current requirements with the Embassy of Hong Kong or consulate in your country before
        applying.</p>
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


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for Hong Kong- https://teyzee.com/France-visa-fees; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
