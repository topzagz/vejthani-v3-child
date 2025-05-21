# Modern Frontend Workflow
- SCSS (SASS) สำหรับ styling
- Bootstrap 5.3.6
- Webpack สำหรับ build JavaScript
- npm scripts สำหรับ build/watch
- แบ่งโฟลเดอร์อย่างมีระเบียบ (src/, dist/, node_modules/)


# โครงสร้างโปรเจกต์
```bash
vejthani-v3-child/
├── dist/                     # ไฟล์ที่ build เสร็จแล้ว พร้อมให้ WordPress โหลด
│   ├── css/
│   │   └── style.css         # Output CSS จาก SASS
│   └── js/
│       └── main.js           # Output JS จาก Webpack
├── src/                      # ไฟล์ต้นฉบับที่เราเขียนจริง
│   ├── scss/
│   │   ├── _colors.scss      # Partial SCSS ที่เก็บตัวแปรสี
│   │   └── style.scss        # SASS หลัก (import bootstrap + ปรับแต่ง)
│   |   ├── components/
│   |   |      └── _card.scss      # Card
│   └── js/
│       └── main.js           # Entry point สำหรับ Webpack + Bootstrap JS
├── functions.php             # Load CSS + JS เข้ากับ WordPress
├── header.php                # เทมเพลต WordPress ถ้าต้องการแก้ header
├── style.css                 # Meta file ของ WordPress Theme
├── webpack.config.js         # Webpack config สำหรับ build main.js
├── package.json              # รายการ dependencies + npm scripts
└── .gitignore
```




# วิธี Build & Watch

### ติดตั้งครั้งเดียว
npm install

### สร้างไฟล์ .css และ .js ทั้งหมด
npm run build

### ทำงานแบบ watch real-time ระหว่างเขียน
npm run watch
