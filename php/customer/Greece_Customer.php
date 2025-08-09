
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greece Visa Checklist</title>
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
                    <img src="https://teyzeevisas.com/VisaImages/destinations/Teyzee_logo_240w_500h.jpeg" alt="TeyZee Visas Logo">
                </a>

            </div>
            <div class="header-actions">
                <a href="https://wa.me/919029027420" class="contact"><i class="fab fa-whatsapp"></i> Chat with us</a>
                <a href="tel:+919029027420" class="contact"><i class="fas fa-phone"></i> Call Us</a>
                <a href="#" class="login-btn">Login</a>
            </div>
        </div>
    </header>-->
    <h1>Greece Schengen Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>Greece Tourist Visa Checklist</h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Application form for a Schengen visa, fully filled in and signed by the applicant.
                        <br>
                        
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://in-gr.gvcworld.eu/sites/default/files/paragraphs/quicklinks/202407/vaf-en_v8-240716.pdf" class="doc-link-special">Download Application Form</a>
                        <a href="https://in-gr.gvcworld.eu/sites/default/files/paragraph/files/notice_from_the_embassy_of_greece_2022.pdf" class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                 <?php 
                                $token = base64_encode(json_encode([
                                    'country' => 'greece',
                                    'visa_type' => 'eligibility_check', 
                                    'amount' => 499,
                                    'timestamp' => time()
                                ]));
                                ?>
                                <a href="/payments/payment.php?country=greece&visa_type=eligibility_check"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="https://www.teyzeevisas.com/php/login.php?redirect_to=/php/Greece_Customer.php" class="doc-link-special">Login</a>
                            </p>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>One recent passport-size photograph in colour with white background, according to the relevant
                    specifications laid down by ICAO.</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><strong>Passport</strong>, which should:<br/>
                    -be of a validity exceeding by three months the ending date of the visa length<br/>
                    -include at least two blank pages<br/>
                    -have been issued within the previous ten years.
                </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Travel medical insurance covering the territory of all Member States as well as the entire period of
                    the intended stay The insurance policy should cover any eventual expenses relating to repatriation for
                    medical reasons, urgent medical attention and/or emergency hospital treatment.<br/>
                     Minimum coverage: 30.000 Euro.<br/>
                    Important information for applications lodged in India: as of 01/10/2013, travel medical insurances will
                    be accepted only if they are issued by specific Indian insurance companies. Please refer to the following
                    link (“All about visas”)
                </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Clear photocopy of the first and last page of the passport including photocopies of all Visas and stamps</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Previous passport (if applicable)</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Cover Letter explaining the details of visit</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>List of supporting documents to be submitted by visa applicants in India</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>I. Documents to be submitted by all applicants</td>
                </tr>
                <tr> 
                    <td> </td>
                    <td>1. Proof of means of transport<br/>
                    Flight reservation of return or round ticket. If the applicant is travelling to several Schengen
                    States, proof of intra-Schengen flight reservation, train itinerary or car rental.</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>2. Proof of lodging<br/>
                    Hotel reservations, rental of holiday home or campus residence reservation. 
                    If the applicant intends to stay with a family member or a friend, proof of sponsorship 
                    and/or private accommodation from the host. Individual Schengen States may require applicant 
                    to present proof of sponsorship and/or private accommodation by completing a form drawn up by the Schengen State’s competent authority (here in after 'national form').
                     If applicant is travelling to several Schengen States, proof of lodging in each of them.
                </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>3. Proof of financial means<br/>
                        - Original private bank statement showing movements in the last three months, duly stamped and
                        signed by the bank;<br/>
                        - Indian income tax return acknowledgment for the last two assessment years;<br/>
                        - In addition:<br/>
                        - payslips for the last three months;<br/>
                        - employment contract;<br/>
                        - employers statement on approval for holidays.<br/><br/>

                        If the applicant is a company owner or self-employed:<br/>
                        - certificate of registration of the company.<br/><br/>

                        If the applicant is sponsored:<br/>
                        proof of sponsorship and/or private accommodation by completing a national form of the Schengen
                        State concerned (seethe website of the Member State of destination)<br/>
                        If the applicant is retired:<br/>
                        - pension statements for the last three months;<br/>
                        - proof of regular income generated by ownership of property or business.<br/>

                        Relationship proof-<br/>
                        - Spouse travelling together Spouse name to be endorsed in both the passports otherwise Original<br/>
                        Marriage Certificate required apostille from MEA</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>II. Documents to be submitted depending on the travel purpose</td>
                </tr>
                <tr>
                    <td> </td>
                    <td> 1. Business trips:<br/>
