-- MySQL dump 10.13  Distrib 5.5.21, for linux2.6 (x86_64)
--
-- Host: localhost    Database: amp
-- ------------------------------------------------------
-- Server version	5.5.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alert_subscription`
--

DROP TABLE IF EXISTS `alert_subscription`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alert_subscription` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `subscription_type` char(1) NOT NULL DEFAULT 'W',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alert_subscription`
--

LOCK TABLES `alert_subscription` WRITE;
/*!40000 ALTER TABLE `alert_subscription` DISABLE KEYS */;
/*!40000 ALTER TABLE `alert_subscription` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `apply_log`
--

DROP TABLE IF EXISTS `apply_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apply_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `job_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apply_log`
--

LOCK TABLES `apply_log` WRITE;
/*!40000 ALTER TABLE `apply_log` DISABLE KEYS */;
INSERT INTO `apply_log` VALUES (6,'email@yopmail.com','060919903864');
/*!40000 ALTER TABLE `apply_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_details`
--

DROP TABLE IF EXISTS `job_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_details` (
  `JOB_ID` varchar(12) NOT NULL DEFAULT '',
  `json` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`JOB_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_details`
--

LOCK TABLES `job_details` WRITE;
/*!40000 ALTER TABLE `job_details` DISABLE KEYS */;
INSERT INTO `job_details` VALUES ('060919006333','{\"jobID\":\"060919903864\",\"title\":\"Google Software Developer 2\",\"experienceRequirements\":\"5 - 8 yrs\",\"datePosted\":\"2020-09-06\",\"validThrough\":\"2020-11-05\",\"jobLoc\":\"Pune\",\"employmentType\":\"Full Time, Permanent\",\"description\":\"<STRONG> <SPAN> This is a dummy Job For Testing. PLease Dont Apply <LI> Setting up test scenarios to duplicate problems. </LI> <LI> Composition of knowledge base articles describing issues that have been reported and their resolution. </LI> <LI> Escalating of defects to Level 3 for review and administration of communication and fixes between the customer and Level 3 support. </LI> <LI> Providing production down weekend support (on rotation) to customers in system down scenarios.</LI> </UL> <STRONG> <U> How well help you grow:</U> </STRONG> <UL> <LI> Youll have access to all the technical and management training courses you need to become the expert you want to be</LI> </UL> <UL> <LI> Youll learn directly from expert developers in the field; our team leads love to mentor</LI> <LI> You have the opportunity to work in many different areas to figure out what really excites you</LI> </UL> <p><b>Required Candidate profile</b></p><SPAN>Required Professional and Technical Expertise</SPAN><BR><UL><LI>1-3 Years Experience in customer facing roles.</LI><LI>Experience in Core Java / J2EE.</LI><LI>Diligent approach to task completion.</LI><LI>Proven analytical and problem solving skills</LI><LI>Should be self-motivated and a quick learner</LI><LI>Ability to prioritize and handle multiple issues simultaneously</LI></UL><SPAN>Preferred Professional and Technical Expertise</SPAN><BR><UL><LI>Experience working on a Support role will be an added advantage.</LI><LI>Knowledge on Cloud Architectures - IaaS, PaaS and SaaS, Docker.</LI></UL>\",\"educationRequirements\":\"Any Graduate - Any Specialization,Any Postgraduate - Any Specialization,Doctorate Not Required\",\"industry\":[\"IT-Software\",\" Software Services\"],\"occupationalCategory\":[\"IT Software - Application Programming\",\" Maintenance\"],\"qualifications\":\"Any Graduate - Any Specialization,Any Postgraduate - Any Specialization,Doctorate Not Required\",\"responsibilities\":\"Technical Support Engineer\",\"workHours\":\"9am-6pm\",\"ctc\":\"50L\",\"hiringOrganization\":{\"@type\":\"Organization\",\"name\":\"IBM India Pvt. Limited\"}}'),('060919903864','{\"jobID\":\"060919903864\",\"title\":\"Watson Customer Engagement Support Engineer L2 Java\",\"experienceRequirements\":\"1 - 3 yrs\",\"datePosted\":\"2019-09-06\",\"validThrough\":\"2019-11-05\",\"jobLoc\":\"New York\",\"employmentType\":\"Full Time, Permanent\",\"description\":\"<STRONG> <SPAN> Your Role and Responsibilities</SPAN> <BR> </STRONG> <P> <U> <STRONG> Who You Are.</STRONG> </U> <BR> As a Watson Customer Engagement Support Engineer, you will apply deep product expertise and skills in supporting our global clients on Watson Customer Engagement products. <BR> <BR> <STRONG> <U> What You Will Do</U> </STRONG> <BR> Each implementation is unique in its design. Providing for an constantly changing and exciting challenge. If working in this area interests you, and you have the aptitude and energy to take the on technical support issues of the top corporations in the world, we would like to meet you. <BR> <BR> Previous knowledge of our products is a plus, but it is not a requirement for consideration. You will be provided training at a level beyond standard user functionality. Pairing with a mentor and continuing on in a collaborative team environment. You must be able to openly share ideas and communicate thoroughly and professionally. <BR> <BR> Responsibilities of a Watson Customer Engagement Support Engineer include but are not limited to: </P> <UL> <LI> Troubleshooting and analysis of customer issues. </LI> <LI> Managing customer expectations and relationships. </LI> <LI> Setting up test scenarios to duplicate problems. </LI> <LI> Composition of knowledge base articles describing issues that have been reported and their resolution. </LI> <LI> Escalating of defects to Level 3 for review and administration of communication and fixes between the customer and Level 3 support. </LI> <LI> Providing production down weekend support (on rotation) to customers in system down scenarios.</LI> </UL> <STRONG> <U> How well help you grow:</U> </STRONG> <UL> <LI> Youll have access to all the technical and management training courses you need to become the expert you want to be</LI> </UL> <UL> <LI> Youll learn directly from expert developers in the field; our team leads love to mentor</LI> <LI> You have the opportunity to work in many different areas to figure out what really excites you</LI> </UL> <p><b>Required Candidate profile</b></p><SPAN>Required Professional and Technical Expertise</SPAN><BR><UL><LI>1-3 Years Experience in customer facing roles.</LI><LI>Experience in Core Java / J2EE.</LI><LI>Diligent approach to task completion.</LI><LI>Proven analytical and problem solving skills</LI><LI>Should be self-motivated and a quick learner</LI><LI>Ability to prioritize and handle multiple issues simultaneously</LI></UL><SPAN>Preferred Professional and Technical Expertise</SPAN><BR><UL><LI>Experience working on a Support role will be an added advantage.</LI><LI>Knowledge on Cloud Architectures - IaaS, PaaS and SaaS, Docker.</LI></UL>\",\"educationRequirements\":\"Any Graduate - Any Specialization,Any Postgraduate - Any Specialization,Doctorate Not Required\",\"industry\":[\"IT-Software\",\" Software Services\"],\"occupationalCategory\":[\"IT Software - Application Programming\",\" Maintenance\"],\"qualifications\":\"Any Graduate - Any Specialization,Any Postgraduate - Any Specialization,Doctorate Not Required\",\"responsibilities\":\"Technical Support Engineer\",\"workHours\":\"9am-6pm\",\"ctc\":\"50L\",\"hiringOrganization\":{\"@type\":\"Organization\",\"name\":\"IBM India Pvt. Limited\"}}');
/*!40000 ALTER TABLE `job_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_tuples`
--

DROP TABLE IF EXISTS `job_tuples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_tuples` (
  `JOB_ID` varchar(12) NOT NULL DEFAULT '',
  `json` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`JOB_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_tuples`
--

LOCK TABLES `job_tuples` WRITE;
/*!40000 ALTER TABLE `job_tuples` DISABLE KEYS */;
INSERT INTO `job_tuples` VALUES ('060919006333','{\"jobID\":\"060919006333\",\"jobTitle\":\"Opportunity For Java - Spring - Struts\",\"jobUrl\":\"https://www.naukri.com/job-listings-Opportunity-For-Java-Spring-Struts-Hyderabad-Location-Itelligence-India-Software-Solutions-Pvt-Ltd-Hyderabad-Madhapur-1-to-4-years-060919006333?\",\"jobImgUrl\":\"https://img.naukimg.com/logo_images/v2/16987.gif\",\"compName\":\"ITELLIGENCE INDIA SOFTWARE SOLUTIONS \",\"jobLoc\":\"Hyderabad\",\"exp\":\"2yrs\",\"techStack\":\"Java,Aplet,spring\",\"ctc\":\"10L\"}'),('060919903864','{\"jobID\":\"060919903864\",\"jobTitle\":\"Watson Customer Engagement Support Engineer L2 Java\",\"jobUrl\":\"https://www.naukri.com/job-listings-Watson-Customer-Engagement-Support-Engineer-L2-Java-IBM-India-Pvt-Limited-Bengaluru-1-to-3-years-060919903864?\",\"jobImgUrl\":\"https://img.naukimg.com/logo_images/v2/16987.gif\",\"compName\":\"IBM \",\"jobLoc\":\"New York\",\"exp\":\"4-9 yrs\",\"techStack\":\"C++,STL,boost\",\"ctc\":\"50L\"}');
/*!40000 ALTER TABLE `job_tuples` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-07 18:39:07
