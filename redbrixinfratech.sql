-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 11:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redbrixinfratech`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `content` longtext NOT NULL,
  `slug` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `content`, `slug`, `date`) VALUES
(3, 'Why Invest in Plots in Noida, Yamuna Expressway?', '2.jpg', '<p><strong>Why Invest in Plots in Noida, Yamuna Expressway?</strong></p>\r\n\r\n<p>Are you dreaming of owning a piece of land in one of the most coveted and rapidly developing areas near Delhi? Look no further than Noida and Yamuna Expressway! These two booming regions offer an incredible investment opportunity in plots, where sky is truly the limit. Whether you are looking for a long-term investment or planning to build your dream home, this comprehensive guide will unravel why investing in <strong>plots in Noida</strong> and Yamuna Expressway could be the smartest move you make.</p>\r\n\r\n<p><strong><em>Introduction to the Noida and Yamuna Expressway Region</em></strong></p>\r\n\r\n<p>Noida and Yamuna Expressway are two rapidly developing regions in the state of Uttar Pradesh, India. These areas have gained immense popularity in recent times due to their rapid development and modern infrastructure. Both Noida and Yamuna Expressway offer excellent opportunities for investment, especially in the real estate sector.</p>\r\n\r\n<p><strong><em>Advantages of Investing in Plots in this Area</em></strong></p>\r\n\r\n<p><strong>Strategic Location: </strong></p>\r\n\r\n<p>One of the major advantages of investing in <strong>residential plots in Noida</strong> and Yamuna Expressway is their strategic location. These areas are well-connected to major cities like Delhi, Ghaziabad, and Greater Noida via highways and expressways. The upcoming Jewar International Airport will further enhance their connectivity and make them an ideal destination for business, commerce, and residential purposes.</p>\r\n\r\n<p><strong>Growing Demand: </strong></p>\r\n\r\n<p>With rapid urbanization and industrialization, there is a growing demand for housing and commercial spaces near major cities like Delhi-NCR. As a result, the demand for land or plots in Noida and Yamuna Expressway has also increased significantly over the years. This makes it an attractive opportunity for investors to capitalize on the rising demand by investing in plots at affordable rates.</p>\r\n\r\n<p><strong>Potential for High Returns:</strong></p>\r\n\r\n<p>Investing in plots offers great potential for high returns as compared to other forms of real estate investments such as apartments or villas. With proper planning and development, the value of land appreciates over time, providing investors with significant profits upon resale or development.</p>\r\n\r\n<p><strong>Availability of Land: </strong></p>\r\n\r\n<p>Unlike apartments or villas, plots are readily available for purchase in Noida and Yamuna Expressway. This makes it easier for investors to find suitable land for their investment needs. Additionally, with the development of new sectors and projects, there is a continuous supply of land in these areas.</p>\r\n\r\n<p><strong>Flexibility in Use: </strong></p>\r\n\r\n<p>Investing in <strong>Noida authority plots for sale</strong> gives you the flexibility to use the land as per your preference. You can either sell it off at a higher price or develop it into residential or commercial properties to generate rental income. This versatility makes plots a desirable investment option for many investors.</p>\r\n\r\n<p><strong>Infrastructure Development: </strong></p>\r\n\r\n<p>Noida and Yamuna Expressway are witnessing rapid infrastructure development with the construction of new highways, expressways, metro lines, and other civic amenities. This not only adds value to the area but also increases the demand for properties, making it an ideal time to invest in plots.</p>\r\n\r\n<p><strong>Affordable Rates: </strong></p>\r\n\r\n<p>Compared to other cities like Delhi, Mumbai, or Bangalore, Noida and Yamuna Expressway offer plots at relatively affordable rates. This makes it an attractive choice for investors who are looking to enter the real estate market at an affordable cost without compromising on potential returns.</p>\r\n\r\n<p><strong><em>Understanding the Government Regulations</em></strong></p>\r\n\r\n<p>Government regulations play a significant role in the real estate industry, and this is especially true for investment in plots in Noida and Yamuna Expressway. The government has implemented several policies and regulations to ensure transparency, accountability, and growth in the real estate sector.</p>\r\n\r\n<p>One of the major regulations that have positively impacted the plots market in these areas is the implementation of Real Estate (Regulation and Development) Act (RERA). This act was introduced by the central government to regulate the real estate sector and protect the rights of homebuyers. Under this act, all developers are required to register their projects with RERA before advertising or selling them. This ensures that all projects are completed within a stipulated timeline, and buyers are not duped by false promises. Furthermore, RERA also mandates that developers must maintain a separate escrow account for each project where they deposit 70% of funds received from buyers to ensure timely completion of projects.</p>\r\n\r\n<p>Apart from RERA, various other government policies have made investing in plots in Noida and Yamuna Expressway a lucrative option for investors. The introduction of Goods and Services Tax (GST) has simplified tax structure for property transactions, making it easier for buyers to understand their financial obligations. Additionally, GST has also brought down the overall cost of properties as it subsumes multiple taxes like service tax, value-added tax, etc.</p>\r\n\r\n<p><strong><em>Conclusion</em></strong></p>\r\n\r\n<p>Hence, Noida and Yamuna Expressway offer a perfect combination of strategic location, high demand, affordability, and potential for high returns, making it an ideal choice for investing in plots. With the growing development and infrastructure in these areas, investing in plots in Noida and Yamuna Expressway can be a lucrative decision for any individual or business. The real estate market in these areas is constantly growing and has shown steady appreciation over the years. With several infrastructure developments, favorable government policies, and proximity to major cities like Delhi and Agra, these regions have become prime locations for investment.</p>', '', 'why-invest-in-plots-in-noida-yamuna-expressway', '2023-10-31 03:31:10'),
(4, 'Why Gaur World Smart-street is the best options for investment in Noida Extension?', '3.jpg', '<p><strong>Why Gaur World Smart-street is the best options for investment in Noida Extension?</strong></p>\r\n\r\n<p>Are you looking for a smart and lucrative investment opportunity in Noida Extension? Look no further, because we have the perfect option for you - Gaur World Smart-street! With its prime location, state-of-the-art facilities, and unparalleled potential for growth, this commercial project stands head and shoulders above the rest. In this blog post, we will delve into why Gaur World Smart-street is the ultimate choice for anyone seeking a profitable commercial investment in Noida Extension.</p>\r\n\r\n<p><strong><em>Introduction to Gaur World Smart-street:</em></strong></p>\r\n\r\n<p>Gaur World Smart-street is a well-planned and thoughtfully designed <strong>commercial property in Noida Extension</strong>. It is a perfect blend of modern infrastructure, prime location, and world-class amenities, making it an ideal investment option for businesses looking to establish their presence in Noida.</p>\r\n\r\n<p><strong><em>Advantages of Investing in Gaur World Smart-street for Commercial Purposes</em></strong></p>\r\n\r\n<p>Gaur World Smart-street is a commercial project located in the heart of Noida Extension, one of the most rapidly developing areas in Delhi-NCR. This project offers a plethora of advantages for those looking to invest in commercial spaces for business purposes. Let&#39;s take a closer look at some of the key advantages of investing in Gaur World Smart-street.</p>\r\n\r\n<p><strong>1. Prime Location: </strong></p>\r\n\r\n<p>The first and foremost advantage of investing in Gaur World Smart-street is its prime location. Situated on the main road with excellent connectivity to major highways, this project enjoys high visibility and accessibility, making it an ideal choice for businesses. Moreover, being located in Noida Extension, which is home to several residential projects and IT hubs, ensures a constant flow of potential customers or clients.</p>\r\n\r\n<p><strong>2. Modern Amenities:</strong></p>\r\n\r\n<p>Gaur World Smart-street boasts state-of-the-art amenities that are essential for any modern business setup. From high-speed elevators, 24x7 power backup and water supply to ample parking space and round-the-clock security surveillance, this project provides all necessary facilities to ensure smooth operations for your business.</p>\r\n\r\n<p><strong>3. Flexible Spaces: </strong></p>\r\n\r\n<p>Another advantage of investing in Gaur World Smart-street is the availability of flexible spaces suitable for different types of businesses. Whether you&#39;re setting up a retail store or an office space or even looking for a food court area, this project has options to cater to all your needs.</p>\r\n\r\n<p><strong>4. High ROI: </strong></p>\r\n\r\n<p>One cannot deny the fact that investing in commercial properties can yield higher returns&nbsp; compared to residential properties. With Gaur World Smart-street&#39;s prime location, modern amenities, and flexible spaces, your investment is likely to yield high returns in the long run.</p>\r\n\r\n<p><strong>5. Brand Value:</strong></p>\r\n\r\n<p>Gaur World Smart-street is a project by the renowned Gaursons Group, which has a strong presence in the real estate market of Delhi-NCR. Investing in this project not only gives you access to top-notch amenities but also add to the brand value of your business. This can be beneficial in attracting potential customers or clients.</p>\r\n\r\n<p><strong>6. Good Rental Income: </strong></p>\r\n\r\n<p>If you&#39;re not planning to use the commercial space for your own business, you can still earn from it through rental income. With its prime location and modern facilities, Gaur World Smart-street is likely to attract good rental rates, providing you with a steady source of passive income.</p>\r\n\r\n<p><strong><em>Types of Commercial Spaces Available</em></strong></p>\r\n\r\n<p>Here are some of the different types of <strong>commercial property for sale in Noida Extension</strong> at Gaur World Smart-street:</p>\r\n\r\n<p><strong>Retail Spaces:</strong></p>\r\n\r\n<p>The development offers retail spaces on the ground floor and first floor, providing high visibility and footfall for businesses. These<strong> shops in Noida Extension</strong> are perfect for setting up shops, showrooms, cafes, restaurants, and other retail outlets.</p>\r\n\r\n<p><strong>Office Spaces:</strong></p>\r\n\r\n<p>With modern amenities and efficient design, the office spaces at Gaur World Smart-street provide a conducive environment for productivity. The tower is equipped with high-speed elevators, 24x7 power backup, advanced security systems and ample parking space to ensure smooth operations for businesses.</p>\r\n\r\n<p><strong>Service Apartments:</strong></p>\r\n\r\n<p>For those looking to invest in hospitality services or seeking an alternative income stream, the development also offers service apartments on its upper floors. These fully-furnished apartments come with all the necessary amenities making them ideal for short-term stays.</p>\r\n\r\n<p><strong>Entertainment Zone:</strong></p>\r\n\r\n<p>Gaur World Smart-street takes care of not just business needs but also provides recreational options with its entertainment zone offering multiplexes and gaming zones. This will attract visitors from all age groups making it a desirable location for retail businesses as well.</p>\r\n\r\n<p><strong>Multipurpose Hall:</strong></p>\r\n\r\n<p>The development boasts a state-of-the-art multipurpose hall that can be used for meetings, conferences or events by businesses. This space is perfect for hosting seminars, workshops and product launches.</p>\r\n\r\n<p><strong>Banquet Hall:</strong></p>\r\n\r\n<p>The banquet hall at Gaur World Smart-street is an ideal venue for hosting weddings, parties and other social events. With modern amenities and ample space, this hall can accommodate a large number of guests making it perfect for businesses in the hospitality industry.</p>\r\n\r\n<p><strong>Family Entertainment Zone:</strong></p>\r\n\r\n<p>Families visiting the development can enjoy various entertainment options such as a kids&rsquo; play area, indoor games zone and a food court. This adds to the overall experience of the visitors and makes it an attractive location for retail businesses as well.</p>\r\n\r\n<p>Overall, Gaur World Smart-street offers a diverse range of commercial spaces that cater to the needs of different businesses and investors. With its strategic location, modern amenities, and efficient design, this development is set to become one of the most sought-after commercial destinations in Noida.</p>\r\n\r\n<p><strong>Final Talk</strong></p>\r\n\r\n<p>In conclusion, investing in Gaur World Smart-street for commercial purposes offers numerous advantages, making it a lucrative option for businesses and investors alike. Whether you&#39;re looking to start a new venture or expand an existing one, this project provides all necessary elements for success.</p>', '', 'why-gaur-world-smart-street-is-the-best-options-for-investment-in-noida-extension', '2023-11-02 06:33:25'),
(5, 'Easy Ways to Get an Office Space in Noida', '1_(1).jpg', '<p>Noida, short for New Okhla Industrial Development Authority, has emerged as a thriving business hub in the National Capital Region (NCR) of India. Its strategic location, excellent connectivity, and rapidly growing infrastructure have made it a prime choice for businesses looking to establish or expand their presence in the region. If you&#39;re looking to set up or expand your business in Noida, one of the first things you&#39;ll need is an office space. Fortunately, there are several easy and efficient ways to get an <strong>office space in Noida</strong>.</p>\r\n\r\n<p><strong>Coworking Facilities</strong></p>\r\n\r\n<p>Co-working facilities have been quite popular recently and provide a flexible and affordable alternative for companies of all sizes. Numerous co-working spaces can be found in Noida, which makes it simple for small enterprises, freelancers, and entrepreneurs to locate an appropriate workspace. High-speed internet access, conference rooms, and common areas are provided in these places, fostering a lively and cooperative environment.</p>\r\n\r\n<p>The versatility of co-working spaces is one of its benefits. You may adjust your workspace to meet your demands by renting a desk or office space on a monthly, daily, or even hourly basis. This makes it a great choice for new companies and firms who are just starting.</p>\r\n\r\n<p><strong>Business Facilities</strong></p>\r\n\r\n<p>Several business centres in Noida serve the requirements of well-established businesses. These facilities offer completely equipped office spaces with all necessary features, such as security, IT infrastructure, and reception services. For companies searching for a professional image and a hassle-free office arrangement, business centres are a practical option.</p>\r\n\r\n<p>Numerous business centres in Noida have office spaces that may be customised, enabling you to adjust the design and dimensions of your workplace to suit your unique needs. These facilities frequently have the extra advantage of a distinguished address in a prime location.</p>\r\n\r\n<p><strong>Agents for commercial real estate</strong></p>\r\n\r\n<p>Finding or&nbsp; <strong>Buy office space in Noida</strong> may be made simpler by using a commercial real estate agent&#39;s services. These experts can guide you through your selections since they have in-depth knowledge of the neighbourhood real estate market. They may provide you with various options based on your spending limit, preferred location, and other particular needs.</p>\r\n\r\n<p>Additionally, real estate brokers may help you with lease agreements and negotiations to secure the best potential bargain. Their knowledge may assist you in selecting an office space that supports your company&#39;s goals while sparing you time and work.</p>\r\n\r\n<p><strong>Platforms for online listings</strong></p>\r\n\r\n<p>Online listing systems are becoming useful tools for discovering office space in the modern day. You may explore and contrast available office spaces in Noida at your convenience using websites and applications devoted to real estate listings. Based on variables like location, size, price range, and amenities, you may narrow your search.</p>\r\n\r\n<p>Numerous ads for office space are available in Noida on well-known web directories including Magicbricks, 99acres, and CommonFloor. In addition to contact information for property owners or real estate agents, they frequently contain thorough descriptions and high-quality images.</p>\r\n\r\n<p><strong>Associations for business and networking</strong></p>\r\n\r\n<p>When looking for <strong>commercial office space in Noida</strong>, networking may be a very effective technique. To network with other businesspeople and professionals, and attend conferences, meetings of industry-specific groups, and local business events. You could run into someone who wants to share their present space or knows about open office spaces.</p>\r\n\r\n<p>Additionally, Noida&#39;s business groups and chambers of commerce might provide you with useful contacts and insights into the neighbourhood&#39;s business scene. These groups can put you in touch with the appropriate resources and frequently have information on vacant offices.</p>\r\n\r\n<p><strong>Choose The Right Location</strong></p>\r\n\r\n<p>The ideal location for your Noida office space must be chosen with care. Put accessibility for customers and staff first, and make sure the area is close to thoroughfares and other transportation centres. Whether it&#39;s for retail or B2B clients, tailor the location to them while staying within your budget. Take into account the accessibility of security, infrastructure, and facilities as well as the likelihood of future development. For networking chances, evaluate the local labour force and industry clusters. Examine zoning restrictions and consider long-term scalability. Incorporate sustainability goals into your company&#39;s strategy, and make sure that vital support services are available. You can choose a location for your Noida office by carefully weighing these considerations.</p>\r\n\r\n<p><strong>Think about leases</strong></p>\r\n\r\n<p>Searching for office space in Noida also includes the possibility of subleasing. To lower their leasing costs, some companies with extra space may offer subleases. Because subleases frequently cost less than direct leases, it could be a good financial decision for your company.</p>\r\n\r\n<p>It is crucial to thoroughly read the terms and circumstances of a sublease before deciding to proceed. Verify that the agreement satisfies your long-term business requirements and is legally solid.</p>\r\n\r\n<p><strong>Final Talk </strong></p>\r\n\r\n<p>Finding the right office space in Noida doesn&#39;t have to be a daunting task. With a variety of options available, ranging from co-working spaces to business centres and traditional office leases, you can easily find a workspace that suits your needs and budget. Whether you&#39;re a startup, a small business, or an established company, Noida&#39;s dynamic business ecosystem offers plenty of opportunities to thrive. Explore these easy ways to get an office space in Noida or <strong>commercial space in Noida </strong>and take the first step towards establishing or expanding your business in this vibrant city.</p>', '', 'easy-ways-to-get-an-office-space-in-noida', '2023-11-04 06:48:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(150) NOT NULL,
  `main_image` varchar(255) NOT NULL,
  `bg_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `main_image`, `bg_image`) VALUES
