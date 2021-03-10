-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 03:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careayushcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `net_service_amount` decimal(11,2) DEFAULT NULL,
  `tax_percent` decimal(11,2) DEFAULT NULL,
  `net_tax_amount` decimal(11,2) DEFAULT NULL,
  `net_discount_offer` decimal(11,2) DEFAULT NULL,
  `total_paid` decimal(11,2) DEFAULT NULL,
  `total_balance` decimal(11,2) DEFAULT NULL,
  `bill_date` date DEFAULT NULL,
  `office_executive` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `id` int(11) NOT NULL,
  `booking_code` varchar(100) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `booking_time` time DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `ccare_executive` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`id`, `booking_code`, `booking_date`, `booking_time`, `customer_id`, `ccare_executive`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'CA70445333', '2020-10-15', '03:57:26', 1, 3, 1, '2020-10-14 22:27:26', '2020-10-14 22:27:26'),
(2, 'CA78060595', '2020-10-16', '04:28:50', 1, 3, 1, '2020-10-15 22:58:50', '2020-10-15 23:44:52'),
(3, 'CA58448952', '2021-03-06', '10:57:40', 3, 3, 3, '2021-03-06 05:27:40', '2021-03-06 05:27:40'),
(4, 'CA71220004', '2021-03-08', '10:39:32', 5, 8, 2, '2021-03-08 05:09:32', '2021-03-08 05:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `branch_detail`
--

CREATE TABLE `branch_detail` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `branch_address` varchar(300) DEFAULT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_detail`
--

INSERT INTO `branch_detail` (`id`, `branch_name`, `branch_address`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Careayush Mumbai', 'Mumbai Maharashtra', 'active', '2020-08-12 06:26:46', '2020-08-26 23:09:29'),
(2, 'Careayush Pune', 'Pune Maharashtra', 'active', '2020-08-12 06:28:04', '2020-08-26 23:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `cust_name` varchar(100) DEFAULT NULL,
  `cust_contact` varchar(12) DEFAULT NULL,
  `cust_email` varchar(100) DEFAULT NULL,
  `cust_location` varchar(100) DEFAULT NULL,
  `cust_address` varchar(400) NOT NULL,
  `ccare_executive` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`id`, `branch_id`, `cust_name`, `cust_contact`, `cust_email`, `cust_location`, `cust_address`, `ccare_executive`, `created_at`, `updated_at`) VALUES
(1, 1, 'Raman Chaudhry', '8000299922', 'raman@gmil.com', 'Chembur', 'Chembur Camp Flat No 10', 3, '2020-10-03 23:03:37', '2020-10-03 23:31:19'),
(2, 1, 'Sanket Mishra', '8000299921', 'sanket@gmail.com', 'Vashi', 'Vashi Sector 9 Hind Society', 3, '2020-10-03 23:26:40', '2020-10-03 23:31:30'),
(3, 1, 'Vikad Chaubey', '8000299922', 'raman@gmil.com', 'Vashi', 'vashi', 3, '2020-10-19 06:11:19', '2020-10-19 06:11:19'),
(4, 1, 'sandeep', '9920275692', NULL, 'sion', 'sion', 3, '2021-03-08 00:43:13', '2021-03-08 00:43:13'),
(5, 1, 'ram', '1596324789', NULL, 'dadar', 'dadar', 8, '2021-03-08 05:06:26', '2021-03-08 05:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `desig_detail`
--

CREATE TABLE `desig_detail` (
  `id` int(11) NOT NULL,
  `desig_name` varchar(100) DEFAULT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desig_detail`
--

INSERT INTO `desig_detail` (`id`, `desig_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'active', '2020-08-13 18:10:11', '2020-08-26 23:07:42'),
(2, 'Manager', 'active', '2020-08-13 18:10:25', '2020-08-26 23:07:53'),
(4, 'Customer Care Executive', 'active', '2020-08-28 23:42:02', '2020-08-28 23:42:02'),
(5, 'Office Executive', 'active', '2020-08-28 23:42:16', '2020-08-28 23:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `doc_type`
--

CREATE TABLE `doc_type` (
  `id` int(11) NOT NULL,
  `doc_name` varchar(100) DEFAULT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_type`
--

INSERT INTO `doc_type` (`id`, `doc_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Aadhar Card', 'active', '2020-08-13 18:24:49', '2020-08-26 09:47:02'),
(2, 'Pancard', 'active', '2020-08-13 18:24:59', '2020-08-13 18:24:59'),
(3, 'Voter ID', 'active', '2020-08-13 18:25:09', '2020-08-13 18:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `duty_assignment`
--

CREATE TABLE `duty_assignment` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `health_worker_id` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `till_date` date DEFAULT NULL,
  `office_executive` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duty_replacement`
--

CREATE TABLE `duty_replacement` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `replace_to` int(11) DEFAULT NULL,
  `replace_by` int(11) DEFAULT NULL,
  `replace_date` date DEFAULT NULL,
  `office_executive` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duty_reporting`
--

CREATE TABLE `duty_reporting` (
  `id` int(11) NOT NULL,
  `duty_id` int(11) DEFAULT NULL,
  `duty_date` date DEFAULT NULL,
  `report_status` varchar(100) DEFAULT NULL,
  `duty_charge` decimal(11,2) DEFAULT NULL,
  `office_executive` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendance`
--

CREATE TABLE `emp_attendance` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `work_date` date DEFAULT NULL,
  `in_time` time DEFAULT NULL,
  `out_time` time DEFAULT NULL,
  `attendance_status` varchar(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_detail`
--

CREATE TABLE `emp_detail` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `desig_id` int(11) DEFAULT NULL,
  `emp_name` varchar(100) DEFAULT NULL,
  `emp_gender` varchar(10) DEFAULT NULL,
  `emp_contact` varchar(12) DEFAULT NULL,
  `alt_contact` varchar(12) DEFAULT NULL,
  `emp_email` varchar(100) DEFAULT NULL,
  `emp_address` varchar(400) DEFAULT NULL,
  `emp_doj` date DEFAULT NULL,
  `blood_group` char(10) DEFAULT NULL,
  `profile_pic` varchar(120) DEFAULT NULL,
  `is_active` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_detail`
--

INSERT INTO `emp_detail` (`id`, `branch_id`, `desig_id`, `emp_name`, `emp_gender`, `emp_contact`, `alt_contact`, `emp_email`, `emp_address`, `emp_doj`, `blood_group`, `profile_pic`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Durgesh Pandey', 'Male', '8268108343', '8692953174', 'durgeshpandey215@gmail.com', 'Chembur', '2020-08-04', 'AB+', 'upload/employee/images/careayush-5f48a77a2f7c41598596986.jpg', 'active', '2020-08-12 10:33:11', '2020-08-28 01:13:06'),
(2, 1, 2, 'Sandep Yadav', 'Male', '1111111113', '1111111113', 'sandeep@gmail.com', 'Kalyan Mumbai', '2020-08-10', 'O+', 'upload/employee/images/careayush-5f48a7111c7f71598596881.jpg', 'active', '2020-08-23 21:42:39', '2020-08-28 23:40:53'),
(3, 1, 4, 'Krishna', 'Male', '6326626262', '9292929292', 'krishna@gmail.com', 'Sion Mumbai 22', '1989-10-10', 'A-', 'upload/employee/images/careayush-5f49e53aca1671598678330.jpg', 'active', '2020-08-28 23:48:50', '2020-08-28 23:48:50'),
(4, 2, 2, 'Pradeep Yadav', 'Male', '1111111113', '9292929292', 'pradeep@gmail.com', 'Chembur Swastik Chamber Umarshi Bappa Chawk MUmbai', '1990-09-09', 'O+', 'upload/employee/images/careayush-5f49e73154fa31598678833.jpg', 'active', '2020-08-28 23:57:13', '2020-08-29 00:02:05'),
(5, 2, 4, 'Rohan Gaikwad', 'Male', '1111111112', '9292929292', 'rohan@gmail.com', 'Chembur Swastik Chamber Umarshi Bappa Chawk MUmbai', '1992-02-22', 'B+', 'upload/employee/images/careayush-5f49e7f5229f31598679029.jpg', 'active', '2020-08-29 00:00:29', '2020-08-29 00:00:29'),
(6, 1, 5, 'Murli Singh', 'Male', '7654436587', '9887655443', 'murli@gmail.com', 'Govandi Mumbai', '2003-10-10', 'O+', 'upload/employee/images/careayush-5f787fa4c36161601732516.jpg', 'active', '2020-10-03 08:11:56', '2020-10-03 08:11:56'),
(7, 1, 4, 'Vipul Sharma', 'Male', '9876543212', '1234569875', 'vipul@gmail.com', 'mumbai,sion', '2021-03-11', 'A-', 'upload/employee/images/careayush-60435c4dc7bab1615027277.jpg', 'active', '2021-03-06 05:11:17', '2021-03-06 05:11:17'),
(8, 1, 4, 'sandeep', 'Male', '9920275692', NULL, 'sd@gmail.com', NULL, '1997-04-15', 'B-', 'upload/employee/images/careayush-6045e44ad71541615193162.png', 'active', '2021-03-08 03:16:02', '2021-03-08 03:16:02'),
(9, 1, 5, 'officeboy', 'Male', '6935824712', '4715826932', 'office@gmail.com', 'gathkhoper', '1997-01-26', 'A+', 'upload/employee/images/careayush-60476df140ca01615293937.jpg', 'active', '2021-03-09 07:15:37', '2021-03-09 07:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `health_worker`
--

CREATE TABLE `health_worker` (
  `id` int(11) NOT NULL,
  `hw_name` varchar(100) DEFAULT NULL,
  `hw_gender` varchar(10) DEFAULT NULL,
  `hw_contact` varchar(12) DEFAULT NULL,
  `hw_email` varchar(100) DEFAULT NULL,
  `hw_location` varchar(100) DEFAULT NULL,
  `hw_address` varchar(400) DEFAULT NULL,
  `blood_group` char(10) DEFAULT NULL,
  `profile_pic` varchar(120) DEFAULT NULL,
  `is_active` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health_worker`
--

INSERT INTO `health_worker` (`id`, `hw_name`, `hw_gender`, `hw_contact`, `hw_email`, `hw_location`, `hw_address`, `blood_group`, `profile_pic`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Durgesh', 'Male', '8268108343', 'durgeshpandey215@gmail.com', 'Chembur', 'Chembur', 'AB+', '', 'active', '2020-08-23 21:53:04', '2020-08-23 21:53:04'),
(2, 'Krishna Singh', 'Male', '9919256243', 'krishna@gmail.com', 'Chembur', 'Kalyan', 'B+', 'upload/healthWorker/images/careayush-5f4333acd40881598239660.png', 'active', '2020-08-23 21:57:40', '2020-08-23 21:57:40'),
(3, 'Rakesh Kumar', 'Male', '1234432332', 'rakesh@gmail.com', 'Sion', 'Sion Mumbai', 'A+', 'upload/healthWorker/images/careayush-5f460d9113e7c1598426513.jpg', 'active', '2020-08-26 01:51:53', '2020-08-26 01:51:53'),
(4, 'Praneet Thakur', 'Male', '5784392919', 'praneet@gmail.com', 'Sion', 'Sion Mumbai 400022', 'A-', 'upload/healthWorker/images/careayush-5f75f312ab0ce1601565458.jpg', 'active', '2020-10-01 09:47:38', '2020-10-01 09:47:38'),
(5, 'helthcare', 'Male', '1234567890', 'hel@gmail.com', 'chunabhatti', 'chunabhatti', 'A+', 'upload/healthWorker/images/careayush-60473a6873f791615280744.jpg', 'active', '2021-03-09 03:35:44', '2021-03-09 03:35:44'),
(7, 'helthcare mumbai', 'Male', '1234567890', 'hel@gmail.com', 'sion', 'mumbai', 'B+', 'upload/healthWorker/images/careayush-6047701b495561615294491.png', 'active', '2021-03-09 07:24:51', '2021-03-09 07:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `hw_document`
--

CREATE TABLE `hw_document` (
  `id` int(11) NOT NULL,
  `hw_id` int(11) NOT NULL,
  `doc_type_id` int(11) DEFAULT NULL,
  `doc_file` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hw_service`
--

CREATE TABLE `hw_service` (
  `id` int(11) NOT NULL,
  `hw_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `include_item`
--

CREATE TABLE `include_item` (
  `id` int(11) NOT NULL,
  `inclusion_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location_detail`
--

CREATE TABLE `location_detail` (
  `id` int(11) NOT NULL,
  `location_name` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location_detail`
--

INSERT INTO `location_detail` (`id`, `location_name`, `created_at`, `updated_at`) VALUES
(1, 'Other', '2020-10-01 15:17:38', '2020-10-01 15:17:38'),
(2, NULL, '2021-03-09 09:05:44', '2021-03-09 09:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `login_detail`
--

CREATE TABLE `login_detail` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `login_name` varchar(100) DEFAULT NULL,
  `login_id` varchar(100) DEFAULT NULL,
  `login_password` varchar(100) DEFAULT NULL,
  `is_active` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_detail`
--

INSERT INTO `login_detail` (`id`, `role_id`, `emp_id`, `login_name`, `login_id`, `login_password`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Durgesh Pandey', 'durgesh', '123456', 'active', '2020-08-09 10:39:32', '2020-08-27 22:40:31'),
(2, 3, 2, 'Sandeep Yadav', 'sandeep', '123456', 'active', '2020-08-27 22:50:28', '2020-08-27 22:50:28'),
(3, 3, 4, 'Pradeep Yadav', 'pradeep', '123456', 'active', '2020-08-28 23:58:38', '2020-08-28 23:58:38'),
(4, 4, 3, 'Krishna Singh', 'krishna', '123456', 'active', '2020-10-03 02:19:47', '2020-10-03 02:44:34'),
(5, 4, 5, 'Rohan Gaikwad', 'rohan', '123456', 'active', '2020-10-03 08:08:45', '2020-10-03 08:08:45'),
(6, 5, 6, 'Murli Singh', 'murli', '123456', 'active', '2020-10-03 08:12:26', '2020-10-03 08:12:26'),
(7, 4, 7, 'vipul', 'vipul', '123456', 'active', '2021-03-06 05:11:56', '2021-03-06 05:11:56'),
(9, 4, 8, 'sandeepd', 'sandeepd', '123456', 'active', '2021-03-08 05:05:12', '2021-03-08 05:05:12'),
(10, 5, 9, 'officeboy', 'office', '123456', 'active', '2021-03-09 07:35:36', '2021-03-09 07:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `month_detail`
--

CREATE TABLE `month_detail` (
  `id` int(11) NOT NULL,
  `month_name` varchar(10) DEFAULT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month_detail`
--

INSERT INTO `month_detail` (`id`, `month_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'January', 'active', '2020-08-13 18:40:51', '2020-08-13 18:40:51'),
(2, 'February', 'active', '2020-08-13 18:41:02', '2020-08-13 18:41:02'),
(4, 'March', 'active', '2020-08-13 21:36:53', '2020-08-26 01:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `nav_access`
--

CREATE TABLE `nav_access` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `nav_url` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_detail`
--

CREATE TABLE `patient_detail` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `patient_location` varchar(100) DEFAULT NULL,
  `patient_address` varchar(300) DEFAULT NULL,
  `patient_contact` varchar(14) NOT NULL,
  `patient_gender` varchar(10) DEFAULT NULL,
  `patient_age` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_detail`
--

INSERT INTO `patient_detail` (`id`, `customer_id`, `patient_name`, `patient_location`, `patient_address`, `patient_contact`, `patient_gender`, `patient_age`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shanti Hanuman Devi', 'Chembur E', 'Chembur E Camp Flat No 10', '4534212334', 'Female', 68, '2020-10-11 23:04:33', '2020-10-12 08:35:43'),
(2, 1, 'Hanuman Singh', 'Chembur E', 'Chembur Camp Flat No 10', '4534212334', 'Male', 70, '2020-10-15 23:09:56', '2020-10-15 23:09:56'),
(3, 3, 'Reeta', 'Vashi', 'vashi', '5656453423', 'Female', 45, '2020-10-19 06:13:53', '2020-10-19 06:13:53'),
(4, 5, 'ram', 'dadar', 'dadar', '9920275692', 'Male', 50, '2021-03-08 05:08:06', '2021-03-08 05:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

CREATE TABLE `payment_history` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `paid_amount` decimal(11,2) DEFAULT NULL,
  `tax_percent` decimal(11,2) DEFAULT NULL,
  `tax_amount` decimal(11,2) DEFAULT NULL,
  `pay_mode` varchar(100) DEFAULT NULL,
  `cheque_no` varchar(100) DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  `bank_name_branch` varchar(100) DEFAULT NULL,
  `office_executive` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_receipt`
--

CREATE TABLE `payment_receipt` (
  `id` int(11) NOT NULL,
  `paymenthistory_id` int(11) DEFAULT NULL,
  `include_item_id` int(11) DEFAULT NULL,
  `include_amount` decimal(11,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replace_query`
--

CREATE TABLE `replace_query` (
  `id` int(11) NOT NULL,
  `query_date` date DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `till_date` date DEFAULT NULL,
  `replce_status` varchar(100) DEFAULT NULL,
  `ccare_executive` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role_detail`
--

CREATE TABLE `role_detail` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_detail`
--

INSERT INTO `role_detail` (`id`, `role_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'active', '2020-08-09 10:39:46', '2020-08-26 22:38:13'),
(3, 'manager', 'active', '2020-08-26 07:54:26', '2020-08-26 22:38:05'),
(4, 'cce', 'active', '2020-08-26 07:54:26', '2020-08-26 22:37:54'),
(5, 'offe', 'active', '2020-08-26 22:38:26', '2020-08-26 22:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `service_needed`
--

CREATE TABLE `service_needed` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `service_type_id` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `till_date` date DEFAULT NULL,
  `total_days` int(11) DEFAULT NULL,
  `session_day_charge` decimal(11,2) DEFAULT NULL,
  `service_charge` decimal(11,2) DEFAULT NULL,
  `service_tax` decimal(6,2) DEFAULT NULL,
  `discount_offer` decimal(10,2) DEFAULT NULL,
  `payable_amount` decimal(11,2) DEFAULT NULL,
  `service_session` varchar(100) DEFAULT NULL,
  `service_location` varchar(100) DEFAULT NULL,
  `service_address` varchar(300) DEFAULT NULL,
  `service_status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_needed`
--

INSERT INTO `service_needed` (`id`, `booking_id`, `patient_id`, `service_type_id`, `from_date`, `till_date`, `total_days`, `session_day_charge`, `service_charge`, `service_tax`, `discount_offer`, `payable_amount`, `service_session`, `service_location`, `service_address`, `service_status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 3, '2020-10-15', '2020-10-18', 4, '700.00', '400.00', '5.00', '0.00', '2000.00', 'Single Session', 'Chembur', 'Chembur Camp Flat No 10', 'Confirm', '2020-10-14 22:27:26', '2020-10-16 01:22:02'),
(2, 2, 1, 3, '2020-10-23', '2020-10-25', 3, '500.00', '300.00', '5.00', '0.00', '1500.00', 'Single Session', 'Chembur', 'Chembur Camp Flat No 10', 'Confirm', '2020-10-15 22:58:50', '2020-10-15 22:58:50'),
(3, 2, 1, 1, '2020-10-17', '2020-10-20', 4, '1000.00', '1000.00', '5.00', '0.00', '4000.00', '24 Hours', 'Chembur', 'Chembur Camp Flat No 10', 'Confirm', '2020-10-16 01:41:13', '2020-10-16 01:41:13'),
(4, 3, 3, 1, '2021-03-07', '2021-03-10', 4, '500.00', '200.00', '5.00', '50.00', '750.00', 'Night', 'Dadar', 'Dadar', 'Confirm', '2021-03-06 05:27:40', '2021-03-06 05:27:40'),
(5, 4, 4, 1, '2021-03-08', '2021-03-12', 4, '600.00', '200.00', NULL, NULL, '800.00', 'Day', 'dadar', 'dadar', 'Confirm', '2021-03-08 05:09:33', '2021-03-08 05:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) DEFAULT NULL,
  `is_active` varchar(20) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`id`, `service_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Nurse', 'active', '2020-08-13 21:54:39', '2020-08-26 09:13:47'),
(3, 'Physiotherapist', 'active', '2020-08-26 09:14:30', '2020-08-26 09:14:30'),
(4, 'Care Taker', 'active', '2020-08-26 09:14:48', '2020-08-26 09:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `status_detail`
--

CREATE TABLE `status_detail` (
  `id` int(11) NOT NULL,
  `status_name` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_detail`
--

INSERT INTO `status_detail` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'New', NULL, NULL),
(2, 'In Process', NULL, NULL),
(3, 'Final', NULL, NULL),
(4, 'Cancel', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `year_detail`
--

CREATE TABLE `year_detail` (
  `id` int(11) NOT NULL,
  `year_name` varchar(10) DEFAULT NULL,
  `is_active` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_detail`
--

INSERT INTO `year_detail` (`id`, `year_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '2019', 'inactive', '2020-08-13 21:37:46', '2021-03-06 05:00:36'),
(4, '2020', 'inactive', '2020-08-13 21:50:48', '2021-03-06 05:00:45'),
(5, '2021', 'active', '2021-03-06 05:00:28', '2021-03-06 05:00:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_detail`
--
ALTER TABLE `branch_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desig_detail`
--
ALTER TABLE `desig_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_type`
--
ALTER TABLE `doc_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duty_assignment`
--
ALTER TABLE `duty_assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duty_replacement`
--
ALTER TABLE `duty_replacement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `duty_reporting`
--
ALTER TABLE `duty_reporting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_detail`
--
ALTER TABLE `emp_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_worker`
--
ALTER TABLE `health_worker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hw_document`
--
ALTER TABLE `hw_document`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hw_id` (`hw_id`);

--
-- Indexes for table `hw_service`
--
ALTER TABLE `hw_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `include_item`
--
ALTER TABLE `include_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_detail`
--
ALTER TABLE `location_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_detail`
--
ALTER TABLE `login_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_id` (`login_id`);

--
-- Indexes for table `month_detail`
--
ALTER TABLE `month_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nav_access`
--
ALTER TABLE `nav_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_detail`
--
ALTER TABLE `patient_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_history`
--
ALTER TABLE `payment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_receipt`
--
ALTER TABLE `payment_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replace_query`
--
ALTER TABLE `replace_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_detail`
--
ALTER TABLE `role_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_needed`
--
ALTER TABLE `service_needed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_detail`
--
ALTER TABLE `status_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_detail`
--
ALTER TABLE `year_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branch_detail`
--
ALTER TABLE `branch_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_detail`
--
ALTER TABLE `customer_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `desig_detail`
--
ALTER TABLE `desig_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doc_type`
--
ALTER TABLE `doc_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `duty_assignment`
--
ALTER TABLE `duty_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duty_replacement`
--
ALTER TABLE `duty_replacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duty_reporting`
--
ALTER TABLE `duty_reporting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_attendance`
--
ALTER TABLE `emp_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_detail`
--
ALTER TABLE `emp_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `health_worker`
--
ALTER TABLE `health_worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hw_document`
--
ALTER TABLE `hw_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hw_service`
--
ALTER TABLE `hw_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `include_item`
--
ALTER TABLE `include_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location_detail`
--
ALTER TABLE `location_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_detail`
--
ALTER TABLE `login_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `month_detail`
--
ALTER TABLE `month_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nav_access`
--
ALTER TABLE `nav_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_detail`
--
ALTER TABLE `patient_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_history`
--
ALTER TABLE `payment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_receipt`
--
ALTER TABLE `payment_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replace_query`
--
ALTER TABLE `replace_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_detail`
--
ALTER TABLE `role_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_needed`
--
ALTER TABLE `service_needed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status_detail`
--
ALTER TABLE `status_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `year_detail`
--
ALTER TABLE `year_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hw_document`
--
ALTER TABLE `hw_document`
  ADD CONSTRAINT `hw_document_ibfk_1` FOREIGN KEY (`hw_id`) REFERENCES `health_worker` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
