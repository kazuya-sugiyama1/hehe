<?php

declare(strict_types=1);

use Illuminate\Database\QueryException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\System\Page;
use App\Models\System\Role;
use App\Models\System\User;

/**
 * PagesTableSeeder Seeder
 *
 * @author Antonio Vargas <localhost.80@gmail.com>
 * @copyright 2020 MdRepTime, LLC
 */
class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $site = site(config('app.base_domain'));
        $user = User::role(Role::SUPER_ADMIN)->first();
        $pages = [
            [
                'title'     => 'Company',
                'content'   => '<p>As we transcend further into the 21st century, it seems that almost every faucet of life has been disrupted by the digital world. The best digital solutions almost give us back what we value the most… TIME!</p><p>Office staff can use extra time to focus on caring for their patients and improving outcomes. Representatives can spend less time setting appointments and more time conversing with providers.</p><p>We knew that there had to be a better way to create more meaningful visits from industry representatives. Through a survey, we found that offices can spend as much as 10 hours a week managing representatives! There is so much time wasted on both sides trying to set up meetings/ managing industry representatives, so we thought "Lets change that!"</p><p>Insert MD REP TIME. A digital communication platform that connects medical providers to industry representatives.</p><p>Our goal is simple: Provide you a platform that simplifies your daily interactions and gives you back your time.</p>'
            ],
            [
                'title'     => 'Representatives',
                'content'   => '<ul><li>Become discoverable in rep database.</li><li>Have access to the provider’s calendar.</li><li>Request meetings based on availability and interest level.</li><li>Easy messaging platform (no more texting).</li><li>More meaningful meetings=Increase in sales.</li><li>Automatically track office staff for Sunshine Act reporting.</li><li>Less time setting meetings -> More time selling.</li></ul>',
                'image'     => public_path('images/rep_graphic.png'),
            ],
            [
                'title'     => 'Offices',
                'content'   => '<ul><li>Completely free software.</li><li>Simplify rep appointments to online platform.</li><li>Search rep database for contact information.</li><li>Easy messaging platform (no more texting).</li><li>Ensure reps are compliant with office rules.</li><li>Sign up in 2 minutes!</li></ul>',
                'image'     => public_path('images/office_graphic.png'),
            ],
            [
                'title'     => 'privacy',
                'content'   => "<h3>Privacy Policy Notice</h3>
<p>Effective January 1, 2020</p>
<p>
MD REP TIME LLC (“MD REP TIME”, “we”, or “us”) recognizes the importance of privacy.
We want you to feel confident using our services, and this privacy notice (“Privacy Notice” or “Notice”)
is to help you understand and describe how we collect, use, and disclose your information.
</p>
<p>This Notice describes the following:</p>
<ul>
<li>What information we collect and how it is collected;</li>
<li>How we use the information;</li>
<li>With whom we may share information;</li>
<li>Legal basis for processing the information;</li>
<li>Your rights and choices;</li>
<li>Security and storage of the information;</li>
<li>Third-party websites;</li>
<li>Users outside the United States;</li>
<li>CCPA Compliance;</li>
<li>Changes to the Notice; and</li>
<li>Contacting MD REP TIME.</li>
</ul>
<p>
Throughout this document, we will use a few terms to describe various products and roles.
All of the text, data, information, software, graphics, photographs and more that we and our
affiliates may make available to you, plus our websites and any services, plug-ins, software,
or applications that we may provide all together constitute the MD REP TIME “Website.”
MD REP TIME “Users” are the people who have created a MD REP TIME account, and “MD REP TIME Invitees”
are people who have scheduled a meeting with a MD REP TIME User but may or may not have registered with
MD REP TIME. A MD REP TIME “Viewer” is a person who visits the MD REP TIME Website but may or may not be a
MD REP TIME User or MD REP TIME Invitee.
</p>
<p>
Any terms defined in the Terms of Use, End User License Agreement, and
Data Processing Addendum and not otherwise defined in this Privacy Notice are hereby adopted by reference in this Privacy Notice.
</p>
<h4>Educational Use</h4>
<p>
For educational service providers and schools, please see our FERPA and COPPA Privacy Policy and Notice.
</p>
<h4>Information We Collect</h4>
<p>We collect information about you directly from you and automatically through your use of our Website.
We may combine information automatically collected with other information that we have collected about you
including from publicly available sources.
</p>
<p>In order to help you protect yourself and your information, we encourage you to
provide only that information that is necessary for using our Website. For example,
to schedule a meeting you may only need to provide us with a name, email address, date, and time.
</p>
<p>MD REP TIME is not directed to children under thirteen (18) years of age and we do not knowingly collect
Personal Information from children under 18. If we discover that a child under 18 has provided us with Personal Information,
we will promptly delete such Personal Information from our systems.
</p>
<h4>Information You Provide Voluntarily</h4>
<p>MD REP TIME collects the following information, either directly from MD REP TIME Users,
Invitees, or Viewers, or through third-parties regarding Users, Invitees, or Viewers.
</p>
<ul>
<li>Appointment Information. A MD REP TIME User, Invitee, or a third-party may voluntarily give us certain information.
This can include names, email addresses, and phone numbers; email addresses of other people; the subject of the meeting;
and any other information provided to us or as required by the MD REP TIME User upon scheduling,
pursuant to the MD REP TIME Terms of Use. If you receive an invitation from a MD REP TIME User but do not wish to
become a MD REP TIME User, please contact the MD REP TIME User who sent the invitation through other means to set up your meeting.
</li>
<li>Calendar Information. A MD REP TIME User may connect their calendar with MD REP TIME.
Our calendar integration only checks the duration and free/busy status of the events in your calendar
so that we don’t book you when you’re busy. We never store who you are meeting with, their email address,
the meeting title, or any other details about the appointments in your connected calendar.
</li>
<li>Billing Information. If you purchase a subscription to MD REP TIME, our third-party payment processors will collect
and store your billing address and credit card information. We store the last four digits of your credit card number,
card type, and the expiration date
</li>
</ul>
<h4>Information Collected Automatically</h4>
<p>Like many websites, we and our Service Providers use Cookies, web beacons, and other technologies to receive
and store certain types of information when you interact with us through your computer or mobile device subject to
your opt-out preferences (see Your Rights and Choices section below). Using these technologies helps us customize
your experience with our Website, improve your experience, and tailor marketing messages. Here are some of the
types of information we collect:
</p>
<ul>
<li>Log & Device data. When you use MD REP TIME, our servers automatically record information (“log data”), including information that your browser sends whenever you visit our Website. This log data may include the web address you came from or are going to, your device model, operating system, browser type, unique device identifier, IP address, mobile network carrier, and time zone or location. Whether we collect some or all of this information often depends on what type of device you’re using and its settings. For example, different types of information are available depending on whether you’re using a Mac or PC, or an iPhone or an Android phone. To learn more about what information your device makes available to us, please check the policies of your device manufacturer or software provider.</li>
<li>Cookie data. Depending on how you’re accessing our services and subject to your opt-out preferences, we may use “Cookies” (a small text file sent by your computer each time you visit our Website, unique to your MD REP TIME account or your browser) or similar technologies to record log data. When we use Cookies, we may use ‘session’ Cookies (that last until you close your browser) or ‘persistent’ Cookies (that last until you or your browser deletes them). For example, we may use Cookies to keep you logged into MD REP TIME. Some of the Cookies we use are associated with your MD REP TIME account (including personal information about you, such as the email address you gave us), and other Cookies are not.</li>
<li>Other Web Site Analytics Services. Subject to your opt-out preferences (see ‘Your Rights and Choices’ below), we use third-party Service Providers such as Google Analytics to provide certain analytics and Viewer interactions services to MD REP TIME in connection with our operation of our Website, including the collection and tracking of certain data and information regarding the characteristics and activities of visitors to MD REP TIME. You may opt-out of relevant cookies using opt-out features on their respective websites</li>
</ul>
<h4>How We Use Your Information</h4>
<p>We may use information that we collect about you, including Personal Data, to:</p>
<ul>
<li>Provide the MD REP TIME Service. We will use your information to provide our Website to you; including facilitating scheduling; managing your account; responding to your inquiries; and for other customer service and support purposes. We use the payment information you provide to us in order to alert you of past, current, and upcoming charges, to allow us to present the billing history to you on your billing page in the Website, and to perform internal financial processes, such as looking at the status of a credit card charge. In the event of a credit card dispute, we also share account information with your bank to verify the legitimacy of a charge.</li>
<li>Understand and improve our products. We will perform research and analysis about your use of, or interest in, our products, services, or content, or products, services or content offered by others. We do this to help make our products better and to develop new products.</li>
<li>
Communicate with you.
<ul>
<li>Service related communications. We may send you service and administrative emails to ensure the service is working properly. We will also email you regarding your calendar appointments. These messages are considered part of the service and you may not opt out of these messages.</li>
<li>Promotional. Subject to your opt-out preference, we may send you emails about new product features or other news about MD REP TIME or on topics we think would be relevant to you. You may opt out of receiving these communications at any time. Visit the ‘Your Rights and Choices’ section below. For MD REP TIME Invitees, please be assured that we do not use the email addresses that you enter to schedule a meeting with a MD REP TIME User to send any type of direct marketing.</li>
<li>Responding to your requests. We will also use your information to respond to your questions or comments.</li>
<li>Administrative. We may contact you to inform you about changes in your services, our service offering and other important service-related notices, such as changes to the Notice or about security or fraud notices.</li>
</ul>
</li>
<li>Protecting Rights and Interests. We will use your information to protect our rights and interests as well as the rights and interests of our Users and any other person, as well as to enforce this Notice or our Terms of Use.</li>
<li>Legal Compliance. We may use your information to comply with applicable legal or regulatory obligations, including complying with requests from law enforcement or other governmental authorities, or in legal proceedings involving MD REP TIME.</li>
<li>Other. We also may use your information to manage our business or perform functions as otherwise described to you at the time of collection subject to your consent.</li>
</ul>
<h4>With Whom We May Share Your Information</h4>
<p>We do not sell your information to any third parties or disclose it in exchange for money or other valuable consideration. We do not share your Personal Data with others except as indicated within this Notice, or when we inform you and give you an opportunity to opt-out of having your Personal Data shared.</p>
<p>We will never use Invitee data to send direct marketing via emails, SMS, physical mailings, or other similar communication channels to advertise or promote the use of our product and services or those of a third-party.</p>
<p>We may share information we collect about you, including Personal Data, in the following ways:</p>
<ul>
<li>With third-party Service Providers, agents, contractors, or government entities. We use other companies, agents or contractors (“Service Providers”) to perform services on our behalf or to assist us with providing services to you: We may engage Service Providers to process credit card transactions or other payment methods. We may also engage Service Providers to provide services such as monitoring and developing MD REP TIME services; aiding in communications, infrastructure, and IT services; customer service; debt collection; analyzing and enhancing data. These Service Providers may have access to your personal or other information in order to provide these functions. In addition, some of the above-listed types of information that we request may be collected by third-party Service Providers on our behalf. We may share information with Service Providers and government entities for legal, security, and safety purposes. This includes sharing information in order to enforce policies or contracts, address security breaches, and assist in the investigation of fraud, security issues, or other concerns. We require Service Providers to agree to take reasonable steps to keep the Personal Data that we provide to them secure. We do not authorize them to use or disclose your Personal Data except in connection with providing their services.</li>
<li>Affiliates.<br>We may disclose information to current or future affiliates or subsidiaries for research, marketing, and other purposes consistent with this Privacy Notice. We may share your data if we believe that disclosure is reasonably necessary to comply with a law, regulation, legal, or governmental request; to respond to a subpoena, court order, warrant, or other legal process; to enforce applicable Terms of Use or this Notice, including investigation of potential violations thereof; to protect the safety, rights, or property of the public, any person, or MD REP TIME; to detect, prevent, or otherwise address, security or technical issues, illegal, or suspected illegal activities (including fraud); or as evidence in litigation in which we are involved, as part of a judicial or regulatory proceeding. If you are using MD REP TIME as a paid member of an organization or using your organization’s email domain (thereby representing yourself as a member of the organization), we may share your email address and plan information with an authorized agent of your company upon request in order for them to administer the account for the company.</li>
</ul>
<h4>Your Rights and Choices</h4>
<ul>
<li>Account. In order to keep your Personal Data accurate and complete, you can log in to review and update your account information, including contact and billing information, via your account settings page. You may also contact us to request information about the personal data we have collected from you and to request the correction, modification or deletion of such Personal Data. We will do our best to honor your requests subject to any legal and contractual obligations. If you would like to make a request, cancel your account or request we delete or no longer use your account information to provide you our Website, contact us at <a href=\"mailto:support@mdreptime.com\">support@mdreptime.com</a> or the address set forth at the end of this Notice. Subject to applicable law, we will retain and use your account information only as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements</li>
<li>E-mail. As described above, if you do not wish to receive promotional emails from us, you may opt out at any time by following the opt-out link contained in the email itself. Please note that it may take up to ten (10) days to process your request. Please also note that if you opt out of receiving marketing communications from us, we may continue to send to you service-related emails which are not available for opt-out. If you do not wish to receive any service-related emails from us, you have the option to delete your account.</li>
<li>Cookies. You may also refrain from providing or may withdraw your consent for Cookies via your browser settings and via limited opt-out functions within MD REP TIME. Your browser’s help function should contain instructions on how to set your computer to accept all Cookies, to notify you when a Cookie is issued, or to not receive Cookies at any time. Please keep in mind that Cookies are required to authenticate MD REP TIME Users as well as perform some actions within MD REP TIME (such as to pay for an event as an Invitee via MD REP TIME), so in order to use the Website, Cookies are often required.</li>
<li>Third Party Analytics Services. Some of the services used provide the ability to opt-out. You may opt out of Google Analytics’ services using the Opt-Out feature on their website. The Google Analytics service is provided by Google Inc. You can opt-out from Google Analytics service from using your information by installing the Google Analytics Opt-out Browser tool: https://tools.google.com/dlpage/gaoptout.For more information on the privacy practices of Google, please visit the Google Privacy & Terms web page: https://www.google.com/policies/privacy. You may opt out of Clearbit’s services using their opt-out feature: https://claim.clearbit.com/claim. For more information on the privacy practices of Clearbit, please visit their privacy policy: https://clearbit.com/privacy. You may opt out of Facebook Pixel’s services using their opt-out feature: https://www.facebook.com/help/568137493302217. For more information on the privacy practices of Facebook, please visit their Data Policy: https://www.facebook.com/about/privacy.</li>
<li>Additional Rights. Subject to local law, you may have additional rights under the laws of your jurisdiction regarding your personal data, such as the right to complain to your local data protection authority.</li>
</ul>
<h4>Security and Storage of Information</h4>
<p>We have taken reasonable steps to help protect the personal information we collect.</p>
<p>MD REP TIME takes the security of your personal data very seriously. We work hard to protect the personal data that you provide from loss, misuse, and unauthorized access, or disclosure. Given the nature of communications and information processing technology, there is no guarantee that personal data will be absolutely safe from access, alteration, or destruction by a breach of any of our physical, technical, and managerial safeguards.</p>
<p>You should take steps to protect against unauthorized access to your device and account by, among other things, choosing a unique and complex password that nobody else knows or can easily guess and keeping your log-in and password private. We are not responsible for any lost, stolen, or compromised passwords or for any activity on your account via unauthorized password activity.</p>
<p>We retain the personal data we collect for so long as is reasonably necessary to fulfill the purposes for which the data was collected, to perform our contractual and legal obligations, and for any applicable statute of limitations periods for the purposes of bringing and defending claims.</p>
<h4>Third-Party Links</h4>
<p>Our Website may contain links to third-party websites and applications. Subject to your opt-out preferences (see Your Rights and Choices), we may also use third-party advertisers, ad networks, and other advertising, marketing, and promotional companies, to serve advertisements on our Website. Any access to and use of such linked websites and applications is not governed by this Notice but instead is governed by the privacy policies of those third parties. We do not endorse these parties, their content, or any products and services they offer, and we do not endorse these parties, their content, or any products and services they offer, and we are not responsible for the information practices of such third-party websites or applications.</p>
<h4>Users Outside the USA</h4>
<p>Our application and database servers are located with Amazon Cloud Services in the United States. Amazon Cloud Services has certified with the Department of Commerce that it adheres to the Privacy Shield Principles under the EU-U.S. Privacy Shield framework and the Swiss-U.S. Privacy Shield framework.</p>
<p>If you are an individual located in the European Economic Area, the United Kingdom, Canada or another jurisdiction outside of the United States with laws and regulations governing personal data collection, use, and disclosure that differ from United States laws, please be aware that information we collect (including through the use of methods such as Cookies and other web technologies) will be processed and stored in the United States or in other countries where we or our third-party Service Providers have operations. By submitting your personal data to MD REP TIME and using MD REP TIME, you expressly consent to have your personal data transferred to, processed, and stored in the United States or another jurisdiction which may not offer the same level of privacy protection as those in the country where you reside or are a citizen.</p>
<p>In connection with the operation of its Website, MD REP TIME may transfer your personal data to various locations, which may include locations both inside and outside of the European Economic Area. MD REP TIME is in the process of submitting our certification of compliance with the EU-U.S. and Swiss-U.S. Privacy Shield with respect to the personal data of Users of the MD REP TIME who are residents of the EU, EEA or Switzerland that we receive and process through MD REP TIME. We adhere to the Privacy Shield Principles of notice, choice, onward transfer, security, data integrity, access, liability and enforcement for individuals in participating European countries whose personal data is processed through MD REP TIME and will certify accordingly to the Department of Commerce. We may also process personal data submitted relating to individuals in Europe via the European Union Standard Contractual Clauses.</p>
<h4>Do Not Track</h4>
<p>We do not currently recognize or respond to browser-initiated Do Not Track signals as there is no consistent industry standard for compliance.</p>
<h4>Dispute Resolution</h4>
<p>For any complaints that cannot be resolved with MD REP TIME directly, MD REP TIME has chosen to utilize the JAMS Privacy Shield Program in relation to such unresolved complaints (as further described in the Principles). As further explained in the Privacy Shield Framework Annex I, a binding arbitration option will also be made available to you in order to address residual complaints not resolved by any other means.</p>
<h4>Changes to this Notice</h4>
<p>This Notice is current as of the Effective Date set forth above. This Notice may change if there is a material change to the way information is handled at MD REP TIME, or to clarify our Notice or adjust clerical errors. If any changes are made, we’ll post them on this page, so please be sure to check back periodically. If you continue to use MD REP TIME after those changes are in effect, you agree to the revised Notice.</p>
<h4>Contacting Us</h4>
<p>If you have any questions or comments about this Notice, please contact us at <a href=\"mailto:support@mdreptime.com\">support@mdreptime.com</a>. For questions or comments outside of the Privacy Notice, please contact us at <a href=\"mailto:support@mdreptime.com\">support@mdreptime.com</a></p>
<h4>Privacy Notice for California Residents</h4>
<p>Effective date: December 31, 2019</p>
<p>This Privacy Notice for California Residents (“California Notice”) supplements the MD REP TIME Privacy Notice. It applies solely to MD REP TIME Users, Viewers, and Invitees who live in the State of California (“California Residents”). MD REP TIME adopts this notice to comply with the California Consumer Privacy Act of 2019 and any subsequent amendments (“CCPA”). All terms used in this California Notice have the same meaning as when used in the CCPA. For frequently asked questions related to the CCPA please view our CCPA FAQs Page.</p>
<h4>Information MD REP TIME May Collect Regarding California Residents</h4>
<p>MD REP TIME collects information that identifies, relates to, describes, references, is capable of being associated with, or could reasonably be linked, directly or indirectly, with a particular consumer or device (“Personal Information”). In particular, our Website may have collected the following categories of Personal Information from California Resident Users, Invitees, and Viewers within the last twelve months, for the purpose of establishing, maintaining, and supporting the services that we provide through our Website:</p>
<ul>
<li>A. Identifiers: real name; alias; email address; internet protocol address</li>
<li>B. Personal Information categories listed in Cal. Civ. Code Sec. 1798.80(e): Real name; phone number.</li>
<li>C. Commercial information: Purchase records regarding MD REP TIME products.</li>
<li>D. Internet or other similar network activity: Data on Viewers’ interaction with the MD REP TIME Website.</li>
</ul>
<p>MD REP TIME Obtains the Categories of Personal Information Listed Above from the Following Categories of Sources</p>
<ul>
<li>Directly from our Users and Invitees.</li>
<li>Indirectly from our Users and Invitees.</li>
<li>Directly and indirectly from activity on our Website.</li>
<li>From third parties that interact with us in connection with the services we perform</li>
</ul>
<h4>How California Resident Personal Information May Be Used</h4>
<p>We may use or disclose the Personal Information we collect for one or more of the following business purposes:</p>
<ul>
<li>To fulfill or meet the reason for which the information is provided.</li>
<li>To provide you with information or services that you request from us.</li>
<li>To provide you with email alerts and other notices concerning our services, or news that may be of interest to you.</li>
<li>To carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collections.</li>
<li>To improve our Website.</li>
<li>For testing, research, analysis and service development.</li>
<li>As necessary or appropriate to protect MD REP TIME and our Users.</li>
<li>To respond to law enforcement requests and as required by applicable law, court order, or governmental regulations.</li>
<li>As described to you when your Personal Information was collected, or as otherwise set forth in the CCPA.</li>
<li>To evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Information held by MD REP TIME is among the assets transferred. MD REP TIME will not collect additional categories of Personal Information or use the Personal Information we collect for materially different, unrelated, or incompatible purposes without providing you notice.</li>
</ul>
<h4>Sharing Personal Information</h4>
<p>We may disclose your Personal Information to a third-party for a business purpose. When we disclose Personal Information for a business purpose, we enter a contract that describes the purpose and requires the recipient to both keep that Personal Information confidential and not use it for any purpose except performing your contract.</p>
<p>We disclose your Personal Information for a business purpose to the following categories of third parties:</p>
<ul>
<li>Service Providers.</li>
<li>Third parties to whom you or your agents authorize us to disclose your Personal Information in connection with the services we provide to you.</li>
<li>Government representatives as required by law</li>
</ul>
<p>In the preceding twelve (12) months, we have not sold any Personal Information.</p>
<h4>Access to Specific Information and Data Portability Rights</h4>
<p>You have the right to request that we disclose certain information to you about our collection and use of your Personal Information over the past 12 months. Once we receive and confirm your verifiable consumer request, we will disclose to you:</p>
<ul>
<li>The categories of Personal Information we collected about you.</li>
<li>The categories of sources for the Personal Information we collected about you.</li>
<li>Our business or commercial purpose for collecting or selling that Personal Information.</li>
<li>The categories of third parties with whom we share that Personal Information.</li>
<li>The specific pieces of Personal Information that we have collected about you.</li>
</ul>
<h4>Deletion Request Rights</h4>
<p>You have the right to request that we delete any of your Personal Information that we have collected from you and retained, subject to certain exceptions. All deletion requests will be managed in accordance with MD REP TIME Deletion Procedures. Deletion requests should be sent to <a href=\"mailto:support@mdreptime.com\">support@mdreptime.com</a>. Once we receive and confirm your verifiable request, we will delete (and direct our Service Providers to delete) your Personal Information from our records, unless an exception applies.</p>
<p>We may deny your deletion request if retaining the information is necessary for us or our service providers to:</p>
<ul>
<li>Complete the transaction for which we collected the Personal Information, provide a service that you requested, take actions reasonably anticipated within the context of our ongoing business relationship with you, or otherwise perform our contract with you.</li>
<li>Detect security incidents, protect against malicious, deceptive, fraudulent, or illegal activity, or prosecute those responsible for such activities.</li>
<li>Debug software to identify and repair errors that impair existing intended functionality.</li>
<li>Comply with the California Electronic Communications Privacy Act.</li>
<li>Enable solely internal uses that are reasonably aligned with consumer expectations based on your relationship with us.</li>
<li>Comply with a legal obligation.</li>
<li>Otherwise lawfully use that information in compatibility with the context in which you provided it.</li>
</ul>
<h4>Exercising Access, Data Portability, and Deletion Rights</h4>
<p>To exercise the access, data portability, and deletion rights described above, please submit a verifiable consumer request to us by reaching out to <a href=\"mailto:support@mdreptime.com\">support@mdreptime.com</a>.</p>
<p>Only you or a person registered with the California Secretary of State that you authorize to act on your behalf may make a verifiable consumer request related to your Personal Information. You may also make a verifiable consumer request on behalf of your minor child. You may only make a verifiable California Resident request for access or data portability twice within a 12-month period.</p>
<p>The request must:</p>
<ul>
<li>Provide sufficiently detailed information to allow MD REP TIME to reasonably verify that you are the person to whom the requested Personal Information pertains or their authorized representative.</li>
<li>Include sufficient detail to allow us to properly understand, evaluate, and respond to it.</li>
<li>We cannot respond to your request or provide you with Personal information if we cannot verify your identity or authority to make the request and confirm the Personal Information relates to you.</li>
<li>Making a verifiable consumer request does not require you to create an account with us.</li>
<li>MD REP TIME will only use Personal Information provided in a verifiable consumer request to verify the requestor's identity or authority to make the request.</li>
</ul>
<h4>Response Timing and Format</h4>
<p>We will attempt to respond to California Resident requests in as timely a fashion as possible. In the event of delays over 60 days, we will inform you of the reason and extension period in writing. If you have an account with us, we will deliver our written response to that account. Any disclosures we provide will only cover the 12-month period preceding the verifiable receipt of a California Resident’s request. The response we provide will explain the reasons we cannot comply with a request, if applicable.</p>
<p>We do not charge a fee to process or respond to your verifiable consumer request unless it is excessive, repetitive, or manifestly unfounded. If we determine that the request warrants a fee, we will tell you why we made that decision and provide you with a cost estimate before fulfilling your request.</p>
<h4>Non-Discrimination</h4>
<p>In accordance with the CCPA’s requirements, we will not discriminate against you for exercising any of your CCPA rights.</p>
<h4>Changes to Our Privacy Notice</h4>
<p>We reserve the right to amend this privacy notice at our discretion and at any time and will notify you by email or through a notice on our Website homepage.</p>
<h4>Contact Information</h4>
<p>If you have any questions or comments about this notice, our Privacy Notice, the ways in which we collect and use your Personal Information, your choices and rights regarding such use, or wish to exercise your rights under California law, please do not hesitate to contact us at: <a href=\"mailto:support@mdreptime.com\">support@mdreptime.com</a>.</p>"
            ]
        ];

        if(count($pages) !== 0) {
            foreach($pages as $page) {
                $_page = new Page;
                $_page->uuid = Str::uuid();
                $_page->user_id = $user->id;
                $_page->slug = unique_name('page', $page['title']);
                $_page->title = $page['title'];
                $_page->content = $page['content'];
                $_page->meta_robots = Page::DEFAULT_META_ROBOTS;
                $_page->template = Page::TEMPLATE_DEFAULT;
                $_page->status = Page::ACTIVE;
                $_page->visible = Page::VISIBLE;

                if($_page->save()) {
                    $site->assignPage($_page);
                }

                if(isset($page['image'])) {
                    if(filled($page['image'])) {
                        $_page->addMedia($page['image'])
                              ->preservingOriginal()
                              ->toMediaCollection('images');
                    }
                }
            }
        }
    }
}