(1, 'Residential', 'Untitled_design_(2).png', 'pro-bg3.jpg'),
(2, 'Commercial', 'Untitled_design_(1).png', 'pro-bg3.jpg'),
(3, 'Plots', 'Untitled_design_(3).png', 'pro-bg3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `phone` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `date`, `phone`, `location`, `category`, `comment`) VALUES
(1, 'Aakanshaa jain', 'jainaaka@gmail.com', '2023-11-03 01:05:47', '9039677154', 'Indore', 1, 'test'),
(2, 'aa', 'doctor@joyja.net', '2023-11-03 07:13:35', '9876543217', 'indore', 1, 'test'),
(3, 'JosephCef', 'happen_ti_rise@outlook.com', '2023-11-06 09:10:45', '86693576358', 'Delhi', 3, 'Expand your experience by discovering the crypto world. \r\n<a href=https://mirebugagefi.top/go/5423v2/74w2><b><u>Make it on time!</b></u></a>'),
(4, 'NormanWen', 'trust_gektor@outlook.com', '2023-11-07 02:20:54', '87499295474', 'Delhi', 3, 'Open the <pax>of cryptocurrencies. Let cryptocurrencies enter your life. \r\n<a href=https://mirebugagefi.top/go/5423v2/74w2><b><u>Be trendy!</b></u></a>'),
(5, 'Libby Evans', 'libbyevans461@gmail.com', '2023-11-07 10:40:37', '0316 8305339', 'Mumbai', 1, 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers both safely and practically. \r\n\r\n- We guarantee to gain you 300-1000+ followers per month.\r\n- People follow you because they are interested in you, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nLibby\r\n\r\nUnsubscribe here: https://removeme.click/unsubscribe.php?d=redbrixinfratech.com'),
(6, 'Tigran Ayrapetyan', 'ujn2esbgakah@opayq.com', '2023-11-09 12:34:07', '85188918632', 'Delhi', 2, 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International W.L.L. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.a@devcorpinternational.com'),
(7, 'Grant Lira', 'grantlira003@gmail.com', '2023-11-09 01:58:44', '0660 610 31 15', 'noaida', 2, 'Are you available to come on a podcast as a guest?\r\n\r\nIf so, our firm will book you on a podcast within one week.\r\n\r\nIf you’re available to do this, I’d also like to repurpose the content from your podcast to provide you and your business, online article features, and video content for social media. \r\n\r\nPlacing you on podcasts does require an expense, but the online media features and the repurposed video content we will provide completely on us because this is our first time working together :). \r\n\r\nWe are doing this for the first 10 people who reply back to us who qualify because it takes up a good amount of our team\'s time.\r\n\r\nThe one thing I ask is that you tell me if your business is NOT doing 7+ figures.\r\n\r\nI reached out to you because I think you have a 7+ figure business. Most of the hosts that we have connections with are looking for 7+ figure business owners to interview.\r\n\r\nI want to make sure we don’t lie to them so let me know if you are not.\r\n\r\nSo, if you qualify, and want to be booked on a podcast you can chat with our Co-Founder here:\r\n\r\nhttps://bit.ly/empathyfirm-podcast\r\nBest,\r\nGrant\r\nPS - I won’t see your response on here so if you have a question, please book a call (:\r\n\r\n\r\n\r\n\r\nN6565 Shorewood Hills Rd. Lake Mills WI, 53551\r\nEmail unsubnow1@gmail.com with your website to “unsubscribe” meaning you won’t hear from me again.\r\n'),
(8, 'Charlotte Chapman', 'charlottechapman035@gmail.com', '2023-11-09 09:10:48', '02.29.86.67.95', 'Delhi', 2, 'Hi,\r\n\r\nWe visited redbrixinfratech.com and have an exciting opportunity to boost your marketing efforts. \r\n\r\nOur service is simple yet highly effective. We deliver your message directly to millions of engaged individuals and businesses, ensuring your service/product gets the visibility it deserves. What sets us apart is our vast and ever-growing network of 50 million+, providing unmatched reach.\r\n\r\nPlease reply back if you have any inquiries about our emailing prices, packages, and current promotions.\r\n\r\nIf you are not interested, simply unsubscribe here: https://removeme.click/em.php?d=redbrixinfratech.com\r\n\r\nBest regards,\r\nCharlotte'),
(9, 'Nataliakt', 'nataliakt@miyunseo.com', '2023-11-10 07:28:08', '82723923438', 'Mumbai', 2, 'Нellо all, guyѕǃ I knоw, my mеѕsаgе may bе tоо sрeсifiс,\r\nΒut my siѕter found nicе mаn hеrе аnd theу marrіed, so hоw аbоut me?! :)\r\nI аm 28 уearѕ old, Natalіa, frоm Romaniа, I knоw Еnglіsh аnd Gеrman lаnguageѕ also\r\nΑnd... I havе ѕрeсifіс diѕеaѕе, nаmеd nуmphоmаnia. Ԝhо know what iѕ thіѕ, can undеrѕtаnd me (bettеr to ѕaу it іmmеdіаtelу)\r\nΑh yeѕ, Ι сооk vеrу tаstyǃ аnd I lovе not onlу сoоk ;))\r\nΙm real gіrl, not рroѕtіtutе, аnd looking for ѕerious аnd hоt relаtіonshір...\r\nАnуwау, уou саn fіnd my рrofile here: http://casperstivec.gq/idl-70046/ \r\n'),
(10, 'NormanWen', 'trust_gektor@outlook.com', '2023-11-13 08:51:01', '87119282268', 'Mumbai', 2, 'Reveal the world of cryptocurrencies. Let cryptocurrencies get into your life. \r\n<a href=https://go-partners-track.top/go/5423v2/7453><b><u>Be stylish!</b></u></a>'),
(11, 'Debbra Barwell', 'seosubmitter@mail.com', '2023-11-13 09:39:07', '401-474-3422', 'noaida', 2, 'Hello redbrixinfratech.com owner,\r\n\r\nWe can help you grow your online presence and attract more customers to your business with our Top SEO Services. \r\n\r\nOur team of experts can improve your Google and YouTube Ranking, optimize your Google Maps listing, provide Professional Content for your website, and increase your Website Traffic.\r\n\r\nDon\'t miss this opportunity to grow your business and stay ahead of the competition.\r\n\r\n=>>  https://cutt.ly/bwaduXWo\r\n \r\nBest regards,\r\nBarwell\r\n \r\n \r\n \r\n \r\n \r\n \r\n \r\n \r\n  \r\n \r\n \r\n \r\n \r\n \r\n \r\n \r\n  \r\n \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n \r\n \r\n \r\n\r\n\r\n\r\n \r\n \r\n \r\n  \r\n \r\n \r\n \r\n \r\n \r\n \r\n \r\nUnited States, RI, North Kingstown, 2852, 4017 Myra Street\r\n \r\nTo stop any further communication through your website form, Please reply with subject: unsubscribe redbrixinfratech.com'),
(12, 'NormanWen', 'trust_gektor@outlook.com', '2023-11-13 10:44:26', '88461263137', 'Delhi', 3, 'Discover the <pax>of cryptocurrencies. Let cryptocurrencies go in your life. \r\n<a href=https://go-rdr-links.top/go/5423v2/7423><b><u>Be fancy!</b></u></a>'),
(13, 'BsWzsQjfi', 'JMFrMM.phwd@usufruct.bar', '2023-11-16 01:08:01', '1', 'idTBdfJcJTaREbsz', 0, 'idTBdfJcJTaREbsz'),
(14, 'Mark Southard', 'mark.southard@gmail.com', '2023-11-16 06:40:37', '929 00 266', 'noaida', 1, 'Hi there,\r\n\r\nMy name is Mark from Monkey Digital, \r\n\r\nAllow me to present to you a lifetime revenue opportunity of 35%\r\nThat\'s right, you can earn 35% of every order made by your affiliate for life.\r\n\r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month.\r\n\r\nClick here to enroll with us today:\r\nhttps://www.monkeydigital.org/affiliate-dashboard/\r\n\r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved.\r\n\r\nThanks and regards\r\nMark Southard\r\nMonkey Digital'),
(15, 'Michael Sinclair', 'vachon.venus@outlook.com', '2023-11-16 12:20:39', '(75) 3762-2848', 'Delhi', 3, 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting two-hundred and fifty thousand (250,000) emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nWHO THIS IS FOR:\r\n\r\n- Companies who offer products/services to businesses (B2B).\r\n- Companies who provide a product/service with wide appeal (not a small niche).\r\n- Companies who product/service can be sold across the USA and/or international.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send out two-hundred and fifty thousand (250,000) emails for just $48.\r\n\r\nTake action today and let’s get you some leads. This offer is good for the first 20 clients, don’t miss out.\r\n\r\nSimply book a time to talk on our calendar: https://bit.ly/hivemailer-special \r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nSincerely,\r\n\r\nMichael\r\nHiveMailers\r\n\r\nCalendar: https://bit.ly/hivemailer-special \r\n'),
(16, 'Rachel Simpson', 'rachsimpson1972@gmail.com', '2023-11-18 06:02:11', '01892 870247', 'Delhi', 3, 'Hi,\r\n\r\nWe are a team of WordPress experts, with over 17 years of experience. Whether you\'re starting from scratch or revamping an existing site, we\'ve got you covered.\r\n\r\nOver 2000 websites built.\r\n50% Discount.\r\nFree web hosting and domain name for 12 months included.\r\nDedicated team with SEO experience to give your website the ranking it needs after launch.\r\n\r\nFor more information visit: https://furtherinfo.org/wpdesign\r\n\r\nIf you not interested, remove yourself from future messages by clicking here:\r\nhttps://removeme.click/wd/unsubscribe.php?d=redbrixinfratech.com\r\n\r\nKind Regards,\r\nRachel'),
(17, 'Theresa Smith', 'torreggiani.jarred@hotmail.com', '2023-11-19 09:04:44', '475 3576', 'noaida', 3, 'Hello,\r\n\r\nI work for Elebands. \r\n\r\nWe make ultra-thin, fashionable, all day wearable body weight bands that you put on your wrist, ankle & waist all day to burn up to 1,500 calories, and the best part is, we have bands for sports, casual and formal, so you can wear them with any outfit and look fashionable. \r\n\r\nThe problem that most people face, is a tug of war between working out or putting more time in at work, and the worst thing is, most people choose work, and that is why the mortality rate today is so high for executives and the working class. \r\n\r\nThat is why we are so excited to solve this problem with our ultra-thin, fashionable, all day wearable body weight bands that allow you to lose weight and get fit no matter where you are and no matter what you are doing.\r\n\r\nBenefits You’ll Get Instantly:\r\n You’ll burn up to 1,500 calories a day as your body gets more toned.\r\n You’ll start losing weight the natural way without having to workout.\r\n You’ll start building more muscles and strength as you just go about your day.\r\n\r\nImagine getting the body you always wanted, without having to workout at a gym or having to go on a stressful diet. Well now you can, with Elebands. \r\n\r\nMany of our clients are losing 2-3 pounds a week and getting tremendous health benefits.\r\n\r\nUse this coupon code to get 20% off:  SAVE-20%-TODAY\r\n\r\nVisit our site now and get the body you always wanted: https://bit.ly/elebands \r\n\r\nTheresa Smith\r\nBrand Ambassador \r\nElebands USA\r\n\r\nGET STARTED NOW: https://bit.ly/elebands \r\n'),
(18, 'MariaFraf', 'mariaFraf@monstertinting.com', '2023-11-21 10:24:13', '86418239937', 'Mumbai', 2, 'Ηi!\r\nΙ\'ve nоticed thаt manу guys prefer rеgular girlѕ.\r\nΙ аррlаude the mеn оut thеrе who hаd thе balls to enϳоу the lovе of manу wоmen аnd choоsе the оne thаt he knew would be hіs beѕt frіеnd durіng thе bumpу and crazу thing callеd lіfе.\r\nI wаnted tо be that frіеnd, nоt just a stаble, reliаblе аnd bоrіng hоuѕеwіfe.\r\nI аm 24 уeаrs оld, Μarіа, frоm the Сzеch Reрublic, knоw Engliѕh lаnguage alѕo.\r\nАnуwaу, уоu сan find my рrofіlе here: http://olsponempa.tk/idl-23114/ \r\n'),
(19, 'zHtJjfaCrdI', 'Umyxjd.qjwdbh@scranch.shop', '2023-11-21 10:21:05', '1', 'KeHFjJzoLJLwEJjpMVVDaMRELN', 0, 'KeHFjJzoLJLwEJjpMVVDaMRELN'),
(20, 'Isabellapaw', 'isabellapaw@pesricko.com', '2023-11-25 12:37:42', '82949264126', 'Mumbai', 3, 'Ηіǃ\r\nI\'vе nоtісеd that mаnу guуs prеfer rеgular gіrls.\r\nI аpplаudе thе mеn out thеrе who had the ballѕ tо еnjоy thе lovе of many wоmеn and сhооѕе the оne thаt hе knеw wоuld be hіѕ bеst friеnd durіng thе bumрy аnd crazу thing саlled lіfе.\r\nI wаnted to be that friend, not ϳuѕt a ѕtable, reliаblе аnd borіng hоuѕеwifе.\r\nI am 25 уears old, Isаbеlla, from thе Сzeсh Rерublіc, knоw Englіsh languаgе аlѕo.\r\nАnyway, you cаn fіnd mу рrofilе hеrе: http://flatacmelire.tk/idl-70638/ \r\n'),
(21, 'Genesis Cazaly', 'genesis.cazaly@msn.com', '2023-11-25 09:43:00', '0492 16 67 76', 'noaida', 2, 'Hi there,\r\n\r\nWe would like to introduce to you Robin AI, the world\'s first app that replaces your entire team with an AI assistant. This powerful tool generates human-like content, creates stunning designs, drives unlimited traffic, and more.\r\n\r\nCheck out the features of Robin AI here: https://shorturl.at/juwGP\r\n\r\nThanks for your time,\r\nGenesis\r\n\r\nIf you are not interested in our offers, please unsubscribe here: https://removeme.click/unsubscribe.php?d=redbrixinfratech.com');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_project`
--

CREATE TABLE `enquiry_project` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiry_project`
--

INSERT INTO `enquiry_project` (`id`, `project_id`, `full_name`, `city`, `email`, `contact`, `date`) VALUES
(21, 0, 'Sohan kidadas', 'Cheda', 'sohan.das@dinshaws.com', '9827182346', '2023-11-22'),
(22, 0, 'Kapil Bhardwaj ', 'Noida', 'kapilbhardwaj007@gmail.com', '9890730080', '2023-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `job_openings`
--

CREATE TABLE `job_openings` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `shift_start_time` varchar(50) NOT NULL,
  `shift_end_time` varchar(50) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `position_count` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_openings`
--

INSERT INTO `job_openings` (`id`, `title`, `job_type`, `shift_start_time`, `shift_end_time`, `posted_by`, `position_count`, `location`, `slug`, `date`) VALUES
(1, 'SEO Executives', '1', '10:00', '19:00', 1, 5, 'Noida', 'seo-executives-59', '2023-11-02 01:48:06'),
(2, 'Sales Executive', '1', '10:00', '18:00', 1, 2, 'Noida', 'sales-executive', '2023-11-22 01:51:35'),
(3, 'Sales Manager', '1', '10:00', '19:00', 1, 2, 'Noida', 'sales-manager', '2023-11-22 01:52:59'),
(4, 'Tele caller', '1', '10:00', '19:00', 1, 5, 'Noida', 'tele-caller', '2023-11-22 01:53:39'),
(5, 'PHP Developer', '1', '10:00', '19:00', 1, 1, 'Noida', 'php-developer', '2023-11-22 01:55:33'),
(6, 'Lead - Digital Marketing (Google Ads)', '1', '10:00', '19:00', 1, 1, 'Noida', 'lead-digital-marketing-google-ads', '2023-11-22 01:56:34'),
(7, 'Lead - Digital Marketing (Meta Ads)', '1', '10:00', '19:00', 1, 1, 'Noida', 'lead-digital-marketing-meta-ads', '2023-11-22 01:57:28'),
(8, 'Email Marketing Specialist', '1', '10:00', '19:00', 1, 2, 'Noida', 'email-marketing-specialist', '2023-11-22 01:58:32'),
(9, 'MIS Executive', '1', '10:00', '19:00', 1, 2, 'Noida', 'mis-executive', '2023-11-22 01:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_type` varchar(150) NOT NULL,
  `project_status` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `payment_plan` varchar(100) NOT NULL,
  `rera_no` varchar(255) NOT NULL,
  `property_bedroom` varchar(255) NOT NULL,
  `property_bathroom` varchar(255) NOT NULL,
  `property_size` varchar(100) NOT NULL,
  `typology` varchar(255) NOT NULL,
  `address` varchar(355) NOT NULL,
  `bg_image` varchar(255) NOT NULL,
  `project_image` varchar(255) NOT NULL,
  `highlight_bg_image` varchar(255) NOT NULL,
  `key_highlights_description` text NOT NULL,
  `amenties_bg_image` varchar(255) NOT NULL,
  `amenties_description` text NOT NULL,
  `exclusive_projects` varchar(20) DEFAULT NULL,
  `featured_listing` varchar(20) DEFAULT NULL,
  `popular` int(11) NOT NULL,
  `guaranteed_return_project` varchar(20) DEFAULT NULL,
  `other_properties` varchar(20) DEFAULT NULL,
  `project_description` longtext NOT NULL,
  `project_short_description` text NOT NULL,
  `location_map_description` text NOT NULL,
  `location_map_url` varchar(255) NOT NULL,
  `brochure_title` varchar(255) NOT NULL,
  `brochure_description` text NOT NULL,
  `brochure_image` varchar(255) NOT NULL,
  `about_builder_title` varchar(255) NOT NULL,
  `about_builder_description` text NOT NULL,
  `about_builder_image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `slug` text NOT NULL,
  `retail_bg_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category`, `project_title`, `project_type`, `project_status`, `price`, `payment_plan`, `rera_no`, `property_bedroom`, `property_bathroom`, `property_size`, `typology`, `address`, `bg_image`, `project_image`, `highlight_bg_image`, `key_highlights_description`, `amenties_bg_image`, `amenties_description`, `exclusive_projects`, `featured_listing`, `popular`, `guaranteed_return_project`, `other_properties`, `project_description`, `project_short_description`, `location_map_description`, `location_map_url`, `brochure_title`, `brochure_description`, `brochure_image`, `about_builder_title`, `about_builder_description`, `about_builder_image`, `date`, `status`, `slug`, `retail_bg_image`) VALUES
(1, 2, 'Saya Piazza - Shops & High Street Retail Project', 'Retail Shops', '1', '₹ 41 Lacs* Onwards', 'Payment Plan - 60:40', 'UPRERAPRJ364061', '', '', '166 Sqft - 3344 Sqft', 'Retail Shops', 'Jaypee Wish Town, Sector 131, Noida', 'saya_piazza.png', 'Street_view.jpg', 'highlights.png', 'Saya Piazza is an exclusive and the only organized shopping plaza in the vicinity of Jaypee Wish Town. ', 'amenities.png', 'Saya Piazza is an exclusive and the only organized shopping plaza in the vicinity of Jaypee Wish Town. ', '1', '1', 1, '1', NULL, '<p>Welcome to Saya Piazza, where your investment dreams come to life in the heart of Noida. This commercial property offers the ideal mix of prime location, a thriving neighborhood, state-of-the-art infrastructure, versatile commercial spaces, and compelling investment potential. Strategically positioned in Sector 4, Greater Noida West, with excellent connectivity to Delhi-NCR\'s major business hubs, upcoming metro access, and proximity to key expressways, Saya Piazza ensures easy accessibility. The rapidly developing vicinity, filled with IT parks, corporate offices, shopping centers, and residential complexes, guarantees a steady stream of customers for your business. With customizable spaces and a focus on modern functionality, this project is designed to cater to diverse business needs. All approvals and compliances are in place, promising a secure investment that is expected to appreciate significantly in the future. Choose Saya Piazza as your commercial property investment and watch your business thrive in this dynamic and promising location.</p>', 'Saya Piazza is an exclusive and the only organized shopping plaza in the vicinity of Jaypee Wish Town. It is turning a new page in retail therapy and fun entertainment for 50,000 families in the catchment area, which is estimated to garner around 2 lakhs in footfall every day. We are offering commercial spaces with exclusive units for outright sale and lease assistance for investors.', 'Guaranteed some of the most popular Commercial Properties in Noida based on user reviews, ratings & Popularity.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224357.50123586552!2d77.23701468919643!3d28.5221023514615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1698', 'Download E-Brochure', 'Interested to know more about the project? Download the Brochure now.', 'Side_Facade.jpg', 'Saya Group', 'Quality is endearing, it is the foundation for every project. At Saya, quality begins with building to exacting standards and superior level of finishes. Today, our name is synonymous with building real estate of the highest caliber via methodical process. Every Saya project begins with extensive resourcing. We filter from a pool of our best talent, subcontractors and suppliers who have successfully delivered projects of similar nature. We strive to build enduring relationships with our clients through transparency and mutual trust.', 'Front_Facde.jpg', '2023-11-23', 1, 'saya-piazza-shops-high-street-retail-project', 'Side_Facade1.jpg'),
(2, 2, 'Gaur world Smart-Street - Greater Noida West', 'Retail Shops', '4', '₹ 30 Lacs* Onwards', 'On Request', 'UPRERAPRJ364061', '', '', '135 Sqft - 350 Sqft', 'Retail Shops', 'Sector-16, Greater Noida West, U P', 'pekavsme.jpg', 'Gaur_WSS.png', '1.jpg', 'Start Building Your Investment Portfolio Today with Gaur World Smartstreet - Your Path to Smart, Lucrative Investments!', '1.webp', 'Start Building Your Investment Portfolio Today with Gaur World Smartstreet - Your Path to Smart, Lucrative Investments!', '1', '1', 0, NULL, NULL, '<p>Step into the realm of promising commercial property investment with <strong>Gaur World Smartstreet in Noida</strong>.</p>\r\n\r\n<p>This exceptional project promises steady income generation through longer leases and higher rental rates, offering a reliable source of passive income. With higher returns on investment compared to residential properties, a diverse tenant base, long-term leases, and valuable tax benefits, Gaur World Smartstreet opens the door to a world of wealth-building opportunities. Welcome to a smarter choice for diversifying your investment portfolio. The project&#39;s diverse tenant base, spanning from small businesses and startups to large corporations, helps reduce the risk of vacancies and ensures a consistent stream of rental income.</p>', 'Prime office/retail spaces at Gaur world smart-street, Starting Price ₹37 Lakhs* Invest in Gaur world smart-street office/ retail spaces and get assured returns.', 'Start Building Your Investment Portfolio Today with Gaur World Smartstreet - Your Path to Smart, Lucrative Investments!', 'https://maps.google.com/maps?q=Part+5+%26+6+R+S+bhandari+Marg%2C+Janjeerwala+Square%2C+Indore%2C+Madhya+Pradesh+452003&t=&z=13&ie=UTF8&iwloc=&output=embed', 'Gaur World Smartstreet ', 'Download Brochure for more information', '6.webp', 'Gaurs Group', 'Founded by Sh. B. L Gaur, on the twin values of quality and timely delivery. Gaur has been renowned for unwavering values, uncompromising business ethos and robust engineering. Gaur has been on the leading edge of the realty business in India. Gaur stands tall with multiple projects developed in the residential and commercial sector totaling over 5.5 million Sqm developed area. With a track record of sustained growth and architectural and engineering excellence, Gaur has been on the leading edge of the realty business in India.', '17.webp', '2023-11-23', 1, 'gaur-world-smart-street-greater-noida-west', 'banner.png'),
(4, 1, 'M3M The Cullinan - Epitome of Luxury Living', '3, 4, & 5 BHK Flats', '1', '₹ 6.3 Cr* Onwards', 'Payment Plan: 25:25 :25:25', 'UPRERAPRJ442214', 'Get Quote Now!', 'Get Quote Now!', 'Starts from 3,200 Sq.Ft', 'Luxury Flats', 'Sector 94, Noida', 'WhatsApp_Image_2023-10-08_at_18.55.021.jpg', 'tb5lhuu_1689754231_434491394_(1).jpg', 'WhatsApp_Image_2023-10-08_at_18.55.02.jpg', 'Elevate your shopping experience with a dozen expansive double-height anchor stores.', 'aminities.png', 'M3M The Cullinan - Elevate Your Living. Fully Air-Conditioned* Residences, Panoramic Balcony Views, and Over 101 Exclusive Amenities. Ready to Make the Move? Contact Us Today!', NULL, '1', 1, NULL, NULL, '<p>M3M Group, renowned in North India, presents opulent 3, 4, and 5 BHK luxury residences at M3M The Cullinan. Strategically located at Sector 94, Noida, this address offers breathtaking city views, sumptuous interiors, and a range of amenities. With a Flower Pocket, Party Area, jogging track, and lush gardens, this is a place to celebrate and stay healthy. Its excellent connectivity to the Botanical Garden, Delhi, and Noida-Greater Noida Expressway, as well as proximity to the Okhla Bird Sanctuary metro station, ensures a seamless lifestyle. Redefine luxury living at M3M The Cullinan</p>', 'Introducing M3M The Cullinan: Your Gateway to Elevated Living in Noida\'s Sector 94, Noida.', 'M3M THE CULLINAN at Sector-94, Noida', 'https://maps.google.com/maps?q=m3m+cullinan+&t=&z=13&ie=UTF8&iwloc=&output=embed', 'M3M THE CULLINAN', 'Download brochure CTA: Your Path to Dream Properties Begins Here - Get the Brochure Now!', '300x300(2).png', 'M3M India Pvt. Ltd.', 'M3M is an esteemed and rapidly expanding real estate developer in India, renowned for consistently delivering award-winning projects that redefine both business and lifestyle. At M3M, we embody \'Magnificence in the Trinity of Men, Materials, and Money,\' driven by a vision to create top-tier developments that set uncompromising quality standards, emphasizing innovation and speed. In a remarkably short time, M3M has established a strong brand presence and achieved remarkable success in the market.', '300x300.png', '2023-11-23', 1, 'm3m-the-cullinan-epitome-of-luxury-living', '040-Noida-v16-6.jpg'),
(6, 2, 'M3M The Cullinan - High Street Retail Shops', 'Retail Shops', '1', '₹ 1 Cr* Onwards', 'Payment Plan: 40:60', 'UPRERAPRJ442214', '', '', 'Starts from 600 Sq.Ft', 'Retail Shops', 'Sector 94, Noida', 'Banner1.png', 'tb5lhuu_1689754231_434491394_(1).jpg', 'Highlights.png', 'Elevate your shopping experience with a dozen expansive double-height anchor stores.', 'aminities2.png', 'Experience unparalleled comfort and convenience with our well-appointed accommodations, cutting-edge technology amenities, and a host of recreational and wellness facilities.', NULL, '1', 1, NULL, NULL, '<p>Introducing <strong>M3M The Cullinan</strong>: Your Gateway to Elevated Living in Noida&#39;s Sector 94. Immerse yourself in the epitome of opulence with this exquisite, under-construction mixed-use development by M3M India. Crafted for those who demand the finest, these residences are a symbol of luxury, offering an elite lifestyle that commands the highest social standing. Anticipated delivery by April 2028.</p>', 'Introducing M3M The Cullinan: Your Gateway to Elevated Living in Noida\'s Sector 94, Noida.', 'M3M THE CULLINAN at Sector-94, Noida', 'https://maps.google.com/maps?q=m3m+cullinan+&t=&z=13&ie=UTF8&iwloc=&output=embed', 'M3M THE CULLINAN at Sector-94, Noida', 'Your Path to Choose Dream Properties Begins Here - Get the Brochure Now!', 'WhatsApp_Image_2023-10-08_at_18.55.012.jpeg', 'M3M India Pvt. Ltd.', 'M3M is an esteemed and rapidly expanding real estate developer in India, renowned for consistently delivering award-winning projects that redefine both business and lifestyle. At M3M, we embody \'Magnificence in the Trinity of Men, Materials, and Money,\' driven by a vision to create top-tier developments that set uncompromising quality standards, emphasizing innovation and speed. In a remarkably short time, M3M has established a strong brand presence and achieved remarkable success in the market.', 'WhatsApp_Image_2023-10-08_at_18.55.023.jpg', '2023-11-23', 1, 'm3m-the-cullinan-high-street-retail-shops', '040-Noida-v19-3.jpg'),
(8, 2, 'Golden I - Premium Lockable Office Space', 'Lockable Office Space', '4', '₹28 Lacs* Onwards', 'Payment Plan: 75:25', 'UPRERAPRJ6747', '', '', '25 Acres', '', 'Techzone-4, Greater Noida West', 'C03.jpg', 'C02.jpg', 'c08.jpg', 'Retail & Business Hub: Among the largest destinations for retail and business activities in the region.', 'C5.jpg', '', NULL, '1', 1, NULL, NULL, '<p>Introducing <strong>Golden I</strong>, a pioneering commercial venture by Ocean Infraheights Group, set to redefine the landscape of Greater Noida West. This expansive project encompasses 25 acres of land and offers a range of well-designed commercial spaces, including retail shops and office spaces, both lockable and non-lockable, to cater to diverse commercial investors. Golden I Noida Extension is envisioned as a comprehensive business hub, featuring IT and ITES office spaces, hypermarkets with 19-foot-height retail shops, anchor stores, food courts, bank spaces, restaurants, and more. It brims with potential for a variety of business ventures, promising a rich and efficient environment for maximizing business potential.</p>', 'Golden I: Where Business Meets Innovation and Opportunity', 'Golden I At Techzone-4, Greater Noida West', 'https://maps.app.goo.gl/7sMrKV4LagvY1fGw5', 'Golden I', 'Get The Brochure Now!', 'C51.jpg', 'Ocean Infraheights Pvt Ltd', 'Ocean Infraheights is a property development company in Greater Noida West. It is committed to transforming the dreams of customers of buying property into a reality. The main focus of the firm is on developing projects with uncompromising standards of quality. It ensures that it meets the special demands of its discerning customers and provides them with the best option in today\'s real estate market.', 'C10.jpg', '2023-11-23', 1, 'golden-i-premium-lockable-office-space', 'c081.jpg'),
(9, 2, 'Golden Grande - Premium Office Space', 'Office Space', '1', '₹28 Lacs* Onwards', 'On Request', 'UPRERAPRJ301910', '', '', '13 Acres', '', 'Techzone-4, Greater Noida West', 'image_(5).jpg', 'Exclusivity2.jpg', 'golden-grande-noida-extension-banner21.jpeg', 'Prime Location: Strategically located in Tech Zone 4, Noida Extension, offering excellent connectivity.', 'INFINITE-Availability.jpg', 'Golden Grande - The Big Destination', NULL, NULL, 1, NULL, NULL, '<p>Discover <strong>Golden Grande</strong>, the newly launched commercial project by Ashrai Infra Private Limited, poised to redefine the commercial landscape at Tech Zone 4 in Noida Extension (Greater Noida West). This project is strategically positioned within a thriving residential development spanning over 1000 acres, catering to the needs of more than 10,000 future residents. Setting a new standard in contemporary design, this iconic project seamlessly merges work, shopping, and dining within a vibrant and luxurious atmosphere.</p>', 'Golden Grande: Where Commercial Excellence Meets Unmatched Opportunity', 'Techzone-4, Greater Noida West', 'https://maps.google.com/maps?q=Goden+grande', 'Golden Grande - The Big Destination', 'Get The Brochure Now!', 'Exclusivity3.jpg', 'Ashrai Infra', 'ASHRAI is a new age real estate development company all set to shape the Realty landscape of India with world-class projects. With decades of real estate experience, Ashrai is now giving final delivery of its mega 25-acre commercial project \" Golden I\" in Greater Noida West. The Trust and relationship it has earned while executing the project is a testimony to its commitment of Delivering in Time. ASHRAI recognizes that the consumer is choice driven and will settle for nothing but the best.', 'image_(5)1.jpg', '2023-11-23', 1, 'golden-grande-premium-office-space', 'serinity2.jpg'),
(10, 2, 'Saya Status - Premium Retail Shops', 'Premium Retail Shops', '1', '₹35 Lacs* Onwards', 'On Request', 'UPRERAPRJ11141', '', '', '4.6 Acres', 'Retail Shop', 'Sector-129, Noida', 'dofy6tyk_(1).jpg', 'io-img-3.jpg', '2072942-151135-Saya-Status-Mall.jpg', 'India\'s tallest mall at Noida Expressway', '4mqyknz6_(1).jpg', 'Saya Status - Experience Luxury At The Tallest Mall In India', NULL, '1', 1, NULL, NULL, '<p>In Noida Sector 129, <strong>Saya Status</strong> is an opulent commercial development created by the Saya Buildcon Consortium. It is intended to offer first-rate office spaces, retail locations, and food courts, making it the perfect choice for companies searching for a contemporary and affluent work environment. The project features a cutting-edge, visually attractive, and practical design. Modern amenities, plenty of parking, fast elevators, and power backup make it possible for enterprises to run smoothly and effectively.</p>', 'Saya Status - The Tallest Mall Of India', 'Sector-129, Noida', 'https://maps.app.goo.gl/SQ1CFVXZrbsnyAnQ6', 'Saya Status - The Tallest Mall Of India', 'Get The Brochure Now!', 'saya-758x564.jpg', 'Saya Group', 'Quality is endearing, it is the foundation for every project. At Saya, quality begins with building to exacting standards and superior level of finishes. Today, our name is synonymous with building real estate of the highest caliber via methodical process. Every Saya project begins with extensive resourcing. We filter from a pool of our best talent, subcontractors and suppliers who have successfully delivered projects of similar nature. We strive to build enduring relationships with our clients through transparency and mutual trust.', 'dofy6tyk_(1)2.jpg', '2023-11-23', 1, 'saya-status-premium-retail-shops', 'dofy6tyk_(1)1.jpg'),
(11, 2, 'Bhutani Technopark - Premium Office Space', 'Office Space', '4', '₹87 Lacs* Onwards', 'On Request', 'UPRERAAGT10129', '', '', '5 Acres', 'Office Space', 'Sector-127, Noida', 'Pic_1.webp', 'bhutani-technopark-noida.jpg.webp', '70nnbo3s7s.jpg', 'Best Location on Noida Expressway', 'technopark-sector-127.jpg.webp', '', NULL, '1', 1, NULL, NULL, '<p><strong>Bhutani TechnoPark </strong>is a new-generation project, which has all modern facilities and amenities. Not just strategic location, Sector 127 has promising infrastructure as compared to other commercial zones in Noida with improving connectivity. There are multiple property options and types available for investment in Bhutani Techno Park, which caters to various budget ranges. This project has all major facilities to offer to cater to all kinds of working professionals.</p>', 'Bhutani Technopark - The Address For Your Growth', 'Sector-127, Noida', 'https://maps.app.goo.gl/MNo4eKFY32NrNJX38', 'Bhutani Technopark - Ready To Move office Space', 'Get The Brochure Now!', 'Pic_11.webp', 'Bhutani Infra', 'Inspired by innovation, Bhutani Infra is an established name in the construction world. With the highest industry standards, implementation of the latest techniques and innovativeness in all the projects, it is committed to setting new benchmarks in the real estate industry. Founded in the year 1996, the group is well-known for providing spectacular residential and commercial complexes in the prominent locations of Delhi/NCR. Within a short span of time, Bhutani Group has managed to become a prime realty player and is known for quality construction and timely delivery.\r\n', 'slider1_(2)1.jpg', '2023-11-24', 1, 'bhutani-technopark-premium-office-space', 'slider1_(2).jpg'),
(12, 1, 'Godrej Tropical Isle - The Island Life', '3 & 4 BHK Apartments', '3', '₹ 3.75 Cr* Onwards', 'On Request', 'UPRERAPRJ303390', 'Get Quote Now!', 'Get Quote Now!', '12 Acres', 'Ultra Luxury Apartments', 'Sector-146, Noida', '13.jpg', '15.png', '1692345094775-godrej-tropical-isle-banner-image-1.jpg', 'Bang On Noida-Greater Noida Expressway', '2_(1).webp', 'Godrej Tropical Isle - Modern Facilities With Luxury Experience', NULL, NULL, 1, NULL, NULL, '<p>Discover the allure of tropical islands with <strong>Godrej Tropical Isle</strong> along the expressway, it is a tropical haven built with the vision of giving you the finest living experience. Enjoy your uniquely designed 3 and 4-bed bespoke homes to the fullest with island-themed landscape. Here, every door opens into a magnificent world of possibilities in the lap of luxury, with an incredible view.</p>', 'Godrej Tropical Isle - Tropical Island Living Experience', 'Sector-146, Noida', 'https://maps.app.goo.gl/piiMfcbjEsihwdDx5', 'Godrej Tropical Isle', 'Get The Brochure Now!', '11.webp', 'Godrej Properties', 'Established in 1990, Godrej Properties is one of the most trusted Real Estate developers in India. It has been renowned with multiple awards and recognitions, including the “Innovation Leader in Real Estate” award at the NDTV Property Awards 2014, “Most Reliable Builder for 2014\" at the CNBC AWAAZ Real Estate Awards 2014, and “Popular Choice - Developer of the Year” award by ET NOW in 2013. Each real estate project development combines a legacy of excellence and trust with a commitment to cutting-edge design and technology.', '12.jpg', '2023-11-25', 1, 'godrej-tropical-isle-the-island-life', '6.jpg'),
(13, 2, 'Bhutani Grandthum - Office/Retail Spaces', 'Office Spaces/Retail Spaces', '1', '₹40 Lacs* Onwards', 'On Request', 'UPRERAPRJ585534', '', '', '23 Acres', '', 'Techzone-4, Greater Noida West', 'bhutani_grandthum-noida_extension-noida-bhutani_infra.png', '1687773194_grandthum_bhutani.webp', 'Bhutani-Grandthum-4.jpg', 'Tallest Twin Commercial Towers of Noida Extension', 'Project-Photo-7-Bhutani-Grandthum-Greater-Noida-5126307_600_800_310_462.jpg', '', NULL, '1', 1, NULL, NULL, '<p>With its 23 acres (approx) of land and array of opportunities, it&#39;s no wonder that people are flocking <strong>Grandthum</strong>. You can enjoy fine dining at one restaurant or go on an adventure through the waterscape or a yacht ride before making your way to the workspace in the iconic Twin Towers, a fancy high street retail expedition, fine dining, quick bites with QSR, or movie nights at a 5-screened multiplex. Let us charm you to have the most exhilarating ride with Grandthum and raise a toast as we match your expectations while offering much more!</p>', 'Bhutani Grandthum - Premium Office Spaces', 'Techxone-4, Greater Noida West', 'https://maps.app.goo.gl/5cxEKyZTUFG8goGF8', 'Bhutani Grandthum', 'Get The Brochure Now!', 'bhutani_grandthum-noida_extension-noida-bhutani_infra2.png', 'Bhutani Infra', 'Inspired by innovation, Bhutani Infra is an established name in the construction world. With the highest industry standards, implementation of the latest techniques and innovativeness in all the projects, it is committed to setting new benchmarks in the real estate industry. Founded in the year 1996, the group is well-known for providing spectacular residential and commercial complexes in the prominent locations of Delhi/NCR. Within a short span of time, Bhutani Group has managed to become a prime realty player and is known for quality construction and timely delivery.', 'Bhutani-Grandthum-41.jpg', '2023-11-24', 1, 'bhutani-grandthum-officeretail-spaces', 'bhutani_grandthum-noida_extension-noida-bhutani_infra1.png'),
(14, 1, 'Mahagun Manorialle - Experience Luxury Living', '3,4 & 5 BHK Apartments', '2', '₹4.05 Cr* Onwards', 'On Request', 'UPRERAPRJ2051', 'Get Quote Now!', 'Get Quote Now!', '4 Acres', 'Ultra Luxury Apartments', 'Sector-128, Noida', 'mahagun-manorial-project-project-large-image1.jpg', '2.png', 'mahagun-manorial-project-project-large-image11.jpg', 'Primely located on Noida-Greater Noida Expressway Sector 128', '1-5.jpg', 'Mahagun Manorialle - Experience Luxury Living', NULL, '1', 1, NULL, NULL, '<p><strong>Mahagun Manorialle </strong>amalgamates the spirit of adventure with modern-day art form and architecture. The vision is crystal clear to create the most luxurious landmark ever in Noida. To us, a building is a living, breathing structure. It has the ability to empower a community and grow within its fabric. In the midst of skyscrapers, Manorialle is an oasis of nature and Tranquility. Manorialle amalgamates the spirit of adventure with modern-day art form and architecture. The vision is crystal clear to create the most luxurious landmark ever in Noida.</p>', 'Mahagun Manorialle - Ultimate Luxury Living Experience', 'Sector-128, Noida', 'https://maps.app.goo.gl/L9RZy6LnmaCmwYRM8', 'Mahagun Manorialle', 'Get The Brochure Now!', '12.webp', 'Mahagun Group', 'Mahagun Group is a conglomerate of Companies operating in residential and commercial Real Estate and hospitality sectors. The group is synonymous with development of icons in its current area of operations in Ghaziabad and Noida regions of NCR and has already delivered approx. 15.76 million sqft covering the development of approx. 11,500 residential units, besides hotels and commercial spaces. The development of approx. 11.57million sqft covering about 7,500 units is currently in progress.', 'd.webp', '2023-11-25', 1, 'mahagun-manorialle-experience-luxury-living', 'contact-img1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_amenties`
--

CREATE TABLE `project_amenties` (
  `id` int(11) NOT NULL,
  `project_id` varchar(11) NOT NULL,
  `pm_points` varchar(750) DEFAULT NULL,
  `pm_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_amenties`
--

INSERT INTO `project_amenties` (`id`, `project_id`, `pm_points`, `pm_image`) VALUES
(1, '2', 'Car Parking', ''),
(2, '2', 'Earthquake Resistance', ''),
(3, '2', 'Fire Fighting', ''),
(4, '2', 'Gymnasium', ''),
(5, '2', 'Indoorgames', ''),
(6, '2', '3-tier security', ''),
(7, '2', '24/7 Power Backup', ''),
(29, '1', 'Power Backup', 'power_backup2.png'),
(30, '1', 'Restaurant', 'foodcourt.png'),
(31, '1', 'High speed elevators', 'lifts2.png'),
(32, '1', '24*7 Water Supply', '1699441132469.png'),
(33, '1', 'Lift', 'lifts3.png'),
(34, '1', '24 x 7 Security', '1699441201857.png'),
(35, '1', 'CCTV / Video Surveillance', 'cctv_surveillance1.png'),
(36, '4', 'Gymnasium', 'gymnasium.png'),
(37, '4', 'Theme Gardens', 'garden.png'),
(38, '4', 'Jogging Cycle Track', 'jogginf_track.png'),
(39, '4', 'Power Backup', 'power_backup1.png'),
(40, '4', 'Swimming Pool', 'swimming_pool1.png'),
(41, '4', 'Golf Course', 'golf_course.png'),
(42, '4', 'Multipurpose Halls', 'club.png'),
(57, '6', '24×7 security with CCTV surveillance', 'cctv_surveillance.png'),
(58, '6', 'Fire Fighting System', 'fire_fighting.png'),
(59, '6', 'High Speed Elevator', 'lifts.png'),
(60, '6', 'Lift Lobby', 'lifts1.png'),
(61, '6', 'Power Backup', 'power_backup.png'),
(62, '6', 'Rain Water Harvesting', 'swimming_pool.png'),
(63, '6', 'Sewage Treatment Plant (STP)', 'sewage_treatment_plant.png'),
(64, '8', 'Climate Control Structure', '16994341465761.png'),
(65, '8', '24hrs CCTV Security Surveillance', 'cctv_surveillance3.png'),
(66, '8', 'Open & Underground Parking', 'car_parking1.png'),
(67, '8', 'Gymnasium', 'gymnasium2.png'),
(68, '8', 'Modern Fire Detection System', 'fire_fighting2.png'),
(69, '8', 'High Speed Elevators', 'lifts5.png'),
(70, '8', '100% Power Backup', 'power_backup4.png'),
(71, '0', 'High-Speed Elevators', ''),
(72, '0', 'Dedicated Privilege Club For Professionals', ''),
(73, '0', '24hrs CCTV Security Surveillance', ''),
(74, '0', '100% Power Backup', ''),
(75, '0', 'Modern Fire Detection System', ''),
(76, '0', 'Car Parking', ''),
(77, '0', 'Gymnasium', ''),
(78, '9', '24hrs CCTV Security Surveillance', 'cctv_surveillance6.png'),
(79, '9', 'Modern Fire Detection System', 'fire_fighting5.png'),
(80, '9', 'High Speed Elevators', 'lifts7.png'),
(81, '9', '100% Power Backup', 'power_backup7.png'),
(82, '9', 'State-Of-The-Art Building Management System', 'club3.png'),
(83, '9', 'Gymnasium', 'gymnasium6.png'),
(84, '9', 'Car Parking', 'car_parking4.png'),
(85, '10', 'Power Backup', 'power_backup10.png'),
(86, '10', 'High Speed Elevators', 'lifts10.png'),
(87, '10', '24 x 7 Security', '16994412018573.png'),
(88, '10', 'CCTV / Video Surveillance', 'cctv_surveillance9.png'),
(89, '10', 'Cafeterias', 'foodcourt4.png'),
(90, '10', 'Landscape Gardens', 'garden2.png'),
(91, '10', 'Car Parking', 'car_parking7.png'),
(92, '11', 'Power Backup', 'power_backup9.png'),
(93, '11', 'High Speed Elevators', 'lifts9.png'),
(94, '11', '24x7 Security', '16994412018572.png'),
(95, '11', 'CCTV / Video Surveillance', 'cctv_surveillance8.png'),
(96, '11', 'Food Court', 'foodcourt2.png'),
(97, '11', 'Grade A Building', 'club4.png'),
(98, '11', 'Car Parking', 'car_parking6.png'),
(99, '12', 'The Cabana Clubhouse', 'club6.png'),
(100, '12', 'Floating Cafe', 'foodcourt5.png'),
(101, '12', 'Gymnasium', 'gymnasium8.png'),
(102, '12', 'Golf Course', 'golf_course2.png'),
(103, '12', 'Swimming Pool', 'swimming_pool3.png'),
(104, '12', 'Modular Kitchen With Chimney & Hob', '17007278644761.png'),
(105, '12', 'VRV Air Conditioning', '17007278329601.png'),
(106, '0', 'Qui asperiores eiusm', ''),
(107, '0', 'Ullam dignissimos ex', ''),
(108, '0', 'Aut aut earum quia u', ''),
(109, '0', 'Est dolore laboris m', ''),
(110, '0', 'Cum nisi sint ducim', ''),
(111, '0', 'Ut et esse aut unde ', ''),
(112, '0', 'Minus pariatur Nece', ''),
(113, '0', 'f', ''),
(114, '0', 'f', ''),
(115, '0', 'f', ''),
(116, '0', 'f', ''),
(117, '0', 'f', ''),
(118, '0', 'f', ''),
(119, '0', 'f', ''),
(120, '13', 'Food Court', 'foodcourt7.png'),
(121, '13', 'Grade A Building', 'club8.png'),
(122, '13', 'High Speed Elevators', 'lifts12.png'),
(123, '13', 'Power Backup', 'power_backup12.png'),
(124, '13', '24x7 Security', '16994412018575.png'),
(125, '13', 'CCTV / Video Surveillance', 'cctv_surveillance11.png'),
(126, '13', 'Car Parking', 'car_parking9.png'),
(127, '14', 'Power Back up', 'power_backup14.png'),
(128, '14', 'Food Court ', 'foodcourt9.png'),
(129, '14', 'Swimming Pool', 'swimming_pool5.png'),
(130, '14', 'Strolling and jogging track', 'jogginf_track2.png'),
(131, '14', 'Gymnasium', 'gymnasium10.png'),
(132, '14', 'Club House', 'club10.png'),
(133, '14', 'Park', 'garden4.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_highlights`
--

CREATE TABLE `project_highlights` (
  `id` int(11) NOT NULL,
  `project_id` varchar(11) NOT NULL,
  `ph_point` varchar(750) DEFAULT NULL,
  `ph_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_highlights`
--

INSERT INTO `project_highlights` (`id`, `project_id`, `ph_point`, `ph_image`) VALUES
(1, '2', 'Steady Income Generation: Commercial properties with potential for stable, long-term rental income.', ''),
(2, '2', 'Higher Returns on Investment: A higher average ROI compared to residential properties (6-12%).', ''),
(3, '2', 'Diverse Tenant Base: Attracts various businesses, reducing the risk of vacancies.', ''),
(4, '2', 'Long-Term Leases: Commercial leases with extended terms, ensuring a consistent income stream.', ''),
(5, '2', 'Tax Benefits: Tax deductions for expenses and lower capital gains tax on property sales.', ''),
(6, '2', 'Strategic Location: Situated in a prime location in Noida, offering great visibility and accessibility.', ''),
(29, '2', 'Smart Investment: The project opens doors to diversified investment portfolios and wealth-building opportunities.', ''),
(31, '1', 'Crowd Puller landmark with catchment of more than 3.5 lac people', ''),
(32, '1', 'Marquee shops with high-ceiling upto 25 ft.', ''),
(33, '1', 'Food courts & Cafes with expansive outside patio sitting arrangement', ''),
(34, '1', 'Magnificent views of golf course with a terace garden environment for food & dining', ''),
(35, '1', 'Presence of Premium brands', ''),
(36, '1', 'Endowed with entertainment spaces like game zones and Gyms', ''),
(37, '1', 'Zoning of spaces in Retail, Entertainment & Dining', ''),
(38, '4', 'Elevate your shopping experience with a dozen expansive double-height anchor stores.', ''),
(39, '4', 'Discover a vibrant fusion of anchor and boutique stores, complemented by exciting pop-up retail offerings.', ''),
(40, '4', 'Enjoy the ultimate convenience with over 3,100 additional vehicle stack parking spaces.', ''),
(41, '4', 'Immerse yourself in the heart of retail at the central landscape plaza, perfect for high-street shopping.', ''),
(42, '4', 'Step into stores with impressive storefronts adorned with alluring glazing areas.', ''),
(43, '4', 'Experience luxury shopping with strategically positioned premium anchor stores on the lower ground floor.', ''),
(44, '4', 'Maximize your retail adventure with a seamless car drop-off area designed to ensure a bustling and vibrant shopping atmosphere.', ''),
(48, '0', 'Array', '41.jpg'),
(49, '0', 'Array', '41.jpg'),
(50, '0', 'Array', '41.jpg'),
(51, '0', 'Array', '41.jpg'),
(59, '6', 'Elevate your shopping experience with a dozen expansive double-height anchor stores.', ''),
(60, '6', 'Discover a vibrant fusion of anchor and boutique stores, complemented by exciting pop-up retail offerings.', ''),
(61, '6', 'Enjoy the ultimate convenience with over 3,100 additional vehicle stack parking spaces.', ''),
(62, '6', 'Immerse yourself in the heart of retail at the central landscape plaza, perfect for high-street shopping.', ''),
(63, '6', 'Step into stores with impressive storefronts adorned with alluring glazing areas.', ''),
(64, '6', 'Experience luxury shopping with strategically positioned premium anchor stores on the lower ground floor.', ''),
(65, '6', 'Maximize your retail adventure with a seamless car drop-off area designed to ensure a bustling and vibrant shopping atmosphere.', ''),
(66, '8', 'Proximity to Jewar Airport: Just a 40-minute drive to the upcoming Jewar Airport.', ''),
(67, '8', 'Strategic Location: Positioned on a 135-meter wide road, at the intersection of a 60-meter wide road.', ''),
(68, '8', 'Retail & Business Hub: Among the largest destinations for retail and business activities in the region.', ''),
(69, '8', 'Corporate Neighbors: Home to IBM and R SYSTEMS, with 10,000 employees working in the vicinity.', ''),
(70, '8', 'Green Building Certification: Awarded Platinum level certification by IGBC for eco-friendly and sustainable design.', ''),
(71, '8', 'Climate Control Structure: Ensures a comfortable environment throughout the year.', ''),
(72, '8', 'Modern Fire Detection System: Enhances safety and security measures.', ''),
(73, '0', 'Integrated Community: Nestled within a thriving residential development spanning over 1000 acres, catering to more than 10,000 expected residents.', ''),
(74, '0', 'Prime Location: Strategically located in Tech Zone 4, Noida Extension, offering excellent connectivity.', ''),
(75, '0', 'Contemporary Design: Setting a new benchmark in modern design, seamlessly blending work, shopping, and dining in a luxurious atmosphere.', ''),
(76, '0', 'Vast Retail Space: Boasting a 3-side open luxury retail area with an impressive 900-meter frontage.', ''),
(77, '0', 'Enhanced Security: Ensured by multi-level and 24x7 surveillance, creating a safe and secure environment.', ''),
(78, '0', 'Convenient Connectivity: Well-connected to a running metro station and within 30 minutes from the upcoming airport, offering ideal transportation options.', ''),
(79, '0', 'Diverse Amenities: Featuring high-speed elevators, state-of-the-art building management systems, large floor plates, and a dedicated privilege club for professionals.', ''),
(80, '9', 'Prime Location: Strategically located in Tech Zone 4, Noida Extension, offering excellent connectivity.', ''),
(81, '9', 'Integrated Community: Nestled within a thriving residential development spanning over 1000 acres, catering to more than 10,000 expected residents.', ''),
(82, '9', 'Contemporary Design: Setting a new benchmark in modern design, seamlessly blending work, shopping, and dining in a luxurious atmosphere.', ''),
(83, '9', 'Vast Retail Space: Boasting a 3-side open luxury retail area with an impressive 900-meter frontage.', ''),
(84, '9', 'Enhanced Security: Ensured by multi-level and 24x7 surveillance, creating a safe and secure environment.', ''),
(85, '9', 'Convenient Connectivity: Well-connected to a running metro station and within 30 minutes from the upcoming airport, offering ideal transportation options.', ''),
(86, '9', 'Diverse Amenities: Featuring high-speed elevators, state-of-the-art building management systems, large floor plates, and a dedicated privilege club for professionals.', ''),
(87, '10', 'India\'s tallest mall at Noida Expressway', ''),
(88, '10', 'IIFL Finance-funded project', ''),
(89, '10', 'Construction in full swing', ''),
(90, '10', '100% Fully Paid Land', ''),
(91, '10', 'Iconic Design Crafted by DP Architects of Singapore', ''),
(92, '10', 'For the First Time Ever in Noida Exclusive Car Parking Adjacent to The Outlet', ''),
(93, '10', 'Basement Parking for 1000 Cars and Multi Level Car Parking from 4th to 9th Floor for 600 Cars', ''),
(94, '11', 'Best Location on Noida Expressway', ''),
(95, '11', 'Pure Commercial Land Title', ''),
(96, '11', 'Surrounded By Residential Societies And Institutions', ''),
(97, '11', 'Nearby Proposed Metro Station Route', ''),
(98, '11', 'Accessible From 120M Wide Road', ''),
(99, '11', 'Hospitals, Hotels And Entertainment Hubs In Close Vicinity', ''),
(100, '11', '24/7 Access ', ''),
(101, '12', 'Total 12 Acres Of Project Land', ''),
(102, '12', 'Bang On Noida-Greater Noida Expressway', ''),
(103, '12', 'Ultra Luxury Specifications', ''),
(104, '12', 'Modern Double Height Entrance Lobby', ''),
(105, '12', 'Exclusive Pool And Biggest Clubhouse', ''),
(106, '12', 'High Class Theme Based Project', ''),
(107, '12', 'Live Well Concept', ''),
(108, '0', 'Voluptate voluptatem', ''),
(109, '0', 'Sit minus delectus', ''),
(110, '0', 'Assumenda quod rerum', ''),
(111, '0', 'Dolor dicta omnis la', ''),
(112, '0', 'Fuga Incidunt sapi', ''),
(113, '0', 'Et adipisci non fugi', ''),
(114, '0', 'Libero enim et volup', ''),
(115, '0', 'f', ''),
(116, '0', 'f', ''),
(117, '0', 'f', ''),
(118, '0', 'f', ''),
(119, '0', 'f', ''),
(120, '0', 'f', ''),
(121, '0', 'f', ''),
(122, '13', 'Complete retail destination with a thrilling and enjoyable experience at Adventure Island (Amusement park).', ''),
(123, '13', 'Tallest Twin Commercial Towers of Noida Extension', ''),
(124, '13', 'A hypermarket to effectively cater to the needs of the high density of population in Delhi and NCR.', ''),
(125, '13', 'Greatest Retail and Commercial hub in Greater Noida West', ''),
(126, '13', 'This shopping arcade have more than 100 outlets which includes F & B retail outlets.', ''),
(127, '13', 'Multi cuisine food court with fine dining and specialty snacks and various restaurants', ''),
(128, '13', 'Spread over 23 acres with Observation Deck at 28th level', ''),
(129, '14', 'Primely located on Noida-Greater Noida Expressway Sector 128', ''),
(130, '14', 'Designed in Neo Classical style', ''),
(131, '14', 'Manorialle Club brings a relaxing moment in your infinity pool', ''),
(132, '14', 'Manorialle Offers 180 degree Vistas over the Golf Course', ''),
(133, '14', 'The Vanishing edges merge the water with the Sky at Exclusive Rooftop Club', ''),
(134, '14', 'Cooling provided by VRF Units to living areas and all bedrooms', ''),
(135, '14', 'An exclusive Vastu-friendly project', '');

-- --------------------------------------------------------

--
-- Table structure for table `project_retail`
--

CREATE TABLE `project_retail` (
  `id` int(11) NOT NULL,
  `project_id` varchar(11) NOT NULL,
  `pr_title` varchar(255) NOT NULL,
  `pr_price` varchar(50) NOT NULL,
  `pr_size` varchar(100) NOT NULL,
  `pr_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_retail`
--

INSERT INTO `project_retail` (`id`, `project_id`, `pr_title`, `pr_price`, `pr_size`, `pr_type`) VALUES
(94, '0', 'Premium Office Space', '₹28 Lacs* Onwards', '550 Sq. Ft.', '3'),
(95, '0', '', '', '', ''),
(96, '0', '', '', '', ''),
(97, '0', '', '', '', ''),
(184, '4', 'Luxury Flat', '6.3 Cr* (Price Breakup Available on Request)', '3,200 Sq.Ft Onwards', '8'),
(185, '4', 'Luxury Flat', '8.5 Cr* (Price Breakup Available on Request)', '4,200 Sq.Ft Onwards', '9'),
(186, '4', 'Luxury Flat', '12.99 Cr* (Price Breakup Available on Request)', '6,200 Sq.Ft Onwards', '10'),
(190, '10', 'Premium Retail Shop', '35 Lacs* - ₹8 Cr* ', '175 Sq. Ft. - 2500 Sq. Ft.', '2'),
(191, '9', 'Premium Office Space', '28 Lacs* Onwards', '550 Sq. Ft.', '3'),
(192, '8', 'Premium Lockable Office Space', '₹28 Lacs* Onwards', '566 Sq. Ft.', '3'),
(193, '6', 'Retail Shops', ' 1 Cr* Onwards', '600 SQ.FT - 2000 SQ.FT', '1'),
(194, '6', 'Retail Shops', ' 2 Cr* Onwards', '600 SQ.FT - 2000 SQ.FT', '2'),
(195, '6', 'Retail Shops', ' 1.5 Cr* Onwards', '600 SQ.FT - 2000 SQ.FT', '3'),
(196, '6', 'Retail Shops', ' 1.2 Cr* Onwards', '600 SQ.FT - 2000 SQ.FT', '4'),
(197, '2', 'Commercial Shop', 'Rs. 30 Lakhs Onward', '100 Sq. Ft.', '1'),
(198, '2', 'Commercial Shop', 'Rs. 30 Lakhs Onward', '100 Sq. Ft.', '2'),
(199, '2', 'Commercial Shop', 'Rs. 30 Lakhs Onward', '100 Sq. Ft.', '3'),
(200, '1', 'Commercial - Street Shop', '47 Lacs* - ₹1.8 Cr* ', '165 Sq. Ft. - 629 Sq. Ft.', '1'),
(201, '1', 'Commercial - Street Shop', '60 Lacs* - ₹12 Cr* ', '165 Sq. Ft. - 3444 Sq. Ft.', '2'),
(202, '1', 'Commercial - Street Shop', '42 Lacs* - ₹2 Cr* ', '165 Sq. Ft. - 846 Sq. Ft.', '3'),
(203, '1', 'Commercial - Street Shop', '41 Lacs* - ₹2 Cr* ', '165 Sq. Ft. - 895 Sq. Ft.', '4'),
(204, '0', 'Occaecat dicta perfe', '533', 'Soluta molestias Nam', ''),
(205, '0', 'Asperiores omnis vol', '586', 'Necessitatibus magni', ''),
(206, '0', 'Ea vitae et fugiat v', '670', 'Quidem qui ipsum er', ''),
(207, '0', 'Incidunt voluptate ', '173', 'Voluptatibus reprehe', ''),
(209, '0', 'f', 'f', 'f', '1'),
(210, '0', '', '', '', ''),
(211, '0', '', '', '', ''),
(212, '0', '', '', '', ''),
(213, '11', 'Ready To Move Office Space', '87 Lacs* - ₹3.78 Cr*', '416 Sq. Ft. - 1802 Sq. Ft.', '3'),
(218, '13', 'Premium Office Space', '40 Lacs* - ₹1.2 Cr*', '560 Sq. Ft. - 1660 Sq. Ft.', '2'),
(219, '13', 'Premium Retail Space', '1.6 Cr* - ₹2.3 Cr*', '592 Sq. Ft. - 779 Sq. Ft.', '3'),
(230, '12', 'Luxury Apartments', '3.75 Cr* - ₹6.25 Cr*', '1500 Sq. Ft. - 2500 Sq. Ft', '8'),
(231, '12', 'Luxury Apartments', '7.2 Cr*', '3250 Sq. Ft.', '9'),
(232, '14', 'Luxury Apartment', '4.05 Cr* - ₹4.28 Cr* ', '2700 Sq. Ft. - 2850 Sq. Ft.', '8'),
(233, '14', 'Luxury Apartment', '4.99 Cr* - ₹9.38 Cr* ', '3325 Sq. Ft. - 6250 Sq. Ft.', '9'),
(234, '14', 'Luxury Apartment', '7.95 Cr* - ₹30 Cr* ', '5300 Sq. Ft. - 20000 Sq. Ft.', '10');

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `id` int(11) NOT NULL,
  `project_status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`id`, `project_status`) VALUES
(1, 'Under Construction'),
(2, 'Completed'),
(3, 'New'),
(4, 'Ready To Move');

-- --------------------------------------------------------

--
-- Table structure for table `retail_type`
--

CREATE TABLE `retail_type` (
  `id` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `cat_id` int(11) NOT NULL COMMENT '1:residential,2:commercial,3:ploy=ts'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `retail_type`
--

INSERT INTO `retail_type` (`id`, `type`, `cat_id`) VALUES
(1, 'Lower Ground', 2),
(2, 'Ground Floor', 2),
(3, 'First Floor', 2),
(4, 'Second Floor', 2),
(5, 'Third Floor\r\n', 2),
(6, 'Above Third Floor', 2),
(7, '2 BHK', 1),
(8, '3 BHK', 1),
(9, '4 BHK', 1),
(10, '5 BHK', 1),
(11, 'Deluxe Apartments', 1),
(12, 'Industrial Plot', 3),
(13, 'Residential', 3);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `name` varchar(250) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `entry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created_date`, `name`, `mobile_no`, `description`, `entry_date`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2018-07-22 09:11:58', 'Admin', '9098343935', '', '2018-07-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_project`
--
ALTER TABLE `enquiry_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_openings`
--
ALTER TABLE `job_openings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_amenties`
--
ALTER TABLE `project_amenties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_highlights`
--
ALTER TABLE `project_highlights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_retail`
--
ALTER TABLE `project_retail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retail_type`
--
ALTER TABLE `retail_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `enquiry_project`
--
ALTER TABLE `enquiry_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `job_openings`
--
ALTER TABLE `job_openings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project_amenties`
--
ALTER TABLE `project_amenties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `project_highlights`
--
ALTER TABLE `project_highlights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `project_retail`
--
ALTER TABLE `project_retail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `retail_type`
--
ALTER TABLE `retail_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
