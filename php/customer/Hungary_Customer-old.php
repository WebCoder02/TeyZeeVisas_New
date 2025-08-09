
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hungary Visa Checklist</title>
    <link rel="stylesheet" href="document.css">
    <link rel="stylesheet" href="Country_page.css">
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
</head>

<body>
    <?php include 'header.php'; ?>
    <?php
// Start the session
session_start();

// Check if user is already logged in and has a valid session
if (isset($_SESSION['user']) && isset($_SESSION['session_token'])) {
    $email = $_SESSION['user'];
    $sessionToken = $_SESSION['session_token'];
    
    // If using database-based authentication, verify the session
    try {
        require_once 'database.php';
        require_once 'User.php';
        
        $database = new Database();
        $db = $database->getConnection();
        $user = new User($db);
        
        // Verify session is still valid
        $sessionData = $user->validateSession($sessionToken);
        if ($sessionData && $sessionData['email'] === $email) {
            // User is logged in with valid session, redirect to payment
            header('Location: payment.php');
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
    <!-- <header>
        <div class="container header-container">
            <div class="logo">
                <a href="https://www.teyzeevisas.com/">
                    <img src="https://teyzeevisas.com/VisaImages/destinations/Teyzee_logo_240w_500h.jpeg" alt="TeyZee Visas Logo">
                </a>

            </div>
            <div class="header-actions">
                <a href="https://wa.me/919029027420" class="contact"><i class="fab fa-whatsapp"></i> Chat with us</a>
                <a href="tel:+919029027420" class="contact"><i class="fas fa-phone"></i> Call Us</a>
                 <a href="#" class="login-btn">Login</a>
            </div>
        </div>
    </header> -->
    <h1>Hungary Schengen Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>Hungary Tourist Visa Checklist </h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        Passport<br>
                        • having at least 2 blank pages (without stamps)<br>
                        • valid for at least 3 months after the expiry date of the requested visa / not older than 10 years<br>
                        • non-Jordanian applicants must also provide a legal residence permit valid for at least 1 month after the return date of the intended trip
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        Application form duly completed and signed<br>
                        • full address of the host/hotel must be written in the application<br>
                        • minors:<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;• application form signed by both parents/legal representatives, copy of parent’s ID/passport<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;• if minor travels with one parent: signed authorization letter of the other parent duly legalised, copy of parent’s ID/passport<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;• if minor travels alone: both parents must provide a signed authorization duly legalised, copy of parent’s ID/passport
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        One recent passport-size photo not older than 6 months<br>
                        • Photographs must be clear, well-defined and taken against a plain white background without glasses
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        Travel insurance<br>
                        • covering all Schengen countries, for a minimum coverage of EUR 30.000
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        Round-trip flight ticket reservations<br>
                        • no confirmed booking requested
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>
                        Hotel booking / proof of accommodation<br>
                        • in case of staying in inviting person’s accommodation or a rented apartment, approval of landlord + passport/ID copy of landlord
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Employment letter / proof of business ownership (official English translation)</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Companies certificate of registration (official English translation)</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>For students: school / university letter of enrolment (official English translation)</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Family booklet (if applicable, with official English translation)</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>
                        Business Invitation<br>
                        • company, conference, cultural, sport events invitation letters, etc…<br>
                        • full address, postal code, phone number, email address of inviting entity<br>
                        • name of inviting person / signature and date of invitation<br>
                        • expense and cost sponsor, if applicable<br>
        
                        Invitation from a family member/friend<br>
                        • preferably official invitation letter obtained from Directorate-General for Aliens Policing / OR the following:<br>
                        • ID/passport of the inviting family member or friend<br>
                        • copy of lease contract AND approval letter from the landlord AND passport/ID copy of landlord<br>
                        • copy of residency in Hungary / copy of address card<br>
                        • copy of university ID / active student status / letter of acceptance / letter of award (Only required from students studying in Hungary)<br>
        
                        Inviting person is a holder of a Hungarian Passport<br>
                        • official invitation letter obtained from Directorate-General for Aliens Policing<br>
                        • ID/passport of the inviting family member or friend<br>
                        • proof of accommodation / copy of lease contract / approval letter from the landlord and passport/ID copy of landlord<br>
        
                        Medical Invitation<br>
                        • medical report from Jordan<br>
                        • medical invitation from Hungary / doctor / hospital
                    </td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Proof of family/financial ties to home country</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>
                        Proof of finance for all costs relating to the trip<br>
                        • e.g. signed letter of guarantee<br>
                        • Signed ID/passport copy of person financially responsible for the trip
                    </td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Bank statement<br>• original, from the last 6 months (in English)</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Copies of previous Schengen visas or any other visas (If applicable)</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>
                        Notes<br>
                        • All documents must preferably be presented in ORIGINAL, preferably in English. If applicable, the originals are handed back to applicant after check of conformity of original and copy.<br>
                        • Applications have to be submitted at least 14 working days before the expected date of departure.<br>
                        • The Embassy of Hungary has the right at any time to ask for further supporting documents and/or call the applicant for an interview.
                    </td>
                </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>Hungary Business Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Document</th>
                    <th width="70%">Description</th>
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
                        <!-- <a
                            href="/templates/noc_from_employer.doc" class="doc-link" target="_blank">Download NOC
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
                            <li>Invitation letter from the  company</li>
                        </ul>
                        <!-- <a href="/templates/business_invitation_letter.doc" class="doc-link" target="_blank">Download
                            Template</a> -->
                    </td>
                </tr>
                <tr>
                    <td>Company Cover letter</td>
                    <td>Introduction letter by Indian company on a company letterhead mentioning purpose of visit and
                        relationship between the Indian and  company 
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
                    <td>Check list of Schengen countries: Hungary, Hungary, Hungary, Croatia, Hungary, Hungary,
                        Hungary, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Hungary, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Hungary, Hungary, Hungary, Croatia, Hungary, Hungary,
                        Hungary, France, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Hungary, and
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
        </div>
    </div>

    <div class="note">
        <strong>Note:</strong><p style="text-align:justify; text-indent: 5%">Above information is compiled by TeyZee Visas team on a best effort basis. While every attempt is made for accuracy, we are not responsible for any errors or delayed updates.  Official link for checklist is as follows <a href="https://www.vfsglobal.com/hungary/uk/pdf/Vizumkerdoiv_151223.pdf">Click Here</a> </p> <br>
        <p style="text-align:justify; text-indent: 5%">This checklist is provided for informational purposes only. Requirements may change, so it's recommended to verify the current requirements with the Embassy of Hungary or consulate in your country before
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


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for Hungary- https://teyzee.com/France-visa-fees; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
