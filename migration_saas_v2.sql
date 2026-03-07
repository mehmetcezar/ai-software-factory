-- SaaS Transformation - Phase 2 Refinements
-- Add phone number and verification fields

ALTER TABLE `users` ADD COLUMN `phone` varchar(20) DEFAULT NULL AFTER `email`;
ALTER TABLE `users` ADD COLUMN `verification_code` varchar(6) DEFAULT NULL AFTER `phone`;
ALTER TABLE `users` ADD COLUMN `is_verified` int(1) NOT NULL DEFAULT 0 AFTER `verification_code`;
