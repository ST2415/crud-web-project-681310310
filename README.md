# crud-web-project-681310310
# 🚀 PHP MySQL CRUD Web Application

โปรเจกต์เว็บแอปพลิเคชันระบบจัดการข้อมูล **CRUD** (Create, Read, Update, Delete) แบบครบวงจร พัฒนาด้วย **PHP** และ **MySQL** ตกแต่งด้วย **Bootstrap 5** โดยทำงานผ่าน **Docker Desktop** (Docker Compose) พร้อมระบบจัดการฐานข้อมูลผ่าน **phpMyAdmin**

---

## 🛠️ Tech Stack & Features

- **Backend:** PHP 8.2 (Apache)
- **Database:** MySQL 8.0
- **Database Management Tool:** phpMyAdmin
- **Frontend Framework:** Bootstrap 5 (via CDN)
- **Containerization:** Docker & Docker Compose
- **CRUD Operations:**
  - 🟢 **Create:** เพิ่มข้อมูลใหม่ผ่าน `add_new.php`
  - 🔵 **Read:** แสดงรายการข้อมูลทั้งหมดบน `index.php`
  - 🟡 **Update:** แก้ไขข้อมูลที่มีอยู่ผ่าน `edit.php`
  - 🔴 **Delete:** ลบข้อมูลออกจากระบบผ่าน `delete.php`

---

## 📁 Project Structure

```text
crud-web-project/
├── Dockerfile          # กำหนดการติดตั้ง PHP Extensions (mysqli, pdo_mysql)
├── docker-compose.yml # จัดการและเชื่อมโยง Web, Database และ phpMyAdmin Containers
├── README.md           # เอกสารอธิบายโปรเจกต์
└── www/                # Web Root Folder (แมปกับ /var/www/html ใน Container)
    ├── index.php       # หน้าหลักแสดงรายการข้อมูลทั้งหมด (Read)
    ├── add_new.php     # ฟอร์มและส่วนประมวลผลเพิ่มข้อมูล (Create)
    ├── edit.php        # ฟอร์มและส่วนประมวลผลแก้ไขข้อมูล (Update)
    ├── delete.php      # ส่วนประมวลผลการลบข้อมูล (Delete)
    └── db_conn.php     # ไฟล์ตั้งค่าการเชื่อมต่อฐานข้อมูล MySQL
   ```

## 🚀 Getting Started (วิธีการรันโปรเจกต์)

1. Clone Repository นี้ลงเครื่อง:

   ```bash
   git clone [https://github.com/ST2415/crud-web-project.git](https://github.com/ST2415/crud-web-project.git)
   cd crud-web-project
   ```

2. สั่งสร้างและเปิดทำงาน Docker Containers:

   ```bash
   docker compose up -d --build
   ```

3. เข้าใช้งานผ่าน Browser
