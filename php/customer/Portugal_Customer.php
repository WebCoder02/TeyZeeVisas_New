
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portugal Visa Checklist</title>
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
    <h1>Portugal Schengen Visa Checklist</h1>

    <div class="tab-container">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'tourist')">Tourist Visa</button>
            <button class="tablinks" onclick="openTab(event, 'business')">Business Visa</button>
            <button class="tablinks" onclick="openTab(event, 'additional')">Additional Information</button>
        </div>

        <div id="tourist" class="tabcontent active">
            <h2>Portugal Tourist Visa Checklist </h2>
            <table>
                <tr>
                    <th width="30%">Documents</th>
                    <th width="70%">Description</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Application Form & Valid national passport:<br>
                    • Issued within the last 10 years and with at least 3 months validity after the scheduled return.<br>
                    • Passports with observations regarding the front data page (biographical data) will not be accepted<br>
                    • Passports must have at least two empty pages to affix the visa.<br>
                    • The Schengen states do not accept Indian handwritten passports or passports that contains a manual entry made after 01/04/2010 where the biographical data (name, place, date of birth and sex) were changed.
                    <br>
                    
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <!-- Special links for logged-in users -->
                        <a href="https://www.vfsglobal.com/one-pager/portugal/india/english/pdf/schengen_form_en_new_2024.pdf" class="doc-link-special">Download Application Form</a>
                        <a href="https://www.vfsglobal.com/one-pager/portugal/india/english/pdf/checklist_for_schengen_visa_tourism_cg_new.pdf" class="doc-link-special">Download Document Checklist</a>
                        <?php else: ?>
                            <span class="special-doc">Login to see the Visa Application form and the Document Checklist.</span>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                 <!-- Eligibility Check -->
                                <?php 
                                $token = base64_encode(json_encode([
                                    'country' => 'portugal',
                                    'visa_type' => 'eligibility_check', 
                                    'amount' => 499,
                                    'timestamp' => time()
                                ]));
                                ?>
                                <a href="/payments/payment.php?country=portugal&visa_type=eligibility_check"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="https://www.teyzeevisas.com/php/login.php?redirect_to=/php/Portugal_Customer.php" class="doc-link-special">Login</a>
                            </p>
                        <?php endif; ?>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Previous passport/s:<br>
                    • If any, irrespective of its condition, bound together with rubberband, not stapled (in case lost a note is required).</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Previous Schengen visas, if any:<br>
                    • Clear photocopies of all previous Schengen Visas; if stamped on another passport, together with photocopies of the first page (bio-data) and last page of the passport.</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Valid UK, USA or Canada visas, if any:<br>
                    • Clear photocopies of these visas.<br>
                    • If the applicant continues to travel to a third country (i.e. UK, USA, Canada, or others) after leaving the Schengen area, the visa of the next country has to be obtained first.</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Previous refused visas, if any:<br>
                    • If you have been refused a visa by an Embassy or High Commission, a refusal notice or a written explanation about the reasons of refusal is needed.</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Proof of legal residence:<br>
                    • If the applicant is not a national of India, evidence of his/her legal residence in this country (residence permit).</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>2 passport size pictures:<br>
                    • White background, not older than 6 months (size 35-40 mm in width, not copied or scanned picture).<br>
                    • One picture must be pasted on the application<br>
                    • One picture has to be clipped on the last page of the passport. Stapled or pinned pictures cannot be accepted.</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Personal covering letter:<br>
                    • Original letter in which the applicant introduces themselves, explains the purpose and complete plan of his/her visit and with reference to proof of intended means of transport and itinerary. The cover letter should also mention the names and passport numbers, and relation of accompanying travelers and attach their passport and ticket copies. If the accompanying travellers already possess a valid Schengen visa, a copy of the same has to be enclosed. If applying through another Mission, details have to be provided.</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Transport document/flight reservation:<br>
                    • Roundtrip flight reservation with the name of the traveller showing the date of departure and the date of return.<br>
                    • For applicants who plan to stay in several Schengen countries, proof of travel itinerary (if travelling to several Schengen states, proof of intra-Schengen flight reservation, train or bus itinerary or car reservation).</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Travel Insurance (Original) together with the Travel Health Declaration:<br>
                    • Minimum coverage of 30,000 Euro / 50,000 USD / 50,000 CHF per person.<br>
                    • Coverage of all expenses which might arise in connection with repatriation for medical reasons, urgent medical attention and/or emergency hospital treatment.<br>
                    • The insurance has to cover the entire stay in Schengen territory.<br>
                    • The document must be original.</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Accommodation in Portugal / Schengen States:<br>
                    • Confirmation of hotel reservation, rental document of holiday home or campus residence reservation package tour, advance payments for the entire duration of the planned stay in the Schengen area.</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Birth certificate</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Proof of financial means:<br>
                    • All documents must be originals; bank documents with stamp and signature of the Bank.</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>If employed:<br>
                    • Last three months salary slips and last three months salary bank account statements.<br>
                    • Last three months personal bank account statements.<br>
                    • Personal Income Tax Return (ITR) (only ITR-V, Indian Income Tax Return Verification Form or Acknowledgement is accepted) for the last two assessment years.<br>
                    • Employer’s letter on approval for holidays (the employer may state the designation, current profile of the applicant, place of residence in India, purpose and itinerary of the visit, number of days of leave authorised).</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>If self-employed and/or company owner:<br>
                    • Business registration certificate / GST Registration with annex A & B / Partnership Deed / Proof of proprietorship or other proof of ownership.<br>
                    • Last three months personal and business bank account statements.<br>
                    • Company’s and personal Income Tax Return (ITR) (only ITR-V, Indian Income Tax Return Verification Form or Acknowledgement is accepted) for the last two assessment years.</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>If company holder with business partners:<br>
                    • Business registration certificate / GST Registration with annex A & B / Partnership Deed / Proof of proprietorship or other proof of ownership, letter from the partners.<br>
                    • Last three months personal and business bank account statements.<br>
                    • Company’s and personal Income Tax Return (ITR) (only ITR-V, Indian Income Tax Return Verification Form or Acknowledgement is accepted) for the last two assessment years.<br>
                    • Letter from the partner(s).</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>If retired:<br>
                    • Personal pension bank statement for the last three months.<br>
                    • Proof of regular income generated by ownership of property or business.</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>If Student or unemployed:<br>
                    • Parents or legal guardians must provide their personal bank statements for the last three months (if the student is a minor).<br>
                    • Personal Income Tax Return (ITR) (only ITR-V, Indian Income Tax Return Verification Form or Acknowledgement is accepted) for the last two assessment years along with a confirmation letter of financial support and copies their passports.<br>
                    • Letter confirming enrolment in the college, school or university.<br>
                    • No objection certificate from college, school or university.</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>If sponsored or invited by a Portuguese citizen or by a citizen legally resident in Portugal:<br>
                    • The “Statement of Responsibility” (Termo de Responsabilidade) filled in, signed by the sponsor/invitee, together with a photocopy of sponsor/invitee’s Portuguese ID card or Passport or copy of the Portuguese residence permit (if the invitee/sponsor is residing in Portugal and he/she is not a Portuguese Citizen).<br>
                    • If the invitee/sponsor is your spouse, marriage certificate is mandatory (with Hague Apostille for Indian nationals).<br>
                    • If the invitee/sponsor is your parent, birth certificate is mandatory (with Hague Apostille for Indian nationals).<br>
                    • The “Statement of Responsibility” must be submitted with the sponsor/invitee the following supporting documents:<br>
                    a. Declaração de IRS (Portuguese Income Tax Declaration) of the previous two years;<br>
                    b. Salary Slips of the previous three months;<br>
                    c. Portuguese bank statements of the previous three months;<br>
                    d. Title of property in Portugal or rental contract (if sponsor/invitee is providing the accommodation).<br>
                    • The “Statement of Responsibility” must be original, duly certified by a Portuguese Public Notary or lawyer.</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>If sponsored by any other:<br>
                    • If from India, the sponsorship letter has to be notarized by a Public Notary.<br>
                    • If the sponsor is not in India, the sponsorship letter should be notarized/attested by a Public Notary or lawyer if in the EU or from the respective Embassy/Consulate in other countries.</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>MINORS:<br>
                    • Birth certificate (with Hague Apostille).<br>
                    • If the minor is travelling with only one parent, written consent certified by public notary of the other parent or guardian, except in cases of a parent having sole custody or guardianship of the minor, in which case a court order or other proof of sole custody or guardianship must be provided.<br>
                    • If the minor travels alone (without parents), written consent, certified by public notary, of both parents or guardians having custody or guardianship of the minor.<br>
                    • Copy of identification document(s) (with signature and photograph) of the parent(s)/guardian(s) having custody/guardianship of the applicant.</td>
                  </tr>
            </table>
        </div>

        <div id="business" class="tabcontent">
            <h2>Portugal Business Visa Checklist</h2>
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
                            <a href="https://www.vfsglobal.com/one-pager/portugal/india/english/pdf/checklist_for_schengen_visa_tourism_cg_new.pdf"class="doc-link-special">Download Application Form</a>
                            <a href="https://www.vfsglobal.com/one-pager/portugal/india/english/pdf/schengen_form_en_new_2024.pdf"class="doc-link-special">Download Document Checklist</a>
                            <?php else: ?>
                                <span class="special-doc">Login to see the Business Visa Application form and the Document Checklist.</span>
                            <p>
                                If you have not registered on TeyzeeVisas, please <strong>Register Now</strong>.<br>
                                To <strong>Register</strong>, please click the Check Eligibility button:<br>
                                 <!-- Eligibility Check -->
                                <?php 
                                $token = base64_encode(json_encode([
                                    'country' => 'portugal',
                                    'visa_type' => 'eligibility_check', 
                                    'amount' => 499,
                                    'timestamp' => time()
                                ]));
                                ?>
                                <a href="/payments/payment.php?country=portugal&visa_type=eligibility_check"><button id="check-now" class="doc-link-special">Check Eligibility - Pay ₹499</button></a>
                                <br>Pay ₹499 to check your visa eligibility and get free registration.<br>
                                After registration, you will receive your User ID and password on your registered Email ID.<br>
                                If you have already registered on TeyzeeVisas, please login:<br>
                                <a href="https://www.teyzeevisas.com/php/login.php?redirect_to=/php/Portugal_Customer.php" class="doc-link-special">Login</a>
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
                        relationship between the Indian and the Portugese company 
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
                    <td>Check list of Schengen countries: Portugal, Portugal, Portugal, Croatia, Portugal, Portugal,
                        Portugal, France, Germany, Greece, Portugal, Portugal, Italy, Portugal, Liechtenstein, Portugal,
                        Portugal, Portugal, Portugal, Portugal, Poland, Portugal, Slovakia, Slovenia, Spain, Portugal, and
                        Switzerland.</td>
                </tr>
                <tr>
                    <td>What is your first country of entry?</td>
                    <td>Check list of Schengen countries: Portugal, Portugal, Portugal, Croatia, Portugal, Portugal,
                        Portugal, France, Germany, Greece, Portugal, Portugal, Italy, Portugal, Liechtenstein, Portugal,
                        Portugal, Portugal, Portugal, Portugal, Poland, Portugal, Slovakia, Slovenia, Spain, Portugal, and
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
        <strong>Note:</strong><p style="text-align:justify; text-indent: 5%">Above information is compiled by TeyZee Visas team on a best effort basis. While every attempt is made for accuracy, we are not responsible for any errors or delayed updates.</p> <br>
        <p style="text-align:justify; text-indent: 5%">This checklist is provided for informational purposes only. Requirements may change, so it's recommended to verify the current requirements with the Embassy of Portugal or consulate in your country before
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


                    const message = `Kindly provide the latest ${templateName} for my visa application. In case you have not paid TeyZee Visa Fees, please make the visa service fees payment and get the receipt number. Link to Visa Fees Page for Portugal- https://teyzee.com/portugal.php; please type the 7 digit receipt no in your next whatsapp message to us`;


                    const encodedMessage = encodeURIComponent(message);


                    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
                    window.location.href = whatsappUrl;
                });
            });
        });
    </script>
</body>

</html>