- invitation from the inviting company or organisation;<br/>
- cover letter from the applicant's employer;<br/>
Both letters must confirm, as a minimum:<br/>
a) the applicant's identity;<br/>
b) the purpose of the journey (meetings, conferences, training or business related events);<br/>
c) the period and place of intended stay.<td>
                </tr>
                <tr>
                    <td> </td>
                    <td> 2. Journeys undertaken for the purpose of study, research, or other types of internship:<br/>
                        - certificate of admission or registration at an educational establishment for the purpose of
                        attending academic or vocational courses, or cover letter from the inviting company;<br/>
                        - student cards or certificates of the establishment at which the applicant is enrolled.</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>3. Journeys undertaken for the purpose of tourism<br/>
                        - certificate of the travel agency confirming the booking of an organised trip or any other
                        appropriate document indicating the travel plans;<br/>
                        - marriage certificate, if applicant is married and cannot provide evidence of marital status in
                        the passport; copy of ration card, if applicable.<br/></td>
                </tr>
                <tr>
                    <td> </td>
                    <td> 4. Journeys undertaken for the purpose or visiting family/friends:<br/>
                    - marriage certificate, if applicant is married and cannot provide evidence of marital status
                    in the passport,copy of the ration card, if applicable;<br/>
                    - certificate proving the existence of family relationship, if applicant is visiting relatives.</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>5. Journeys undertaken to attend cultural, sports or religious events and for film crews:<br/>
                    - invitation, entry tickets, enrolments or programmes.<br/>
                    - For film crews:<br/>
                    a) letter from the film company specifying title, synopsis and shooting locations of
                        film;<br/>
                    b) complete list of names of travelling crew members along with their roles;<br/>
                    c) letter from the agency in the Schengen State confirming arrangements for film
                    permits;<br/>
                    d) certificate of registration with the Indian Motion Pictures Producers Association
                    or Film Chamber of Commerce.<br/></td>
                </tr>
                <tr>
                    <td> </td>
                    <td>6. Journeys of members of official delegations:<br/>
- copy of the official invitation;<br/>
- Note verbal issued by the sending authority(ies) concerned confirming:<br/>
a) the identity of the applicant<br/>
b) the purpose of the journey (meetings, consultations, negotiations or events held by
intergovernmental organizations);<br/>
c) the period of intended stay;<br/>
d) the place of stay.</td>
                </tr>
                <tr>
                    <td> </td>
                    <td>
                    7. Journeys undertaken for the purpose of medical treatment<br/>
                    - certificate from a medical doctor or a medical institution confirming the need for
                    specific medical treatment to be received in the Member State of destination;<br/>
                    - official document from the receiving medical institution confirming that the specific
                    medical treatment can be performed and patient be accepted accordingly;<br/>
                    - proof of pre-payment of the treatment;<br/>
                    - any other correspondence between the sending medical doctor and the receiving medical
                    institution.
                    </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>8. Seafarers:
         a) Employment contract/appointment letter (showing duration of employment)
              Copy of the seafarer's working contracts/appointment letter in order to board the ship.
         b) Original Seaman's book
         c) Invitation from the shipping company/ maritime agency of the Member State where
             the seafarer will join the boat. The invitation must be signed and bear the stamp
             of the company/agency and include the following data:<br/>
          name and family name of the seafarer<br/>
          place and date of birth, passport number, seafarer's book number<br/>
          date of issue, period of validity of passport and the seafarer’s book<br/>
          the seafarer's position on the vessel (if there are several seafarers, their information can
          be included in a list, signed and stamped, and annexed to the invitation letter)<br/>
          name and flag of the boat<br/>
          port and date of boarding and disembarking<br/>
          itinerary that the seafarer will follow to arrive in the Member State of destination/ transit
(including date and entry point (airport) to the Schengen area).<br/>
In the letter of invitation, the shipping company/maritime agency based in the Member State should
indicate the name and address of the Indian agency it is collaborating with and will be responsible for
submitting the visa applications.<br/>
The shipping company/maritime agency based in the Member State is also required to indicate that it
will bear all responsibility for the seafarer upon his/her arrival in the Member State (including in the
event of repatriation) and ensure that he/ she boards the ship.<br/>
           d) Flight reservation (if applicable)<br/>
           e) If the visa application is presented by a shipping company/ maritime agency of India, a
               covering letter of invitation by the agency/ company including the list of seafarers applying
            </td>
                </tr>
                <tr>
                    <td> </td>
                    <td>9. Airport transit<br/>
                    − Visa or other entry permit for the third country of destination.<br/>
                    − Documents in relation to the onward journey to the final destination after the
                    intended airport transit.
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><strongn>Note:</strong><br/>
                    1) Original documents and passport submitted must be accompanied along with a copy<br/>
                    2) The Embassy may, in justified cases, request additional documents<br/>
                    3) The visa fee is not refunded if the visa is refused.</td>
                </tr>

            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>Greece Business Visa Checklist</h2>
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
                        <a href="https://www.mfa.gr/missionsabroad/en/india-en/visas" class="doc-link-special">Download Application Form</a>
                        <a href="https://in-gr.gvcworld.eu/sites/default/files/paragraph/files/notice_from_the_embassy_of_greece_2022.pdf" class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <span class="special-doc">Login to see the Business Visa Application form and the Document Checklist.</span>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                 <?php 
                                $token = base64_encode(json_encode([
                                    'country' => 'greece',
                                    'visa_type' => 'eligibility_check', 
                                    'amount' => 499,
                                    'timestamp' => time()
                                ]));
                                ?>
                                <a href="/payments/payment.php?country=greece&visa_type=eligibility_check"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="https://www.teyzeevisas.com/php/login.php?redirect_to=/php/Greece_Customer.php" class="doc-link-special">Login</a>
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
                        relationship between the Indian and the Greek company 
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
                    <td>Check list of Schengen countries: Austria, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, Greece, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
                        Luxembourg, Malta, Netherlands, Norway, Poland, Portugal, Slovakia, Slovenia, Spain, Sweden, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Austria, Belgium, Czech Republic, Croatia, Denmark, Estonia,
                        Finland, Greece, Germany, Greece, Hungary, Iceland, Italy, Latvia, Liechtenstein, Lithuania,
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
                    <a href="/html/Greece_customer.html">Greece</a> •
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


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for Greece - https://teyzee.com/greece.php; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
