## วิธีการนำโปรเจ็กไปทดสอบ

<ol>
<li>ใช้คำสั่ง git clone <a href="https://github.com/Kingsconsult/laravel_8_crud.git">https://github.com/Kingsconsult/laravel_8_crud.git</a></li>
<li>cd laravel_8_crud/</li>
<li>composer install</li>
<li>npm install</li>
<li>cp .env.example .env</li>
<li>php artisan key:generate</li>
<li>ตั้งค่าการเชื่อมต่อฐานข้อมูลของโปรเจ็กในไฟล์ .env file (ตรวจสอบว่ามีไฟล์ .env เพิ่มมาหรือไม่หลังจากใช้คำสั่ง cp .env.example .env เเละ cp .env.example .env)</li>
<li>php artisan migrate</li>
<li>php artisan serve (ถ้าเซิฟเวอร์ถูกรับบน port 8000 เเล้วก็ทำการไปที่ , <a href="http://127.0.0.1:8000" rel="nofollow">http://127.0.0.1:8000</a> ได้เลย) 
 </li>
</ol>
