docs/README.md
# Restaurant Recommendation System

## مقدمة
هذا المشروع عبارة عن نظام ويب بسيط لتقديم توصيات مطاعم بناءً على الوجبة المفضلة للمستخدم.

## المتطلبات
- سيرفر Ubuntu 24.04 LTS
- LAMP Stack (Linux, Apache, MySQL, PHP)
- Git و Jenkins لإدارة الكود و CI/CD

## هيكل المشروع
- `server/config/db_config.php` → إعدادات قاعدة البيانات
- `webapp/frontend/index.php` → صفحة الواجهة الرئيسية
- `webapp/frontend/style.css` → تنسيقات الواجهة
- `webapp/frontend/app.js` → جافاسكربت للواجهة
- `webapp/backend/recommendation.php` → منطق التوصية بالمطاعم
- `database/schema.sql` → هيكل قاعدة البيانات
- `database/populate.sql` → البيانات التجريبية
- `ci-cd/` → ملفات Jenkins و سكربتات النشر و Git
- `scripts/` → سكربتات للاختبار والنسخ الاحتياطي
- `docs/architecture_diagram.png` → رسم توضيحي لتصميم النظام

## خطوات التشغيل
1. استيراد `schema.sql` و `populate.sql` في MySQL.
2. تعديل `db_config.php` بمعلومات الاتصال الصحيحة.
3. رفع ملفات المشروع إلى `/var/www/html/webapp/`.
4. فتح المتصفح والذهاب إلى `http://<server-ip>/webapp/frontend/index.php`.
5. استخدام النموذج لإدخال وجبة والحصول على التوصية.

## CI/CD
- Jenkins يقوم بسحب آخر نسخة من GitHub وتشغيل `deploy.sh` للنشر التلقائي.
- `git_push.sh` لأتمتة رفع الكود إلى GitHub.

## سكربتات المساعدة
- `test.sh` → لاختبار وظائف التطبيق
- `backup.sh` → أخذ نسخة احتياطية من قاعدة البيانات

## ملاحظات
- تأكد أن Apache و MySQL و PHP تعمل بشكل صحيح على السيرفر.
- استخدم `phpinfo()` لاختبار إعدادات PHP إذا لزم الأمر.
يااااااااارب يزبط 333333