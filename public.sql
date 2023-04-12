/*
 Navicat Premium Data Transfer

 Source Server         : postgresql
 Source Server Type    : PostgreSQL
 Source Server Version : 140002
 Source Host           : localhost:5432
 Source Catalog        : bengkel
 Source Schema         : public

 Target Server Type    : PostgreSQL
 Target Server Version : 140002
 File Encoding         : 65001

 Date: 17/05/2022 08:12:45
*/


-- ----------------------------
-- Sequence structure for categories_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."categories_id_seq";
CREATE SEQUENCE "public"."categories_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for failed_jobs_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."failed_jobs_id_seq";
CREATE SEQUENCE "public"."failed_jobs_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for items_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."items_id_seq";
CREATE SEQUENCE "public"."items_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for migrations_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."migrations_id_seq";
CREATE SEQUENCE "public"."migrations_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for permissions_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."permissions_id_seq";
CREATE SEQUENCE "public"."permissions_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for personal_access_tokens_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."personal_access_tokens_id_seq";
CREATE SEQUENCE "public"."personal_access_tokens_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for roles_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."roles_id_seq";
CREATE SEQUENCE "public"."roles_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for stores_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."stores_id_seq";
CREATE SEQUENCE "public"."stores_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for users_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "public"."users_id_seq";
CREATE SEQUENCE "public"."users_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 9223372036854775807
START 1
CACHE 1;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS "public"."categories";
CREATE TABLE "public"."categories" (
  "id" int8 NOT NULL DEFAULT nextval('categories_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "slug" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "icon_url" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "description" text COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO "public"."categories" VALUES (1, 'Brakes', 'brakes', 'img/sparepart/Brake.svg', 'Find good brakes', '2022-05-11 14:58:53', '2022-05-11 14:58:53');
INSERT INTO "public"."categories" VALUES (2, 'Suspension', 'suspension', 'img/sparepart/Shock Absorber2.svg', 'Dampen various vibrations generated from the road surface', '2022-05-11 14:58:53', '2022-05-11 14:58:53');
INSERT INTO "public"."categories" VALUES (3, 'Drivetrain', 'drivetrain', 'img/sparepart/Gearbox3.svg', 'Dampen various vibrations generated from the road surface', '2022-05-11 14:58:53', '2022-05-11 14:58:53');
INSERT INTO "public"."categories" VALUES (4, 'Electronics', 'electronics', 'img/sparepart/Input-Component4.svg', 'Help to keep your car running at its full potential', '2022-05-11 14:58:53', '2022-05-11 14:58:53');
INSERT INTO "public"."categories" VALUES (5, 'Exhaust', 'exhaust', 'img/sparepart/Exhaust-Pipe5.svg', 'Find all kinds of exhaust', '2022-05-11 14:58:53', '2022-05-11 14:58:53');
INSERT INTO "public"."categories" VALUES (6, 'Oil', 'oil', 'img/sparepart/Engine-Oil6.svg', 'Find perfect oil for your car', '2022-05-11 14:58:53', '2022-05-11 14:58:53');
INSERT INTO "public"."categories" VALUES (7, 'Wheels', 'wheels', 'img/sparepart/Wheel7.svg', 'To help you choose, wheels and tyres', '2022-05-11 14:58:53', '2022-05-11 14:58:53');
INSERT INTO "public"."categories" VALUES (8, 'Tools', 'tools', 'img/sparepart/Toolbox8.svg', 'Tools for repairing and maintenance your car', '2022-05-11 14:58:53', '2022-05-11 14:58:53');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS "public"."failed_jobs";
CREATE TABLE "public"."failed_jobs" (
  "id" int8 NOT NULL DEFAULT nextval('failed_jobs_id_seq'::regclass),
  "uuid" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "connection" text COLLATE "pg_catalog"."default" NOT NULL,
  "queue" text COLLATE "pg_catalog"."default" NOT NULL,
  "payload" text COLLATE "pg_catalog"."default" NOT NULL,
  "exception" text COLLATE "pg_catalog"."default" NOT NULL,
  "failed_at" timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP
)
;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for item_store
-- ----------------------------
DROP TABLE IF EXISTS "public"."item_store";
CREATE TABLE "public"."item_store" (
  "item_id" int8 NOT NULL,
  "store_id" int8 NOT NULL
)
;

-- ----------------------------
-- Records of item_store
-- ----------------------------

-- ----------------------------
-- Table structure for items
-- ----------------------------
DROP TABLE IF EXISTS "public"."items";
CREATE TABLE "public"."items" (
  "id" int8 NOT NULL DEFAULT nextval('items_id_seq'::regclass),
  "category_id" int8 NOT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "brand" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "desc" varchar(255) COLLATE "pg_catalog"."default",
  "price" int8 NOT NULL,
  "image" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of items
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS "public"."migrations";
CREATE TABLE "public"."migrations" (
  "id" int4 NOT NULL DEFAULT nextval('migrations_id_seq'::regclass),
  "migration" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "batch" int4 NOT NULL
)
;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO "public"."migrations" VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO "public"."migrations" VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO "public"."migrations" VALUES (3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1);
INSERT INTO "public"."migrations" VALUES (4, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO "public"."migrations" VALUES (5, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO "public"."migrations" VALUES (6, '2022_03_26_163808_laratrust_setup_tables', 1);
INSERT INTO "public"."migrations" VALUES (7, '2022_03_28_075337_create_sessions_table', 1);
INSERT INTO "public"."migrations" VALUES (8, '2022_04_10_060156_create_stores_table', 1);
INSERT INTO "public"."migrations" VALUES (9, '2022_04_10_060302_create_categories_table', 1);
INSERT INTO "public"."migrations" VALUES (10, '2022_04_10_060304_create_items_table', 1);
INSERT INTO "public"."migrations" VALUES (11, '2022_04_10_070841_item_store', 1);
INSERT INTO "public"."migrations" VALUES (12, '2022_04_14_144709_create_notifications_table', 1);

-- ----------------------------
-- Table structure for notifications
-- ----------------------------
DROP TABLE IF EXISTS "public"."notifications";
CREATE TABLE "public"."notifications" (
  "id" uuid NOT NULL,
  "type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "notifiable_type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "notifiable_id" int8 NOT NULL,
  "data" text COLLATE "pg_catalog"."default" NOT NULL,
  "read_at" timestamp(0),
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of notifications
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS "public"."password_resets";
CREATE TABLE "public"."password_resets" (
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "token" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "created_at" timestamp(0)
)
;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for permission_role
-- ----------------------------
DROP TABLE IF EXISTS "public"."permission_role";
CREATE TABLE "public"."permission_role" (
  "permission_id" int8 NOT NULL,
  "role_id" int8 NOT NULL
)
;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO "public"."permission_role" VALUES (1, 1);
INSERT INTO "public"."permission_role" VALUES (2, 1);
INSERT INTO "public"."permission_role" VALUES (3, 1);
INSERT INTO "public"."permission_role" VALUES (4, 1);
INSERT INTO "public"."permission_role" VALUES (5, 1);
INSERT INTO "public"."permission_role" VALUES (6, 1);
INSERT INTO "public"."permission_role" VALUES (7, 1);
INSERT INTO "public"."permission_role" VALUES (8, 1);
INSERT INTO "public"."permission_role" VALUES (9, 1);
INSERT INTO "public"."permission_role" VALUES (10, 1);
INSERT INTO "public"."permission_role" VALUES (1, 2);
INSERT INTO "public"."permission_role" VALUES (2, 2);
INSERT INTO "public"."permission_role" VALUES (3, 2);
INSERT INTO "public"."permission_role" VALUES (4, 2);
INSERT INTO "public"."permission_role" VALUES (9, 2);
INSERT INTO "public"."permission_role" VALUES (10, 2);
INSERT INTO "public"."permission_role" VALUES (9, 3);
INSERT INTO "public"."permission_role" VALUES (10, 3);

-- ----------------------------
-- Table structure for permission_user
-- ----------------------------
DROP TABLE IF EXISTS "public"."permission_user";
CREATE TABLE "public"."permission_user" (
  "permission_id" int8 NOT NULL,
  "user_id" int8 NOT NULL,
  "user_type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of permission_user
-- ----------------------------

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS "public"."permissions";
CREATE TABLE "public"."permissions" (
  "id" int8 NOT NULL DEFAULT nextval('permissions_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "display_name" varchar(255) COLLATE "pg_catalog"."default",
  "description" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO "public"."permissions" VALUES (1, 'users-create', 'Create Users', 'Create Users', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (2, 'users-read', 'Read Users', 'Read Users', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (3, 'users-update', 'Update Users', 'Update Users', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (4, 'users-delete', 'Delete Users', 'Delete Users', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (5, 'payments-create', 'Create Payments', 'Create Payments', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (6, 'payments-read', 'Read Payments', 'Read Payments', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (7, 'payments-update', 'Update Payments', 'Update Payments', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (9, 'profile-read', 'Read Profile', 'Read Profile', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."permissions" VALUES (10, 'profile-update', 'Update Profile', 'Update Profile', '2022-05-11 14:58:52', '2022-05-11 14:58:52');

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS "public"."personal_access_tokens";
CREATE TABLE "public"."personal_access_tokens" (
  "id" int8 NOT NULL DEFAULT nextval('personal_access_tokens_id_seq'::regclass),
  "tokenable_type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "tokenable_id" int8 NOT NULL,
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "token" varchar(64) COLLATE "pg_catalog"."default" NOT NULL,
  "abilities" text COLLATE "pg_catalog"."default",
  "last_used_at" timestamp(0),
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for role_user
-- ----------------------------
DROP TABLE IF EXISTS "public"."role_user";
CREATE TABLE "public"."role_user" (
  "role_id" int8 NOT NULL,
  "user_id" int8 NOT NULL,
  "user_type" varchar(255) COLLATE "pg_catalog"."default" NOT NULL
)
;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO "public"."role_user" VALUES (1, 1, 'App\Models\User');
INSERT INTO "public"."role_user" VALUES (3, 2, 'App\Models\User');
INSERT INTO "public"."role_user" VALUES (3, 3, 'App\Models\User');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS "public"."roles";
CREATE TABLE "public"."roles" (
  "id" int8 NOT NULL DEFAULT nextval('roles_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "display_name" varchar(255) COLLATE "pg_catalog"."default",
  "description" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO "public"."roles" VALUES (1, 'superadmin', 'Superadmin', 'Superadmin', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."roles" VALUES (2, 'employee', 'Employee', 'Employee', '2022-05-11 14:58:52', '2022-05-11 14:58:52');
INSERT INTO "public"."roles" VALUES (3, 'mitra', 'Mitra', 'Mitra', '2022-05-11 14:58:52', '2022-05-11 14:58:52');

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS "public"."sessions";
CREATE TABLE "public"."sessions" (
  "id" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "user_id" int8,
  "ip_address" varchar(45) COLLATE "pg_catalog"."default",
  "user_agent" text COLLATE "pg_catalog"."default",
  "payload" text COLLATE "pg_catalog"."default" NOT NULL,
  "last_activity" int4 NOT NULL
)
;

-- ----------------------------
-- Records of sessions
-- ----------------------------
INSERT INTO "public"."sessions" VALUES ('oNPBjJJ2UaOvciHo0nLgyv4DYEs3soACwM0IqerN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.54 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFBNUUV5bGFocktVWkIwOUVWM2hDRkMzNWlYM1VsTU9wOVRUdURhcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zcGFyZXBhcnQvdG9vbHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1652281936);

-- ----------------------------
-- Table structure for stores
-- ----------------------------
DROP TABLE IF EXISTS "public"."stores";
CREATE TABLE "public"."stores" (
  "id" int8 NOT NULL DEFAULT nextval('stores_id_seq'::regclass),
  "store_name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "open" time(0) NOT NULL,
  "close" time(0) NOT NULL,
  "address" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "phone_store" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "status_activation" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "id_mitra" int8 NOT NULL,
  "store_image" varchar(255) COLLATE "pg_catalog"."default",
  "lat" varchar(255) COLLATE "pg_catalog"."default",
  "long" varchar(255) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0)
)
;

-- ----------------------------
-- Records of stores
-- ----------------------------
INSERT INTO "public"."stores" VALUES (1, 'Nathan B', '14:58:53', '14:58:53', 'Solo', '928389123', '1', 2, '2dawdw', '-7.564549075372528', '110.84062825432814', '2022-05-11 14:58:53', NULL);
INSERT INTO "public"."stores" VALUES (2, 'Nathan C', '14:58:53', '14:58:53', 'Solo', '928389103', '1', 3, '3dawdw', '-7.561835732657607', '110.84882803103476', '2022-05-11 14:58:53', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS "public"."users";
CREATE TABLE "public"."users" (
  "id" int8 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
  "name" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "email" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "nik" varchar(16) COLLATE "pg_catalog"."default",
  "npwp" varchar(16) COLLATE "pg_catalog"."default",
  "ktp" varchar(2048) COLLATE "pg_catalog"."default",
  "email_verified_at" timestamp(0),
  "password" varchar(255) COLLATE "pg_catalog"."default" NOT NULL,
  "remember_token" varchar(100) COLLATE "pg_catalog"."default",
  "current_team_id" int8,
  "profile_photo_path" varchar(2048) COLLATE "pg_catalog"."default",
  "created_at" timestamp(0),
  "updated_at" timestamp(0),
  "two_factor_secret" text COLLATE "pg_catalog"."default",
  "two_factor_recovery_codes" text COLLATE "pg_catalog"."default"
)
;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO "public"."users" VALUES (1, 'SuperAdmin', 'super@test.test', '1234567890123456', NULL, NULL, '2022-04-11 05:44:48', '$2y$10$l0q0ECvI4p7lNxMFCydmmO0ikAaj.dThl/VvjzK2mT40YhkBi83vS', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."users" VALUES (2, 'Mitra', 'mitra@test.test', '1234567890121156', '1234567890120854', NULL, '2022-04-11 05:44:48', '$2y$10$YMQ4Obh/yHesTiWhJ6wPQeFmlD8k.5NTtiMwLLx/Sv5Pkm4dc0zkm', NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO "public"."users" VALUES (3, 'Mitra2', 'mitra2@test.test', '1234567890121154', '1234567890120054', NULL, '2022-04-11 05:44:48', '$2y$10$P/WpL6Ir28f55S8Fycm88OX1NKLVOb3O7IcBRomEtRuUU572LR3Qe', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."categories_id_seq"
OWNED BY "public"."categories"."id";
SELECT setval('"public"."categories_id_seq"', 8, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."failed_jobs_id_seq"
OWNED BY "public"."failed_jobs"."id";
SELECT setval('"public"."failed_jobs_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."items_id_seq"
OWNED BY "public"."items"."id";
SELECT setval('"public"."items_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."migrations_id_seq"
OWNED BY "public"."migrations"."id";
SELECT setval('"public"."migrations_id_seq"', 12, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."permissions_id_seq"
OWNED BY "public"."permissions"."id";
SELECT setval('"public"."permissions_id_seq"', 10, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."personal_access_tokens_id_seq"
OWNED BY "public"."personal_access_tokens"."id";
SELECT setval('"public"."personal_access_tokens_id_seq"', 1, false);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."roles_id_seq"
OWNED BY "public"."roles"."id";
SELECT setval('"public"."roles_id_seq"', 3, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."stores_id_seq"
OWNED BY "public"."stores"."id";
SELECT setval('"public"."stores_id_seq"', 2, true);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "public"."users_id_seq"
OWNED BY "public"."users"."id";
SELECT setval('"public"."users_id_seq"', 3, true);

-- ----------------------------
-- Primary Key structure for table categories
-- ----------------------------
ALTER TABLE "public"."categories" ADD CONSTRAINT "categories_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table failed_jobs
-- ----------------------------
ALTER TABLE "public"."failed_jobs" ADD CONSTRAINT "failed_jobs_uuid_unique" UNIQUE ("uuid");

-- ----------------------------
-- Primary Key structure for table failed_jobs
-- ----------------------------
ALTER TABLE "public"."failed_jobs" ADD CONSTRAINT "failed_jobs_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table items
-- ----------------------------
ALTER TABLE "public"."items" ADD CONSTRAINT "items_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table migrations
-- ----------------------------
ALTER TABLE "public"."migrations" ADD CONSTRAINT "migrations_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table notifications
-- ----------------------------
CREATE INDEX "notifications_notifiable_type_notifiable_id_index" ON "public"."notifications" USING btree (
  "notifiable_type" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST,
  "notifiable_id" "pg_catalog"."int8_ops" ASC NULLS LAST
);

-- ----------------------------
-- Primary Key structure for table notifications
-- ----------------------------
ALTER TABLE "public"."notifications" ADD CONSTRAINT "notifications_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table password_resets
-- ----------------------------
CREATE INDEX "password_resets_email_index" ON "public"."password_resets" USING btree (
  "email" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST
);

-- ----------------------------
-- Primary Key structure for table permission_role
-- ----------------------------
ALTER TABLE "public"."permission_role" ADD CONSTRAINT "permission_role_pkey" PRIMARY KEY ("permission_id", "role_id");

-- ----------------------------
-- Primary Key structure for table permission_user
-- ----------------------------
ALTER TABLE "public"."permission_user" ADD CONSTRAINT "permission_user_pkey" PRIMARY KEY ("user_id", "permission_id", "user_type");

-- ----------------------------
-- Uniques structure for table permissions
-- ----------------------------
ALTER TABLE "public"."permissions" ADD CONSTRAINT "permissions_name_unique" UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table permissions
-- ----------------------------
ALTER TABLE "public"."permissions" ADD CONSTRAINT "permissions_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table personal_access_tokens
-- ----------------------------
CREATE INDEX "personal_access_tokens_tokenable_type_tokenable_id_index" ON "public"."personal_access_tokens" USING btree (
  "tokenable_type" COLLATE "pg_catalog"."default" "pg_catalog"."text_ops" ASC NULLS LAST,
  "tokenable_id" "pg_catalog"."int8_ops" ASC NULLS LAST
);

-- ----------------------------
-- Uniques structure for table personal_access_tokens
-- ----------------------------
ALTER TABLE "public"."personal_access_tokens" ADD CONSTRAINT "personal_access_tokens_token_unique" UNIQUE ("token");

-- ----------------------------
-- Primary Key structure for table personal_access_tokens
-- ----------------------------
ALTER TABLE "public"."personal_access_tokens" ADD CONSTRAINT "personal_access_tokens_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table role_user
-- ----------------------------
ALTER TABLE "public"."role_user" ADD CONSTRAINT "role_user_pkey" PRIMARY KEY ("user_id", "role_id", "user_type");

-- ----------------------------
-- Uniques structure for table roles
-- ----------------------------
ALTER TABLE "public"."roles" ADD CONSTRAINT "roles_name_unique" UNIQUE ("name");

-- ----------------------------
-- Primary Key structure for table roles
-- ----------------------------
ALTER TABLE "public"."roles" ADD CONSTRAINT "roles_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Indexes structure for table sessions
-- ----------------------------
CREATE INDEX "sessions_last_activity_index" ON "public"."sessions" USING btree (
  "last_activity" "pg_catalog"."int4_ops" ASC NULLS LAST
);
CREATE INDEX "sessions_user_id_index" ON "public"."sessions" USING btree (
  "user_id" "pg_catalog"."int8_ops" ASC NULLS LAST
);

-- ----------------------------
-- Primary Key structure for table sessions
-- ----------------------------
ALTER TABLE "public"."sessions" ADD CONSTRAINT "sessions_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table stores
-- ----------------------------
ALTER TABLE "public"."stores" ADD CONSTRAINT "stores_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Uniques structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_email_unique" UNIQUE ("email");

-- ----------------------------
-- Primary Key structure for table users
-- ----------------------------
ALTER TABLE "public"."users" ADD CONSTRAINT "users_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Foreign Keys structure for table item_store
-- ----------------------------
ALTER TABLE "public"."item_store" ADD CONSTRAINT "item_store_item_id_foreign" FOREIGN KEY ("item_id") REFERENCES "public"."items" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."item_store" ADD CONSTRAINT "item_store_store_id_foreign" FOREIGN KEY ("store_id") REFERENCES "public"."stores" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table items
-- ----------------------------
ALTER TABLE "public"."items" ADD CONSTRAINT "items_category_id_foreign" FOREIGN KEY ("category_id") REFERENCES "public"."categories" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table permission_role
-- ----------------------------
ALTER TABLE "public"."permission_role" ADD CONSTRAINT "permission_role_permission_id_foreign" FOREIGN KEY ("permission_id") REFERENCES "public"."permissions" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."permission_role" ADD CONSTRAINT "permission_role_role_id_foreign" FOREIGN KEY ("role_id") REFERENCES "public"."roles" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table permission_user
-- ----------------------------
ALTER TABLE "public"."permission_user" ADD CONSTRAINT "permission_user_permission_id_foreign" FOREIGN KEY ("permission_id") REFERENCES "public"."permissions" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table role_user
-- ----------------------------
ALTER TABLE "public"."role_user" ADD CONSTRAINT "role_user_role_id_foreign" FOREIGN KEY ("role_id") REFERENCES "public"."roles" ("id") ON DELETE CASCADE ON UPDATE CASCADE;

-- ----------------------------
-- Foreign Keys structure for table stores
-- ----------------------------
ALTER TABLE "public"."stores" ADD CONSTRAINT "stores_id_mitra_foreign" FOREIGN KEY ("id_mitra") REFERENCES "public"."users" ("id") ON DELETE CASCADE ON UPDATE CASCADE;
