-- SaaS Transformation - Single to Multi-Tenant Migration

-- 1. Create Companies Table
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 2. Insert Default Company (Noveltech/White Lotus)
INSERT INTO `companies` (`id`, `company_name`, `email`) VALUES (1, 'Noveltech Solutions', 'info@noveltechsolutions.net');

-- 3. Add company_id to core tables
-- Users table
ALTER TABLE `users` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;

-- Properties and Buildings
ALTER TABLE `mulkkayit` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `yapikayit` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;

-- Leases and Kaporas
ALTER TABLE `kiralamakayit` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `kirakaporakayit` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;

-- Financials
ALTER TABLE `tahsilat` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `aidattahakkukborc` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `aidattahakkukgelir` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `depozittahakkukborc` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `depozittahakkukgelir` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `kiratahakkukborc` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `kiratahakkukgelir` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `sutahakkukborc` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `sutahakkukgelir` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;

-- Other Support Tables
ALTER TABLE `acente` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `files` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
ALTER TABLE `genelborc` ADD COLUMN `company_id` int(11) NOT NULL DEFAULT 1 AFTER `id`;
