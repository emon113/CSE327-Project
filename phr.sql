-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 07:15 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phr`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `subtotal_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `address` varchar(60) DEFAULT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `address`, `phone_number`, `email`) VALUES
(1, 'Square Pharmaceuticals Ltd.', 'Square Centre 48 Mohakhali C/A, Dhaka 1212', '02-8833047', 'null'),
(2, 'Beximco Pharmaceuticals Ltd.', '19 Dhanmondi, R/A Rd No. 7, Dhaka 1205', '02-58611001', 'info@bpl.net'),
(3, 'Incepta Pharmaceuticals Ltd.', '40 Shaheed Tajuddin Ahmed Ave, Dhaka 1208', '028891190', 'info@inceptapharma.com'),
(4, 'ACI Limited.', 'Tejgaon Industrial Area, Dhaka-1208', '028878603', 'null'),
(5, 'Drug International', 'Khwaja Enayetpuri (R) Tower, 17 Green Rd, Dhaka 1205', '029662611', 'info@drug-international.com'),
(6, 'Healthcare Pharmaceuticals Ltd', '89 Bir Uttam C.R. Datta Road, Dhaka 1205', '029632176', 'info@hpl.com.bd'),
(7, 'Radiant Pharmaceuticals Ltd.', '22/1 Dhanmondi, Road 2,Dhaka 1205', '029660307', 'info@radiant.com.bd'),
(8, 'Opsonin Pharma Ltd.', '30, Opsonin Building, New Eskaton Road, Dhaka 1000', '0248311900', 'info@opsonin.net'),
(9, 'Ibn Sina Pharmaceuticals Ltd.', 'Tanin center,03 Asad gate,mirpur road,mohammadpur,Dhaka-1207', '029119564', 'null'),
(10, 'Globe Pharmaceuticals Ltd.', 'Shaheed Tajuddin Ahmed Ave, Dhaka 1208', '01959995575', 'globeimd@globe-uro.com');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `emp_id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `job` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`emp_id`, `username`, `password`, `job`) VALUES
(1, 'reid', 'rei123', 'pharmacist'),
(2, 'colon', 'col123', 'pharmacist'),
(3, 'shanklin', 'sha123', 'pharmacist'),
(4, 'poulin', 'pou123', 'pharmacist'),
(5, 'hollenbeck', 'hol123', 'pharmacist'),
(6, 'genco', 'gen123', 'manager'),
(7, 'maher', 'mah123', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `job` varchar(10) NOT NULL,
  `join_date` date NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `first_name`, `last_name`, `phone_number`, `dob`, `salary`, `job`, `join_date`, `email`, `address`) VALUES
(1, 'Linda', 'Reid', '01725039794', '1987-06-17', 18000, 'pharmacist', '2014-10-07', 'reid198@gmail.com', 'Rockwood, Michigan(MI), 48173'),
(2, 'Salvador', 'Colon', '01898159711', '1993-01-13', 15000, 'pharmacist', '2015-04-29', 'colon1993@gmail.com', 'Manistique, Michigan(MI), 49854'),
(3, 'Roosevelt', 'Shanklin', '01962429654', '1987-09-17', 17000, 'pharmacist', '2015-04-29', 'shanklin1987@yahoo.com', 'Tahlequah, Oklahoma(OK), 74464'),
(4, 'Carmina', 'Poulin', '01303252721', '1994-06-07', 15000, 'pharmacist', '2017-09-06', 'poulin1994@outlook.com', 'Cedar Bluff, Virginia(VA), 24609'),
(5, 'Elaine', 'Hollenbeck', '01562838572', '1997-01-29', 17000, 'pharmacist', '2019-12-06', 'hollenbeck1997@gmail.com', 'Grand Saline, Texas(TX), 75140'),
(6, 'Ardella', 'Genco', '01407673449', '1996-02-17', 25000, 'manager', '2014-03-26', 'genco1996@yahoo.com', 'North Bend, Ohio(OH), 45052'),
(7, 'Kenton', 'Maher', '01240426619', '1998-07-09', 24000, 'manager', '2016-06-03', 'maher1998@gmail.com', 'Gainesville, Texas(TX), 76240');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `eid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`eid`) VALUES
(7);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `generic_name` varchar(50) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `retail_price` decimal(6,2) NOT NULL,
  `purchase_price` decimal(6,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `stock_minimum` int(11) NOT NULL,
  `shelf_no` varchar(4) NOT NULL,
  `expiry_date` date NOT NULL,
  `otc` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`medicine_id`, `medicine_name`, `generic_name`, `company_name`, `category`, `retail_price`, `purchase_price`, `stock`, `stock_minimum`, `shelf_no`, `expiry_date`, `otc`) VALUES
