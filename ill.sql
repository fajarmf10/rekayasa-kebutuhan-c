//done
LOCK TABLES `migrations` WRITE;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_15_105324_create_roles_table',1),(4,'2016_01_15_114412_create_role_user_table',1),(5,'2016_01_26_115212_create_permissions_table',1),(6,'2016_01_26_115523_create_permission_role_table',1),(7,'2016_02_09_132439_create_permission_user_table',1);
UNLOCK TABLES;

//done
LOCK TABLES `role_user` WRITE;
INSERT INTO `role_user` VALUES (1,2,2,'2018-05-02 13:38:53','2018-05-02 13:38:53'),(2,1,1,'2018-05-02 13:39:48','2018-05-02 13:39:48'),(3,3,3,'2018-05-02 13:40:19','2018-05-02 13:40:19');
UNLOCK TABLES;

//done
LOCK TABLES `roles` WRITE;
INSERT INTO `roles` VALUES (1,'Supplier','supplier','Book Supplier',1,'2018-05-02 13:27:43','2018-05-02 13:27:43'),(2,'Librarian','librarian','Librarian',1,'2018-05-02 13:29:08','2018-05-02 13:29:08'),(3,'User','user','Library User',1,'2018-05-02 13:31:12','2018-05-02 13:31:12');
UNLOCK TABLES;

//done
LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (1,'Habiburrahman El Shirazy','habibes@yahoo.com','$2y$10$gBvEw.VjsfzQrpsNBS2xY.yEfSfRVgCiRlDaPEj2IbxPEMlCgtkgK','QMI58OCvNAgP13abMfstSwdmdueDoDOEMedFU9egEzQg2GyI1lfuY66O6BOT','2018-05-02 13:33:41','2018-05-02 13:33:41'),(2,'Rako Prijanto','rako@yahoo.com','$2y$10$3gaQkSoZnvAjjZhk3c/OAuGYvrZp1x634twQ5kYEMY8DTtEP3XcU6','0FBkaZGKnKNmdB8XONrxzCJ6RA3Vp4mPOJ0RUyxOWKrmlG1F4DqlSdzBqlzY','2018-05-02 13:34:48','2018-05-02 13:34:48'),(3,'Fajar Maulana Firdaus','fajarmf78@gmail.com','$2y$10$5dITZaO1D3Hd14T9rqoyfewRVe0BpMYbztfJ6gS/4L52WlHmlHwmK','a1I0z2atDZBKFnFEbLQrVVlXDy3MIzXOeCx1tpCfNv2OjsFn45hYBeo2v8G6','2018-05-02 13:35:12','2018-05-02 13:35:12');
UNLOCK TABLES;
