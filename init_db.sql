-- Tạo database nếu chưa tồn tại
CREATE DATABASE IF NOT EXISTS vivuviet CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE vivuviet;

-- Bảng users (Người dùng quản trị)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Bảng posts (Bài viết tin tức)
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    category VARCHAR(100),
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Bảng contacts (Liên hệ từ khách hàng)
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(255),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Dữ liệu mẫu: Tài khoản Admin
-- Username: admin
-- Password: tuan@1204 (đã được mã hóa hash)
INSERT INTO users (username, password_hash, email) VALUES
('admin', '$2y$10$s.w.e.r.t.y.u.i.o.p.a.s.d.f.g.h.j.k.l.z.x.c.v.b.n.m.1.2', 'admin@vivuviet.com');

-- Dữ liệu mẫu: Bài viết
INSERT INTO posts (title, content, category, image) VALUES
('Địa điểm du lịch Hè 2025', 'Mùa hè là thời điểm lý tưởng để khám phá những bãi biển tuyệt đẹp tại Việt Nam. Đà Nẵng, Nha Trang, Phú Quốc luôn là những lựa chọn hàng đầu...', 'Du lịch', 'styles/images/blog_1.jpg'),
('Kinh nghiệm đi Đà Nẵng', 'Đà Nẵng được mệnh danh là thành phố đáng sống nhất Việt Nam. Khi đến đây, bạn không thể bỏ qua Bà Nà Hills, Cầu Rồng và bãi biển Mỹ Khê...', 'Kinh nghiệm', 'styles/images/blog_2.jpg'),
('Ẩm thực Hội An', 'Hội An không chỉ đẹp bởi những ngôi nhà cổ kính mà còn níu chân du khách bởi nền ẩm thực phong phú. Cao lầu, cơm gà, bánh mì Phượng là những món phải thử...', 'Ẩm thực', 'styles/images/blog_3.jpg');