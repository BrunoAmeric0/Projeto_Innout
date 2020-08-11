USE nta;

DROP TABLE IF EXISTS working_hours, users;
CREATE TABLE users (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE,
    is_admin BOOLEAN NOT NULL DEFAULT false
)engine=InnoDB default charset=utf8;

CREATE TABLE working_hours (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6),
    work_date DATE NOT NULL,
    time1 TIME,
    time2 TIME,
    time3 TIME,
    time4 TIME,
    worked_time INT,

    FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT cons_user_day UNIQUE (user_id, work_date)
) engine=InnoDB default charset=utf8;

-- Essa senha criptografada corresponde ao valor "a"
INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (1, 'Livani - Admin', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'livani@ntaonline.com.br', '2000-1-1', null, 1);

INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (2, 'Bruno Lemos Américo', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'brunolamerico@hotmail.com', '2020-2-3', null, 1);

INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (3, 'Kevin', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'kevin@ntaonline.com.br', '2000-1-1', null, 0);

INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (4, 'Ruan', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'ruan@ntaonline.com.br', '2000-1-1', null, 0);

INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (5, 'Paulo', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'paulo@ntaonline.com.br', '2000-1-1', null, 0);

INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (6, 'Graziela', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'grazi@ntaonline.com.br', '2000-1-1', null, 0);

INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (7, 'Caroline', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'carol@ntaonline.com.br', '2000-1-1', null, 0);