(1, 'Napa 500mg', 'Paracetamol', 'Beximco Pharmaceuticals Ltd.', 'Tablet', '1.00', '0.85', 96, 30, 'B2', '2022-11-30', 'yes'),
(2, 'Ace 500mg', 'Paracetamol', 'Square Pharmaceuticals Ltd.', 'Tablet', '1.00', '0.85', 79, 20, 'A1', '2021-12-31', 'yes'),
(3, 'Napa 50ml', 'Paracetamol', 'Beximco Pharmaceuticals Ltd.', 'Syrup', '20.00', '17.00', 25, 5, 'B2', '2022-09-30', 'yes'),
(4, 'Sergel 20mg', 'Esomeprazole Magnesium Trihydrate', 'Healthcare Pharmaceuticals Ltd', 'Capsule', '7.00', '5.95', 65, 25, 'F1', '2022-01-31', 'no'),
(5, 'Esomep 20mg', 'Esomeprazole Magnesium Trihydrate', 'ACI Limited', 'Capsule', '7.00', '5.95', 43, 15, 'D3', '2021-10-31', 'no'),
(6, 'Esonix 20mg', 'Esomeprazole Magnesium Trihydrate', 'Incepta Pharmaceuticals Ltd.', 'Capsule', '7.00', '5.95', 85, 20, 'C1', '2022-03-31', 'no'),
(7, 'Motigut 10mg', 'Domperidone', 'Square Pharmaceuticals Ltd.', 'Tablet', '3.00', '2.55', 60, 20, 'A2', '2022-10-31', 'yes'),
(8, 'Deflux 10mg', 'Domperidone', 'Beximco Pharmaceuticals Ltd.', 'Tablet', '3.00', '2.55', 50, 15, 'B1', '2021-12-31', 'yes'),
(9, 'Dopadon 10mg', 'Domperidone', 'Ibn Sina Pharmaceuticals Ltd.', 'Tablet', '2.50', '2.12', 40, 10, 'I1', '2022-06-30', 'yes'),
(10, 'Fexofast 120mg', 'Fexofenadine Hydrochloride', 'Drug International', 'Tablet', '7.00', '5.95', 40, 10, 'E2', '2022-07-31', 'no'),
(11, 'Fixal 120mg', 'Fexofenadine Hydrochloride', 'Opsonin Pharma Ltd.', 'Tablet', '8.00', '6.80', 35, 10, 'H1', '2021-12-31', 'no'),
(12, 'Osartil 50mg', 'Losartan Potassium', 'Incepta Pharmaceuticals Ltd.', 'Tablet', '8.00', '6.80', 20, 30, 'C2', '2022-11-30', 'no'),
(13, 'Larb 50mg', 'Losartan Potassium', 'Opsonin Pharma Ltd.', 'Tablet', '8.00', '6.80', 15, 20, 'H1', '2021-12-31', 'no'),
(14, 'Lok 50mg', 'Losartan Potassium', 'Globe Pharmaceuticals Ltd.', 'Tablet', '8.00', '6.80', 20, 25, 'J2', '2022-09-30', 'no'),
(15, 'Cef-3 200mg', 'Cefixime', 'Square Pharmaceuticals Ltd', 'Tablet', '35.11', '32.33', 100, 20, 'A2', '2022-12-01', 'No'),
(16, 'Carva 75mg', 'Aspirin', 'Square Pharmaceuticals Ltd', 'Tablet', '0.57', '0.32', 150, 20, 'A1', '2022-05-25', 'Yes'),
(17, 'Bufen SR 300mg', 'Ibuprofen', 'Drug International Ltd', 'Capsule', '4.10', '3.79', 120, 20, 'E3', '2022-02-03', 'Yes'),
(18, 'Epitra 2mg', 'Clonazepam', 'Square Pharmaceuticals Ltd', 'Tablet', '10.00', '9.70', 100, 20, 'A3', '2021-05-01', 'No'),
(19, 'Mirapro 7.5mg', 'Mirtazapine', 'Square Pharmaceuticals Ltd', 'Tablet', '6.00', '5.69', 50, 10, 'A2', '2022-12-01', 'No'),
(20, 'Rapine 7.5mg', 'Mirtazapine', 'ACI Limited', 'Tablet', '6.00', '5.65', 75, 15, 'D4', '2021-05-01', 'No'),
(21, 'Ace PLUS 500mg', 'Paracetamol + Caffeine', 'Square Pharmaceuticals Ltd', 'Tablet', '2.51', '2.00', 100, 20, 'A3', '2022-12-01', 'Yes'),
(22, 'Vitamin A FORTE', 'Vitamin A (Retinol)', 'Drug International Ltd', 'Capsule', '10.21', '9.86', 75, 10, 'E2', '2022-02-03', 'Yes'),
(23, 'D-Rise 40000IU', 'Cholecalciferol', 'Beximco Pharmaceuticals Ltd', 'Capsule', '35.00', '33.00', 50, 10, 'B3', '2021-05-01', 'Yes'),
(24, 'Infovir 10mg', 'Adefovir Dipivoxil', 'Incepta Pharmaceuticals Ltd', 'Tablet', '35.00', '32.33', 75, 20, 'C3', '2022-05-25', 'No'),
(25, 'Square Zinc 20', 'Zinc Sulphate Monohydrate', 'Square Pharmaceuticals Ltd', 'Tablet', '35.50', '32.00', 50, 20, 'A2', '2020-12-01', 'Yes'),
(26, 'Soritec 10', 'Acitretin', 'ACI Ltd', 'Capsule', '30.50', '22.00', 200, 20, 'Z2', '2022-12-01', 'Yes'),
(27, 'Soritec 25', 'Acitretin', 'ACI Ltd', 'Capsule', '35.50', '30.00', 200, 20, 'Z2', '2023-12-01', 'Yes'),
(28, 'Fona', 'Adapalene 0.3%', 'Square Pharmaceuticals Ltd', 'Gel', '5.50', '3.25', 500, 20, 'Z2', '2023-12-01', 'Yes'),
(29, 'Adgar', 'Adapalene 0.3%', 'ACI Ltd', 'Gel', '5.70', '3.20', 200, 20, 'Z2', '2023-12-11', 'Yes'),
(30, 'Acicaft', 'Alcaftadine', 'ACI Ltd', 'Eye drop', '5.70', '3.20', 200, 20, 'Z2', '2023-12-13', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE `orderitem` (
  `orderitem_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`orderitem_id`, `order_id`, `emp_id`, `medicine_id`, `quantity`, `subtotal_price`) VALUES
(1, 1, 7, 1, 2, '2.00'),
(2, 2, 7, 3, 5, '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `total_price` decimal(6,2) NOT NULL,
  `customer_name` varchar(60) NOT NULL,
  `customer_phone` varchar(11) DEFAULT NULL,
  `payment_method` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `emp_id`, `order_date`, `total_price`, `customer_name`, `customer_phone`, `payment_method`) VALUES
(1, 7, '2021-05-09', '2.00', 'Shihabur Samrat', '01743795142', 'card'),
(2, 7, '2021-05-09', '100.00', 'Shihabur Samrat', '11111111111', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

CREATE TABLE `representatives` (
  `rep_id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone_number` char(11) NOT NULL,
  `company_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`rep_id`, `first_name`, `last_name`, `phone_number`, `company_name`) VALUES
(1, 'Abul', 'Kashem', '01743795642', 'Beximco Pharmaceuticals Ltd.'),
(2, 'Din', 'Mohammad', '01815427953', 'Drug International'),
(3, 'Mithun', 'Das', '01534896248', 'Radiant Pharmaceuticals Ltd.'),
(4, 'Rahim', 'Ahamaed', '01634875236', 'Square Pharmaceuticals Ltd.'),
(5, 'Karim', 'Kour', '01516849762', 'Incepta Pharmaceuticals Ltd.'),
(6, 'Sakib', 'Khan', '01715214796', 'ACI Limited.'),
(7, 'Salman', 'Sha', '01912547892', 'Opsonin Pharma Ltd.'),
(8, 'Rajni', 'Kant', '01714586235', 'Ibn Sina Pharmaceuticals Ltd.'),
(9, 'Jobair', 'Alam', '01534792587', 'Healthcare Pharmaceuticals Ltd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
  ADD PRIMARY KEY (`orderitem_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `representatives`
--
ALTER TABLE `representatives`
  ADD PRIMARY KEY (`rep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
  MODIFY `orderitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `representatives`
--
ALTER TABLE `representatives`
  MODIFY `rep_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
